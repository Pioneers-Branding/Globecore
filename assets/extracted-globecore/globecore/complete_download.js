const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');

// All pages to download
const ALL_PAGES = [
  // Main pages
  '/', '/about-us/', '/philosophy-core-values/', '/our-safe-supportive-space/',
  '/career-opportunities/', '/testimonials/', '/meet-our-team-new/',
  // Services
  '/services/therapist-atlanta/', '/services/psychological-evaluation/',
  '/services/medication-management/', '/services/consultation-supervision/',
  // Other pages
  '/telehealth/', '/resources/', '/client-portal/', '/staff-page-login/',
  '/government/', '/workshops-training', '/dei-evaluation/',
  '/cultural-immersion/', '/blog/', '/faq/', '/rates/', '/contact/',
  '/quiz/', '/open-house-gallery/', '/privacy-policy/',
  // Specialties
  '/specialties/addiction/', '/specialties/aging-issues/', '/specialties/chronic-illness/',
  '/specialties/developmental-intellectual-disabilities/', '/specialties/depression-anxiety/',
  '/specialties/fertility-pregnancy-parenting/', '/specialties/finding-purpose/',
  '/specialties/finding-the-love-you-deserve/', '/specialties/grief-loss/',
  '/specialties/lgbtqi/', '/specialties/racial-ethnic-and-religious-stressors/',
  '/specialties/relationship-identity-marriage-issues/', '/specialties/trauma/',
  '/specialties/womens-issues/', '/specialties/work-related-or-academic-stressors/',
];

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function getPageFileName(pagePath) {
  if (pagePath === '/') return 'index.html';
  // Remove leading and trailing slashes, replace / with -, remove trailing -
  let name = pagePath.replace(/^\/+|\/+$/g, '').replace(/\//g, '-');
  if (name.endsWith('-')) name = name.slice(0, -1);
  return name + '.html';
}

async function downloadPageWithBrowser(page, url, savePath) {
  try {
    // Block resources that cause issues
    await page.setRequestInterception(true);
    page.on('request', (request) => {
      const resourceType = request.resourceType();
      // Allow HTML, CSS, JS, images, fonts
      if (['document', 'stylesheet', 'script', 'image', 'font', 'xhr', 'fetch'].includes(resourceType)) {
        request.continue();
      } else {
        request.abort();
      }
    });

    await page.goto(url, {
      waitUntil: ['networkidle2', 'domcontentloaded'],
      timeout: 120000
    });

    // Wait for the page to settle
    await page.waitForTimeout;

    const content = await page.content();
    const title = await page.title();

    // Check if we got a real page (not 403/robot)
    const isValid = !title.includes('403') && !title.includes('Robot') && !title.includes('Challenge') &&
                   (content.length > 10000 || content.includes('GlobeCoRe') || content.includes('GlobeCore'));

    if (isValid) {
      fs.writeFileSync(savePath, content);
      return { success: true, content, title };
    }

    return { success: false, title, length: content.length };
  } catch (e) {
    return { success: false, error: e.message };
  }
}

async function downloadImage(imageUrl) {
  if (!imageUrl || imageUrl.startsWith('data:') || imageUrl.startsWith('//fonts.')) {
    return null;
  }

  // Convert relative URLs to absolute
  let fullUrl = imageUrl;
  if (imageUrl.startsWith('/')) {
    fullUrl = BASE_URL + imageUrl;
  }

  // Get filename from URL
  let fileName;
  try {
    const urlPath = new URL(fullUrl).pathname;
    fileName = path.basename(urlPath).split('?')[0];
  } catch (e) {
    fileName = 'image_' + Math.abs(hashCode(fullUrl)) + '.jpg';
  }

  if (!fileName || fileName === '' || !fileName.includes('.')) {
    fileName = 'image_' + Math.abs(hashCode(fullUrl)) + '.jpg';
  }

  // Clean filename
  fileName = fileName.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9\-_\.]/g, '');

  const localPath = path.join(IMAGES_DIR, fileName);

  // Skip if exists
  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
    return fileName;
  }

  // Try with curl (more reliable for images)
  try {
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36" "${fullUrl}" -o "${localPath}"`, {
      timeout: 15000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath)) {
      const stat = fs.statSync(localPath);
      if (stat.size > 100) {
        return fileName;
      } else {
        fs.unlinkSync(localPath); // Remove invalid file
      }
    }
  } catch (e) {}

  return null;
}

function hashCode(str) {
  let hash = 0;
  for (let i = 0; i < str.length; i++) {
    const char = str.charCodeAt(i);
    hash = ((hash << 5) - hash) + char;
  }
  return hash;
}

function extractImageUrls(htmlContent) {
  const urls = new Set();

  // Match src="..."
  const srcMatches = htmlContent.match(/src=["']([^"']+)["']/gi) || [];
  srcMatches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) urls.add(url);
  });

  // Match srcset="..."
  const srcsetMatches = htmlContent.match(/srcset=["']([^"']+)["']/gi) || [];
  srcsetMatches.forEach(m => {
    const srcset = m.match(/srcset=["']([^"']+)["']/)[1];
    const urls_in_srcset = srcset.split(',').map(s => s.trim().split(/\s+/)[0]);
    urls_in_srcset.forEach(url => {
      if (isImageUrl(url)) urls.add(url);
    });
  });

  // Match data-src="..."
  const dataSrcMatches = htmlContent.match(/data-src=["']([^"']+)["']/gi) || [];
  dataSrcMatches.forEach(m => {
    const url = m.match(/data-src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) urls.add(url);
  });

  // Match url(...) in CSS
  const urlMatches = htmlContent.match(/url\(['"]([^'"]+)['"]\)/gi) || [];
  urlMatches.forEach(m => {
    const url = m.match(/url\(['"]([^'"]+)['"]\)/)[1];
    if (isImageUrl(url)) urls.add(url);
  });

  return Array.from(urls);
}

function isImageUrl(url) {
  if (!url || url.startsWith('data:') || url.startsWith('//fonts.')) return false;
  const imageExtensions = /\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i;
  return imageExtensions.test(url) ||
         url.includes('/wp-content/uploads/') ||
         url.includes('/wp-content/themes/') ||
         url.includes('globecoreinc.com');
}

function updateHtmlImagePaths(htmlContent, imageMap) {
  let content = htmlContent;

  // Replace globecoreinc.com URLs with local paths
  content = content.replace(/https:\/\/globecoreinc\.com(\/wp-content\/[^\s"'<>]+\.(?:jpg|jpeg|png|gif|webp|svg)[^\s"'<>]*)/gi, (match, pathPart) => {
    const fullUrl = 'https://globecoreinc.com' + pathPart;
    if (imageMap[fullUrl]) {
      return imageMap[fullUrl];
    }
    // Try with just path
    const fileName = pathPart.split('/').pop().split('?')[0];
    return 'assets/images/' + fileName;
  });

  // Replace relative URLs starting with /wp-content/
  content = content.replace(/src=["'](\/wp-content\/[^\s"'<>]+\.(?:jpg|jpeg|png|gif|webp|svg)[^\s"'<>]*)/gi, (match, pathPart) => {
    const fullUrl = 'https://globecoreinc.com' + pathPart;
    if (imageMap[fullUrl]) {
      return 'src="' + imageMap[fullUrl] + '"';
    }
    return match;
  });

  // Replace srcset URLs
  content = content.replace(/srcset=["']([^"']+)["']/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/g, url => {
      if (imageMap[url]) return imageMap[url];
      // Try to get filename
      const fileName = url.split('/').pop().split('?')[0];
      return 'assets/images/' + fileName;
    });
    newSrcset = newSrcset.replace(/(\/[^\s,]+)/g, path => {
      if (path.includes('/wp-content/') && imageMap[BASE_URL + path]) {
        return imageMap[BASE_URL + path];
      }
      return path;
    });
    return 'srcset="' + newSrcset + '"';
  });

  // Replace data-src with src (for lazy loading)
  content = content.replace(/data-src=["']([^"']+)["']/gi, (match, url) => {
    if (imageMap[url]) {
      return 'src="' + imageMap[url] + '"';
    }
    return match;
  });

  // Replace CSS url()
  content = content.replace(/url\(['"]([^'"]*globecoreinc[^'"]+)['"]\)/gi, (match, url) => {
    if (imageMap[url]) {
      return "url('" + imageMap[url] + "')";
    }
    return match;
  });

  return content;
}

async function main() {
  // Ensure directories exist
  if (!fs.existsSync(PAGES_DIR)) fs.mkdirSync(PAGES_DIR, { recursive: true });
  if (!fs.existsSync(IMAGES_DIR)) fs.mkdirSync(IMAGES_DIR, { recursive: true });

  console.log('=' .repeat(50));
  console.log('GlobeCoRe Website Downloader');
  console.log('=' .repeat(50));

  // Launch browser
  console.log('\n[1/5] Launching browser...');
  const browser = await puppeteer.launch({
    headless: 'new',
    args: [
      '--no-sandbox',
      '--disable-setuid-sandbox',
      '--disable-dev-shm-usage',
      '--disable-blink-features=AutomationControlled',
      '--disable-features=IsolateOrigins,site-per-process'
    ]
  });

  const context = browser.defaultBrowserContext();
  context.overridePermissions(BASE_URL, ['geolocation', 'notifications']);

  const page = await browser.newPage();
  await page.setViewport({ width: 1920, height: 1080 });
  await page.setExtraHTTPHeaders({
    'Accept-Language': 'en-US,en;q=0.9',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
  });

  // Step 1: Download all pages
  console.log('\n[2/5] Downloading all pages...');
  const downloadedPages = {};
  let successCount = 0;

  for (const pagePath of ALL_PAGES) {
    const url = BASE_URL + pagePath;
    const fileName = getPageFileName(pagePath);
    const savePath = path.join(PAGES_DIR, fileName);

    process.stdout.write(`  ${pagePath.padEnd(50)} `);

    const result = await downloadPageWithBrowser(page, url, savePath);

    if (result.success) {
      downloadedPages[url] = { content: result.content, fileName };
      successCount++;
      console.log('[OK]');
    } else {
      console.log(`[FAIL] ${result.title || result.error}`);
    }

    await sleep; // Wait between requests
  }

  console.log(`\n  Downloaded: ${successCount}/${ALL_PAGES.length} pages`);

  // Step 2: Extract all image URLs from all pages
  console.log('\n[3/5] Extracting image URLs...');
  const allImageUrls = new Set();

  for (const [url, data] of Object.entries(downloadedPages)) {
    const urls = extractImageUrls(data.content);
    urls.forEach(u => allImageUrls.add(u));
    console.log(`  ${data.fileName}: ${urls.length} images`);
  }

  console.log(`  Total unique images: ${allImageUrls.size}`);

  // Step 3: Download all images
  console.log('\n[4/5] Downloading images...');
  const imageMap = {}; // URL -> local path
  let downloadedImages = 0;

  for (const imageUrl of allImageUrls) {
    process.stdout.write(`\r  Downloaded: ${downloadedImages}/${allImageUrls.size}  `);

    // Skip data URIs and external URLs
    if (imageUrl.startsWith('data:') || (imageUrl.startsWith('http') && !imageUrl.includes('globecoreinc.com'))) {
      continue;
    }

    // Normalize URL for map key
    const normalizedUrl = imageUrl.includes('globecoreinc.com') ? imageUrl : BASE_URL + imageUrl;
    const cleanUrl = normalizedUrl.split('?')[0];

    // Skip if already mapped
    if (imageMap[cleanUrl]) continue;

    const localFile = await downloadImage(imageUrl);
    if (localFile) {
      imageMap[cleanUrl] = 'assets/images/' + localFile;
      downloadedImages++;
    }

    await sleep(50);
  }

  console.log(`\n  Downloaded: ${downloadedImages} images`);

  // Step 4: Update all HTML files with local paths
  console.log('\n[5/5] Updating HTML files with local paths...');

  for (const [url, data] of Object.entries(downloadedPages)) {
    const savePath = path.join(PAGES_DIR, data.fileName);
    const updatedContent = updateHtmlImagePaths(data.content, imageMap);
    fs.writeFileSync(savePath, updatedContent);
    console.log(`  Updated: ${data.fileName}`);
  }

  await browser.close();

  console.log('\n' + '=' .repeat(50));
  console.log('COMPLETE!');
  console.log('=' .repeat(50));
  console.log(`\nResults:`);
  console.log(`  - Pages downloaded: ${successCount}/${ALL_PAGES.length}`);
  console.log(`  - Images downloaded: ${downloadedImages}`);
  console.log(`\nLocation: ${OUTPUT_DIR}`);
}

main().catch(console.error);