const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

// Assets to download - extracted from the pages
const ASSETS = {
  // PDFs
  'pdfs': [
    '/wp-content/uploads/2020/12/Adult-Intake-Packet.pdf',
    '/wp-content/uploads/2020/12/COVID-19-Updated-Guide-1.pdf',
    '/wp-content/uploads/2020/12/Client-Request-and-Authorization-for-Naturopathic-Services.pdf',
    '/wp-content/uploads/2020/12/Coaching-Intake-Form.pdf',
    '/wp-content/uploads/2020/12/Consent-to-Evaluation-Form.pdf',
    '/wp-content/uploads/2020/12/Disclosure-Form.pdf',
    '/wp-content/uploads/2020/12/GlobeCoRe-Consultation_Info_Form.pdf',
    '/wp-content/uploads/2020/12/GlobeCoRe-Inc-Capability-Statement.pdf',
    '/wp-content/uploads/2020/12/Naturopathic-Self-Assessment-Questionnaire.pdf',
    '/wp-content/uploads/2020/12/goal-exploration.pdf',
    '/wp-content/uploads/2020/12/mindfulness-exercises.pdf',
    '/wp-content/uploads/2020/12/relaxation-techniques.pdf',
    '/wp-content/uploads/2021/03/5-Secrets-to-Manifesting-Your-Own-Destiny.pdf',
    '/wp-content/uploads/2021/03/6063674ed14487003e93cdf8.pdf',
    '/wp-content/uploads/2021/03/70-Affirmations.pdf',
    '/wp-content/uploads/2021/03/Anger-vs.-Agression-Fact-Sheet-Updated-1.pdf',
    '/wp-content/uploads/2021/03/Anxiety-Tracking-Form.pdf',
    '/wp-content/uploads/2021/03/BloodWork.pdf',
    '/wp-content/uploads/2021/03/Depression-Tracking-Form.pdf',
    '/wp-content/uploads/2021/03/Feeling-Wheel.pdf',
    '/wp-content/uploads/2021/03/Final-Codependency-Info-Sheet-GlobeCoRe.pdf',
    '/wp-content/uploads/2021/03/Gratitude-Exercises.pdf',
    '/wp-content/uploads/2021/03/Grief-Emotions-Arent-Good-Or-Bad-They-Just-Are-Whats-your-Grief.pdf',
    '/wp-content/uploads/2021/03/Grief-Reaction-StatPearls-NCBI-Bookshelf.pdf',
    '/wp-content/uploads/2021/03/Grief-Wheel.pdf',
    '/wp-content/uploads/2021/03/Ground-Rules-for-Grief-Group.pdf',
    '/wp-content/uploads/2021/03/How-Do-you-feel-today.pdf',
    '/wp-content/uploads/2021/03/Identity-Mind-Map.pdf',
    '/wp-content/uploads/2021/03/LifeLine_Service.pdf',
    '/wp-content/uploads/2021/03/Pain-Tracking-Form.pdf',
    '/wp-content/uploads/2021/03/Personal-Inventory-Negative.pdf',
    '/wp-content/uploads/2021/03/Personal-Inventory-Positive-.pdf',
    '/wp-content/uploads/2021/03/Relationship-Map.pdf',
    '/wp-content/uploads/2021/03/Screen-Shot-2021-03-03-at-4.40.48-PM.png',
    '/wp-content/uploads/2021/03/Screen-Shot-2021-03-03-at-4.47.16-PM.png',
    '/wp-content/uploads/2021/03/Screen-Shot-2021-03-03-at-4.53.53-PM.png',
    '/wp-content/uploads/2021/03/Screen-Shot-2021-03-03-at-4.55.47-PM.png',
    '/wp-content/uploads/2021/03/Screen-Shot-2021-03-03-at-4.58.14-PM.png',
    '/wp-content/uploads/2021/03/Setting-Boundaries.pdf',
    '/wp-content/uploads/2021/03/Speaker_Listener_with_Example.pdf',
    '/wp-content/uploads/2021/03/Symptoms-of-Grief.pdf',
    '/wp-content/uploads/2021/03/Triggers.pdf',
    '/wp-content/uploads/2021/03/Wheel-of-Life.pdf',
    '/wp-content/uploads/2021/03/assertive-communication.pdf',
    '/wp-content/uploads/2021/03/challenging-negative-thoughts.pdf',
    '/wp-content/uploads/2021/03/couples-gratitude-journal.pdf',
    '/wp-content/uploads/2021/03/couples-strengths-exploration.pdf',
    '/wp-content/uploads/2021/03/dbt-interpersonal-effectiveness-grp-4-handouts.pdf',
    '/wp-content/uploads/2021/03/my-strengths-and-qualities-1.pdf',
    '/wp-content/uploads/2021/03/positive-experiences.pdf',
    '/wp-content/uploads/2021/03/positive-traits-2.pdf',
    '/wp-content/uploads/2021/03/relationship-growth-activity.pdf',
    '/wp-content/uploads/2021/03/social-support.pdf',
    '/wp-content/uploads/2021/03/valuescardsort_0.pdf',
    '/wp-content/uploads/2021/04/AED_Medical_Care_Guidelines_English_04_03_18_a.pdf',
    '/wp-content/uploads/2021/04/Eating-Disorders-Worksheet-01-Change-Process-Balance-Sheet.pdf',
    '/wp-content/uploads/2021/04/Eating-Disorders-Worksheet-02-Tackling-Avoided-Foods.pdf',
    '/wp-content/uploads/2021/04/Eating-Disorders-Worksheet-03-Self-Monitoring-Form.pdf',
    '/wp-content/uploads/2021/04/ExE_Caregivers_10_Actions.pdf',
    '/wp-content/uploads/2021/04/ExE_Clinicians_10_Actions.pdf',
    '/wp-content/uploads/2021/04/ExE_Individuals_10_Actions.pdf',
    '/wp-content/uploads/2021/04/Resource_Guide_August2020.pdf',
  ],
  // Images
  'images': [
    '/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2.jpg',
    '/wp-content/uploads/2020/12/df4262_a39fc5f824f845899d6e4725fad9cae8_mv2-2-150x150.png',
    '/wp-content/uploads/2020/12/image-depression.jpg',
    '/wp-content/uploads/2020/12/payments.jpg',
    '/wp-content/uploads/2021/02/Screenshot_2.jpg',
    '/wp-content/uploads/2021/02/cartoon.png',
    '/wp-content/uploads/2021/02/cultural-img-1.jpg',
    '/wp-content/uploads/2021/02/image-addiction.jpg',
    '/wp-content/uploads/2021/02/image-developmental-4.jpg',
    '/wp-content/uploads/2021/02/image-fertility.jpg',
    '/wp-content/uploads/2021/02/image-finding.jpg',
    '/wp-content/uploads/2021/02/image-lgbtq.jpg',
    '/wp-content/uploads/2021/02/image-purpose.jpg',
    '/wp-content/uploads/2021/02/image-relationship.jpg',
    '/wp-content/uploads/2021/02/image-trauma.png',
    '/wp-content/uploads/2022/12/dev-eval.jpg',
    '/wp-content/uploads/2023/07/Group-Therapy-Racial-Healing-and-Hope-1.png',
    '/wp-content/uploads/2023/07/Group-Therapy-Self-Esteem-Building-1.png',
    '/wp-content/uploads/2023/07/Group-Therapy-The-Roaring-20s-1.png',
    '/wp-content/uploads/2023/08/group-therapy-racial-healing-and-hope-2-1.png',
    '/wp-content/uploads/2023/12/frame-134.png',
    '/wp-content/uploads/2024/09/GlobeCoreUnderneathCenteredWhite.png',
    '/wp-content/uploads/2024/11/carecredit.png',
    '/wp-content/uploads/2024/11/screen-shot-2024-11-25-at-2.50.52-pm.png',
    '/wp-content/uploads/2024/12/screen_shot_2024-12-02_at_6.21.43_pm-removebg-preview.png',
    '/wp-content/uploads/2025/03/mm.png',
    '/wp-content/uploads/2025/03/nm.png',
    '/wp-content/uploads/2025/03/pm.png',
    '/wp-content/uploads/2026/02/globe-1.webp',
    '/wp-content/uploads/2026/02/globe-2.webp',
    '/wp-content/uploads/2026/02/globe-3.webp',
    '/wp-content/uploads/2026/02/globe-4.webp',
    '/wp-content/uploads/2026/02/globe-core-1-10.webp',
    '/wp-content/uploads/2026/02/globe-core-12-1.webp',
    '/wp-content/uploads/2026/02/globe-core-15-1.webp',
    '/wp-content/uploads/2026/02/globe-core-16-1.webp',
    '/wp-content/uploads/2026/02/globe-core-19-1.webp',
    '/wp-content/uploads/2026/02/globe-core-39-1.webp',
    '/wp-content/uploads/2026/02/globe-core-40-1.webp',
    '/wp-content/uploads/2026/02/globe-core-50-1.webp',
    '/wp-content/uploads/2026/02/globe-core-52-1.webp',
    '/wp-content/uploads/2026/02/globe-core-54-1.webp',
    '/wp-content/uploads/2026/02/globe-core-58-1.webp',
    '/wp-content/uploads/2026/02/globe-core-60-1.webp',
    '/wp-content/uploads/2026/02/globe-core-61-1.webp',
    '/wp-content/uploads/2026/02/globe-core-82-1.webp',
    '/wp-content/uploads/2026/02/globe-core-83-1.webp',
    '/wp-content/uploads/2026/02/globe-core-88-1.webp',
    '/wp-content/uploads/2026/02/globe-core-90-1.webp',
    '/wp-content/uploads/2026/02/globe-core-93-1.webp',
    '/wp-content/uploads/2026/02/globe-core-95-1.webp',
    '/wp-content/uploads/2026/02/globe-core-96-1.webp',
    '/wp-content/uploads/2026/03/109acb60-63f9-11ed-b950-4dadc68f0cfc.jpg.webp',
    '/wp-content/uploads/2026/03/gemini_generated_image_ahiwugahiwugahiw-photoroom.png',
    '/wp-content/uploads/2026/03/gemini_generated_image_bl30hhbl30hhbl30-photoroom.png',
    '/wp-content/uploads/2026/03/gemini_generated_image_w74nhfw74nhfw74n-photoroom.png',
    '/wp-content/uploads/2026/03/screenshot-2026-03-18-131906-2.png',
    '/wp-content/uploads/2026/03/screenshot-2026-03-18-132838-2.png',
    '/wp-content/uploads/2026/04/cropped-images.jpg',
    '/wp-content/uploads/2026/04/gemini_generated_image_ivhigmivhigmivhi.png',
    '/wp-content/uploads/2026/04/image-globecore-1.jpg',
    '/wp-content/uploads/2026/04/is-adhd-a-disability.png',
    '/wp-content/uploads/2026/04/marriage-counseling.jpg',
  ]
};

const BASE_URL = 'https://globecoreinc.com';
const OUTPUT_DIR = path.join(__dirname, 'globecore_website');

async function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function downloadAsset(page, assetPath, saveDir) {
  const url = BASE_URL + assetPath;
  const fileName = path.basename(assetPath).split('?')[0];
  const filePath = path.join(saveDir, fileName);

  try {
    const response = await page.goto(url, { timeout: 30000, waitUntil: 'networkidle0' });
    if (response.ok()) {
      const buffer = await response.buffer();
      fs.writeFileSync(filePath, buffer);
      console.log(`  Downloaded: ${fileName}`);
      return true;
    }
  } catch (error) {
    // Try again with different approach
    try {
      const { execSync } = require('child_process');
      const result = execSync(`curl -sL -A "Mozilla/5.0" "${url}" -o "${filePath}"`, { timeout: 30000 });
      if (fs.existsSync(filePath) && fs.statSync(filePath).size > 100) {
        console.log(`  Downloaded (curl): ${fileName}`);
        return true;
      }
    } catch (e) {
      // Ignore
    }
  }
  console.log(`  Failed: ${assetPath}`);
  return false;
}

async function main() {
  console.log('Launching browser...');
  const browser = await puppeteer.launch({
    headless: 'new',
    args: ['--no-sandbox', '--disable-setuid-sandbox']
  });

  const page = await browser.newPage();
  await page.setViewport({ width: 1920, height: 1080 });

  // Create directories
  const pdfsDir = path.join(OUTPUT_DIR, 'pdfs');
  const extraImagesDir = path.join(OUTPUT_DIR, 'extra_images');
  fs.mkdirSync(pdfsDir, { recursive: true });
  fs.mkdirSync(extraImagesDir, { recursive: true });

  // Download PDFs
  console.log('\n=== Downloading PDFs ===\n');
  let pdfCount = 0;
  for (const pdf of ASSETS.pdfs) {
    await downloadAsset(page, pdf, pdfsDir);
    pdfCount++;
    process.stdout.write(`\r  Progress: ${pdfCount}/${ASSETS.pdfs.length}`);
    await sleep(300);
  }
  console.log(`\n  Downloaded ${pdfCount} PDFs`);

  // Download extra images
  console.log('\n=== Downloading Extra Images ===\n');
  let imgCount = 0;
  for (const img of ASSETS.images) {
    await downloadAsset(page, img, extraImagesDir);
    imgCount++;
    process.stdout.write(`\r  Progress: ${imgCount}/${ASSETS.images.length}`);
    await sleep(200);
  }
  console.log(`\n  Downloaded ${imgCount} images`);

  await browser.close();
  console.log('\n=== Asset Download Complete ===');
}

main().catch(console.error);