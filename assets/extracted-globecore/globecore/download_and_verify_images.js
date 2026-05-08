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
console.log('CLEANING AND RE-DOWNLOADING ALL IMAGES');
console.log('='.repeat(60));

// Step 1: Remove fake images (HTML files pretending to be images)
console.log('\n[1/5] Removing fake images...');
let removed = 0;

const imageFiles = fs.readdirSync(IMAGES_DIR);
imageFiles.forEach(fileName => {
  const filePath = path.join(IMAGES_DIR, fileName);
  const ext = path.extname(fileName).toLowerCase();

  if (['.jpg', '.jpeg', '.png', '.gif', '.webp', '.svg'].includes(ext)) {
    try {
      const stats = fs.statSync(filePath);
      if (stats.size < 500) {
        // Small files are likely error pages
        fs.unlinkSync(filePath);
        removed++;
      } else {
        // Check first few bytes for "HTML" marker
        const fd = fs.openSync(filePath, 'r');
        const buffer = Buffer.alloc(10);
        fs.readSync(fd, buffer, 0, 10, 0);
        fs.closeSync(fd);
        const header = buffer.toString('utf8');
        if (header.startsWith('<!') || header.startsWith('<htm') || header.includes('Cloudflare') || header.includes('403')) {
          fs.unlinkSync(filePath);
          removed++;
        }
      }
    } catch (e) {}
  }
});

console.log(`  Removed ${removed} fake images`);

// Step 2: Extract ALL image URLs from HTML files
console.log('\n[2/5] Extracting all image URLs from HTML...');
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

  // Extract from JSON-LD
  const jsonLdMatches = content.match(/"url"\s*:\s*"([^"]+\.(?:jpg|jpeg|png|webp|svg))"/gi) || [];
  jsonLdMatches.forEach(m => {
    const url = m.match(/"url"\s*:\s*"([^"]+)"/)[1];
    if (isImageUrl(url)) allImageUrls.add(url);
  });
});

console.log(`  Found ${allImageUrls.size} image URLs to download`);

// Step 3: Download images with verification
console.log('\n[3/5] Downloading and verifying images...');

const validExtensions = ['.jpg', '.jpeg', '.png', '.gif', '.webp', '.svg'];

function isValidImage(filePath) {
  try {
    const stats = fs.statSync(filePath);
    if (stats.size < 500) return false;

    // Check for HTML markers
    const fd = fs.openSync(filePath, 'r');
    const buffer = Buffer.alloc(100);
    fs.readSync(fd, buffer, 0, 100, 0);
    fs.closeSync(fd);

    const header = buffer.toString('utf8', 0, 100);
    if (header.includes('<!') || header.includes('<htm') || header.includes('Cloudflare') ||
        header.includes('403') || header.includes('Robot') || header.includes('challenge')) {
      return false;
    }

    // Check for image magic bytes
    const bytes = buffer;
    // PNG: 89 50 4E 47
    // JPEG: FF D8 FF
    // GIF: 47 49 46 38
    // WebP: 52 49 46 46 (RIFF) ... WEBP
    if (bytes[0] === 0x89 && bytes[1] === 0x50) return true; // PNG
    if (bytes[0] === 0xFF && bytes[1] === 0xD8) return true; // JPEG
    if (bytes[0] === 0x47 && bytes[1] === 0x49) return true; // GIF
    if (bytes[0] === 0x52 && bytes[1] === 0x49 && bytes[2] === 0x46 && bytes[3] === 0x46) return true; // RIFF/WebP

    return true; // Trust SVG
  } catch (e) {
    return false;
  }
}

let downloaded = 0;
let skipped = 0;

for (const imageUrl of allImageUrls) {
  if (imageUrl.startsWith('data:')) continue;
  if (imageUrl.includes('secure.gravatar.com')) continue; // Skip gravatar
  if (imageUrl.startsWith('http') && !imageUrl.includes('globecoreinc.com') && !imageUrl.includes('wp-content')) continue;

  let fullUrl = imageUrl;
  if (imageUrl.startsWith('/')) {
    fullUrl = BASE_URL + imageUrl;
  }

  const cleanUrl = fullUrl.split('?')[0];
  const fileName = path.basename(cleanUrl).split('#')[0];

  if (!fileName || !fileName.includes('.') || fileName.length < 3) continue;

  // Skip non-image files
  const ext = path.extname(fileName).toLowerCase();
  if (!validExtensions.includes(ext)) continue;

  let localFileName = fileName.toLowerCase().replace(/\s+/g, '-');
  const localPath = path.join(IMAGES_DIR, localFileName);

  // Check if already exists and is valid
  if (fs.existsSync(localPath)) {
    if (isValidImage(localPath)) {
      skipped++;
      continue;
    } else {
      fs.unlinkSync(localPath);
    }
  }

  // Download with curl
  try {
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36" -H "Accept: image/webp,image/apng,image/*,*/*;q=0.8" -H "Accept-Language: en-US,en;q=0.9" --connect-timeout 15 "${cleanUrl}" -o "${localPath}"`, {
      timeout: 30000,
      stdio: 'pipe'
    });

    if (isValidImage(localPath)) {
      downloaded++;
      process.stdout.write(`\r  Downloaded: ${downloaded} | Skipped: ${skipped}  `);
    } else {
      if (fs.existsSync(localPath)) fs.unlinkSync(localPath);
    }
  } catch (e) {
    if (fs.existsSync(localPath)) fs.unlinkSync(localPath);
  }
}

console.log(`\n  Downloaded: ${downloaded} | Skipped (valid): ${skipped}`);

// Step 4: Update HTML files with correct local paths
console.log('\n[4/5] Updating HTML files with local paths...');
let totalChanges = 0;

htmlFiles.forEach(fileName => {
  const filePath = path.join(PAGES_DIR, fileName);
  let content = fs.readFileSync(filePath, 'utf8');

  if (content.includes('403 Forbidden') || content.includes('Robot Challenge')) return;

  let changes = 0;
  const originalContent = content;

  // Replace https://globecoreinc.com URLs in src
  content = content.replace(/src="(https?:\/\/globecoreinc\.com[^"]*\.(?:jpg|jpeg|png|gif|webp|svg)(?:\?[^"]*)?)"/gi, (match, url) => {
    const cleanUrl = url.split('?')[0];
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Replace /wp-content/ URLs in src
  content = content.replace(/src="(\/wp-content\/[^"]*\.(?:jpg|jpeg|png|gif|webp|svg)(?:\?[^"]*)?)"/gi, (match, pathPart) => {
    const fileName = path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
    changes++;
    return `src="assets/images/${fileName}"`;
  });

  // Replace srcset
  content = content.replace(/srcset="([^"]+)"/gi, (match, srcset) => {
    let newSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/gi, url => {
      const cleanUrl = url.split('?')[0];
      return path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    });
    newSrcset = newSrcset.replace(/(\/wp-content\/[^\s,]+)/gi, pathPart => {
      return path.basename(pathPart).toLowerCase().replace(/\s+/g, '-');
    });
    if (newSrcset !== srcset) changes++;
    return `srcset="${newSrcset}"`;
  });

  // Fix JSON-LD image URLs
  content = content.replace(/"(https?:\/\/globecoreinc\.com\/wp-content\/[^"]*\.(?:jpg|jpeg|png|gif|webp|svg))"/gi, (match, url) => {
    const fileName = path.basename(url).toLowerCase().replace(/\s+/g, '-');
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
    console.log(`  ${fileName}: ${changes} changes`);
  }
});

// Step 5: Summary
console.log('\n[5/5] Final Summary...');

const remainingImages = fs.readdirSync(IMAGES_DIR).filter(f => {
  const ext = path.extname(f).toLowerCase();
  return validExtensions.includes(ext);
}).length;

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nFiles:`);
console.log(`  - HTML Pages: ${htmlFiles.length}`);
console.log(`  - CSS Files: ${fs.readdirSync(CSS_DIR).length}`);
console.log(`  - JS Files: ${fs.readdirSync(JS_DIR).length}`);
console.log(`  - Valid Images: ${remainingImages}`);
console.log(`  - Documents: ${fs.readdirSync(path.join(OUTPUT_DIR, 'assets', 'documents')).length}`);
console.log(`\nDownloads: ${downloaded}`);
console.log(`HTML changes: ${totalChanges}`);

function isImageUrl(url) {
  if (!url) return false;
  if (url.startsWith('data:')) return false;
  if (url.startsWith('//fonts.')) return false;
  return /\.(jpg|jpeg|png|gif|webp|svg)(\?|$|#)/i.test(url) ||
         url.includes('/wp-content/uploads/') ||
         url.includes('/wp-content/themes/') ||
         (url.includes('globecoreinc.com') && !url.includes('.js'));
}