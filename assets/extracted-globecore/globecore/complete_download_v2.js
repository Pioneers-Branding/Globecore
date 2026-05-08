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
  '/', '/about-us/', '/philosophy-core-values/', '/our-safe-supportive-space/',
  '/career-opportunities/', '/testimonials/', '/meet-our-team-new/',
  '/services/therapist-atlanta/', '/services/psychological-evaluation/',
  '/services/medication-management/', '/services/consultation-supervision/',
  '/telehealth/', '/resources/', '/client-portal/', '/staff-page-login/',
  '/government/', '/workshops-training', '/dei-evaluation/',
  '/cultural-immersion/', '/blog/', '/faq/', '/rates/', '/contact/',
  '/quiz/', '/open-house-gallery/', '/privacy-policy/',
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
  let name = pagePath.replace(/^\/+|\/+$/g, '').replace(/\//g, '-');
  if (name.endsWith('-')) name = name.slice(0, -1);
  return name + '.html';
}

async function downloadPageNewBrowser(url, savePath) {
  const browser = await puppeteer.launch({
    headless: 'new',
    args: [
      '--no-sandbox',
      '--disable-setuid-sandbox',
      '--disable-dev-shm-usage',
      '--disable-blink-features=AutomationControlled'
    ]
  });

  const page = await browser.newPage();
  await page.setViewport({ width: 1920, height: 1080 });
  await page.setExtraHTTPHeaders({
    'Accept-Language': 'en-US,en;q=0.9',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
  });

  try {
    await page.goto(url, {
      waitUntil: ['networkidle2', 'domcontentloaded'],
      timeout: 120000
    });

    await sleep;

    const content = await page.content();
    const title = await page.title();

    const isValid = !title.includes('403') && !title.includes('Robot') && !title.includes('Challenge') &&
                   (content.length > 10000 || content.includes('GlobeCoRe') || content.includes('GlobeCore'));

    if (isValid) {
      fs.writeFileSync(savePath, content);
      await browser.close();
      return { success: true, content, title };
    }

    await browser.close();
    return { success: false, title, length: content.length };
  } catch (e) {
    await browser.close();
    return { success: false, error: e.message };
  }
}

function downloadImageCurl(imageUrl) {
  if (!imageUrl || imageUrl.startsWith('data:') || imageUrl.startsWith('//')) {
    return null;
  }

  let fullUrl = imageUrl;
  if (imageUrl.startsWith('/')) {
    fullUrl = BASE_URL + imageUrl;
  }

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

  fileName = fileName.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9\-_\.]/g, '');
  const localPath = path.join(IMAGES_DIR, fileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
    return fileName;
  }

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
        fs.unlinkSync(localPath);
      }
    }
  } catch (e) {}

  return null;
}

function hashCode(str) {
  let hash = 0;
  for (let i = 0; i < str.length; i++) {
    hash = ((hash << 5) - hash) + str.charCodeAt(i);
  }
  return hash;
}

function extractImageUrls(htmlContent) {
  const urls = new Set();

  const srcMatches = htmlContent.match(/src=["']([^"']+)["']/gi) || [];
  srcMatches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) urls.add(url);
  });

  const srcsetMatches = htmlContent.match(/srcset=["']([^"']+)["']/gi) || [];
  srcsetMatches.forEach(m => {
    const srcset = m.match(/srcset=["']([^"']+)["']/)[1];
    srcset.split(',').map(s => s.trim().split(/\s+/)[0]).forEach(url => {
      if (isImageUrl(url)) urls.add(url);
    });
  });

  const dataSrcMatches = htmlContent.match(/data-src=["']([^"']+)["']/gi) || [];
  dataSrcMatches.forEach(m => {
    const url = m.match(/data-src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) urls.add(url);
  });

  return Array.from(urls);
}

function isImageUrl(url) {
  if (!url || url.startsWith('data:') || url.startsWith('//fonts.')) return false;
  return /\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i.test(url) ||
         url.includes('/wp-content/uploads/') ||
         url.includes('/wp-content/themes/') ||
         url.includes('globecoreinc.com');
}

function updateHtmlImagePaths(htmlContent, imageMap) {
  let content = htmlContent;

  // Replace globecoreinc.com URLs
  content = content.replace(/https:\/\/globecoreinc\.com(\/wp-content\/[^\s"'<>]*\.(?:jpg|jpeg|png|gif|webp|svg)[^\s"'<>]*)/gi, (match, pathPart) => {
    const fullUrl = 'https://globecoreinc.com' + pathPart;
    const cleanUrl = fullUrl.split('?')[0];
    if (imageMap[cleanUrl]) return imageMap[cleanUrl];
    return match;
  });

  // Replace relative /wp-content/ URLs
  content = content.replace(/src=["'](\/wp-content\/[^\s"'<>]*\.(?:jpg|jpeg|png|gif|webp|svg)[^\s"'<>]*)/gi, (match, pathPart) => {
    const fullUrl = BASE_URL + pathPart;
    const cleanUrl = fullUrl.split('?')[0];
    if (imageMap[cleanUrl]) return 'src="' + imageMap[cleanUrl] + '"';
    return match;
  });

  // Replace srcset
  content = content.replace(/srcset=["']([^"']+)["']/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/g, url => {
      const cleanUrl = url.split('?')[0];
      return imageMap[cleanUrl] || url;
    });
    return 'srcset="' + newSrcset + '"';
  });

  // Replace data-src
  content = content.replace(/data-src=["']([^"']+)["']/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    if (imageMap[cleanUrl]) return 'src="' + imageMap[cleanUrl] + '"';
    return match;
  });

  return content;
}

async function main() {
  if (!fs.existsSync(PAGES_DIR)) fs.mkdirSync(PAGES_DIR, { recursive: true });
  if (!fs.existsSync(IMAGES_DIR)) fs.mkdirSync(IMAGES_DIR, { recursive: true });

  console.log('='.repeat(50));
  console.log('GlobeCoRe Website Downloader v2');
  console.log('='.repeat(50));

  // Step 1: Download all pages
  console.log('\n[1/4] Downloading all pages...');
  const downloadedPages = {};
  let successCount = 0;

  for (const pagePath of ALL_PAGES) {
    const url = BASE_URL + pagePath;
    const fileName = getPageFileName(pagePath);
    const savePath = path.join(PAGES_DIR, fileName);

    process.stdout.write(`  ${pagePath.padEnd(50)} `);

    const result = await downloadPageNewBrowser(url, savePath);

    if (result.success) {
      downloadedPages[url] = { content: result.content, fileName };
      successCount++;
      console.log('[OK]');
    } else {
      console.log(`[FAIL] ${result.title || 'error'}`);
    }

    await sleep;
  }

  console.log(`\n  Downloaded: ${successCount}/${ALL_PAGES.length} pages`);

  // Step 2: Extract all image URLs
  console.log('\n[2/4] Extracting image URLs...');
  const allImageUrls = new Set();

  for (const [url, data] of Object.entries(downloadedPages)) {
    const urls = extractImageUrls(data.content);
    urls.forEach(u => allImageUrls.add(u));
  }

  console.log(`  Found ${allImageUrls.size} image URLs`);

  // Step 3: Download all images
  console.log('\n[3/4] Downloading images...');
  const imageMap = {};
  let downloadedImages = 0;

  for (const imageUrl of allImageUrls) {
    process.stdout.write(`\r  Progress: ${downloadedImages}/${allImageUrls.size}  `);

    if (imageUrl.startsWith('data:') || (imageUrl.startsWith('http') && !imageUrl.includes('globecoreinc.com'))) {
      continue;
    }

    const cleanUrl = imageUrl.includes('globecoreinc.com') ? imageUrl.split('?')[0] : (BASE_URL + imageUrl).split('?')[0];
    if (imageMap[cleanUrl]) continue;

    const localFile = downloadImageCurl(imageUrl);
    if (localFile) {
      imageMap[cleanUrl] = 'assets/images/' + localFile;
      imageMap[imageUrl] = 'assets/images/' + localFile;
      downloadedImages++;
    }
  }

  console.log(`\n  Downloaded: ${downloadedImages} images`);

  // Step 4: Update all HTML files
  console.log('\n[4/4] Updating HTML files with local paths...');

  for (const [url, data] of Object.entries(downloadedPages)) {
    const savePath = path.join(PAGES_DIR, data.fileName);
    const updatedContent = updateHtmlImagePaths(data.content, imageMap);
    fs.writeFileSync(savePath, updatedContent);
  }

  console.log('\n' + '='.repeat(50));
  console.log('COMPLETE!');
  console.log('='.repeat(50));
  console.log(`\nResults:`);
  console.log(`  - Pages downloaded: ${successCount}/${ALL_PAGES.length}`);
  console.log(`  - Images downloaded: ${downloadedImages}`);
  console.log(`\nLocation: ${OUTPUT_DIR}`);
}

main().catch(console.error);