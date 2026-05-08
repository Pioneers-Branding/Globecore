const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');

if (!fs.existsSync(IMAGES_DIR)) {
  fs.mkdirSync(IMAGES_DIR, { recursive: true });
}

// Step 1: Extract ALL image URLs (absolute and relative)
function extractImageUrls() {
  const allUrls = new Set();

  if (!fs.existsSync(PAGES_DIR)) return [];

  const files = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

  files.forEach(file => {
    const content = fs.readFileSync(path.join(PAGES_DIR, file), 'utf8');

    // Match all src="..."
    const srcMatches = content.match(/src=["']([^"']+)["']/gi) || [];
    srcMatches.forEach(m => {
      const url = m.match(/src=["']([^"']+)["']/)[1];
      // Filter for images - any URL that looks like an image or contains wp-content/uploads
      if (url.match(/\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i) ||
          url.includes('/wp-content/uploads/') ||
          url.includes('/wp-content/themes/')) {
        if (!url.startsWith('data:') && !url.startsWith('//fonts.googleapis.com')) {
          allUrls.add(url);
        }
      }
    });

    // Match srcset="..."
    const srcsetMatches = content.match(/srcset=["']([^"']+)["']/gi) || [];
    srcsetMatches.forEach(m => {
      const srcset = m.match(/srcset=["']([^"']+)["']/)[1];
      const urls = srcset.split(',').map(s => s.trim().split(/\s+/)[0]);
      urls.forEach(url => {
        if (url.match(/\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i) ||
            url.includes('/wp-content/uploads/')) {
          allUrls.add(url);
        }
      });
    });

    // Match data-src="..."
    const dataSrcMatches = content.match(/data-src=["']([^"']+)["']/gi) || [];
    dataSrcMatches.forEach(m => {
      const url = m.match(/data-src=["']([^"']+)["']/)[1];
      if (url.match(/\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i) || url.includes('/wp-content/')) {
        allUrls.add(url);
      }
    });

    // Match url(...) in CSS
    const urlMatches = content.match(/url\(['"]([^'"]+)['"]\)/gi) || [];
    urlMatches.forEach(m => {
      const url = m.match(/url\(['"]([^'"]+)['"]\)/)[1];
      if (url.match(/\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i) || url.includes('/wp-content/')) {
        allUrls.add(url);
      }
    });
  });

  return Array.from(allUrls);
}

// Step 2: Convert URL to local filename
function urlToLocalFile(url) {
  if (!url) return null;

  // Remove query strings
  let cleanUrl = url.split('?')[0];
  // Remove hash
  cleanUrl = cleanUrl.split('#')[0];

  // Handle relative URLs
  if (cleanUrl.startsWith('/') && !cleanUrl.startsWith('//')) {
    cleanUrl = 'https://globecoreinc.com' + cleanUrl;
  }

  // Skip non-http(s) URLs
  if (!cleanUrl.startsWith('http')) return null;

  try {
    const urlObj = new URL(cleanUrl);
    let fileName = path.basename(urlObj.pathname);

    // If no filename, generate one
    if (!fileName || fileName === '/' || !fileName.includes('.')) {
      const hash = Math.abs(hashCode(cleanUrl)).toString(36);
      const ext = url.match(/\.(jpg|jpeg|png|gif|webp|svg)/i);
      fileName = 'image_' + hash + (ext ? ext[0] : '.jpg');
    }

    // Clean filename
    fileName = fileName.toLowerCase()
      .replace(/\s+/g, '-')
      .replace(/[^a-z0-9\-_\.]/g, '')
      .substring(0, 200); // Limit length

    return fileName;
  } catch (e) {
    const hash = Math.abs(hashCode(cleanUrl)).toString(36);
    return 'image_' + hash + '.jpg';
  }
}

function hashCode(str) {
  let hash = 0;
  for (let i = 0; i < str.length; i++) {
    const char = str.charCodeAt(i);
    hash = ((hash << 5) - hash) + char;
    hash = hash & hash;
  }
  return hash;
}

// Step 3: Download image
async function downloadImage(page, imageUrl) {
  if (!imageUrl || imageUrl.startsWith('data:') || imageUrl.startsWith('//fonts.')) {
    return null;
  }

  let fullUrl = imageUrl;
  if (imageUrl.startsWith('/')) {
    fullUrl = 'https://globecoreinc.com' + imageUrl;
  }

  const localFileName = urlToLocalFile(fullUrl);
  if (!localFileName) return null;

  const localPath = path.join(IMAGES_DIR, localFileName);

  // Skip if exists
  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
    return localFileName;
  }

  // Try Puppeteer first
  try {
    const response = await page.goto(fullUrl, {
      waitUntil: 'networkidle0',
      timeout: 20000
    });

    if (response && response.ok()) {
      const buffer = await response.buffer();
      if (buffer.length > 500) {
        fs.writeFileSync(localPath, buffer);
        return localFileName;
      }
    }
  } catch (e) {
    // Fallback to curl
  }

  // Fallback: curl
  return new Promise((resolve) => {
    const { execSync } = require('child_process');
    try {
      execSync(`curl -sL -A "Mozilla/5.0" "${fullUrl}" -o "${localPath}"`, {
        timeout: 20000,
        stdio: 'pipe'
      });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
        resolve(localFileName);
        return;
      }
    } catch (e) {}
    resolve(null);
  });
}

// Step 4: Update HTML files
function updateHtmlFiles(imageMap) {
  if (!fs.existsSync(PAGES_DIR)) return;

  const files = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));
  let updatedCount = 0;

  files.forEach(file => {
    let content = fs.readFileSync(path.join(PAGES_DIR, file), 'utf8');
    let modified = false;

    // Fix src attributes
    content = content.replace(/src=["']([^"']+)["']/gi, (match, url) => {
      const normalizedUrl = normalizeUrl(url);
      if (imageMap[normalizedUrl]) {
        modified = true;
        return `src="${imageMap[normalizedUrl]}"`;
      }
      return match;
    });

    // Fix srcset
    content = content.replace(/srcset=["']([^"']+)["']/gi, (match, srcset) => {
      let newSrcset = srcset;
      let changed = false;

      newSrcset = newSrcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/gi, url => {
        const normalized = normalizeUrl(url);
        if (imageMap[normalized]) {
          changed = true;
          return imageMap[normalized];
        }
        return url;
      });

      // Also handle relative URLs in srcset
      newSrcset = newSrcset.replace(/(\/[^\s,]+)/g, url => {
        const normalized = normalizeUrl(url);
        if (imageMap[normalized]) {
          changed = true;
          return imageMap[normalized];
        }
        return url;
      });

      if (changed) {
        modified = true;
        return `srcset="${newSrcset}"`;
      }
      return match;
    });

    // Fix data-src -> src
    content = content.replace(/data-src=["']([^"']+)["']/gi, (match, url) => {
      const normalized = normalizeUrl(url);
      if (imageMap[normalized]) {
        modified = true;
        return `src="${imageMap[normalized]}"`;
      }
      return match;
    });

    // Fix CSS url()
    content = content.replace(/url\(['"]([^'"]+)['"]\)/gi, (match, url) => {
      const normalized = normalizeUrl(url);
      if (imageMap[normalized]) {
        modified = true;
        return `url('${imageMap[normalized]}')`;
      }
      return match;
    });

    if (modified) {
      fs.writeFileSync(path.join(PAGES_DIR, file), content);
      updatedCount++;
    }
  });

  return updatedCount;
}

function normalizeUrl(url) {
  if (!url) return '';
  // Remove query string and hash
  let normalized = url.split('?')[0].split('#')[0];
  // Lowercase extension
  normalized = normalized.replace(/\.(JPG|JPEG|PNG|GIF|WEBP|SVG)$/i, (m) => m.toLowerCase());
  return normalized;
}

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function main() {
  console.log('=== Step 1: Extracting all image URLs ===\n');
  const imageUrls = extractImageUrls();
  console.log(`Found ${imageUrls.length} unique image URLs`);

  // Show first 10
  console.log('\nFirst 10 URLs:');
  imageUrls.slice(0, 10).forEach(url => console.log('  ' + url.substring(0, 80)));

  console.log('\n=== Step 2: Downloading images ===\n');

  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--disable-dev-shm-usage']
  });

  const page = await browser.newPage();

  const imageMap = {}; // normalized URL -> local path
  let downloaded = 0;
  let failed = 0;

  for (let i = 0; i < imageUrls.length; i++) {
    const url = imageUrls[i];
    process.stdout.write(`\r  [${i + 1}/${imageUrls.length}] Downloaded: ${downloaded}, Failed: ${failed}  `);

    const localFile = await downloadImage(page, url);
    if (localFile) {
      const normalized = normalizeUrl(url);
      imageMap[normalized] = 'assets/images/' + localFile;
      downloaded++;
    } else {
      failed++;
    }

    await sleep(150);
  }

  await browser.close();

  console.log(`\n\nDownloaded: ${downloaded}, Failed: ${failed}`);

  console.log('\n=== Step 3: Updating HTML files ===\n');
  const updatedCount = updateHtmlFiles(imageMap);
  console.log(`Updated ${updatedCount} HTML files`);

  console.log('\n=== Complete ===');
}

main().catch(console.error);