const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'imageglobe');

if (!fs.existsSync(OUTPUT_DIR)) fs.mkdirSync(OUTPUT_DIR, { recursive: true });

async function main() {
  console.log('='.repeat(60));
  console.log('DOWNLOADING ALL WEBSITE IMAGES');
  console.log('='.repeat(60));

  const browser = await chromium.launch({ headless: true });
  const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
  });

  console.log('\n[1/2] Getting images from all pages...');
  const page = await context.newPage();
  await page.goto(BASE_URL, { waitUntil: 'domcontentloaded', timeout: 0 });
  await new Promise(r => setTimeout(r, 5000));

  const allImages = new Set();

  const pages = ['/', '/about-us/', '/meet-our-team-new/', '/services-therapist-atlanta/',
                 '/contact/', '/testimonials/', '/telehealth/'];

  for (const pg of pages) {
    process.stdout.write(`  ${pg}`);
    try {
      await page.goto(BASE_URL + pg, { waitUntil: 'domcontentloaded', timeout: 20000 });
      await new Promise(r => setTimeout(r, 1000));

      const imgs = await page.evaluate(() => {
        const set = new Set();
        document.querySelectorAll('img').forEach(img => {
          if (img.src && img.src.includes('wp-content')) set.add(img.src);
          if (img.srcset) {
            img.srcset.split(',').forEach(s => {
              const url = s.trim().split(/\s+/)[0];
              if (url && url.includes('wp-content')) set.add(url);
            });
          }
        });
        return Array.from(set);
      });

      imgs.forEach(img => allImages.add(img));
      console.log(` (${imgs.length})`);
    } catch (e) {
      console.log(' X');
    }
  }

  console.log(`\nTotal unique images: ${allImages.size}`);

  // Download all
  console.log('\n[2/2] Downloading images...');
  const imageUrls = Array.from(allImages);
  let downloaded = 0;
  let skipped = 0;

  for (let i = 0; i < imageUrls.length; i++) {
    const url = imageUrls[i];
    const cleanUrl = url.split('?')[0];
    const fileName = path.basename(cleanUrl);
    const localPath = path.join(OUTPUT_DIR, fileName);

    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
      skipped++;
      continue;
    }

    try {
      execSync(`curl -sL -A "Mozilla/5.0" "${cleanUrl}" -o "${localPath}"`, {
        timeout: 20000,
        stdio: 'pipe'
      });

      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
        downloaded++;
      }
    } catch (e) {}

    process.stdout.write(`\r  ${i + 1}/${imageUrls.length} | Downloaded: ${downloaded} | Skipped: ${skipped}`);
  }

  await browser.close();

  const total = fs.readdirSync(OUTPUT_DIR).filter(f => !f.endsWith('.html')).length;

  console.log('\n');
  console.log('='.repeat(60));
  console.log('COMPLETE!');
  console.log('='.repeat(60));
  console.log(`\nDownloaded: ${downloaded}`);
  console.log(`Skipped: ${skipped}`);
  console.log(`Total images: ${total}`);
  console.log(`Location: ${OUTPUT_DIR}`);

  console.log('\nFirst 20 images:');
  fs.readdirSync(OUTPUT_DIR).filter(f => !f.endsWith('.html')).slice(0, 20).forEach(f => console.log(`  - ${f}`));
}

main().catch(console.error);