const puppeteer = require('puppeteer-extra');
const stealth = require('puppeteer-extra-plugin-stealth')();
const fs = require('fs');
const path = require('path');

puppeteer.use(stealth);

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const BASE_URL = 'https://globecoreinc.com';

async function main() {
  console.log('='.repeat(60));
  console.log('STEALTH BROWSER DOWNLOAD');
  console.log('='.repeat(60));

  const browser = await puppeteer.launch({
    headless: true,
    args: [
      '--no-sandbox',
      '--disable-setuid-sandbox',
      '--disable-infobars',
      '--disable-blink-features=AutomationControlled'
    ]
  });

  console.log('\n[1/3] Launching stealth browser...');

  const context = browser.defaultBrowserContext();
  const page = await browser.newPage();

  // Stealth settings
  await page.setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36');
  await page.setExtraHTTPHeaders({
    'Accept-Language': 'en-US,en;q=0.9'
  });

  // Navigate to homepage
  console.log('  Going to homepage...');
  await page.goto(BASE_URL, { waitUntil: 'networkidle2', timeout: 60000 });

  // Wait for Cloudflare
  console.log('  Waiting for Cloudflare to clear...');
  await new Promise(r => setTimeout(r, 5000));

  const title = await page.title();
  console.log(`  Page title: ${title}`);

  // Download pages
  console.log('\n[2/3] Downloading pages...');

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

  let success = 0;
  for (const pg of pages) {
    process.stdout.write(`  ${pg.name}...`);

    try {
      await page.goto(pg.url, { waitUntil: 'domcontentloaded', timeout: 30000 });
      await new Promise(r => setTimeout(r, 1000));

      const content = await page.content();
      const pageTitle = await page.title();

      if (pageTitle.includes('Robot') || pageTitle.includes('403') || pageTitle.includes('Cloudflare')) {
        console.log(' blocked');
        continue;
      }

      if (content.includes('GlobeCore') || content.includes('GlobeCoRe')) {
        fs.writeFileSync(path.join(PAGES_DIR, pg.name), content);
        console.log(' OK');
        success++;
      } else {
        console.log(' empty');
      }
    } catch (e) {
      console.log(' error');
    }
  }

  await browser.close();

  // Results
  console.log('\n[3/3] Results...');
  const valid = fs.readdirSync(PAGES_DIR).filter(f => {
    const c = fs.readFileSync(path.join(PAGES_DIR, f), 'utf8');
    return c.includes('GlobeCore') || c.includes('GlobeCoRe');
  }).length;

  console.log(`  Valid pages: ${valid}/${pages.length}`);

  // Extract assets from valid pages
  if (valid > 0) {
    console.log('\n  Extracting CSS/JS/Images from valid pages...');

    const allCss = new Set();
    const allJs = new Set();

    fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html')).forEach(f => {
      const c = fs.readFileSync(path.join(PAGES_DIR, f), 'utf8');
      if (!c.includes('GlobeCore')) return;

      const cssMatches = c.match(/href="([^"]+\.css[^"]*)"/gi) || [];
      cssMatches.forEach(m => {
        const match = m.match(/href="([^"]+)"/);
        if (match && !match[1].includes('google')) allCss.add(match[1]);
      });

      const jsMatches = c.match(/src="([^"]+\.js[^"]*)"/gi) || [];
      jsMatches.forEach(m => {
        const match = m.match(/src="([^"]+)"/);
        if (match && !match[1].includes('google') && !match[1].includes('facebook')) allJs.add(match[1]);
      });
    });

    console.log(`  Found: ${allCss.size} CSS, ${allJs.size} JS files`);
  }
}

main().catch(console.error);