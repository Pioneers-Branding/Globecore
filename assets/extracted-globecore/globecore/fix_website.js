const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const CSS_DIR = path.join(OUTPUT_DIR, 'assets', 'css');
const JS_DIR = path.join(OUTPUT_DIR, 'assets', 'js');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');
const BASE_URL = 'https://globecoreinc.com';

console.log('='.repeat(60));
console.log('FIXING WEBSITE - Proper Asset Organization');
console.log('='.repeat(60));

// Step 1: Fix misplaced files
console.log('\n[1/7] Fixing misplaced files...');

// Move JS from images folder
const jsInImages = fs.readdirSync(IMAGES_DIR).filter(f => f.endsWith('.js'));
jsInImages.forEach(file => {
  const src = path.join(IMAGES_DIR, file);
  const dest = path.join(JS_DIR, file);
  fs.renameSync(src, dest);
  console.log(`  Moved: ${file} -> JS folder`);
});

// Move any CSS from images
const cssInImages = fs.readdirSync(IMAGES_DIR).filter(f => f.endsWith('.css'));
cssInImages.forEach(file => {
  const src = path.join(IMAGES_DIR, file);
  const dest = path.join(CSS_DIR, file);
  fs.renameSync(src, dest);
  console.log(`  Moved: ${file} -> CSS folder`);
});

// Step 2: Download ALL missing images
console.log('\n[2/7] Downloading ALL missing images...');

const allImageUrls = new Set();
const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');
  if (content.includes('403') || content.includes('Robot')) return;

  // Extract all image URLs
  const matches = content.match(/src=["']([^"']+)["']/gi) || [];
  matches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    if (url.match(/\.(jpg|jpeg|png|gif|webp|svg)$/i) || url.includes('/wp-content/uploads/') || url.includes('/wp-content/themes/')) {
      allImageUrls.add(url);
    }
  });

  // Also check srcset
  const srcsetMatches = content.match(/srcset=["']([^"']+)["']/gi) || [];
  srcsetMatches.forEach(m => {
    const srcset = m.match(/srcset=["']([^"']+)["']/)[1];
    srcset.split(',').forEach(s => {
      const url = s.trim().split(/\s+/)[0];
      if (url.match(/\.(jpg|jpeg|png|gif|webp|svg)$/i)) {
        allImageUrls.add(url);
      }
    });
  });
});

console.log(`  Found ${allImageUrls.size} image URLs`);

let downloaded = 0;
for (const url of allImageUrls) {
  if (url.startsWith('data:') || url.startsWith('http') && !url.includes('globecoreinc.com')) continue;

  let fullUrl = url.startsWith('/') ? BASE_URL + url : url;
  fullUrl = fullUrl.split('?')[0];

  const fileName = path.basename(fullUrl).toLowerCase().replace(/\s+/g, '-');
  if (!fileName || fileName === '' || !fileName.includes('.')) continue;

  const localPath = path.join(IMAGES_DIR, fileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) continue;

  try {
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36" "${fullUrl}" -o "${localPath}"`, {
      timeout: 20000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
      downloaded++;
      process.stdout.write(`\r  Downloaded: ${downloaded}`);
    }
  } catch (e) {}
}

console.log(`\n  Downloaded ${downloaded} images`);

// Step 3: Build file mapping
console.log('\n[3/7] Building file mapping...');

const imageMap = {};
fs.readdirSync(IMAGES_DIR).forEach(file => {
  imageMap[file.toLowerCase()] = `assets/images/${file}`;
  imageMap[file] = `assets/images/${file}`;
});

// Step 4: Update ALL HTML files with CORRECT paths
console.log('\n[4/7] Updating HTML files with correct paths...');

let totalChanges = 0;

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403') || content.includes('Robot')) return;

  let changes = 0;
  const originalContent = content;

  // FIX JS src - must end with .js
  content = content.replace(/src="([^"]+\.js[^"]*)"/gi, (match, src) => {
    if (src.startsWith('http') && !src.includes('globecoreinc.com')) return match;
    if (src.startsWith('//')) return match;

    let fullSrc = src;
    if (src.startsWith('/')) fullSrc = BASE_URL + src;

    const fileName = path.basename(fullSrc.split('?')[0]);
    if (fileName.endsWith('.js')) {
      changes++;
      return `src="assets/js/${fileName}"`;
    }
    return match;
  });

  // FIX CSS href - must end with .css
  content = content.replace(/href="([^"]+\.css[^"]*)"/gi, (match, href) => {
    if (href.startsWith('http') && !href.includes('globecoreinc.com')) return match;
    if (href.includes('googleapis')) return match;

    let fullHref = href;
    if (href.startsWith('/')) fullHref = BASE_URL + href;

    const fileName = path.basename(fullHref.split('?')[0]);
    if (fileName.endsWith('.css')) {
      changes++;
      return `href="assets/css/${fileName}"`;
    }
    return match;
  });

  // FIX images - must be image files
  content = content.replace(/src="([^"]+)"/gi, (match, src) => {
    if (src.startsWith('http') && !src.includes('globecoreinc.com')) return match;
    if (src.startsWith('//')) return match;
    if (src.includes('.js')) return match;

    let fullSrc = src;
    if (src.startsWith('/')) fullSrc = BASE_URL + src;

    const fileName = path.basename(fullSrc.split('?')[0]).toLowerCase();

    if (fileName.match(/\.(jpg|jpeg|png|gif|webp|svg)$/i)) {
      changes++;
      return `src="assets/images/${fileName}"`;
    }
    return match;
  });

  // FIX srcset
  content = content.replace(/srcset="([^"]+)"/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/gi, url => {
      const fileName = path.basename(url.split('?')[0]).toLowerCase();
      if (fileName.match(/\.(jpg|jpeg|png|gif|webp|svg)$/i)) {
        return `assets/images/${fileName}`;
      }
      return url;
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

// Step 5: Download missing CSS files referenced in HTML
console.log('\n[5/7] Checking for missing CSS files...');

const cssLinks = new Set();
htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');
  const matches = content.match(/href="([^"]+\.css[^"]*)"/gi) || [];
  matches.forEach(m => {
    const href = m.match(/href="([^"]+)"/)[1];
    cssLinks.add(href);
  });
});

let cssDownloaded = 0;
cssLinks.forEach(href => {
  if (href.startsWith('http') && !href.includes('globecoreinc.com')) return;
  if (href.includes('googleapis')) return;

  let fullUrl = href.startsWith('/') ? BASE_URL + href : href;
  const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
  const localPath = path.join(CSS_DIR, fileName);

  if (fs.existsSync(localPath)) return;

  try {
    execSync(`curl -sL -A "Mozilla/5.0" "${fullUrl}" -o "${localPath}"`, {
      timeout: 20000,
      stdio: 'pipe'
    });
    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
      cssDownloaded++;
    }
  } catch (e) {}
});

console.log(`  Downloaded ${cssDownloaded} CSS files`);

// Step 6: Download missing JS files
console.log('\n[6/7] Checking for missing JS files...');

const jsLinks = new Set();
htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');
  const matches = content.match(/src="([^"]+\.js[^"]*)"/gi) || [];
  matches.forEach(m => {
    const src = m.match(/src="([^"]+)"/)[1];
    jsLinks.add(src);
  });
});

let jsDownloaded = 0;
jsLinks.forEach(src => {
  if (src.startsWith('http') && !src.includes('globecoreinc.com')) return;
  if (src.includes('googletagmanager') || src.includes('facebook')) return;

  let fullUrl = src.startsWith('/') ? BASE_URL + src : src;
  const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
  const localPath = path.join(JS_DIR, fileName);

  if (fs.existsSync(localPath)) return;

  try {
    execSync(`curl -sL -A "Mozilla/5.0" "${fullUrl}" -o "${localPath}"`, {
      timeout: 20000,
      stdio: 'pipe'
    });
    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
      jsDownloaded++;
    }
  } catch (e) {}
});

console.log(`  Downloaded ${jsDownloaded} JS files`);

// Step 7: Final verification
console.log('\n[7/7] Final verification...');

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nFiles:`);
console.log(`  - HTML Pages: ${htmlFiles.length}`);
console.log(`  - CSS Files: ${fs.readdirSync(CSS_DIR).length}`);
console.log(`  - JS Files: ${fs.readdirSync(JS_DIR).length}`);
console.log(`  - Images: ${fs.readdirSync(IMAGES_DIR).length}`);
console.log(`  - Documents: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'documents')).length}`);
console.log(`\nHTML changes: ${totalChanges}`);

// Show sample
console.log('\n=== Sample of correct paths in meet-our-team-new.html ===');
const sampleContent = fs.readFileSync(path.join(PAGES_DIR, 'meet-our-team-new.html'), 'utf8');
const jsPaths = sampleContent.match(/src="assets\/js\/[^"]+\.js"/gi) || [];
const cssPaths = sampleContent.match(/href="assets\/css\/[^"]+\.css"/gi) || [];
const imgPaths = sampleContent.match(/src="assets\/images\/[^"]+\.(jpg|png|webp)"/gi) || [];
console.log('\nJS files:');
console.log(jsPaths.slice(0, 3).join('\n'));
console.log('\nCSS files:');
console.log(cssPaths.slice(0, 3).join('\n'));
console.log('\nImage files:');
console.log(imgPaths.slice(0, 3).join('\n'));