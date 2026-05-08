const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const CSS_DIR = path.join(OUTPUT_DIR, 'assets', 'css');
const JS_DIR = path.join(OUTPUT_DIR, 'assets', 'js');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');
const BASE_URL = 'https://globecoreinc.com';

async function main() {
  console.log('='.repeat(60));
  console.log('FAST CLOUDFLARE BYPASS');
  console.log('='.repeat(60));

  const browser = await chromium.launch({ headless: true });
  const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
  });

  console.log('\n[1/4] Getting clearance...');
  const page = await context.newPage();

  // Navigate to homepage first
  await page.goto(BASE_URL, { waitUntil: 'domcontentloaded', timeout: 0 });
  await page.waitForTimeout; // Wait for Cloudflare challenge

  // Check if we're past it
  let attempts = 0;
  while (attempts < 10) {
    const title = await page.title();
    if (!title.includes('Cloudflare') && !title.includes('403') && !title.includes('Just a moment')) {
      console.log('  Cleared!');
      break;
    }
    await page.waitForTimeout;
    attempts++;
  }

  // Now quickly navigate and download each page
  console.log('\n[2/4] Downloading pages...');

  const pages = [
    { url: BASE_URL + '/', name: 'index.html' },
    { url: BASE_URL + '/about-us/', name: 'about-us.html' },
    { url: BASE_URL + '/meet-our-team-new/', name: 'meet-our-team-new.html' },
    { url: BASE_URL + '/services-therapist-atlanta/', name: 'services-therapist-atlanta.html' },
    { url: BASE_URL + '/services-psychological-evaluation/', name: 'services-psychological-evaluation.html' },
    { url: BASE_URL + '/services-consultation-supervision/', name: 'services-consultation-supervision.html' },
    { url: BASE_URL + '/our-safe-supportive-space/', name: 'our-safe-supportive-space.html' },
    { url: BASE_URL + '/philosophy-core-values/', name: 'philosophy-core-values.html' },
    { url: BASE_URL + '/telehealth/', name: 'telehealth.html' },
    { url: BASE_URL + '/testimonials/', name: 'testimonials.html' },
    { url: BASE_URL + '/resources/', name: 'resources.html' },
    { url: BASE_URL + '/career-opportunities/', name: 'career-opportunities.html' },
  ];

  let downloaded = 0;
  for (const pg of pages) {
    process.stdout.write(`  ${pg.name}...`);

    try {
      await page.goto(pg.url, { waitUntil: 'domcontentloaded', timeout: 30000 });
      await page.waitForTimeout(500);

      const content = await page.content();
      const title = await page.title();

      if (title.includes('403') || content.includes('403 Forbidden')) {
        console.log(' 403');
        continue;
      }

      fs.writeFileSync(path.join(PAGES_DIR, pg.name), content);
      console.log(' OK');
      downloaded++;
    } catch (e) {
      console.log(' error');
    }
  }

  // Extract and download CSS from the pages that worked
  console.log('\n[3/4] Extracting assets...');

  const allCss = new Set();
  const allJs = new Set();
  const allImg = new Set();

  pages.forEach(pg => {
    const filePath = path.join(PAGES_DIR, pg.name);
    if (!fs.existsSync(filePath)) return;

    const content = fs.readFileSync(filePath, 'utf8');
    if (!content.includes('GlobeCore')) return;

    // Extract CSS links
    const cssMatches = content.match(/href="([^"]+\.css[^"]*)"/gi) || [];
    cssMatches.forEach(m => {
      const match = m.match(/href="([^"]+)"/);
      if (match) allCss.add(match[1]);
    });

    // Extract JS
    const jsMatches = content.match(/src="([^"]+\.js[^"]*)"/gi) || [];
    jsMatches.forEach(m => {
      const match = m.match(/src="([^"]+)"/);
      if (match) allJs.add(match[1]);
    });

    // Extract images
    const imgMatches = content.match(/src="([^"]+)"/gi) || [];
    imgMatches.forEach(m => {
      const match = m.match(/src="([^"]+)"/);
      if (match && (/\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i.test(match[1]) || match[1].includes('/wp-content/'))) {
        allImg.add(match[1]);
      }
    });
  });

  console.log(`  Found: ${allCss.size} CSS, ${allJs.size} JS, ${allImg.size} images`);

  // Download assets
  console.log('\n[4/4] Downloading assets...');

  let cssD = 0, jsD = 0, imgD = 0;

  for (const css of allCss) {
    if (css.includes('google')) continue;
    let fullUrl = css.startsWith('/') ? BASE_URL + css : css;
    const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
    const localPath = path.join(CSS_DIR, fileName);
    if (fs.existsSync(localPath)) continue;

    try {
      execSync(`curl -sL -A "Mozilla/5.0" "${fullUrl}" -o "${localPath}"`, { timeout: 15000, stdio: 'pipe' });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
        const content = fs.readFileSync(localPath, 'utf8');
        if (!content.includes('<!DOCTYPE') && !content.includes('<html')) cssD++;
        else fs.unlinkSync(localPath);
      }
    } catch (e) {}
  }

  for (const js of allJs) {
    if (js.includes('google') || js.includes('facebook')) continue;
    let fullUrl = js.startsWith('/') ? BASE_URL + js : js;
    const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
    const localPath = path.join(JS_DIR, fileName);
    if (fs.existsSync(localPath)) continue;

    try {
      execSync(`curl -sL -A "Mozilla/5.0" "${fullUrl}" -o "${localPath}"`, { timeout: 15000, stdio: 'pipe' });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
        const content = fs.readFileSync(localPath, 'utf8');
        if (!content.includes('<!DOCTYPE') && !content.includes('<html')) jsD++;
        else fs.unlinkSync(localPath);
      }
    } catch (e) {}
  }

  for (const img of allImg) {
    if (img.startsWith('data:') || img.includes('gravatar')) continue;
    let fullUrl = img.startsWith('/') ? BASE_URL + img : img;
    const cleanUrl = fullUrl.split('?')[0];
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    const localPath = path.join(IMAGES_DIR, fileName);
    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) continue;

    try {
      execSync(`curl -sL -A "Mozilla/5.0" "${cleanUrl}" -o "${localPath}"`, { timeout: 15000, stdio: 'pipe' });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) imgD++;
    } catch (e) {}
  }

  await browser.close();

  console.log('\n' + '='.repeat(60));
  console.log('COMPLETE!');
  console.log('='.repeat(60));
  console.log(`\nPages downloaded: ${downloaded}/${pages.length}`);
  console.log(`CSS: ${cssD}, JS: ${jsD}, Images: ${imgD}`);
}

const { execSync } = require('child_process');
main().catch(console.error);