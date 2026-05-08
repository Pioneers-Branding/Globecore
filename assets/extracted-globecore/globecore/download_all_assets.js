const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const CSS_DIR = path.join(OUTPUT_DIR, 'assets', 'css');
const JS_DIR = path.join(OUTPUT_DIR, 'assets', 'js');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');

console.log('='.repeat(60));
console.log('DOWNLOADING ALL ASSETS PROPERLY');
console.log('='.repeat(60));

// Step 1: Get all unique CSS and JS URLs from HTML files
console.log('\n[1/5] Extracting all asset URLs...');

const cssUrls = new Set();
const jsUrls = new Set();
const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');
  if (content.includes('403 Forbidden') || content.includes('Robot Challenge')) return;

  // Get all link[rel=stylesheet] hrefs
  const linkMatches = content.match(/<link[^>]*href=["']([^"']+)["'][^>]*>/gi) || [];
  linkMatches.forEach(m => {
    const hrefMatch = m.match(/href=["']([^"']+)["']/);
    if (hrefMatch) cssUrls.add(hrefMatch[1]);
  });

  // Also get any other CSS hrefs
  const anyCssMatch = content.match(/href=["']([^"']+\.css[^"']*)["']/gi) || [];
  anyCssMatch.forEach(m => {
    const hrefMatch = m.match(/href=["']([^"']+)["']/);
    if (hrefMatch) cssUrls.add(hrefMatch[1]);
  });

  // Get script srcs
  const scriptMatches = content.match(/<script[^>]*src=["']([^"']+)["'][^>]*>/gi) || [];
  scriptMatches.forEach(m => {
    const srcMatch = m.match(/src=["']([^"']+)["']/);
    if (srcMatch) jsUrls.add(srcMatch[1]);
  });
});

console.log(`  Found ${cssUrls.size} CSS URLs`);
console.log(`  Found ${jsUrls.size} JS URLs`);

// Step 2: Download CSS with curl using proper headers
console.log('\n[2/5] Downloading CSS files...');

function downloadAsset(url) {
  if (!url) return null;
  if (url.includes('googleapis.com') || url.includes('gstatic.com') || url.includes('fontawesome')) {
    return null; // Skip external CDNs
  }

  let fullUrl = url;
  if (url.startsWith('/')) fullUrl = BASE_URL + url;
  if (!fullUrl.startsWith('http')) fullUrl = 'https://' + fullUrl;

  const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
  const ext = path.extname(fileName).toLowerCase();

  let localPath;
  if (ext === '.css') {
    localPath = path.join(CSS_DIR, fileName);
  } else if (ext === '.js') {
    localPath = path.join(JS_DIR, fileName);
  } else {
    return null;
  }

  // Skip if already exists and has valid content
  if (fs.existsSync(localPath)) {
    const content = fs.readFileSync(localPath, 'utf8');
    if (content && content.length > 100 && !content.includes('<!DOCTYPE') &&
        !content.includes('<html') && !content.includes('Cloudflare')) {
      return fileName;
    }
  }

  // Try multiple curl commands
  const curlCommands = [
    `curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36" -H "Accept: text/css,text/plain,*/*" -H "Referer: ${BASE_URL}/" --connect-timeout 15 -m 60 "${fullUrl}" -o "${localPath}"`,
    `curl -sL -A "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Safari/605.1.15" -H "Accept: */*" --connect-timeout 15 -m 60 "${fullUrl}" -o "${localPath}"`,
    `curl -sL --connect-timeout 15 -m 60 "${fullUrl}" -o "${localPath}"`
  ];

  for (const cmd of curlCommands) {
    try {
      execSync(cmd, { stdio: 'pipe', timeout: 70000 });

      if (fs.existsSync(localPath)) {
        const stats = fs.statSync(localPath);
        if (stats.size > 100) {
          const content = fs.readFileSync(localPath, 'utf8');
          if (content && !content.includes('<!DOCTYPE') && !content.includes('<html') &&
              !content.includes('Cloudflare') && !content.includes('403') && !content.includes('forbidden')) {
            return fileName;
          }
        }
        fs.unlinkSync(localPath);
      }
    } catch (e) {}
  }

  return null;
}

// Download CSS
let cssDownloaded = 0;
const cssUrlsArray = Array.from(cssUrls);

for (const url of cssUrlsArray) {
  const result = downloadAsset(url);
  if (result) {
    cssDownloaded++;
    process.stdout.write(`\r  CSS: ${cssDownloaded}/${cssUrlsArray.length}  `);
  }
}

console.log(`\n  Downloaded ${cssDownloaded} CSS files`);

// Step 3: Download JS files
console.log('\n[3/5] Downloading JS files...');

let jsDownloaded = 0;
const jsUrlsArray = Array.from(jsUrls);

for (const url of jsUrlsArray) {
  if (url.includes('google-analytics') || url.includes('googleads') ||
      url.includes('facebook') || url.includes('fbevents') ||
      url.includes('stripe') || url.includes('facebook.net') ||
      url.includes('usermaven')) {
    continue; // Skip external scripts
  }

  let fullUrl = url;
  if (url.startsWith('/')) fullUrl = BASE_URL + url;
  if (!fullUrl.startsWith('http')) fullUrl = 'https://' + fullUrl;

  const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
  const localPath = path.join(JS_DIR, fileName);

  // Skip if already exists
  if (fs.existsSync(localPath)) {
    const content = fs.readFileSync(localPath, 'utf8');
    if (content && content.length > 50 && !content.includes('<!DOCTYPE') &&
        !content.includes('<html') && !content.includes('Cloudflare')) {
      jsDownloaded++;
      process.stdout.write(`\r  JS: ${jsDownloaded}  `);
      continue;
    }
  }

  // Try downloading
  const curlCommands = [
    `curl -sL -A "Mozilla/5.0" -H "Accept: */*" --connect-timeout 10 -m 30 "${fullUrl}" -o "${localPath}"`,
    `curl -sL --connect-timeout 10 -m 30 "${fullUrl}" -o "${localPath}"`
  ];

  for (const cmd of curlCommands) {
    try {
      execSync(cmd, { stdio: 'pipe', timeout: 35000 });

      if (fs.existsSync(localPath)) {
        const stats = fs.statSync(localPath);
        if (stats.size > 50) {
          const content = fs.readFileSync(localPath, 'utf8');
          if (content && !content.includes('<!DOCTYPE') && !content.includes('<html')) {
            jsDownloaded++;
            process.stdout.write(`\r  JS: ${jsDownloaded}  `);
            break;
          }
        }
        if (fs.existsSync(localPath)) fs.unlinkSync(localPath);
      }
    } catch (e) {}
  }
}

console.log(`\n  Downloaded ${jsDownloaded} JS files`);

// Step 4: Download images
console.log('\n[4/5] Downloading images...');

const imageUrls = new Set();
htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');

  // Extract image srcs
  const srcMatches = content.match(/src=["']([^"']+)["']/gi) || [];
  srcMatches.forEach(m => {
    const srcMatch = m.match(/src=["']([^"']+)["']/);
    if (srcMatch && isImageUrl(srcMatch[1])) {
      imageUrls.add(srcMatch[1]);
    }
  });

  // Extract srcset URLs
  const srcsetMatches = content.match(/srcset=["']([^"']+)["']/gi) || [];
  srcsetMatches.forEach(m => {
    const srcset = m.match(/srcset=["']([^"']+)["']/)[1];
    srcset.split(',').forEach(s => {
      const url = s.trim().split(/\s+/)[0];
      if (isImageUrl(url)) imageUrls.add(url);
    });
  });
});

console.log(`  Found ${imageUrls.size} image URLs`);

let imgDownloaded = 0;
const imageUrlsArray = Array.from(imageUrls);

for (const url of imageUrlsArray) {
  if (url.includes('secure.gravatar.com')) continue;

  let fullUrl = url;
  if (url.startsWith('/')) fullUrl = BASE_URL + url;
  if (!fullUrl.startsWith('http') && !fullUrl.startsWith('data:')) {
    fullUrl = 'https://' + fullUrl;
  }

  if (!fullUrl.startsWith('http')) continue;

  const cleanUrl = fullUrl.split('?')[0];
  const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
  const localPath = path.join(IMAGES_DIR, fileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
    continue;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0" --connect-timeout 10 -m 30 "${cleanUrl}" -o "${localPath}"`, {
      stdio: 'pipe',
      timeout: 35000
    });

    if (fs.existsSync(localPath)) {
      const stats = fs.statSync(localPath);
      if (stats.size > 500) {
        imgDownloaded++;
        process.stdout.write(`\r  Images: ${imgDownloaded}  `);
      } else {
        fs.unlinkSync(localPath);
      }
    }
  } catch (e) {}
}

console.log(`\n  Downloaded ${imgDownloaded} new images`);

// Step 5: Summary
console.log('\n[5/5] Final Summary...');

const validCss = fs.readdirSync(CSS_DIR).filter(f => f.endsWith('.css')).length;
const validJs = fs.readdirSync(JS_DIR).filter(f => f.endsWith('.js')).length;
const validImages = fs.readdirSync(IMAGES_DIR).filter(f => {
  const ext = path.extname(f).toLowerCase();
  return ['.jpg', '.jpeg', '.png', '.gif', '.webp', '.svg'].includes(ext);
}).length;

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nFiles:`);
console.log(`  - HTML Pages: ${htmlFiles.length}`);
console.log(`  - CSS: ${validCss}`);
console.log(`  - JS: ${validJs}`);
console.log(`  - Images: ${validImages}`);
console.log(`  - Documents: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'documents')).length}`);
console.log(`\nDownloads: CSS=${cssDownloaded}, JS=${jsDownloaded}, Images=${imgDownloaded}`);

function isImageUrl(url) {
  if (!url || url.startsWith('data:') || url.startsWith('//fonts.')) return false;
  return /\.(jpg|jpeg|png|gif|webp|svg)(\?|$|#)/i.test(url) ||
         url.includes('/wp-content/uploads/') ||
         url.includes('/wp-content/themes/');
}