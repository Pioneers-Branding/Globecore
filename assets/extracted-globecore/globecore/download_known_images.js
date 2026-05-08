const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'imageglobe');

if (!fs.existsSync(OUTPUT_DIR)) {
  fs.mkdirSync(OUTPUT_DIR, { recursive: true });
}

console.log('='.repeat(60));
console.log('DOWNLOADING ALL wp-content IMAGES');
console.log('='.repeat(60));

// List of common image URL patterns from the website
const knownImages = [
  // These are from the website's image paths
  '/wp-content/uploads/2020/12/df4262_a39fc5f824f845899d6e4725fad9cae8_mv2.jpg',
  '/wp-content/uploads/2020/12/df4262_a39fc5f824f845899d6e4725fad9cae8_mv2-2-150x150.png',
  '/wp-content/uploads/2020/12/df4262_a39fc5f824f845899d6e4725fad9cae8_mv2-768x168.jpg',
  '/wp-content/uploads/2020/12/df4262_a39fc5f824f845899d6e4725fad9cae8_mv2-1024x224.jpg',
  '/wp-content/uploads/2020/12/df4262_a39fc5f824f845899d6e4725fad9cae8_mv2-1536x335.jpg',
  '/wp-content/uploads/2025/08/portrait-diverse-creative-team.webp',
  '/wp-content/uploads/2025/08/portrait-diverse-creative-team-300x200.webp',
  '/wp-content/uploads/2024/12/screen_shot_2024-12-02_at_6.21.43_pm-removebg-preview.png',
  '/wp-content/uploads/2024/11/screenshot-2026-03-18-131906-2.png',
  '/wp-content/uploads/2024/11/screenshot-2026-03-18-132838-2.png',
  '/wp-content/uploads/2024/05/header-update-5-14-24.jpg',
  '/wp-content/uploads/2024/05/header-update-5-14-24.webp',
  '/wp-content/uploads/2023/03/img_2992.jpg',
  '/wp-content/uploads/2023/03/img_2992-240x300.jpg',
  '/wp-content/uploads/2023/03/img_2992-768x960.jpg',
  '/wp-content/uploads/2023/03/img_2992-819x1024.jpg',
  '/wp-content/uploads/2023/03/img_2992-1229x1536.jpg',
  '/wp-content/uploads/2023/03/img_2992-1638x2048.jpg',
  '/wp-content/uploads/2023/03/img_2992-scaled.jpg',
  '/wp-content/uploads/2023/03/img_2994.jpg',
  '/wp-content/uploads/2023/03/img_2994-240x300.jpg',
  '/wp-content/uploads/2023/03/img_2994-768x960.jpg',
  '/wp-content/uploads/2023/03/img_2994-819x1024.jpg',
  '/wp-content/uploads/2023/03/img_2994-1228x1536.jpg',
  '/wp-content/uploads/2023/03/img_2994-1638x2048.jpg',
  '/wp-content/uploads/2023/03/img_2994-scaled.jpg',
  '/wp-content/uploads/2023/03/img_2989.jpg',
  '/wp-content/uploads/2023/03/img_2989-240x300.jpg',
  '/wp-content/uploads/2023/03/img_2997.jpg',
  '/wp-content/uploads/2023/03/img_2997-240x300.jpg',
  '/wp-content/uploads/2023/03/img_3001_facetune_10-03-2021-13-36-03-scaled.jpg',
  '/wp-content/uploads/2022/11/marriage-counseling.jpg',
  '/wp-content/uploads/2022/11/marriage-counseling-300x211.jpg',
  '/wp-content/uploads/2022/08/image-addiction.jpg',
  '/wp-content/uploads/2022/08/image-depression.jpg',
  '/wp-content/uploads/2022/08/image-developmental-4.jpg',
  '/wp-content/uploads/2022/08/image-finding.jpg',
  '/wp-content/uploads/2022/08/image-globecore-1.jpg',
  '/wp-content/uploads/2022/08/image-lgbtq.jpg',
  '/wp-content/uploads/2022/08/image-purpose.jpg',
  '/wp-content/uploads/2022/08/image-relationship.jpg',
  '/wp-content/uploads/2022/08/image-trauma.png',
  '/wp-content/uploads/2022/07/image-fertility.jpg',
  '/wp-content/uploads/2022/04/cultural-img-1.jpg',
  '/wp-content/uploads/2021/12/25.jpg',
  '/wp-content/uploads/2021/12/26.jpg',
  '/wp-content/uploads/2021/12/dev-eval.jpg',
  '/wp-content/uploads/2021/12/dev-eval-300x263.jpg',
  '/wp-content/uploads/2021/12/dev-eval-768x672.jpg',
  '/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2.jpg',
  '/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2-300x200.jpg',
  '/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2-1024x683.jpg',
  '/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2-1536x1024.jpg',
  '/wp-content/uploads/2020/10/maria-elizabeth-johnson-md.png',
  '/wp-content/uploads/2020/10/maria-elizabeth-johnson-md-240x300.png',
  '/wp-content/uploads/2020/10/maria-elizabeth-johnson-md-768x960.png',
  '/wp-content/uploads/2020/10/maria-elizabeth-johnson-md-819x1024.png',
  '/wp-content/uploads/2020/10/maria-elizabeth-johnson-md-1229x1536.png',
  '/wp-content/uploads/2020/07/1.png',
  '/wp-content/uploads/2020/07/1-1.png',
  '/wp-content/uploads/2020/07/1-1-300x222.png',
  '/wp-content/uploads/2020/07/1-248x300.png',
  '/wp-content/uploads/2020/07/2.png',
  '/wp-content/uploads/2020/07/2-1.png',
  '/wp-content/uploads/2020/07/2-1-300x222.png',
  '/wp-content/uploads/2020/07/2-248x300.png',
  '/wp-content/uploads/2020/07/3.png',
  '/wp-content/uploads/2020/07/3-300x222.png',
  '/wp-content/uploads/2020/07/copy-of-header-1.png',
  '/wp-content/uploads/2020/07/frame-134.png',
  '/wp-content/uploads/2020/07/frame-134-300x52.png',
  '/wp-content/uploads/2020/07/frame-134-768x133.png',
  '/wp-content/uploads/2020/07/frame-134-1024x178.png',
  '/wp-content/uploads/2020/07/frame-134-1536x267.png',
  '/wp-content/uploads/2019/09/is-adhd-a-disability.png',
];

console.log('\nDownloading ' + knownImages.length + ' known images...');

let downloaded = 0;
let skipped = 0;
let failed = 0;

knownImages.forEach((imgPath, i) => {
  const fullUrl = BASE_URL + imgPath;
  const fileName = path.basename(imgPath);
  const localPath = path.join(OUTPUT_DIR, fileName);

  // Skip if exists
  if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
    skipped++;
    return;
  }

  try {
    execSync(`curl -sL -A "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36" "${fullUrl}" -o "${localPath}"`, {
      timeout: 15000,
      stdio: 'pipe'
    });

    if (fs.existsSync(localPath)) {
      const stats = fs.statSync(localPath);
      if (stats.size > 500) {
        // Verify it's an image
        const content = fs.readFileSync(localPath, { encoding: 'utf8', flag: 'r' });
        if (!content.startsWith('<!') && !content.startsWith('<htm') && !content.includes('Cloudflare')) {
          downloaded++;
        } else {
          fs.unlinkSync(localPath);
          failed++;
        }
      } else {
        if (fs.existsSync(localPath)) fs.unlinkSync(localPath);
        failed++;
      }
    }
    process.stdout.write(`\r  Progress: ${i + 1}/${knownImages.length} | Downloaded: ${downloaded} | Skipped: ${skipped} | Failed: ${failed}`);
  } catch (e) {
    failed++;
  }
});

console.log('');

// Also copy existing valid images from assets
console.log('\nCopying existing images from assets folder...');
const assetsImages = path.join(__dirname, 'globecore_website', 'assets', 'images');
if (fs.existsSync(assetsImages)) {
  fs.readdirSync(assetsImages).forEach(f => {
    const src = path.join(assetsImages, f);
    const dest = path.join(OUTPUT_DIR, f);
    if (!fs.existsSync(dest)) {
      const stats = fs.statSync(src);
      if (stats.size > 500) {
        fs.copyFileSync(src, dest);
      }
    }
  });
}

// Summary
const totalFiles = fs.readdirSync(OUTPUT_DIR).length;

console.log('\n' + '='.repeat(60));
console.log('COMPLETE!');
console.log('='.repeat(60));
console.log(`\nDownloaded: ${downloaded}`);
console.log(`Skipped (existing): ${skipped}`);
console.log(`Failed: ${failed}`);
console.log(`\nTotal files in imageglobe/: ${totalFiles}`);
console.log(`Location: ${OUTPUT_DIR}`);

// Show some files
console.log('\nSample files:');
fs.readdirSync(OUTPUT_DIR).slice(0, 20).forEach(f => console.log(`  - ${f}`));