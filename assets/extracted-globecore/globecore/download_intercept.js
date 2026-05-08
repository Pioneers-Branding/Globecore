const puppeteer = require('puppeteer-extra');
const stealth = require('puppeteer-extra-plugin-stealth')();
const fs = require('fs');
const path = require('path');

puppeteer.use(stealth);

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');
const PAGES_DIR = path.join(OUTPUT_DIR, 'pages');
const CSS_DIR = path.join(OUTPUT_DIR, 'assets', 'css');
const JS_DIR = path.join(OUTPUT_DIR, 'assets', 'js');
const IMAGES_DIR = path.join(OUTPUT_DIR, 'assets', 'images');
const BASE_URL = 'https://globecoreinc.com';

async function main() {
  console.log('='.repeat(60));
  console.log('DOWNLOAD WITH INTERCEPTED RESOURCES');
  console.log('='.repeat(60));

  const browser = await puppeteer.launch({
    headless: true,
    args: ['--no-sandbox', '--disable-setuid-sandbox']
  });

  const page = await browser.newPage();

  console.log('\n[1/4] Getting clearance...');
  await page.setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36');

  await page.goto(BASE_URL, { waitUntil: 'networkidle2', timeout: 60000 });
  await new Promise(r => setTimeout(r, 3000));

  const title = await page.title();
  console.log(`  Title: ${title}`);

  // Intercept ALL network requests to capture CSS/JS
  console.log('\n[2/4] Setting up interception...');

  const capturedResources = { css: [], js: [], images: [] };

  await page.setRequestInterception(true);
  page.on('request', request => {
    const url = request.url();
    const type = request.resourceType();

    // Capture CSS
    if (type === 'stylesheet' && url.includes('wp-content') && url.includes('.css')) {
      capturedResources.css.push(url);
    }
    // Capture JS
    if (type === 'script' && url.includes('wp-content') && url.includes('.js')) {
      capturedResources.js.push(url);
    }
    // Capture images
    if ((type === 'image' || type === 'img') && url.includes('wp-content')) {
      capturedResources.images.push(url);
    }

    request.continue();
  });

  // Visit pages to capture all resources
  console.log('  Visiting pages to capture resources...');

  const pages = [
    BASE_URL + '/',
    BASE_URL + '/about-us/',
    BASE_URL + '/meet-our-team-new/',
    BASE_URL + '/services-therapist-atlanta/',
    BASE_URL + '/contact/',
    BASE_URL + '/blog/',
    BASE_URL + '/testimonials/',
    BASE_URL + '/resources/',
  ];

  for (const url of pages) {
    process.stdout.write('.');
    try {
      await page.goto(url, { waitUntil: 'domcontentloaded', timeout: 15000 });
      await new Promise(r => setTimeout(r, 500));
    } catch (e) {}
  }

  console.log('\n');
  console.log(`  Captured: ${capturedResources.css.length} CSS, ${capturedResources.js.length} JS, ${capturedResources.images.length} images`);

  // Now save the current page content
  console.log('\n[3/4] Saving page content...');

  for (const url of pages) {
    const name = url.replace(BASE_URL, '').replace(/\//g, '-') || 'index';
    const filePath = path.join(PAGES_DIR, name.replace(/^-/, '') + '.html');

    try {
      const content = await page.content();
      fs.writeFileSync(filePath, content);
    } catch (e) {}
  }

  // Download captured resources
  console.log('\n[4/4] Downloading resources...');

  const { execSync } = require('child_process');

  // Download CSS
  let cssD = 0;
  for (const cssUrl of capturedResources.css) {
    const fileName = path.basename(cssUrl.split('?')[0]).toLowerCase();
    const localPath = path.join(CSS_DIR, fileName);
    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
      cssD++;
      continue;
    }

    try {
      execSync(`curl -sL -A "Mozilla/5.0" -H "Referer: ${BASE_URL}/" "${cssUrl}" -o "${localPath}"`, {
        timeout: 20000,
        stdio: 'pipe'
      });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 100) {
        const content = fs.readFileSync(localPath, 'utf8');
        if (!content.includes('<!DOCTYPE') && !content.includes('<html')) {
          cssD++;
          process.stdout.write('C');
        } else {
          fs.unlinkSync(localPath);
        }
      }
    } catch (e) {}
  }

  // Download JS
  let jsD = 0;
  for (const jsUrl of capturedResources.js) {
    if (jsUrl.includes('google') || jsUrl.includes('facebook')) continue;

    const fileName = path.basename(jsUrl.split('?')[0]).toLowerCase();
    const localPath = path.join(JS_DIR, fileName);
    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
      jsD++;
      continue;
    }

    try {
      execSync(`curl -sL -A "Mozilla/5.0" -H "Referer: ${BASE_URL}/" "${jsUrl}" -o "${localPath}"`, {
        timeout: 20000,
        stdio: 'pipe'
      });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 50) {
        const content = fs.readFileSync(localPath, 'utf8');
        if (!content.includes('<!DOCTYPE') && !content.includes('<html')) {
          jsD++;
          process.stdout.write('J');
        } else {
          fs.unlinkSync(localPath);
        }
      }
    } catch (e) {}
  }

  // Download images
  let imgD = 0;
  for (const imgUrl of capturedResources.images) {
    const cleanUrl = imgUrl.split('?')[0];
    const fileName = path.basename(cleanUrl).toLowerCase().replace(/\s+/g, '-');
    const localPath = path.join(IMAGES_DIR, fileName);
    if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
      imgD++;
      continue;
    }

    try {
      execSync(`curl -sL -A "Mozilla/5.0" "${cleanUrl}" -o "${localPath}"`, {
        timeout: 15000,
        stdio: 'pipe'
      });
      if (fs.existsSync(localPath) && fs.statSync(localPath).size > 500) {
        imgD++;
        process.stdout.write('I');
      }
    } catch (e) {}
  }

  await browser.close();

  console.log('\n');
  console.log('='.repeat(60));
  console.log('COMPLETE!');
  console.log('='.repeat(60));
  console.log(`\nCSS: ${cssD}/${capturedResources.css.length}`);
  console.log(`JS: ${jsD}/${capturedResources.js.length}`);
  console.log(`Images: ${imgD}/${capturedResources.images.length}`);

  // Show CSS count
  const cssCount = fs.readdirSync(CSS_DIR).length;
  const jsCount = fs.readdirSync(JS_DIR).length;
  const imgCount = fs.readdirSync(IMAGES_DIR).length;
  console.log(`\nActual files: CSS=${cssCount}, JS=${jsCount}, Images=${imgCount}`);
}

main().catch(console.error);