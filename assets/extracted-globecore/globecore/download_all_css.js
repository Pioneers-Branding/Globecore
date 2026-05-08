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
console.log('DOWNLOADING ALL CSS/JS AND FIXING PATHS');
console.log('='.repeat(60));

// Ensure directories
[CSS_DIR, JS_DIR, IMAGES_DIR].forEach(dir => {
  if (!fs.existsSync(dir)) fs.mkdirSync(dir, { recursive: true });
});

// Step 1: Extract ALL CSS/JS URLs
console.log('\n[1/5] Extracting all CSS/JS URLs...');

const allCssUrls = new Set();
const allJsUrls = new Set();
const allImgUrls = new Set();

const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');
  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) return;

  // CSS links
  const linkMatches = content.match(/href=["']([^"']+\.css[^"']*)["']/gi) || [];
  linkMatches.forEach(m => {
    const url = m.match(/href=["']([^"']+)["']/)[1];
    allCssUrls.add(url);
  });

  // JS scripts
  const scriptMatches = content.match(/src=["']([^"']+\.js[^"']*)["']/gi) || [];
  scriptMatches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    allJsUrls.add(url);
  });

  // Images
  const imgMatches = content.match(/src=["']([^"']+)["']/gi) || [];
  imgMatches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    if (url.match(/\.(jpg|jpeg|png|gif|webp|svg)$/i) || url.includes('/wp-content/')) {
      allImgUrls.add(url);
    }
  });
});

console.log(`  CSS URLs: ${allCssUrls.size}`);
console.log(`  JS URLs: ${allJsUrls.size}`);
console.log(`  Image URLs: ${allImgUrls.size}`);

// Step 2: Download ALL CSS files
console.log('\n[2/5] Downloading all CSS files...');

function downloadFile(url, dir) {
  if (!url || url.startsWith('data:') || url.includes('fonts.googleapis.com')) return null;

  let fullUrl = url;
  if (url.startsWith('//')) fullUrl = 'https:' + url;
  else if (url.startsWith('/') && !url.startsWith('//')) fullUrl = BASE_URL + url;
  if (!fullUrl.startsWith('http')) fullUrl = 'https://' + fullUrl;

  let fileName;
  try {
    const urlObj = new URL(fullUrl);
    fileName = path.basename(urlObj.pathname);
  } catch (e) {
    fileName = 'file_' + Math.abs(hashCode(fullUrl));
  }

  if (!fileName || fileName === '') {
    fileName = 'style.css';
  }

  fileName = fileName.split('?')[0].toLowerCase().replace(/\s+/g, '-');
  const localPath = path.join(dir, fileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
    return fileName;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36" "${fullUrl}" -o "${localPath}"`, {
      timeout: 30000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
      return fileName;
    }
  } catch (e) {}

  return null;
}

const urlToLocalMap = {};
let cssDownloaded = 0;
let jsDownloaded = 0;
let imgDownloaded = 0;

// Download CSS
for (const url of allCssUrls) {
  const fileName = downloadFile(url, CSS_DIR);
  if (fileName) {
    urlToLocalMap[url] = 'assets/css/' + fileName;
    cssDownloaded++;
  }
}

// Download JS
for (const url of allJsUrls) {
  const fileName = downloadFile(url, JS_DIR);
  if (fileName) {
    urlToLocalMap[url] = 'assets/js/' + fileName;
    jsDownloaded++;
  }
}

// Download Images
for (const url of allImgUrls) {
  const fileName = downloadFile(url, IMAGES_DIR);
  if (fileName) {
    urlToLocalMap[url] = 'assets/images/' + fileName;
    imgDownloaded++;
  }
}

console.log(`  Downloaded CSS: ${cssDownloaded}`);
console.log(`  Downloaded JS: ${jsDownloaded}`);
console.log(`  Downloaded Images: ${imgDownloaded}`);

// Step 3: Update all HTML files
console.log('\n[3/5] Updating HTML files...');

let totalChanges = 0;

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) return;

  let changes = 0;
  const originalContent = content;

  // Fix CSS hrefs
  content = content.replace(/href="([^"]+)"/gi, (match, href) => {
    if (urlToLocalMap[href]) {
      changes++;
      return `href="${urlToLocalMap[href]}"`;
    }
    // Handle globecore URLs
    if (href.includes('globecoreinc.com')) {
      // Extract path
      const match = href.match(/globecoreinc\.com(\/wp-content\/[^\s"'?]+)/);
      if (match) {
        const fileName = path.basename(match[1].split('?')[0]).toLowerCase();
        changes++;
        return `href="assets/css/${fileName}"`;
      }
    }
    return match;
  });

  // Fix JS srcs
  content = content.replace(/src="([^"]+)"/gi, (match, src) => {
    if (urlToLocalMap[src]) {
      changes++;
      return `src="${urlToLocalMap[src]}"`;
    }
    if (src.includes('globecoreinc.com')) {
      const match = src.match(/globecoreinc\.com(\/wp-content\/[^\s"'?]+)/);
      if (match) {
        const fileName = path.basename(match[1].split('?')[0]).toLowerCase();
        if (fileName.endsWith('.js')) {
          changes++;
          return `src="assets/js/${fileName}"`;
        }
      }
    }
    return match;
  });

  // Fix srcset
  content = content.replace(/srcset="([^"]+)"/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/gi, url => {
      const fileName = path.basename(url.split('?')[0]).toLowerCase();
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

// Step 4: Also fix any remaining URLs
console.log('\n[4/5] Fixing remaining globecore URLs...');

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) return;

  let changes = 0;

  // Fix remaining globecore URLs
  content = content.replace(/https:\/\/globecoreinc\.com(\/wp-content\/[^\s"'<>]+)/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart.split('?')[0]).toLowerCase();
    if (/\.(jpg|jpeg|png|gif|webp|svg)$/i.test(fileName)) {
      return `assets/images/${fileName}`;
    }
    if (/\.css$/i.test(fileName)) {
      return `assets/css/${fileName}`;
    }
    if (/\.js$/i.test(fileName)) {
      return `assets/js/${fileName}`;
    }
    return match;
  });

  // Fix relative wp-content URLs
  content = content.replace(/src="(\/wp-content\/[^"]+)"/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart.split('?')[0]).toLowerCase();
    if (/\.(jpg|jpeg|png|gif|webp|svg)$/i.test(fileName)) {
      changes++;
      return `src="assets/images/${fileName}"`;
    }
    if (/\.js$/i.test(fileName)) {
      changes++;
      return `src="assets/js/${fileName}"`;
    }
    return match;
  });

  content = content.replace(/href="(\/wp-content\/[^"]+)"/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart.split('?')[0]).toLowerCase();
    if (/\.css$/i.test(fileName)) {
      changes++;
      return `href="assets/css/${fileName}"`;
    }
    return match;
  });

  if (changes > 0) {
    fs.writeFileSync(filePath, content);
    totalChanges += changes;
  }
});

// Step 5: Summary
console.log('\n[5/5] Summary...');

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nFiles downloaded:`);
console.log(`  - CSS: ${fs.readdirSync(CSS_DIR).length}`);
console.log(`  - JS: ${fs.readdirSync(JS_DIR).length}`);
console.log(`  - Images: ${fs.readdirSync(IMAGES_DIR).length}`);
console.log(`  - Documents: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'documents')).length}`);
console.log(`\nHTML changes: ${totalChanges}`);

// Check a sample
console.log('\n=== Sample CSS links in about-us.html ===');
const sample = fs.readFileSync(path.join(PAGES_DIR, 'about-us.html'), 'utf8');
const cssLinks = sample.match(/href="[^"]+\.css[^"]*"/gi) || [];
console.log(cssLinks.slice(0, 5).join('\n'));

function hashCode(str) {
  let hash = 0;
  for (let i = 0; i < str.length; i++) {
    hash = ((hash << 5) - hash) + str.charCodeAt(i);
  }
  return hash;
}