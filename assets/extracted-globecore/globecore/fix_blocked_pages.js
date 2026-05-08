const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');

// Pages that are still blocked
const BLOCKED_PAGES = [
  '/about-us/',
  '/career-opportunities/',
  '/meet-our-team-new/',
  '/philosophy-core-values/',
  '/services/psychological-evaluation/',
  '/telehealth/',
  '/testimonials/',
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

function hashCode(str) {
  let hash = 0;
  for (let i = 0; i < str.length; i++) {
    hash = ((hash << 5) - hash) + str.charCodeAt(i);
  }
  return hash;
}

function isImageUrl(url) {
  if (!url || url.startsWith('data:') || url.startsWith('//fonts.')) return false;
  return /\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i.test(url) ||
         url.includes('/wp-content/uploads/') ||
         url.includes('/wp-content/themes/') ||
         url.includes('globecoreinc.com');
}

function extractImageUrls(htmlContent) {
  const urls = new Set();
  const matches = htmlContent.match(/src=["']([^"']+)["']/gi) || [];
  matches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) urls.add(url);
  });
  return Array.from(urls);
}

function downloadImageCurl(imageUrl) {
  if (!imageUrl || imageUrl.startsWith('data:') || imageUrl.startsWith('//')) return null;

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
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36" "${fullUrl}" -o "${localPath}"`, {
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

function updateHtmlImagePaths(htmlContent, imageMap) {
  let content = htmlContent;

  // Replace globecoreinc.com URLs
  content = content.replace(/https:\/\/globecoreinc\.com(\/wp-content\/[^\s"'<>]*\.(?:jpg|jpeg|png|gif|webp|svg)[^\s"'<>]*)/gi, (match, pathPart) => {
    const fullUrl = 'https://globecoreinc.com' + pathPart.split('?')[0];
    if (imageMap[fullUrl]) return imageMap[fullUrl];
    const fileName = pathPart.split('/').pop().split('?')[0];
    return 'assets/images/' + fileName.toLowerCase();
  });

  // Replace relative URLs
  content = content.replace(/src=["'](\/wp-content\/[^\s"'<>]*\.(?:jpg|jpeg|png|gif|webp|svg)[^\s"'<>]*)/gi, (match, pathPart) => {
    const fullUrl = BASE_URL + pathPart.split('?')[0];
    if (imageMap[fullUrl]) return 'src="' + imageMap[fullUrl] + '"';
    return match;
  });

  // Replace srcset
  content = content.replace(/srcset=["']([^"']+)["']/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/g, url => {
      return imageMap[url.split('?')[0]] || url;
    });
    return 'srcset="' + newSrcset + '"';
  });

  return content;
}

async function main() {
  console.log('='.repeat(50));
  console.log('GlobeCoRe Blocked Pages Downloader');
  console.log('='.repeat(50));

  // Step 1: First visit homepage to get Cloudflare clearance
  console.log('\n[1/3] Getting Cloudflare clearance token...');

  const browser = await chromium.launch({
    headless: false, // Run non-headless to bypass Cloudflare
    args: [
      '--no-sandbox',
      '--disable-setuid-sandbox',
      '--disable-dev-shm-usage',
      '--disable-blink-features=AutomationControlled',
    ]
  });

  // Try to get clearance by visiting homepage first
  const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36',
    viewport: { width: 1920, height: 1080 },
  });

  const page = await context.newPage();

  // Go to homepage first to get clearance
  console.log('  Visiting homepage to get clearance...');
  try {
    await page.goto(BASE_URL + '/', {
      waitUntil: 'networkidle',
      timeout: 60000
    });
    await page.waitForTimeout;
  } catch (e) {
    console.log('  Homepage blocked, trying individual pages...');
  }

  // Get cookies
  const cookies = await context.cookies();
  console.log(`  Got ${cookies.length} cookies`);

  // Step 2: Try to download blocked pages
  console.log('\n[2/3] Downloading blocked pages...');
  let successCount = 0;

  for (const pagePath of BLOCKED_PAGES) {
    const url = BASE_URL + pagePath;
    const fileName = getPageFileName(pagePath);
    const savePath = path.join(PAGES_DIR, fileName);

    process.stdout.write(`  ${pagePath.padEnd(40)} `);

    try {
      // Try with longer timeout and wait for challenge to pass
      await page.goto(url, {
        waitUntil: 'domcontentloaded',
        timeout: 120000
      });

      await page.waitForTimeout;

      const content = await page.content();
      const title = await page.title();

      const isValid = !title.includes('403') && !title.includes('Robot') && !title.includes('Challenge') &&
                     (content.length > 10000 || content.includes('GlobeCoRe') || content.includes('GlobeCore'));

      if (isValid) {
        fs.writeFileSync(savePath, content);
        console.log('[OK]');
        successCount++;
      } else {
        console.log(`[BLOCKED] ${title}`);
      }
    } catch (e) {
      console.log(`[ERROR] ${e.message.substring(0, 30)}`);
    }

    await sleep;
  }

  await browser.close();
  console.log(`\n  Downloaded: ${successCount}/${BLOCKED_PAGES.length} pages`);

  // Step 3: Update image paths in all pages
  console.log('\n[3/3] Updating image paths in all pages...');

  // Build image map from already downloaded images
  const imageMap = {};
  if (fs.existsSync(IMAGES_DIR)) {
    fs.readdirSync(IMAGES_DIR).forEach(file => {
      const localPath = 'assets/images/' + file;
      // Map various URL patterns
      imageMap['https://globecoreinc.com/wp-content/uploads/' + file] = localPath;
      imageMap['https://globecoreinc.com/wp-content/uploads/' + file.toLowerCase()] = localPath;
    });
  }

  // Update all pages in the pages folder
  const files = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));
  let updatedCount = 0;

  files.forEach(file => {
    const filePath = path.join(PAGES_DIR, file);
    const content = fs.readFileSync(filePath, 'utf8');

    // Skip if it's a blocked page (403)
    if (content.includes('403') || content.includes('Robot')) {
      return;
    }

    const updatedContent = updateHtmlImagePaths(content, imageMap);
    fs.writeFileSync(filePath, updatedContent);
    updatedCount++;
  });

  console.log(`  Updated ${updatedCount} HTML files`);

  console.log('\n' + '='.repeat(50));
  console.log('COMPLETE!');
  console.log('='.repeat(50));
  console.log(`\nResults:`);
  console.log(`  - Additional pages downloaded: ${successCount}/${BLOCKED_PAGES.length}`);
  console.log(`  - HTML files updated: ${updatedCount}`);
  console.log(`\nLocation: ${OUTPUT_DIR}`);
}

main().catch(console.error);