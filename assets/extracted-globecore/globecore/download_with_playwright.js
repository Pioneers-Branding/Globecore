const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const BASE_URL = 'https://globecoreinc.com';

async function downloadFullPage(browser, url, outputPath) {
  const page = await browser.newPage();

  try {
    // Capture all console messages
    const consoleLogs = [];
    page.on('console', msg => {
      if (msg.type() === 'error') {
        consoleLogs.push(`[ERROR] ${msg.text()}`);
      }
    });

    // Navigate with networkidle to capture all resources
    await page.goto(url, {
      waitUntil: 'networkidle',
      timeout: 60000
    });

    // Wait a bit more for any lazy-loaded content
    await page.waitForTimeout(2000);

    // Get the fully rendered HTML
    const content = await page.content();

    // Save the HTML
    fs.writeFileSync(outputPath, content);

    return true;
  } catch (e) {
    console.error(`Failed: ${url} - ${e.message}`);
    return false;
  } finally {
    await page.close();
  }
}

async function main() {
  console.log('='.repeat(60));
  console.log('DOWNLOADING WEBSITE WITH FULL DESIGN VIA PLAYWRIGHT');
  console.log('='.repeat(60));

  // Ensure directories exist
  if (!fs.existsSync(PAGES_DIR)) {
    fs.mkdirSync(PAGES_DIR, { recursive: true });
  }

  console.log('\n[1/2] Starting browser...');

  const browser = await chromium.launch({ headless: true });
  const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    viewport: { width: 1920, height: 1080 }
  });

  console.log('\n[2/2] Getting Cloudflare clearance cookie...');

  // First visit homepage to get Cloudflare clearance
  const clearancePage = await context.newPage();
  try {
    await clearancePage.goto(BASE_URL, { waitUntil: 'networkidle', timeout: 30000 });
    console.log('  Cloudflare clearance obtained');
  } catch (e) {
    console.log('  Warning: Clearance may be partial');
  }
  await clearancePage.close();

  // Define pages to download
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

  console.log(`\n[3/3] Downloading ${pages.length} pages with full design...`);

  let success = 0;
  for (const page of pages) {
    const outputPath = path.join(PAGES_DIR, page.name);
    process.stdout.write(`  Downloading ${page.name}...`);

    const pageObj = await context.newPage();
    try {
      await pageObj.goto(page.url, { waitUntil: 'networkidle', timeout: 60000 });
      await pageObj.waitForTimeout(1000);

      const content = await pageObj.content();
      fs.writeFileSync(outputPath, content);
      success++;
      console.log(' OK');
    } catch (e) {
      console.log(` FAILED: ${e.message.substring(0, 50)}`);
    }
    await pageObj.close();
  }

  await browser.close();

  console.log('\n' + '='.repeat(60));
  console.log('COMPLETE!');
  console.log('='.repeat(60));
  console.log(`\nDownloaded: ${success}/${pages.length} pages`);
  console.log(`Location: ${PAGES_DIR}`);
}

main().catch(console.error);