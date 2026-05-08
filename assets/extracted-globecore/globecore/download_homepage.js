const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

const OUTPUT_DIR = path.join(__dirname, 'globecore_website');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function downloadHomepage() {
  console.log('Launching browser for homepage...');
  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--disable-dev-shm-usage']
  });

  const page = await browser.newPage();
  await page.setViewport({ width: 1920, height: 1080 });

  // Multiple attempts
  for (let attempt = 1; attempt <= 3; attempt++) {
    console.log(`Attempt ${attempt}...`);
    try {
      await page.goto('https://globecoreinc.com/', {
        waitUntil: 'domcontentloaded',
        timeout: 45000
      });
      await sleep;

      const content = await page.content();
      const title = await page.title();

      if (!title.includes('403') && !title.includes('Robot') && content.length > 10000) {
        fs.writeFileSync(path.join(OUTPUT_DIR, 'index.html'), content);
        console.log(`Homepage saved (${content.length} bytes)`);
        await browser.close();
        return true;
      }
      console.log(`  Title: ${title}, Length: ${content.length}`);
    } catch (e) {
      console.log(`  Error: ${e.message}`);
    }
    await sleep;
  }

  await browser.close();
  return false;
}

downloadHomepage()
  .then(success => {
    if (!success) {
      console.log('\nCould not download homepage directly.');
      console.log('Please open https://globecoreinc.com/ in your browser,');
      console.log('wait for it to load completely, then save it as index.html in the website folder.');
    }
  })
  .catch(console.error);