const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');

// Clear and recreate directories
const pagesDir = path.join(OUTPUT_DIR, 'pages');
if (fs.existsSync(pagesDir)) {
  fs.rmSync(pagesDir, { recursive: true });
}
fs.mkdirSync(pagesDir, { recursive: true });

const PAGES = [
  { path: '/', name: 'index.html' },
  { path: '/about-us/', name: 'pages/about-us.html' },
  { path: '/philosophy-core-values/', name: 'pages/philosophy-core-values.html' },
  { path: '/our-safe-supportive-space/', name: 'pages/our-safe-supportive-space.html' },
  { path: '/career-opportunities/', name: 'pages/career-opportunities.html' },
  { path: '/testimonials/', name: 'pages/testimonials.html' },
  { path: '/meet-our-team-new/', name: 'pages/meet-our-team-new.html' },
  { path: '/services/therapist-atlanta/', name: 'pages/services-therapist-atlanta.html' },
  { path: '/services/psychological-evaluation/', name: 'pages/services-psychological-evaluation.html' },
  { path: '/services/medication-management/', name: 'pages/services-medication-management.html' },
  { path: '/services/consultation-supervision/', name: 'pages/services-consultation-supervision.html' },
  { path: '/telehealth/', name: 'pages/telehealth.html' },
  { path: '/resources/', name: 'pages/resources.html' },
  { path: '/client-portal/', name: 'pages/client-portal.html' },
  { path: '/staff-page-login/', name: 'pages/staff-page-login.html' },
  { path: '/government/', name: 'pages/government.html' },
  { path: '/workshops-training', name: 'pages/workshops-training.html' },
  { path: '/dei-evaluation/', name: 'pages/dei-evaluation.html' },
  { path: '/cultural-immersion/', name: 'pages/cultural-immersion.html' },
  { path: '/blog/', name: 'pages/blog.html' },
  { path: '/faq/', name: 'pages/faq.html' },
  { path: '/rates/', name: 'pages/rates.html' },
  { path: '/contact/', name: 'pages/contact.html' },
  { path: '/quiz/', name: 'pages/quiz.html' },
  { path: '/open-house-gallery/', name: 'pages/open-house-gallery.html' },
  { path: '/privacy-policy/', name: 'pages/privacy-policy.html' },
  { path: '/specialties/addiction/', name: 'pages/specialties-addiction.html' },
  { path: '/specialties/aging-issues/', name: 'pages/specialties-aging-issues.html' },
  { path: '/specialties/chronic-illness/', name: 'pages/specialties-chronic-illness.html' },
  { path: '/specialties/developmental-intellectual-disabilities/', name: 'pages/specialties-developmental-intellectual-disabilities.html' },
  { path: '/specialties/depression-anxiety/', name: 'pages/specialties-depression-anxiety.html' },
  { path: '/specialties/fertility-pregnancy-parenting/', name: 'pages/specialties-fertility-pregnancy-parenting.html' },
  { path: '/specialties/finding-purpose/', name: 'pages/specialties-finding-purpose.html' },
  { path: '/specialties/finding-the-love-you-deserve/', name: 'pages/specialties-finding-the-love-you-deserve.html' },
  { path: '/specialties/grief-loss/', name: 'pages/specialties-grief-loss.html' },
  { path: '/specialties/lgbtqi/', name: 'pages/specialties-lgbtqi.html' },
  { path: '/specialties/racial-ethnic-and-religious-stressors/', name: 'pages/specialties-racial-ethnic-and-religious-stressors.html' },
  { path: '/specialties/relationship-identity-marriage-issues/', name: 'pages/specialties-relationship-identity-marriage-issues.html' },
  { path: '/specialties/trauma/', name: 'pages/specialties-trauma.html' },
  { path: '/specialties/womens-issues/', name: 'pages/specialties-womens-issues.html' },
  { path: '/specialties/work-related-or-academic-stressors/', name: 'pages/specialties-work-related-or-academic-stressors.html' },
];

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function downloadPage(pageInfo) {
  const url = BASE_URL + pageInfo.path;
  console.log(`Downloading: ${pageInfo.path}`);

  try {
    // Use new page for each request to avoid cached challenges
    const page = await browser.newPage();

    // Set realistic browser headers
    await page.setExtraHTTPHeaders({
      'Accept-Language': 'en-US,en;q=0.9',
      'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    });

    // Navigate with proper wait conditions
    await page.goto(url, {
      waitUntil: ['networkidle2', 'domcontentloaded'],
      timeout: 60000
    });

    // Wait a bit for any JS to execute
    await sleep;

    // Check if we got a valid page (not 403)
    const title = await page.title();
    const content = await page.content();

    if (title && !title.includes('403') && !title.includes('Robot') && content.length > 5000) {
      const savePath = path.join(OUTPUT_DIR, pageInfo.name);
      const dir = path.dirname(savePath);
      if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
      }
      fs.writeFileSync(savePath, content);
      console.log(`  Saved: ${pageInfo.name} (${content.length} bytes)`);
    } else {
      console.log(`  Failed - Title: ${title}, Length: ${content.length}`);
    }

    await page.close();
    await sleep; // Longer delay between requests

  } catch (error) {
    console.log(`  Error: ${error.message}`);
  }
}

async function main() {
  console.log('Launching browser...');
  browser = await puppeteer.launch({
    headless: 'new',
    args: [
      '--no-sandbox',
      '--disable-setuid-sandbox',
      '--disable-dev-shm-usage',
      '--disable-blink-features=AutomationControlled',
      '--disable-web-security'
    ]
  });

  console.log(`\nDownloading ${PAGES.length} pages...\n`);

  for (let i = 0; i < PAGES.length; i++) {
    console.log(`[${i + 1}/${PAGES.length}]`);
    await downloadPage(PAGES[i]);
  }

  await browser.close();
  console.log('\n=== Complete ===');

  // Summary
  const files = fs.readdirSync(pagesDir).filter(f => f.endsWith('.html'));
  console.log(`Total pages downloaded: ${files.length}`);
}

let browser;
main().catch(console.error);