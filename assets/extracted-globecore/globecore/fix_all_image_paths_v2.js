const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');

console.log('='.repeat(60));
console.log('FIXING IMAGE PATHS IN ALL HTML FILES');
console.log('='.repeat(60));

// Ensure directories exist
if (!fs.existsSync(IMAGES_DIR)) {
  fs.mkdirSync(IMAGES_DIR, { recursive: true });
}

// Step 1: Extract ALL unique image URLs from ALL HTML files
console.log('\n[1/5] Extracting ALL image URLs from HTML files...');
const allImageUrls = new Set();

const htmlFiles = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  const content = fs.readFileSync(filePath, 'utf8');

  // Only skip truly blocked pages (403/Robot/Challenge)
  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) {
    console.log(`  Skipping: ${fileName} (blocked by Cloudflare)`);
    return;
  }

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
    srcset.split(',').map(s => s.trim().split(/\s+/)[0]).forEach(url => {
      if (isImageUrl(url)) allImageUrls.add(url);
    });
  });

  // Extract from data-src="..."
  const dataSrcMatches = content.match(/data-src=["']([^"']+)["']/gi) || [];
  dataSrcMatches.forEach(m => {
    const url = m.match(/data-src=["']([^"']+)["']/)[1];
    if (isImageUrl(url)) allImageUrls.add(url);
  });

  // Extract from url(...) in CSS
  const cssUrlMatches = content.match(/url\(['"]([^'"]+)['"]\)/gi) || [];
  cssUrlMatches.forEach(m => {
    const url = m.match(/url\(['"]([^'"]+)['"]\)/)[1];
    if (isImageUrl(url)) allImageUrls.add(url);
  });
});

console.log(`  Found ${allImageUrls.size} unique image URLs`);

// Step 2: Build URL to local file mapping
console.log('\n[2/5] Building URL mapping...');
const urlToLocalMap = {};

// Add existing local files to map
fs.readdirSync(IMAGES_DIR).forEach(file => {
  const localPath = 'assets/images/' + file;
  urlToLocalMap['https://globecoreinc.com/wp-content/uploads/' + file] = localPath;
  urlToLocalMap['https://globecoreinc.com/wp-content/uploads/' + file.toLowerCase()] = localPath;
  urlToLocalMap[file] = localPath;
  urlToLocalMap[file.toLowerCase()] = localPath;
});

// Step 3: Download all missing images
console.log('\n[3/5] Downloading missing images...');
let downloadedCount = 0;

for (const imageUrl of allImageUrls) {
  if (imageUrl.startsWith('data:')) continue;
  if (imageUrl.startsWith('http') && !imageUrl.includes('globecoreinc.com')) continue;

  let fullUrl = imageUrl;
  if (imageUrl.startsWith('/')) {
    fullUrl = BASE_URL + imageUrl;
  }

  const cleanUrl = fullUrl.split('?')[0];
  const fileName = path.basename(cleanUrl).split('#')[0];

  if (!fileName || !fileName.includes('.') || fileName.length < 3) continue;

  if (urlToLocalMap[cleanUrl] || urlToLocalMap[cleanUrl.toLowerCase()]) {
    continue;
  }

  let localFileName = fileName.toLowerCase().replace(/\s+/g, '-').replace(/[^a-z0-9\-_\.]/g, '');
  const localPath = path.join(IMAGES_DIR, localFileName);

  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
    urlToLocalMap[cleanUrl] = 'assets/images/' + localFileName;
    continue;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36" "${cleanUrl}" -o "${localPath}"`, {
      timeout: 15000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath)) {
      const stat = fs.statSync(localPath);
      if (stat.size > 100) {
        urlToLocalMap[cleanUrl] = 'assets/images/' + localFileName;
        downloadedCount++;
        process.stdout.write(`\r  Downloaded: ${downloadedCount}  `);
      } else {
        fs.unlinkSync(localPath);
      }
    }
  } catch (e) {}
}

console.log(`\n  Downloaded ${downloadedCount} new images`);

// Step 4: Update all HTML files with local paths
console.log('\n[4/5] Updating HTML files with local image paths...');
let totalChanges = 0;

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  // Only skip truly blocked pages
  if (content.includes('403 Forbidden') || content.includes('Robot Challenge Screen')) {
    return;
  }

  let changes = 0;

  // Replace globecoreinc.com URLs in src
  content = content.replace(/src="(https:\/\/globecoreinc\.com[^\s"'<>]*\.(?:jpg|jpeg|png|gif|webp|svg)(?:\?[^\s"'<>]*)?)"/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `src="${urlToLocalMap[cleanUrl]}"`;
    }
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Replace relative URLs in src
  content = content.replace(/src="(\/wp-content\/[^\s"'<>]*\.(?:jpg|jpeg|png|gif|webp|svg)(?:\?[^\s"'<>]*)?)"/gi, (match, pathPart) => {
    const cleanUrl = BASE_URL + pathPart.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `src="${urlToLocalMap[cleanUrl]}"`;
    }
    const fileName = path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Replace srcset
  content = content.replace(/srcset="([^"]+)"/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/gi, url => {
      const cleanUrl = url.split('?')[0];
      if (urlToLocalMap[cleanUrl]) return urlToLocalMap[cleanUrl];
      return path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    });
    if (newSrcset !== srcset) changes++;
    return `srcset="${newSrcset}"`;
  });

  // Replace data-src with src
  content = content.replace(/data-src="([^"]+)"/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `src="${urlToLocalMap[cleanUrl]}"`;
    }
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Replace CSS url()
  content = content.replace(/url\(['"]([^'"]*globecoreinc[^'"]+)['"]\)/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    if (urlToLocalMap[cleanUrl]) {
      changes++;
      return `url('${urlToLocalMap[cleanUrl]}')`;
    }
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `url('assets/images/${fileName}')`;
  });

  if (changes > 0) {
    fs.writeFileSync(filePath, content);
    totalChanges += changes;
    console.log(`  ${fileName}: ${changes} changes`);
  }
});

// Step 5: Summary
console.log('\n[5/5] Final Summary...');

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));

const validPages = htmlFiles.filter(f => {
  const content = fs.readFileSync(path.join(PAGES_DIR, f), 'utf8');
  return content.includes('GlobeCoRe') || content.includes('GlobeCore');
}).length;

console.log(`\nResults:`);
console.log(`  - HTML Pages: ${htmlFiles.length}`);
console.log(`  - Valid Pages: ${validPages}`);
console.log(`  - Images: ${fs.readdirSync(IMAGES_DIR).length}`);
console.log(`  - Documents: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'documents')).length}`);
console.log(`  - Image updates: ${totalChanges}`);
console.log(`  - New images downloaded: ${downloadedCount}`);
console.log(`\nLocation: ${OUTPUT_DIR}`);

// Show sample
console.log('\n=== Sample Image Paths in about-us.html ===');
const sampleContent = fs.readFileSync(path.join(PAGES_DIR, 'about-us.html'), 'utf8');
const imageMatches = sampleContent.match(/src="[^"]*\.(?:jpg|png|webp|svg)"/gi) || [];
console.log(imageMatches.slice(0, 5).join('\n'));

function isImageUrl(url) {
  if (!url || url.startsWith('data:') || url.startsWith('//fonts.')) return false;
  return /\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i.test(url) ||
         url.includes('/wp-content/uploads/') ||
         url.includes('/wp-content/themes/') ||
         url.includes('globecoreinc.com');
}