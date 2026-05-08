const fs = require('fs');
const path = require('path');

const PAGES_DIR = path.join(__dirname, 'globecore_website', 'pages');
const ASSETS_DIR = path.join(__dirname, 'globecore_website', 'assets');

const imagesDir = path.join(ASSETS_DIR, 'images');
const docsDir = path.join(ASSETS_DIR, 'documents');

// Build file mappings
const localImages = {};
const localDocs = {};

if (fs.existsSync(imagesDir)) {
  fs.readdirSync(imagesDir).forEach(file => {
    localImages[file.toLowerCase()] = `assets/images/${file}`;
  });
}

if (fs.existsSync(docsDir)) {
  fs.readdirSync(docsDir).forEach(file => {
    localDocs[file.toLowerCase()] = `assets/documents/${file}`;
  });
}

function getLocalAsset(url) {
  if (!url || !url.includes('globecoreinc.com')) return url;

  // Match wp-content paths
  const match = url.match(/globecoreinc\.com(\/wp-content\/[^\s"']+)/);
  if (!match) return url;

  const assetPath = match[1];
  const fileName = path.basename(assetPath).split('?')[0];
  const lowerFile = fileName.toLowerCase();

  if (/\.(jpg|jpeg|png|gif|webp|svg|ico)$/i.test(fileName)) {
    return localImages[lowerFile] || `assets/images/${fileName}`;
  }
  if (/\.pdf$/i.test(fileName)) {
    return localDocs[lowerFile] || `assets/documents/${fileName}`;
  }
  return url;
}

function fixHtmlContent(content) {
  let fixed = content;

  // Fix src attributes
  fixed = fixed.replace(/src=["']([^"']+)["']/gi, (match, url) => {
    if (url.includes('globecoreinc.com')) {
      const local = getLocalAsset(url);
      return local !== url ? `src="${local}"` : match;
    }
    return match;
  });

  // Fix srcset attributes
  fixed = fixed.replace(/srcset=["']([^"']+)["']/gi, (match, srcset) => {
    const fixedSrcset = srcset.replace(/(https?:\/\/globecoreinc\.com[^\s,]+)/g, url => {
      const local = getLocalAsset(url);
      return local !== url ? local : url;
    });
    return `srcset="${fixedSrcset}"`;
  });

  // Fix data-src (lazy loading)
  fixed = fixed.replace(/data-src=["']([^"']+)["']/gi, (match, url) => {
    if (url.includes('globecoreinc.com')) {
      const local = getLocalAsset(url);
      if (local !== url) {
        return `data-src="${local}"`;
      }
    }
    return match;
  });

  // Fix style background images
  fixed = fixed.replace(/url\(['"]([^'"]*globecoreinc[^'"]*)['"]\)/gi, (match, url) => {
    const local = getLocalAsset(url);
    return local !== url ? `url('${local}')` : match;
  });

  return fixed;
}

function fixFileNameReferences() {
  if (!fs.existsSync(PAGES_DIR)) {
    console.log('Pages directory not found');
    return;
  }

  const files = fs.readdirSync(PAGES_DIR).filter(f => f.endsWith('.html'));
  console.log(`\nFixing paths in ${files.length} HTML files...\n`);

  files.forEach((file, index) => {
    const filePath = path.join(PAGES_DIR, file);
    let content = fs.readFileSync(filePath, 'utf8');
    const fixedContent = fixHtmlContent(content);
    fs.writeFileSync(filePath, fixedContent);
    process.stdout.write(`\rFixed: ${index + 1}/${files.length}`);
  });

  console.log('\n\nAll paths fixed!');
}

fixFileNameReferences();