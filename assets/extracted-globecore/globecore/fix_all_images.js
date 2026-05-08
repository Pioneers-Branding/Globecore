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
console.log('FIXING IMAGE PATHS AND DOWNLOADING ALL IMAGES');
console.log('='.repeat(60));

// Step 1: Extract ALL unique image URLs from HTML files
console.log('\n[1/6] Extracting all image URLs...');
const allImageUrls = new Set();

const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const content = fs.readFileSync(path.join(PAGES_DIR, fileName), 'utf8');
  if (content.includes('403 Forbidden') || content.includes('Robot Challenge')) return;

  // Extract from src="..."
  const srcMatches = content.match(/src=["']([^"']+)["']/gi) || [];
  srcMatches.forEach(m => {
    const url = m.match(/src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) allImageUrls.add(url);
  });

  // Extract from srcset="..."
  const srcsetMatches = content.match(/srcset=["']([^"']+)["']/gi) || [];
  srcsetMatches.forEach(m => {
    const srcset = m.match(/srcset=["']([^"']+)["']/)[1];
    srcset.split(',').forEach(s => {
      const url = s.trim().split(/\s+/)[0];
      if (isImageUrl(url)) allImageUrls.add(url);
    });
  });

  // Extract from data-src="..."
  const dataSrcMatches = content.match(/data-src=["']([^"']+)["']/gi) || [];
  dataSrcMatches.forEach(m => {
    const url = m.match(/data-src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) allImageUrls.add(url);
  });

  // Extract from JSON-LD (schema.org)
  const jsonLdMatches = content.match(/"url"\s*:\s*"([^"]+\.(?:jpg|jpeg|png|webp|svg))"/gi) || [];
  jsonLdMatches.forEach(m => {
    const url = m.match(/"url"\s*:\s*"([^"]+)"/)[1];
    if (isImageUrl(url)) allImageUrls.add(url);
  });
});

console.log(`  Found ${allImageUrls.size} image URLs`);

// Step 2: Download all missing images
console.log('\n[2/6] Downloading all missing images...');

const urlToLocalMap = {};
let downloadedCount = 0;

for (const imageUrl of allImageUrls) {
  if (imageUrl.startsWith('data:')) continue;
  if (imageUrl.startsWith('http') && !imageUrl.includes('globecoreinc.com') && !imageUrl.includes('wp-content')) continue;

  let fullUrl = imageUrl;
  if (imageUrl.startsWith('/')) {
    fullUrl = BASE_URL + imageUrl;
  }

  const cleanUrl = fullUrl.split('?')[0];
  const fileName = path.basename(cleanUrl).split('#')[0];

  if (!fileName || !fileName.includes('.') || fileName.length < 3) continue;

  let localFileName = fileName.toLowerCase().replace(/\s+/g, '-');
  const localPath = path.join(IMAGES_DIR, localFileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
    urlToLocalMap[cleanUrl] = 'assets/images/' + localFileName;
    urlToLocalMap[fullUrl] = 'assets/images/' + localFileName;
    continue;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36" "${cleanUrl}" -o "${localPath}"`, {
      timeout: 20000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath)) {
      const stat = fs.statSync(localPath);
      if (stat.size > 100) {
        urlToLocalMap[cleanUrl] = 'assets/images/' + localFileName;
        urlToLocalMap[fullUrl] = 'assets/images/' + localFileName;
        downloadedCount++;
        process.stdout.write(`\r  Downloaded: ${downloadedCount}  `);
      } else {
        fs.unlinkSync(localPath);
      }
    }
  } catch (e) {}
}

console.log(`\n  Downloaded ${downloadedCount} new images`);

// Step 3: Update all HTML files
console.log('\n[3/6] Updating HTML files with local image paths...');
let totalChanges = 0;

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403 Forbidden') || content.includes('Robot Challenge')) return;

  let changes = 0;
  const originalContent = content;

  // Replace src="https://globecoreinc.com/..." URLs
  content = content.replace(/src="(https?:\/\/globecoreinc\.com[^"]*\.(?:jpg|jpeg|png|gif|webp|svg)(?:\?[^"]*)?)"/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `src="${urlToLocalMap[cleanUrl]}"`;
    }
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Replace src="/wp-content/..." URLs
  content = content.replace(/src="(\/wp-content\/[^"]*\.(?:jpg|jpeg|png|gif|webp|svg)(?:\?[^"]*)?)"/gi, (match, pathPart) => {
    const cleanUrl = BASE_URL + pathPart.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `src="${urlToLocalMap[cleanUrl]}"`;
    }
    const fileName = path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Replace data-src
  content = content.replace(/data-src="(https?:\/\/globecoreinc\.com[^"]*)"/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `src="${urlToLocalMap[cleanUrl]}"`;
    }
    return match;
  });

  content = content.replace(/data-src="(\/wp-content\/[^"]*)"/gi, (match, pathPart) => {
    const cleanUrl = BASE_URL + pathPart.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `src="${urlToLocalMap[cleanUrl]}"`;
    }
    return match;
  });

  // Replace srcset
  content = content.replace(/srcset="([^"]+)"/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/gi, url => {
      const cleanUrl = url.split('?')[0];
      if (urlToLocalMap[cleanUrl]) return urlToLocalMap[cleanUrl];
      return path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    });
    newSrcset = newSrcset.replace(/(\/wp-content\/[^\s,]+)/gi, pathPart => {
      const cleanUrl = BASE_URL + pathPart.split('?')[0];
      if (urlToLocalMap[cleanUrl]) return urlToLocalMap[cleanUrl];
      return path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
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

// Step 4: Also fix JSON-LD schema URLs
console.log('\n[4/6] Fixing JSON-LD schema image URLs...');

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403 Forbidden') || content.includes('Robot Challenge')) return;

  let changes = 0;

  // Fix image URLs in JSON-LD
  content = content.replace(/"(https?:\/\/globecoreinc\.com\/wp-content\/[^"]*\.(?:jpg|jpeg|png|gif|webp|svg))"/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `"assets/images/${fileName}"`;
  });

  content = content.replace(/"(\/wp-content\/[^"]*\.(?:jpg|jpeg|png|gif|webp|svg))"/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `"assets/images/${fileName}"`;
  });

  if (changes > 0) {
    fs.writeFileSync(filePath, content);
    totalChanges += changes;
    console.log(`  ${fileName}: ${changes} JSON-LD changes`);
  }
});

// Step 5: Fix CSS files
console.log('\n[5/6] Checking CSS files...');

const cssFiles = fs.readdirSync(CSS_DIR).filter(f => f.endsWith('.css'));
cssFiles.forEach(cssFile => {
  const cssPath = path.join(CSS_DIR, cssFile);
  let content = fs.readFileSync(cssPath, 'utf8');
  let changes = 0;

  // Fix background-image URLs
  content = content.replace(/url\(['"]?(https?:\/\/globecoreinc\.com[^\)'"]+)['"]?\)/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    if (fileName && fileName.includes('.')) {
      changes++;
      return `url('../images/${fileName}')`;
    }
    return match;
  });

  content = content.replace(/url\(['"]?(\/wp-content\/[^\)'"]+)['"]?\)/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
    if (fileName && fileName.includes('.')) {
      changes++;
      return `url('../images/${fileName}')`;
    }
    return match;
  });

  if (changes > 0) {
    fs.writeFileSync(cssPath, content);
    console.log(`  ${cssFile}: ${changes} URL fixes`);
  }
});

// Step 6: Summary
console.log('\n[6/6] Final Summary...');

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nFiles:`);
console.log(`  - HTML Pages: ${htmlFiles.length}`);
console.log(`  - CSS Files: ${cssFiles.length}`);
console.log(`  - JS Files: ${fs.readdirSync(JS_DIR).length}`);
console.log(`  - Images: ${fs.readdirSync(IMAGES_DIR).length}`);
console.log(`  - Documents: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'documents')).length}`);
console.log(`\nTotal changes: ${totalChanges}`);
console.log(`New images downloaded: ${downloadedCount}`);

// Verify a sample page
console.log('\n=== Verification for about-us.html ===');
const aboutContent = fs.readFileSync(path.join(PAGES_DIR, 'about-us.html'), 'utf8');
const stillHasRemote = aboutContent.match(/https?:\/\/globecoreinc\.com[^\s"']*\.(?:jpg|jpeg|png|webp|svg)/gi) || [];
console.log(`  Remote image URLs remaining: ${stillHasRemote.length}`);
const localImages = aboutContent.match(/src="assets\/images\/[^"]+\.(?:jpg|jpeg|png|webp|svg)"/gi) || [];
console.log(`  Local image links: ${localImages.length}`);

function isImageUrl(url) {
  if (!url) return false;
  if (url.startsWith('data:')) return false;
  if (url.startsWith('//fonts.')) return false;
  return /\.(jpg|jpeg|png|gif|webp|svg)(\?|$|#)/i.test(url) ||
         url.includes('/wp-content/uploads/') ||
         url.includes('/wp-content/themes/') ||
         url.includes('globecoreinc.com/wp-content');
}