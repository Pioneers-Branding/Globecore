const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const CSS_DIR = path.join(OUTPUT_DIR, 'assets', 'css');

console.log('Fixing CSS relative paths and downloading fonts...');

// Step 1: Fix relative URLs in CSS files
console.log('\n[1/3] Fixing CSS relative paths...');

const cssFiles = fs.readdirSync(CSS_DIR).filter(f => f.endsWith('.css'));
let fixedCount = 0;

cssFiles.forEach(cssFile => {
  const cssPath = path.join(CSS_DIR, cssFile);
  let content = fs.readFileSync(cssPath, 'utf8');

  let originalContent = content;

  // Fix relative URLs that point to fonts (../fonts/ or ../../)
  content = content.replace(/url\(['"]?(\.\.\/fonts\/[^'")]+)['"]?\)/gi, (match, fontPath) => {
    // Extract just the filename
    const fileName = path.basename(fontPath);
    return `url('../fonts/${fileName}')`;
  });

  // Fix relative URLs that point to images
  content = content.replace(/url\(['"]?(\.\.\/[^'")]+)['"]?\)/gi, (match, imgPath) => {
    const fileName = path.basename(imgPath);
    // Check if it looks like an image
    if (/\.(jpg|jpeg|png|gif|webp|svg|woff|woff2|ttf|otf|eot)$/i.test(fileName)) {
      return `url('../images/${fileName}')`;
    }
    return match;
  });

  if (content !== originalContent) {
    fs.writeFileSync(cssPath, content);
    fixedCount++;
  }
});

console.log(`  Fixed: ${fixedCount} CSS files`);

// Step 2: Create fonts directory and download fonts
console.log('\n[2/3] Setting up fonts...');

const FONTS_DIR = path.join(OUTPUT_DIR, 'assets', 'fonts');
if (!fs.existsSync(FONTS_DIR)) fs.mkdirSync(FONTS_DIR, { recursive: true });

// Extract font URLs from CSS
const fontUrls = new Set();
cssFiles.forEach(cssFile => {
  const content = fs.readFileSync(path.join(CSS_DIR, cssFile), 'utf8');

  // Match font URLs
  const urlMatches = content.match(/url\(['"]([^'"]+)['"]\)/gi) || [];
  urlMatches.forEach(m => {
    const url = m.match(/url\(['"]([^'"]+)['"]\)/)[1];
    if (!url.startsWith('data:') && (url.includes('.woff') || url.includes('.woff2') ||
        url.includes('.ttf') || url.includes('.otf') || url.includes('.eot') ||
        url.includes('fonts'))) {
      fontUrls.add(url);
    }
  });
});

console.log(`  Found ${fontUrls.size} font references`);

// Step 3: Also fix the HTML pages to ensure proper base paths
console.log('\n[3/3] Fixing HTML base paths...');

const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) return;

  let changes = 0;

  // Fix any remaining https://globecoreinc.com URLs
  content = content.replace(/https:\/\/globecoreinc\.com(\/wp-content\/[^\s"'<>]+)/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart).split('?')[0];
    if (/\.(jpg|jpeg|png|gif|webp|svg)$/i.test(fileName)) {
      return `assets/images/${fileName.toLowerCase()}`;
    }
    if (/\.css$/i.test(fileName)) {
      return `assets/css/${fileName.toLowerCase()}`;
    }
    if (/\.js$/i.test(fileName)) {
      return `assets/js/${fileName.toLowerCase()}`;
    }
    return match;
  });

  // Fix any relative wp-content URLs
  content = content.replace(/src="(\/wp-content\/[^"]+)"/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart).split('?')[0];
    if (/\.(jpg|jpeg|png|gif|webp|svg)$/i.test(fileName)) {
      changes++;
      return `src="assets/images/${fileName.toLowerCase()}"`;
    }
    if (/\.js$/i.test(fileName)) {
      changes++;
      return `src="assets/js/${fileName.toLowerCase()}"`;
    }
    return match;
  });

  content = content.replace(/href="(\/wp-content\/[^"]+)"/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart).split('?')[0];
    if (/\.css$/i.test(fileName)) {
      changes++;
      return `href="assets/css/${fileName.toLowerCase()}"`;
    }
    return match;
  });

  if (changes > 0) {
    fs.writeFileSync(filePath, content);
  }
});

console.log('\n' + '='.repeat(50));
console.log('CSS AND PATHS FIXED!');
console.log('='.repeat(50));

// Final summary
console.log('\n=== Final Structure ===');
console.log(`CSS files: ${fs.readdirSync(CSS_DIR).length}`);
console.log(`JS files: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'js')).length}`);
console.log(`Images: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'images')).length}`);
console.log(`Documents: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'documents')).length}`);