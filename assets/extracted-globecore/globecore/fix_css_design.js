const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const CSS_DIR = path.join(OUTPUT_DIR, 'assets', 'css');
const JS_DIR = path.join(OUTPUT_DIR, 'assets', 'js');

console.log('='.repeat(60));
console.log('FIXING CSS AND DESIGN');
console.log('='.repeat(60));

// Ensure directories exist
['css', 'js'].forEach(dir => {
  const dirPath = path.join(OUTPUT_DIR, 'assets', dir);
  if (!fs.existsSync(dirPath)) fs.mkdirSync(dirPath, { recursive: true });
});

// Step 1: Extract all CSS/JS URLs from HTML
console.log('\n[1/5] Extracting CSS and JS URLs...');
const cssUrls = new Set();
const jsUrls = new Set();
const fontUrls = new Set();
const allImageUrls = new Set();

const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');

  // Skip blocked pages
  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) return;

  // Extract CSS from link tags
  const linkMatches = content.match(/<link[^>]*href=["']([^"']+)["'][^>]*>/gi) || [];
  linkMatches.forEach(m => {
    const href = m.match(/href=["']([^"']+)["']/);
    if (href) {
      const url = href[1];
      if (url.includes('.css')) cssUrls.add(url);
      if (url.includes('fonts.googleapis.com') || url.includes('fonts.gstatic.com')) {
        fontUrls.add(url);
      }
    }
  });

  // Extract JS from script tags
  const scriptMatches = content.match(/<script[^>]*src=["']([^"']+)["'][^>]*>/gi) || [];
  scriptMatches.forEach(m => {
    const src = m.match(/src=["']([^"']+)["']/);
    if (src) {
      const url = src[1];
      if (url.includes('.js')) jsUrls.add(url);
    }
  });

  // Extract images
  const imgMatches = content.match(/src=["']([^"']+)["']/gi) || [];
  imgMatches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    if (url.includes('.jpg') || url.includes('.jpeg') || url.includes('.png') ||
        url.includes('.gif') || url.includes('.webp') || url.includes('.svg')) {
      allImageUrls.add(url);
    }
  });
});

console.log(`  CSS files: ${cssUrls.size}`);
console.log(`  JS files: ${jsUrls.size}`);
console.log(`  Font URLs: ${fontUrls.size}`);

// Step 2: Download CSS files
console.log('\n[2/5] Downloading CSS files...');
const cssMap = {};
let cssDownloaded = 0;

cssUrls.forEach(cssUrl => {
  let fullUrl = cssUrl;
  if (cssUrl.startsWith('/')) fullUrl = BASE_URL + cssUrl;
  if (!fullUrl.startsWith('http')) fullUrl = 'https:' + cssUrl;

  let fileName;
  try {
    const urlPath = new URL(fullUrl).pathname;
    fileName = path.basename(urlPath);
  } catch (e) {
    fileName = 'style_' + Math.abs(hashCode(fullUrl)) + '.css';
  }

  fileName = fileName.toLowerCase().replace(/\s+/g, '-');
  const localPath = path.join(CSS_DIR, fileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
    cssMap[cssUrl] = 'assets/css/' + fileName;
    cssMap[fullUrl] = 'assets/css/' + fileName;
    return;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0" "${fullUrl}" -o "${localPath}"`, {
      timeout: 30000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath)) {
      const stat = fs.statSync(localPath);
      if (stat.size > 100) {
        cssMap[cssUrl] = 'assets/css/' + fileName;
        cssMap[fullUrl] = 'assets/css/' + fileName;
        cssDownloaded++;
      }
    }
  } catch (e) {}
});

console.log(`  Downloaded: ${cssDownloaded} CSS files`);

// Step 3: Download JS files
console.log('\n[3/5] Downloading JS files...');
const jsMap = {};
let jsDownloaded = 0;

jsUrls.forEach(jsUrl => {
  if (jsUrl.includes('google-analytics') || jsUrl.includes('gstatic.com') || jsUrl.includes('doubleclick')) {
    return; // Skip analytics
  }

  let fullUrl = jsUrl;
  if (jsUrl.startsWith('/')) fullUrl = BASE_URL + jsUrl;
  if (!fullUrl.startsWith('http')) fullUrl = 'https:' + jsUrl;

  let fileName;
  try {
    const urlPath = new URL(fullUrl).pathname;
    fileName = path.basename(urlPath);
  } catch (e) {
    fileName = 'script_' + Math.abs(hashCode(fullUrl)) + '.js';
  }

  fileName = fileName.toLowerCase().replace(/\s+/g, '-');
  const localPath = path.join(JS_DIR, fileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
    jsMap[jsUrl] = 'assets/js/' + fileName;
    return;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0" "${fullUrl}" -o "${localPath}"`, {
      timeout: 30000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath)) {
      const stat = fs.statSync(localPath);
      if (stat.size > 100) {
        jsMap[jsUrl] = 'assets/js/' + fileName;
        jsDownloaded++;
      }
    }
  } catch (e) {}
});

console.log(`  Downloaded: ${jsDownloaded} JS files`);

// Step 4: Download any missing images
console.log('\n[4/5] Checking for missing images...');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');
let imagesDownloaded = 0;

for (const imgUrl of allImageUrls) {
  if (imgUrl.startsWith('data:')) continue;
  if (imgUrl.startsWith('http') && !imgUrl.includes('globecoreinc.com')) continue;

  let fullUrl = imgUrl;
  if (imgUrl.startsWith('/')) fullUrl = BASE_URL + imgUrl;

  const cleanUrl = fullUrl.split('?')[0];
  const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
  const localPath = path.join(IMAGES_DIR, fileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) continue;

  try {
    execSync(`curl -sL -A "Mozilla/5.0" "${cleanUrl}" -o "${localPath}"`, {
      timeout: 15000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
      imagesDownloaded++;
    }
  } catch (e) {}
}

console.log(`  Downloaded: ${imagesDownloaded} images`);

// Step 5: Update all HTML files with local CSS/JS paths
console.log('\n[5/5] Updating HTML files with local paths...');

let totalChanges = 0;

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) return;

  let changes = 0;

  // Update CSS links
  content = content.replace(/href="([^"]+\.css)"/gi, (match, cssUrl) => {
    if (cssMap[cssUrl]) {
      changes++;
      return `href="${cssMap[cssUrl]}"`;
    }
    // Try full URL
    let fullUrl = cssUrl;
    if (cssUrl.startsWith('/')) fullUrl = BASE_URL + cssUrl;
    if (cssMap[fullUrl]) {
      changes++;
      return `href="${cssMap[fullUrl]}"`;
    }
    // Extract filename and use local path
    const fileName = path.basename(cssUrl).toLowerCase();
    changes++;
    return `href="assets/css/${fileName}"`;
  });

  // Update JS scripts
  content = content.replace(/src="([^"]+\.js)"/gi, (match, jsUrl) => {
    if (jsMap[jsUrl]) {
      changes++;
      return `src="${jsMap[jsUrl]}"`;
    }
    let fullUrl = jsUrl;
    if (jsUrl.startsWith('/')) fullUrl = BASE_URL + jsUrl;
    if (jsMap[fullUrl]) {
      changes++;
      return `src="${jsMap[fullUrl]}"`;
    }
    const fileName = path.basename(jsUrl).toLowerCase();
    changes++;
    return `src="assets/js/${fileName}"`;
  });

  // Update image sources
  content = content.replace(/src="(https:\/\/globecoreinc\.com[^"]*\.(?:jpg|jpeg|png|gif|webp|svg))"/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  content = content.replace(/src="(\/wp-content\/[^"]*\.(?:jpg|jpeg|png|gif|webp|svg))"/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Update srcset
  content = content.replace(/srcset="([^"]+)"/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/gi, url => {
      const cleanUrl = url.split('?')[0];
      const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
      return `assets/images/${fileName}`;
    });
    if (newSrcset !== srcset) changes++;
    return `srcset="${newSrcset}"`;
  });

  if (changes > 0) {
    fs.writeFileSync(filePath, content);
    totalChanges += changes;
    console.log(`  ${fileName}: ${changes} changes`);
  }
});

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nResults:`);
console.log(`  - CSS files downloaded: ${cssDownloaded}`);
console.log(`  - JS files downloaded: ${jsDownloaded}`);
console.log(`  - Images downloaded: ${imagesDownloaded}`);
console.log(`  - Total HTML changes: ${totalChanges}`);

function hashCode(str) {
  let hash = 0;
  for (let i = 0; i < str.length; i++) {
    hash = ((hash << 5) - hash) + str.charCodeAt(i);
  }
  return hash;
}