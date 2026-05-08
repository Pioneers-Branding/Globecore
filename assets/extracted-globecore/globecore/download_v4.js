const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const BASE_URL = 'https://globecoreinc.com';

async function main() {
  console.log('='.repeat(60));
  console.log('CLOUDFLARE BYPASS - EXTENDED WAIT');
  console.log('='.repeat(60));

  const browser = await chromium.launch({
    headless: true,
    args: [
      '--disable-blink-features=AutomationControlled',
      '--disable-infobars'
    ]
  });

  // Override webdriver property
  const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    viewport: { width: 1920, height: 1080 }
  });

  const page = await context.newPage();

  // Remove webdriver flag
  await page.addInitScript(() => {
    Object.defineProperty(navigator, 'webdriver', { get: () => false });
  });

  console.log('\n[1/3] Clearing Cloudflare...');

  await page.goto(BASE_URL, { timeout: 0 });
  console.log('  Loaded, waiting for Cloudflare...');

  // Wait for Cloudflare challenge to complete (checking for specific elements)
  try {
    await page.waitForFunction(() => {
      const title = document.title;
      const body = document.body.innerText;
      // Check if we're past the challenge
      return !title.includes('Just a moment') &&
             !title.includes('Cloudflare') &&
             !body.includes('Checking your browser');
    }, { timeout: 90000 });
    console.log('  Challenge cleared!');
  } catch (e) {
    console.log('  Challenge still active, trying anyway...');
  }

  // Wait more for page to fully render
  await page.waitForTimeout;

  // Get cookies from current context
  const cookies = await context.cookies();
  console.log(`  Cookies: ${cookies.length}`);

  // Save homepage
  const homeHtml = await page.content();
  fs.writeFileSync(path.join(PAGES_DIR, 'index.html'), homeHtml);
  console.log('  Homepage saved');

  // Download sub-pages by navigating within same page
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
  for (const pg of subPages) {
    process.stdout.write(`  ${pg.name}...`);

    try {
      await page.goto(pg.url, { timeout: 60000, waitUntil: 'networkidle' });

      const title = await page.title();
      if (title.includes('403') || title.includes('Cloudflare')) {
        console.log(' blocked');
        continue;
      }

      const content = await page.content();
      fs.writeFileSync(path.join(PAGES_DIR, pg.name), content);
      console.log(' OK');
      success++;
    } catch (e) {
      console.log(` error: ${e.message.substring(0, 30)}`);
    }
  }

  await browser.close();

  console.log('\n[3/3] Results...');
  console.log(`  Success: ${success}/${subPages.length}`);
}

main().catch(console.error);