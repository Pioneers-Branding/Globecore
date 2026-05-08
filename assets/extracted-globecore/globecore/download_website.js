const https = require('https');
const http = require('http');
const fs = require('fs');
const path = require('path');
const { URL } = require('url');

// Configuration
const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');

// Pages to download
const PAGES = [
  '/',
  '/about-us/',
  '/philosophy-core-values/',
  '/our-safe-supportive-space/',
  '/career-opportunities/',
  '/testimonials/',
  '/meet-our-team-new/',
  '/services/therapist-atlanta/',
  '/services/psychological-evaluation/',
  '/services/medication-management/',
  '/services/consultation-supervision/',
  '/telehealth/',
  '/resources/',
  '/client-portal/',
  '/staff-page-login/',
  '/government/',
  '/workshops-training',
  '/dei-evaluation/',
  '/consultation-supervision/',
  '/cultural-immersion/',
  '/blog/',
  '/faq/',
  '/rates/',
  '/contact/',
  '/quiz/',
  '/open-house-gallery/',
  '/privacy-policy/',
  '/specialties/addiction/',
  '/specialties/aging-issues/',
  '/specialties/chronic-illness/',
  '/specialties/developmental-intellectual-disabilities/',
  '/specialties/depression-anxiety/',
  '/specialties/fertility-pregnancy-parenting/',
  '/specialties/finding-purpose/',
  '/specialties/finding-the-love-you-deserve/',
  '/specialties/grief-loss/',
  '/specialties/lgbtqi/',
  '/specialties/racial-ethnic-and-religious-stressors/',
  '/specialties/relationship-identity-marriage-issues/',
  '/specialties/trauma/',
  '/specialties/womens-issues/',
  '/specialties/work-related-or-academic-stressors/',
];

// Headers to mimic browser
const BROWSER_HEADERS = {
  'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
  'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
  'Accept-Language': 'en-US,en;q=0.9',
  'Accept-Encoding': 'gzip, deflate, br',
  'Connection': 'keep-alive',
  'Upgrade-Insecure-Requests': '1',
  'Sec-Fetch-Dest': 'document',
  'Sec-Fetch-Mode': 'navigate',
  'Sec-Fetch-Site': 'none',
  'Sec-Fetch-User': '?1',
  'Cache-Control': 'max-age=0',
};

function httpGet(url, headers = {}) {
  return new Promise((resolve, reject) => {
    const urlObj = new URL(url);
    const options = {
      hostname: urlObj.hostname,
      path: urlObj.pathname + urlObj.search,
      method: 'GET',
      headers: { ...BROWSER_HEADERS, ...headers },
    };

    const protocol = urlObj.protocol === 'https:' ? https : http;
    const req = protocol.request(options, (res) => {
      const chunks = [];
      res.on('data', (chunk) => chunks.push(chunk));
      res.on('end', () => {
        const buffer = Buffer.concat(chunks);
        resolve({ statusCode: res.statusCode, headers: res.headers, body: buffer });
      });
    });

    req.on('error', reject);
    req.setTimeout(30000, () => reject(new Error('Request timeout')));
    req.end();
  });
}

async function downloadPage(pagePath) {
  console.log(`Downloading: ${pagePath}`);
  const url = BASE_URL + pagePath;
  const response = await httpGet(url);

  if (response.statusCode === 200) {
    let content = response.body.toString('utf8');
    // Handle if content is gzipped and we need to decompress
    if (response.headers['content-encoding'] === 'gzip') {
      const zlib = require('zlib');
      try {
        content = zlib.gunzipSync(response.body).toString('utf8');
      } catch (e) {
        content = response.body.toString('utf8');
      }
    }
    return content;
  } else {
    console.log(`  Failed with status: ${response.statusCode}`);
    return null;
  }
}

async function downloadAsset(assetUrl, outputPath) {
  try {
    const response = await httpGet(assetUrl);
    if (response.statusCode === 200) {
      const dir = path.dirname(outputPath);
      if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
      }
      fs.writeFileSync(outputPath, response.body);
      console.log(`  Downloaded: ${outputPath}`);
      return true;
    }
  } catch (e) {
    console.log(`  Failed: ${assetUrl} - ${e.message}`);
  }
  return false;
}

function savePage(pagePath, content) {
  let savePath;
  if (pagePath === '/' || pagePath === '') {
    savePath = path.join(OUTPUT_DIR, 'index.html');
  } else {
    savePath = path.join(OUTPUT_DIR, pagePath.replace(/\/$/, '') + '.html');
  }

  const dir = path.dirname(savePath);
  if (!fs.existsSync(dir)) {
    fs.mkdirSync(dir, { recursive: true });
  }

  fs.writeFileSync(savePath, content);
  console.log(`  Saved: ${savePath}`);
}

async function main() {
  // Create output directory
  if (!fs.existsSync(OUTPUT_DIR)) {
    fs.mkdirSync(OUTPUT_DIR, { recursive: true });
  }

  // Download all pages
  console.log('\n=== Downloading Pages ===\n');
  for (const page of PAGES) {
    const content = await downloadPage(page);
    if (content) {
      savePage(page, content);
      // Small delay to be respectful to the server
      await new Promise(r => setTimeout(r, 500));
    }
  }

  console.log('\n=== Download Complete ===');
  console.log(`Pages saved to: ${OUTPUT_DIR}`);
}

main().catch(console.error);