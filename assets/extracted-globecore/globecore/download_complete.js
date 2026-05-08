const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const CSS_DIR = path.join(OUTPUT_DIR, 'assets', 'css');
const JS_DIR = path.join(OUTPUT_DIR, 'assets', 'js');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');
const BASE_URL = 'https://globecoreinc.com';

async function main() {
  console.log('='.repeat(60));
  console.log('COMPLETE WEBSITE DOWNLOAD WITH FULL ASSETS');
  console.log('='.repeat(60));

  const browser = await chromium.launch({ headless: true });
  const context = await browser.newContext({
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    viewport: { width: 1920, height: 1080 }
  });

  // Get clearance cookies
  console.log('\n[1/6] Getting Cloudflare clearance...');
  const tempPage = await context.newPage();
  await tempPage.goto(BASE_URL, { waitUntil: 'networkidle', timeout: 30000 });
  const cookies = await context.cookies(BASE_URL);
  console.log(`  Got ${cookies.length} cookies`);

  // Extract cookies for curl
  const cookieString = cookies.map(c => `${c.name}=${c.value}`).join('; ');
  await tempPage.close();

  // Download pages using Playwright (for JavaScript-rendered content)
  console.log('\n[2/6] Downloading pages with Playwright...');

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

  for (const page of pages) {
    const outputPath = path.join(PAGES_DIR, page.name);
    const pageObj = await context.newPage();
    try {
      await pageObj.goto(page.url, { waitUntil: 'networkidle', timeout: 60000 });
      const content = await pageObj.content();
      fs.writeFileSync(outputPath, content);
      process.stdout.write('.');
    } catch (e) {
      process.stdout.write('X');
    }
    await pageObj.close();
  }

  console.log('');

  // Extract all CSS/JS URLs from downloaded pages
  console.log('\n[3/6] Extracting asset URLs...');

  const cssUrls = new Set();
  const jsUrls = new Set();
  const imgUrls = new Set();

  pages.forEach(p => {
    const content = fs.readFileSync(path.join(PAGES_DIR, p.name), 'utf8');

    // CSS links - use safe regex
    const linkMatches = content.match(/href="([^"]+\.css[^"]*)"/gi) || [];
    linkMatches.forEach(m => {
      const match = m.match(/href="([^"]+)"/);
      if (match) cssUrls.add(match[1]);
    });

    // JS scripts - use safe regex
    const scriptMatches = content.match(/src="([^"]+\.js[^"]*)"/gi) || [];
    scriptMatches.forEach(m => {
      const match = m.match(/src="([^"]+)"/);
      if (match) jsUrls.add(match[1]);
    });

    // Images - use safe regex
    const imgMatches = content.match(/src="([^"]+)"/gi) || [];
    imgMatches.forEach(m => {
      const match = m.match(/src="([^"]+)"/);
      if (match) {
        const url = match[1];
        if (/\.(jpg|jpeg|png|gif|webp|svg)(\?|$)/i.test(url) || url.includes('/wp-content/')) {
          imgUrls.add(url);
        }
      }
    });
  });

  console.log(`  Found: ${cssUrls.size} CSS, ${jsUrls.size} JS, ${imgUrls.size} images`);

  // Download CSS with cookies
  console.log('\n[4/6] Downloading CSS files...');

  let cssDownloaded = 0;
  for (const cssUrl of cssUrls) {
    if (cssUrl.includes('googleapis') || cssUrl.includes('gstatic')) continue;

    let fullUrl = cssUrl.startsWith('/') ? BASE_URL + cssUrl : cssUrl;
    if (!fullUrl.startsWith('http')) fullUrl = 'https://' + fullUrl;

    const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
    const localPath = path.join(CSS_DIR, fileName);

    if (fs.existsSync(localPath)) continue;

    try {
      execSync(`curl -sL -A "Mozilla/5.0" -H "Cookie: ${cookieString}" -H "Referer: ${BASE_URL}/" "${fullUrl}" -o "${localPath}"`, {
        timeout: 20000,
        stdio: 'pipe'
      });

      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
        const content = fs.readFileSync(localPath, 'utf8');
        if (!content.includes('<!DOCTYPE') && !content.includes('<html')) {
          cssDownloaded++;
        } else {
          fs.unlinkSync(localPath);
        }
      }
    } catch (e) {}
  }

  console.log(`  Downloaded: ${cssDownloaded} CSS files`);

  // Download JS with cookies
  console.log('\n[5/6] Downloading JS files...');

  let jsDownloaded = 0;
  for (const jsUrl of jsUrls) {
    if (jsUrl.includes('google') || jsUrl.includes('facebook') || jsUrl.includes('stripe')) continue;

    let fullUrl = jsUrl.startsWith('/') ? BASE_URL + jsUrl : jsUrl;
    if (!fullUrl.startsWith('http')) fullUrl = 'https://' + fullUrl;

    const fileName = path.basename(fullUrl.split('?')[0]).toLowerCase();
    const localPath = path.join(JS_DIR, fileName);

    if (fs.existsSync(localPath)) continue;

    try {
      execSync(`curl -sL -A "Mozilla/5.0" -H "Cookie: ${cookieString}" -H "Referer: ${BASE_URL}/" "${fullUrl}" -o "${localPath}"`, {
        timeout: 20000,
        stdio: 'pipe'
      });

      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
        const content = fs.readFileSync(localPath, 'utf8');
        if (!content.includes('<!DOCTYPE') && !content.includes('<html')) {
          jsDownloaded++;
        } else {
          fs.unlinkSync(localPath);
        }
      }
    } catch (e) {}
  }

  console.log(`  Downloaded: ${jsDownloaded} JS files`);

  // Download images
  console.log('\n[6/6] Downloading images...');

  let imgDownloaded = 0;
  for (const imgUrl of imgUrls) {
    if (imgUrl.startsWith('data:') || imgUrl.includes('gravatar')) continue;

    let fullUrl = imgUrl.startsWith('/') ? BASE_URL + imgUrl : imgUrl;
    if (!fullUrl.startsWith('http')) fullUrl = 'https://' + fullUrl;

    const cleanUrl = fullUrl.split('?')[0];
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    const localPath = path.join(IMAGES_DIR, fileName);

    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) continue;

    try {
      execSync(`curl -sL -A "Mozilla/5.0" -H "Cookie: ${cookieString}" "${cleanUrl}" -o "${localPath}"`, {
        timeout: 15000,
        stdio: 'pipe'
      });

      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
        imgDownloaded++;
      }
    } catch (e) {}
  }

  console.log(`  Downloaded: ${imgDownloaded} images`);

  await browser.close();

  // Summary
  console.log('\n' + '='.repeat(60));
  console.log('COMPLETE!');
  console.log('='.repeat(60));
  console.log(`\nFiles:`);
  console.log(`  - Pages: ${fs.readdirSync(PAGES_DIR).length}`);
  console.log(`  - CSS: ${fs.readdirSync(CSS_DIR).length}`);
  console.log(`  - JS: ${fs.readdirSync(JS_DIR).length}`);
  console.log(`  - Images: ${fs.readdirSync(IMAGES_DIR).length}`);
}

main().catch(console.error);