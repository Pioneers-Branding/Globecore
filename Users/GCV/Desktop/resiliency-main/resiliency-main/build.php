<?php
/**
 * Static Site Generator for Netlify Deployment
 * This script renders PHP files to static HTML and prepares a 'dist' directory.
 */

// Configuration
$source_dir = __DIR__;
$output_dir = __DIR__ . '/dist';
$pages = [
    'index.php' => 'index.html',
    'tms-therapy.php' => 'tms-therapy.html',
    'spravato-therapy.php' => 'spravato-therapy.html',
    'medication-management.php' => 'medication-management.html',
    'accelerated-tms.php' => 'accelerated-tms.html',
    'integrative-psychiatry.php' => 'integrative-psychiatry.html',
    'iv-vitamin-therapy.php' => 'iv-vitamin-therapy.html',
    'weight-loss.php' => 'weight-loss.html',
    'nad-therapy.php' => 'nad-therapy.html',
    'supplements.php' => 'supplements.html',
    'depression.php' => 'depression.html',
    'anxiety.php' => 'anxiety.html',
    'ocd.php' => 'ocd.html',
    'ptsd.php' => 'ptsd.html',
    'adhd.php' => 'adhd.html',
    'bipolar.php' => 'bipolar.html',
    'substance-abuse.php' => 'substance-abuse.html',
    'autism.php' => 'autism.html',
    'conditions.php' => 'conditions.html',
    'suicidal-ideation.php' => 'suicidal-ideation.html',
    'mental-clarity.php' => 'mental-clarity.html',
    'cognitive-enhancement.php' => 'cognitive-enhancement.html',
    'about.php' => 'about.html',
    'team.php' => 'team.html',
    'faqs.php' => 'faqs.html',
    'insurance.php' => 'insurance.html',
    'contact.php' => 'contact.html',
    'tms-resources.php' => 'tms-resources.html',
    'tms-faq.php' => 'tms-faq.html',
    'reviews.php' => 'reviews.html',
    'press-media.php' => 'press-media.html',
    'blog.php' => 'blog.html',
    'new-patient-form.php' => 'new-patient-form.html',
    'cherry-payment.php' => 'cherry-payment.html',
    'terms-of-service.php' => 'terms-of-service.html',
    'privacy-policy.php' => 'privacy-policy.html',
    'compliance.php' => 'compliance.html',
    'acceptable-use.php' => 'acceptable-use.html',
    'caloptima.php' => 'caloptima.html',
    'metrics.php' => 'metrics.html',
    'vns-therapy.php' => 'vns-therapy.html',
    'telehealth.php' => 'telehealth.html',
    'pharmacogenetic-testing.php' => 'pharmacogenetic-testing.html',
    'hormone-therapy.php' => 'hormone-therapy.html',
    'newport-beach.php' => 'newport-beach.html',
    'san-juan-capistrano.php' => 'san-juan-capistrano.html',
    'proliv-rx.php' => 'proliv-rx.html',
];
$assets_dirs = ['assets', 'css', 'js'];

// 1. Create/Clean Dist Directory
if (is_dir($output_dir)) {
    deleteDirectory($output_dir);
}
mkdir($output_dir, 0777, true);

echo "--- Starting Build ---\n";

// 2. Copy Assets
foreach ($assets_dirs as $dir) {
    if (is_dir($source_dir . '/' . $dir)) {
        echo "Copying $dir...\n";
        copyDirectory($source_dir . '/' . $dir, $output_dir . '/' . $dir);
    }
}

// 3. Render Pages
foreach ($pages as $php_file => $html_file) {
    echo "Rendering $php_file -> $html_file...\n";
    
    // Start output buffering to capture the rendered PHP
    ob_start();
    include $source_dir . '/' . $php_file;
    $content = ob_get_clean();
    
    // Replace .php extensions with .html in links
    // This regex looks for href="filename.php" or href='filename.php' and changes to .html
    $content = preg_replace('/href="([^"]+)\.php"/', 'href="$1.html"', $content);
    $content = preg_replace("/href='([^']+)\.php'/", "href='$1.html'", $content);
    
    // Special case for root tms-therapy.php if needed, but the regex should handle it.
    
    file_put_contents($output_dir . '/' . $html_file, $content);
}

// 4. Copy Sitemap
if (file_exists($source_dir . '/resiliency-sitemap.xml')) {
    copy($source_dir . '/resiliency-sitemap.xml', $output_dir . '/sitemap.xml');
}

echo "--- Build Complete! ---\n";
echo "Deploy the 'dist' folder to Netlify.\n";

/**
 * Helper: Recursively copy a directory
 */
function copyDirectory($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copyDirectory($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

/**
 * Helper: Recursively delete a directory
 */
function deleteDirectory($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return unlink($dir);
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') continue;
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) return false;
    }
    return rmdir($dir);
}
