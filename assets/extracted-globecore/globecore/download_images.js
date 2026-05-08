const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'imageglobe');

if (!fs.existsSync(OUTPUT_DIR)) {
  fs.mkdirSync(OUTPUT_DIR, { recursive: true });
}

console.log('='.repeat(60));
console.log('DOWNLOADING IMAGES FROM globecoreinc.com');
console.log('='.repeat(60));

// Get image list from all pages
console.log('\n[1/2] Finding image URLs...');

const pages = fs.readdirSync(path.join(__dirname, 'globecore_website', 'pages'))
  .filter(f => f.endsWith('.html'));

// Get ALL src URLs from pages that have valid content
const allUrls = new Set();

pages.forEach(page => {
  const content = fs.readFileSync(path.join(__dirname, 'globecore_website', 'pages', page), 'utf8');

  // Only from valid pages
  if (!content.includes('GlobeCore') && !content.includes('GlobeCoRe')) return;
  if (content.includes('Robot Challenge') || content.includes('403 Forbidden')) return;

  // Get all src attributes
  const srcMatches = content.match(/src="([^"]+)"/gi) || [];
  srcMatches.forEach(m => {
    const match = m.match(/src="([^"]+)"/);
    if (match) allUrls.add(match[1]);
  });

  // Get all srcset URLs
  const srcsetMatches = content.match(/srcset="([^"]+)"/gi) || [];
  srcsetMatches.forEach(m => {
    const match = m.match(/srcset="([^"]+)"/);
    if (match) {
      match[1].split(',').forEach(u => {
        const url = u.trim().split(/\s+/)[0];
        if (url) allUrls.add(url);
      });
    }
  });
});

// Filter to only globecoreinc images
const imageUrls = Array.from(allUrls).filter(url => {
  if (url.startsWith('data:')) return false;
  if (url.includes('cloudfront')) return false;
  if (url.includes('gravatar')) return false;
  if (url.includes('google') || url.includes('facebook') || url.includes('stripe')) return false;
  return url.includes('globecoreinc') || url.includes('/wp-content/') || url.includes('/wp-content/uploads/');
});

console.log(`  Found ${imageUrls.length} image URLs`);

// Download images
console.log('\n[2/2] Downloading images...');

let downloaded = 0;
let skipped = 0;

imageUrls.forEach(url => {
  let fullUrl = url;
  if (url.startsWith('/')) fullUrl = BASE_URL + url;
  if (!fullUrl.startsWith('http')) fullUrl = 'https://' + fullUrl;

  const cleanUrl = fullUrl.split('?')[0];
  const fileName = path.basename(cleanUrl);

  if (!fileName || fileName.length < 3 || fileName.includes('/')) {
    skipped++;
    return;
  }

  const localPath = path.join(OUTPUT_DIR, fileName);

  // Skip if exists with reasonable size
  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
    skipped++;
    return;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0" "${cleanUrl}" -o "${localPath}"`, {
      timeout: 20000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath)) {
      const stats = fs.statSync(localPath);
      if (stats.size > 500) {
        downloaded++;
        process.stdout.write(`\r  Downloaded: ${downloaded}  `);
      } else {
        if (fs.existsSync(localPath)) fs.unlinkSync(localPath);
        skipped++;
      }
    }
  } catch (e) {
    skipped++;
  }
});

console.log('');

// Summary
const totalFiles = fs.readdirSync(OUTPUT_DIR).length;

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nImages downloaded: ${downloaded}`);
console.log(`Skipped (existing): ${skipped}`);
console.log(`Total files: ${totalFiles}`);
console.log(`\nLocation: ${OUTPUT_DIR}`);

// Show sample
const files = fs.readdirSync(OUTPUT_DIR).slice(0, 15);
console.log('\nSample files:');
files.forEach(f => console.log(`  - ${f}`));