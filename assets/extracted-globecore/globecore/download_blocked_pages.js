const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function downloadPage(url, savePath) {
  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--disable-dev-shm-usage']
  });

  const page = await browser.newPage();
  await page.setViewport({ width: 1920, height: 1080 });

  // Try multiple times
  for (let attempt = 1; attempt <= 3; attempt++) {
    try {
      await page.goto(url, {
        waitUntil: ['networkidle2', 'domcontentloaded'],
        timeout: 90000
      });
      await sleep;

      const content = await page.content();
      const title = await page.title();

      // Check if valid page
      if (title && !title.includes('403') && !title.includes('Robot') && !title.includes('Challenge') &&
          content.includes('GlobeCore') || content.length > 50000) {
        fs.writeFileSync(savePath, content);
        await browser.close();
        return true;
      }
    } catch (e) {}

    await sleep;
  }

  await browser.close();
  return false;
}

async function main() {
  // Pages that need re-downloading
  const blockedPages = [
    { path: '/about-us/', name: 'about-us.html' },
    { path: '/career-opportunities/', name: 'career-opportunities.html' },
    { path: '/meet-our-team-new/', name: 'meet-our-team-new.html' },
    { path: '/our-safe-supportive-space/', name: 'our-safe-supportive-space.html' },
    { path: '/philosophy-core-values/', name: 'philosophy-core-values.html' },
    { path: '/services-consultation-supervision.html', name: 'services-consultation-supervision.html' },
    { path: '/services/psychological-evaluation/', name: 'services-psychological-evaluation.html' },
    { path: '/services/therapist-atlanta/', name: 'services-therapist-atlanta.html' },
    { path: '/staff-page-login/', name: 'staff-page-login.html' },
    { path: '/telehealth/', name: 'telehealth.html' },
    { path: '/testimonials/', name: 'testimonials.html' },
    { path: '/workshops-training', name: 'workshops-training.html' },
  ];

  // First get one valid page to extract image URLs
  console.log('Getting reference page for image URLs...');
  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox']
  });
  const page = await browser.newPage();

  await page.goto('https://globecoreinc.com/contact/', {
    waitUntil: ['networkidle2', 'domcontentloaded'],
    timeout: 60000
  });
  const content = await page.content();

  // Extract all globecoreinc.com image URLs
  const imageUrls = content.match(/https:\/\/globecoreinc\.com[^\s"'<>]+\.(?:jpg|jpeg|png|gif|webp|svg)/gi) || [];
  const uniqueUrls = [...new Set(imageUrls.map(u => u.split('?')[0]))];

  console.log(`Found ${uniqueUrls.length} image URLs from reference page`);

  // Download missing images
  let downloaded = 0;
  for (const url of uniqueUrls) {
    const fileName = url.split('/').pop();
    const localPath = path.join(IMAGES_DIR, fileName.toLowerCase().replace(/\s+/g, '-'));

    if (!fs.existsSync(localPath)) {
      try {
        const response = await page.goto(url, { waitUntil: 'networkidle0', timeout: 20000 });
        if (response && response.ok()) {
          const buffer = await response.buffer();
          if (buffer.length > 500) {
            fs.writeFileSync(localPath, buffer);
            downloaded++;
          }
        }
      } catch (e) {}
    }
  }
  console.log(`Downloaded ${downloaded} additional images`);

  await browser.close();

  // Try to download blocked pages
  console.log('\nTrying to download blocked pages...');

  for (const pageInfo of blockedPages) {
    const url = 'https://globecoreinc.com' + pageInfo.path;
    const savePath = path.join(PAGES_DIR, pageInfo.name);

    console.log(`Downloading: ${pageInfo.name}`);
    const success = await downloadPage(url, savePath);

    if (success) {
      console.log(`  Success!`);
    } else {
      console.log(`  Still blocked by Cloudflare`);
    }

    await sleep;
  }

  // Update image paths in all pages
  console.log('\nUpdating image paths...');

  const imageMap = {};
  if (fs.existsSync(IMAGES_DIR)) {
    fs.readdirSync(IMAGES_DIR).forEach(file => {
      const fullPath = 'https://globecoreinc.com/wp-content/uploads/' + file.replace(/-(\d+)x(\d+)\./, '-$1x$2.');
      imageMap[fullPath.toLowerCase()] = 'assets/images/' + file;
    });
  }

  const files = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));
  files.forEach(file => {
    let content = fs.readFileSync(path.join(PAGES_DIR, file), 'utf8');

    // Replace globecore URLs with local
    content = content.replace(/https:\/\/globecoreinc\.com(\/wp-content\/[^\s"'<>]+\.(?:jpg|jpeg|png|gif|webp|svg))/gi, (match, path) => {
      const url = 'https://globecoreinc.com' + path;
      const key = url.toLowerCase();
      if (imageMap[key]) return imageMap[key];

      // Try direct match
      const fileName = path.split('/').pop();
      const localFile = 'assets/images/' + fileName;
      if (fs.existsSync(path.join(OUTPUT_DIR, localFile))) {
        return localFile;
      }
      return match;
    });

    fs.writeFileSync(path.join(PAGES_DIR, file), content);
  });

  console.log('\nDone!');
}

main().catch(console.error);