const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function downloadWithRetry(url, savePath, retries = 5) {
  const browser = await puppeteer.launch({
    headless: 'new',
    args: [
      '--no-sandbox',
      '--disable-setuid-sandbox',
      '--disable-dev-shm-usage',
      '--disable-blink-features=AutomationControlled'
    ]
  });

  const page = await browser.newPage();
  await page.setExtraHTTPHeaders({
    'Accept-Language': 'en-US,en;q=0.9',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8'
  });

  // Block detection
  await page.evaluateOnNewDocument(() => {
    Object.defineProperty(navigator, 'webdriver', { get: () => false });
  });

  for (let attempt = 1; attempt <= retries; attempt++) {
    console.log(`  Attempt ${attempt}/${retries}...`);
    try {
      await page.goto(url, {
        waitUntil: 'domcontentloaded',
        timeout: 120000
      });

      // Wait for any JS to complete
      await page.waitForTimeout;

      const content = await page.content();
      const title = await page.title();

      // Check if valid
      if (title && !title.includes('403') && !title.includes('Robot') && !title.includes('Challenge') &&
          (content.includes('GlobeCore') || content.includes('GlobeCoRe'))) {
        fs.writeFileSync(savePath, content);
        await browser.close();
        return true;
      }

      // If blocked, try waiting longer
      if (attempt < retries) {
        await sleep;
      }
    } catch (e) {
      console.log(`  Error: ${e.message.substring(0, 50)}`);
      if (attempt < retries) await sleep;
    }
  }

  await browser.close();
  return false;
}

async function main() {
  const blockedPages = [
    '/about-us/',
    '/career-opportunities/',
    '/meet-our-team-new/',
    '/philosophy-core-values/',
    '/services/psychological-evaluation/',
    '/telehealth/',
    '/testimonials/',
  ];

  console.log('Attempting to download blocked pages...\n');

  for (const pagePath of blockedPages) {
    const pageName = pagePath.replace(/\//g, '-').replace(/^-/, '') + '.html';
    const savePath = path.join(PAGES_DIR, pageName);
    const url = 'https://globecoreinc.com' + pagePath;

    console.log(`Downloading: ${pagePath}`);

    // Check if already valid
    if (fs.existsSync(savePath)) {
      const content = fs.readFileSync(savePath, 'utf8');
      if (content.includes('GlobeCore') || content.includes('GlobeCoRe')) {
        console.log('  Already valid, skipping');
        continue;
      }
    }

    const success = await downloadWithRetry(url, savePath);

    if (success) {
      console.log('  SUCCESS!');
    } else {
      console.log('  FAILED - Cloudflare protection active');
    }

    await sleep;
  }

  console.log('\nDone!');
}

main().catch(console.error);