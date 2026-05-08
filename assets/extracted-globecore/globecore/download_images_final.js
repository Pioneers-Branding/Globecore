const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');

if (!fs.existsSync(IMAGES_DIR)) {
  fs.mkdirSync(IMAGES_DIR, { recursive: true });
}

// Step 1: Re-download all pages to get original image URLs
async function redownloadPages() {
  console.log('=== Re-downloading pages to get original image URLs ===\n');

  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--disable-dev-shm-usage']
  });

  const PAGES = [
    { path: '/about-us/', name: 'about-us.html' },
    { path: '/philosophy-core-values/', name: 'philosophy-core-values.html' },
    { path: '/our-safe-supportive-space/', name: 'our-safe-supportive-space.html' },
    { path: '/career-opportunities/', name: 'career-opportunities.html' },
    { path: '/testimonials/', name: 'testimonials.html' },
    { path: '/meet-our-team-new/', name: 'meet-our-team-new.html' },
    { path: '/services/therapist-atlanta/', name: 'services-therapist-atlanta.html' },
    { path: '/services/psychological-evaluation/', name: 'services-psychological-evaluation.html' },
    { path: '/services/medication-management/', name: 'services-medication-management.html' },
    { path: '/services/consultation-supervision/', name: 'services-consultation-supervision.html' },
    { path: '/telehealth/', name: 'telehealth.html' },
    { path: '/resources/', name: 'resources.html' },
    { path: '/client-portal/', name: 'client-portal.html' },
    { path: '/staff-page-login/', name: 'staff-page-login.html' },
    { path: '/government/', name: 'government.html' },
    { path: '/workshops-training', name: 'workshops-training.html' },
    { path: '/dei-evaluation/', name: 'dei-evaluation.html' },
    { path: '/cultural-immersion/', name: 'cultural-immersion.html' },
    { path: '/blog/', name: 'blog.html' },
    { path: '/faq/', name: 'faq.html' },
    { path: '/rates/', name: 'rates.html' },
    { path: '/contact/', name: 'contact.html' },
    { path: '/quiz/', name: 'quiz.html' },
    { path: '/open-house-gallery/', name: 'open-house-gallery.html' },
    { path: '/privacy-policy/', name: 'privacy-policy.html' },
  ];

  const page = await browser.newPage();

  for (let i = 0; i < PAGES.length; i++) {
    const pageInfo = PAGES[i];
    try {
      await page.goto('https://globecoreinc.com' + pageInfo.path, {
        waitUntil: ['networkidle2', 'domcontentloaded'],
        timeout: 60000
      });
      const content = await page.content();
      fs.writeFileSync(path.join(PAGES_DIR, pageInfo.name), content);
      console.log(`Re-downloaded: ${pageInfo.name}`);
      await new Promise(r => setTimeout(r, 500));
    } catch (e) {
      console.log(`Failed: ${pageInfo.name} - ${e.message}`);
    }
  }

  await browser.close();
  console.log('\nPages re-downloaded!\n');
}

// Step 2: Extract image URLs from fresh HTML
function extractImageUrls() {
  const allUrls = new Set();

  if (!fs.existsSync(PAGES_DIR)) return [];

  const files = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

  files.forEach(file => {
    const content = fs.readFileSync(path.join(PAGES_DIR, file), 'utf8');

    // Find all globecoreinc.com image URLs
    const matches = content.match(/https:\/\/globecoreinc\.com[^\s"'<>]+\.(jpg|jpeg|png|gif|webp|svg)/gi) || [];
    matches.forEach(url => {
      // Clean up - remove query strings
      const cleanUrl = url.split('?')[0].split('#')[0];
      if (cleanUrl.includes('/wp-content/uploads/') || cleanUrl.includes('/wp-content/themes/')) {
        allUrls.add(cleanUrl);
      }
    });

    // Also find relative URLs
    const relativeMatches = content.match(/src=["'](\/[^\s"'<>]+\.(jpg|jpeg|png|gif|webp|svg))/gi) || [];
    relativeMatches.forEach(m => {
      const url = m.match(/src=["'](\/.+)["']/)[1];
      if (url.includes('/wp-content/')) {
        allUrls.add('https://globecoreinc.com' + url.split('?')[0]);
      }
    });
  });

  return Array.from(allUrls);
}

// Step 3: Download images
async function downloadImage(page, imageUrl) {
  const fileName = imageUrl.split('/').pop().split('?')[0];
  const localPath = path.join(IMAGES_DIR, fileName.toLowerCase().replace(/\s+/g, '-'));

  if (fs.existsSync(localPath)) {
    return fileName.toLowerCase().replace(/\s+/g, '-');
  }

  try {
    const response = await page.goto(imageUrl, {
      waitUntil: 'networkidle0',
      timeout: 20000
    });
    if (response && response.ok()) {
      const buffer = await response.buffer();
      if (buffer.length > 500) {
        fs.writeFileSync(localPath, buffer);
        console.log(`  Downloaded: ${fileName}`);
        return fileName.toLowerCase().replace(/\s+/g, '-');
      }
    }
  } catch (e) {
    // Try curl
    try {
      const { execSync } = require('child_process');
      execSync(`curl -sL -A "Mozilla/5.0" "${imageUrl}" -o "${localPath}"`, {
        timeout: 20000,
        stdio: 'pipe'
      });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
        console.log(`  Downloaded (curl): ${fileName}`);
        return fileName.toLowerCase().replace(/\s+/g, '-');
      }
    } catch (e2) {}
  }
  return null;
}

// Step 4: Update HTML to use local paths
function updateHtmlFiles(imageMap) {
  if (!fs.existsSync(PAGES_DIR)) return;

  const files = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));

  files.forEach(file => {
    let content = fs.readFileSync(path.join(PAGES_DIR, file), 'utf8');
    let modified = false;

    // Replace globecoreinc.com image URLs with local paths
    content = content.replace(/https:\/\/globecoreinc\.com(\/wp-content\/[^\s"'<>]+\.(?:jpg|jpeg|png|gif|webp|svg))/gi, (match, pathMatch) => {
      const url = 'https://globecoreinc.com' + pathMatch;
      if (imageMap[url]) {
        modified = true;
        return imageMap[url];
      }
      // Also check without query string
      const baseUrl = url.split('?')[0];
      if (imageMap[baseUrl]) {
        modified = true;
        return imageMap[baseUrl];
      }
      return match;
    });

    // Replace relative URLs with local paths
    content = content.replace(/src=["'](\/wp-content\/[^\s"'<>]+\.(?:jpg|jpeg|png|gif|webp|svg))["']/gi, (match, pathMatch) => {
      const url = 'https://globecoreinc.com' + pathMatch;
      if (imageMap[url]) {
        modified = true;
        return `src="${imageMap[url]}"`;
      }
      return match;
    });

    if (modified) {
      fs.writeFileSync(path.join(PAGES_DIR, file), content);
    }
  });
}

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function main() {
  // Step 1: Re-download pages
  await redownloadPages();

  // Step 2: Extract image URLs
  console.log('=== Extracting image URLs ===\n');
  const imageUrls = extractImageUrls();
  console.log(`Found ${imageUrls.length} image URLs`);
  imageUrls.slice(0, 10).forEach(url => console.log('  ' + url));

  // Step 3: Download images
  console.log('\n=== Downloading images ===\n');

  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--disable-dev-shm-usage']
  });

  const page = await browser.newPage();
  const imageMap = {};
  let downloaded = 0;

  for (let i = 0; i < imageUrls.length; i++) {
    const url = imageUrls[i];
    process.stdout.write(`\r  [${i + 1}/${imageUrls.length}] Downloaded: ${downloaded}  `);

    const localFile = await downloadImage(page, url);
    if (localFile) {
      imageMap[url] = 'assets/images/' + localFile;
      downloaded++;
    }

    await sleep(100);
  }

  await browser.close();
  console.log(`\n\nDownloaded: ${downloaded} images`);

  // Step 4: Update HTML
  console.log('\n=== Updating HTML files with local paths ===\n');
  updateHtmlFiles(imageMap);
  console.log('HTML files updated!');

  console.log('\n=== Complete ===');
}

main().catch(console.error);