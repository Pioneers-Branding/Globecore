const fs = require('fs');
const path = require('path');

const PAGES_DIR = path.join(__dirname, 'globecore_website', 'pages');
const ASSETS_DIR = path.join(__dirname, 'globecore_website', 'assets');

// Get list of local images and documents
const imagesDir = path.join(ASSETS_DIR, 'images');
const docsDir = path.join(ASSETS_DIR, 'documents');

const localImages = {};
const localDocs = {};

// Build image mapping from filename to local path
if (fs.existsSync(imagesDir)) {
  fs.readdirSync(imagesDir).forEach(file => {
    localImages[file.toLowerCase()] = `assets/images/${file}`;
  });
}

// Build document mapping
if (fs.existsSync(docsDir)) {
  fs.readdirSync(docsDir).forEach(file => {
    localDocs[file.toLowerCase()] = `assets/documents/${file}`;
  });
}

// URL to local path mapping
const urlToLocalMap = {
  'https://globecoreinc.com/wp-content/uploads/': 'assets/images/',
  'https://globecoreinc.com/wp-content/plugins/': 'assets/plugins/',
  'https://globecoreinc.com/wp-includes/': 'assets/includes/',
  'https://globecoreinc.com/wp-content/themes/': 'assets/themes/',
};

function getLocalAsset(url) {
  if (!url) return url;

  // Skip external URLs
  if (url.startsWith('http') && !url.includes('globecoreinc.com')) {
    return url;
  }

  // Handle globecoreinc.com URLs
  if (url.includes('globecoreinc.com')) {
    // Extract the path part
    const match = url.match(/globecoreinc\.com(\/wp-content\/[^\s"']+)/);
    if (match) {
      const assetPath = match[1];
      const fileName = path.basename(assetPath).split('?')[0].split('#')[0];

      // Check if it's an image
      if (/\.(jpg|jpeg|png|gif|webp|svg|ico)$/i.test(fileName)) {
        const lowerFile = fileName.toLowerCase();
        if (localImages[lowerFile]) {
          return localImages[lowerFile];
        }
        // Try to find by partial match
        for (const [key, value] of Object.entries(localImages)) {
          if (key.includes(fileName.split('.')[0].toLowerCase().substring(0, 10))) {
            return value;
          }
        }
        return `assets/images/${fileName}`;
      }

      // Check if it's a PDF
      if (/\.pdf$/i.test(fileName)) {
        const lowerFile = fileName.toLowerCase();
        if (localDocs[lowerFile]) {
          return localDocs[lowerFile];
        }
        return `assets/documents/${fileName}`;
      }
    }
  }

  return url;
}

function fixHtmlContent(content, pagePath) {
  let fixed = content;

  // Fix image sources (src attributes)
  fixed = fixed.replace(/src=["']([^"']*)["']/gi, (match, url) => {
    const localPath = getLocalAsset(url);
    if (localPath !== url) {
      return `src="${localPath}"`;
    }
    return match;
  });

  // Fix image sources in srcset attributes
  fixed = fixed.replace(/srcset=["']([^"']*)["']/gi, (match, srcset) => {
    const fixedSrcset = srcset.replace(/https?:\/\/globecoreinc\.com([^\s,]+)/g, (urlMatch, assetPath) => {
      const fileName = path.basename(assetPath).split('?')[0];
      // For srcset, just use the base filename
      if (/\.(jpg|jpeg|png|gif|webp)$/i.test(fileName)) {
        const lowerFile = fileName.toLowerCase();
        if (localImages[lowerFile]) {
          return localImages[lowerFile];
        }
        return `assets/images/${fileName}`;
      }
      return urlMatch;
    });
    return `srcset="${fixedSrcset}"`;
  });

  // Fix href links to internal pages
  fixed = fixed.replace(/href=["']([^"']*)["']/gi, (match, href) => {
    if (href.includes('globecoreinc.com') && !href.includes('tel:') && !href.includes('mailto:')) {
      // Extract the path
      const pageMatch = href.match(/globecoreinc\.com(\/[^?'"]*)/);
      if (pageMatch) {
        let pagePath = pageMatch[1];
        if (!pagePath.endsWith('/') && !pagePath.endsWith('.html')) {
          pagePath += '.html';
        }
        // Convert to local page reference
        const pageName = pagePath.replace(/\//g, '_').replace(/^_/, '').replace(/_\.html$/, '.html');
        if (pageName && pageName !== '/') {
          // Map special paths
          if (pagePath === '/' || pagePath === '') return 'index.html';
          const localPageName = pagePath.replace(/\//g, '_').replace(/^_/, '').replace(/\.html$/, '.html');
          // Try to match existing file
          const pagesDir = path.join(__dirname, 'globecore_website', 'pages');
          if (fs.existsSync(path.join(pagesDir, localPageName))) {
            return `pages/${localPageName}`;
          }
          // Try without underscore prefix pattern
          const dashVersion = localPageName.replace(/_/g, '-').replace(/--/g, '-');
          if (fs.existsSync(path.join(pagesDir, dashVersion))) {
            return `pages/${dashVersion}`;
          }
        }
      }
    }
    return match;
  });

  // Fix data-src attributes (lazy loading)
  fixed = fixed.replace(/data-src=["']([^"']*)["']/gi, (match, url) => {
    const localPath = getLocalAsset(url);
    if (localPath !== url) {
      return `src="${localPath}" data-src="${localPath}"`;
    }
    return match;
  });

  // Fix background images in style attributes
  fixed = fixed.replace(/url\(['"]([^'"]*)['"]\)/gi, (match, url) => {
    if (url.includes('globecoreinc.com')) {
      const localPath = getLocalAsset(url);
      if (localPath !== url) {
        return `url('${localPath}')`;
      }
    }
    return match;
  });

  return fixed;
}

function fixFileNameReferences() {
  const pagesDir = path.join(__dirname, 'globecore_website', 'pages');

  if (!fs.existsSync(pagesDir)) {
    console.log('Pages directory not found');
    return;
  }

  const files = fs.readdirSync(pagesDir).filter(f => f.endsWith('.html'));

  console.log(`\nFixing ${files.length} HTML files...\n`);

  files.forEach((file, index) => {
    const filePath = path.join(pagesDir, file);
    let content = fs.readFileSync(filePath, 'utf8');

    const fixedContent = fixHtmlContent(content, filePath);

    fs.writeFileSync(filePath, fixedContent);
    process.stdout.write(`\rFixed: ${index + 1}/${files.length}`);
  });

  console.log('\n\nAll files fixed!');
}

// Run
fixFileNameReferences();