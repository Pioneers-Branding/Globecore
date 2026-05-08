const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const BASE_URL = 'https://globecoreinc.com';

async function main() {
  console.log('='.repeat(60));
  console.log('DOWNLOADING WITH CLOUDFLARE BYPASS');
  console.log('='.repeat(60));

  const browser = await chromium.launch({ headless: true });

  const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    viewport: { width: 1920, height: 1080 }
  });

  console.log('\n[1/3] Bypassing Cloudflare...');

  const bypassPage = await context.newPage();
  console.log('  Navigating to homepage...');

  await bypassPage.goto(BASE_URL, { timeout: 0 });

  // Wait for Cloudflare to clear
  console.log('  Waiting for challenge to clear...');
  try {
    await bypassPage.waitForFunction(() => {
      const title = document.title;
      return !title.includes('Cloudflare') && title !== 'Just a moment...';
    }, { timeout: 60000 });
  } catch (e) {
    console.log('  Challenge may still be active, continuing...');
  }

  const cookies = await context.cookies();
  console.log(`  Got ${cookies.length} cookies`);

  // Save homepage
  const homeHtml = await bypassPage.content();
  fs.writeFileSync(path.join(PAGES_DIR, 'index.html'), homeHtml);
  console.log('  Homepage saved');
  await bypassPage.close();

  // Download sub-pages
  console.log('\n[2/3] Downloading sub-pages...');

  const subPages = [
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

  let success = 0;
  for (const page of subPages) {
    const pageObj = await context.newPage();
    process.stdout.write(`  ${page.name}...`);

    try {
      await pageObj.goto(page.url, { timeout: 60000, waitUntil: 'domcontentloaded' });
      await pageObj.waitForTimeout;

      const title = await pageObj.title();
      if (title.includes('403') || title.includes('Cloudflare')) {
        console.log(' blocked');
        await pageObj.close();
        continue;
      }

      const content = await pageObj.content();
      fs.writeFileSync(path.join(PAGES_DIR, page.name), content);
      console.log(' OK');
      success++;
    } catch (e) {
      console.log(` error`);
    }
    await pageObj.close();
  }

  await browser.close();

  console.log('\n[3/3] Results...');
  const pages = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));
  console.log(`  Total pages: ${pages.length}`);

  let valid = 0;
  pages.forEach(p => {
    const content = fs.readFileSync(path.join(PAGES_DIR, p), 'utf8');
    if (content.includes('GlobeCoRe') || content.includes('GlobeCore')) valid++;
  });
  console.log(`  Valid: ${valid}`);
}

main().catch(console.error);