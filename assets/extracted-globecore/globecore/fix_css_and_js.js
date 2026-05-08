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
console.log('FIXING CSS FILES - REMOVING FAKE HTML PAGES');
console.log('='.repeat(60));

// Step 1: Identify and remove fake CSS files (that are HTML pages)
console.log('\n[1/4] Cleaning fake CSS files...');

function isFakeFile(filePath, type) {
  try {
    const stats = fs.statSync(filePath);
    if (stats.size < 100) return true;

    const fd = fs.openSync(filePath, 'r');
    const buffer = Buffer.alloc(200);
    fs.readSync(fd, buffer, 0, 200, 0);
    fs.closeSync(fd);

    const content = buffer.toString('utf8').toLowerCase();

    // Check for HTML markers
    if (content.includes('<!doctype') || content.includes('<html') ||
        content.includes('cloudflare') || content.includes('403') ||
        content.includes('forbidden') || content.includes('robot challenge') ||
        content.includes('access denied') || content.includes('ray id')) {
      return true;
    }

    // Check magic bytes - CSS should start with valid characters
    const firstChar = buffer[0];
    if (firstChar === 0x3C) return true; // '<' character

    return false;
  } catch (e) {
    return true;
  }
}

let cssRemoved = 0;
let jsRemoved = 0;

const cssFiles = fs.readdirSync(CSS_DIR);
cssFiles.forEach(file => {
  if (isFakeFile(path.join(CSS_DIR, file), 'css')) {
    fs.unlinkSync(path.join(CSS_DIR, file));
    cssRemoved++;
  }
});

const jsFiles = fs.readdirSync(JS_DIR);
jsFiles.forEach(file => {
  if (isFakeFile(path.join(JS_DIR, file), 'js')) {
    fs.unlinkSync(path.join(JS_DIR, file));
    jsRemoved++;
  }
});

console.log(`  Removed ${cssRemoved} fake CSS files`);
console.log(`  Removed ${jsRemoved} fake JS files`);

// Step 2: Find all CSS/JS URLs from HTML
console.log('\n[2/4] Extracting CSS and JS URLs from HTML...');

const cssUrls = new Set();
const jsUrls = new Set();

const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');
  if (content.includes('403 Forbidden') || content.includes('Robot Challenge')) return;

  // Extract CSS hrefs
  const linkMatches = content.match(/href=["']([^"']+\.css[^"']*)["']/gi) || [];
  linkMatches.forEach(m => {
    const href = m.match(/href=["']([^"']+)["']/)[1];
    if (!href.includes('googleapis.com') && !href.includes('gstatic.com')) {
      cssUrls.add(href);
    }
  });

  // Extract JS srcs
  const scriptMatches = content.match(/src=["']([^"']+\.js[^"']*)["']/gi) || [];
  scriptMatches.forEach(m => {
    const srcMatch = m.match(/src=["']([^"']+)["']/);
    if (!srcMatch) return;
    const src = srcMatch[1];
    if (!src.includes('google') && !src.includes('facebook') && !src.includes('stripe') &&
        !src.includes('analytics') && !src.includes('googletag')) {
      jsUrls.add(src);
    }
  });
});

console.log(`  Found ${cssUrls.size} CSS URLs`);
console.log(`  Found ${jsUrls.size} JS URLs`);

// Step 3: Download CSS files with proper user-agent
console.log('\n[3/4] Downloading CSS files...');

let cssDownloaded = 0;

function downloadWithCookies(url, filePath) {
  // Try multiple approaches
  const approaches = [
    `curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36" -H "Accept: text/css,*/*;q=0.1" -H "Accept-Language: en-US,en;q=0.9" -H "Referer: ${BASE_URL}/" --connect-timeout 10 -m 30 "${url}" -o "${filePath}"`,
    `curl -sL -A "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Safari/605.1.15" -H "Accept: text/css,*/*;q=0.1" --connect-timeout 10 -m 30 "${url}" -o "${filePath}"`,
    `curl -sL --connect-timeout 10 -m 30 "${url}" -o "${filePath}"`
  ];

  for (const cmd of approaches) {
    try {
      execSync(cmd, { stdio: 'pipe', timeout: 35000 });
      if (fs.existsSync(filePath) && fs.statSync(filePath).size > 100 && !isFakeFile(filePath, 'css')) {
        return true;
      }
      if (fs.existsSync(filePath)) fs.unlinkSync(filePath);
    } catch (e) {}
  }
  return false;
}

for (const cssUrl of cssUrls) {
  let fullUrl = cssUrl;
  if (cssUrl.startsWith('/')) {
    fullUrl = BASE_URL + cssUrl;
  }
  if (!fullUrl.startsWith('http')) continue;
  if (fullUrl.includes('googleapis') || fullUrl.includes('gstatic')) continue;

  const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
  const localPath = path.join(CSS_DIR, fileName);

  // Skip if already exists and is valid
  if (fs.existsSync(localPath) && !isFakeFile(localPath, 'css')) {
    continue;
  }

  if (downloadWithCookies(fullUrl, localPath)) {
    cssDownloaded++;
    process.stdout.write(`\r  Downloaded: ${cssDownloaded}  `);
  }
}

console.log(`\n  Downloaded ${cssDownloaded} CSS files`);

// Step 4: Download JS files
console.log('\n[4/4] Downloading JS files...');

let jsDownloaded = 0;

function downloadJS(url, filePath) {
  const approaches = [
    `curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36" -H "Accept: */*" --connect-timeout 10 -m 30 "${url}" -o "${filePath}"`,
    `curl -sL --connect-timeout 10 -m 30 "${url}" -o "${filePath}"`
  ];

  for (const cmd of approaches) {
    try {
      execSync(cmd, { stdio: 'pipe', timeout: 35000 });
      if (fs.existsSync(filePath) && fs.statSync(filePath).size > 50 && !isFakeFile(filePath, 'js')) {
        return true;
      }
      if (fs.existsSync(filePath)) fs.unlinkSync(filePath);
    } catch (e) {}
  }
  return false;
}

for (const jsUrl of jsUrls) {
  let fullUrl = jsUrl;
  if (jsUrl.startsWith('/')) {
    fullUrl = BASE_URL + jsUrl;
  }
  if (!fullUrl.startsWith('http')) continue;
  if (fullUrl.includes('google') || fullUrl.includes('facebook') || fullUrl.includes('stripe')) continue;

  const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
  const localPath = path.join(JS_DIR, fileName);

  if (fs.existsSync(localPath) && !isFakeFile(localPath, 'js')) {
    continue;
  }

  if (downloadJS(fullUrl, localPath)) {
    jsDownloaded++;
    process.stdout.write(`\r  Downloaded: ${jsDownloaded}  `);
  }
}

console.log(`\n  Downloaded ${jsDownloaded} JS files`);

// Summary
console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nFiles:`);
console.log(`  - CSS: ${fs.readdirSync(CSS_DIR).filter(f => !isFakeFile(path.join(CSS_DIR, f), 'css')).length}`);
console.log(`  - JS: ${fs.readdirSync(JS_DIR).filter(f => !isFakeFile(path.join(JS_DIR, f), 'js')).length}`);
console.log(`  - Images: ${fs.readdirSync(IMAGES_DIR).length}`);
console.log(`\nCSS downloaded: ${cssDownloaded}`);
console.log(`JS downloaded: ${jsDownloaded}`);