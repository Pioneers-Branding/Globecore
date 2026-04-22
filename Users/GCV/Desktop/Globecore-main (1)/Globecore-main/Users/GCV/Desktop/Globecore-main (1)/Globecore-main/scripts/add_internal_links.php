<?php
$base_dir = realpath(__DIR__ . '/..');

$keywords_mapping = [
    'TMS therapy' => 'services/tms-therapy.html',
    'psychiatrist' => 'best-psychiatrist-in-atlanta.html',
    'depression' => 'specialties/depression-anxiety.html',
    'anxiety' => 'specialties/depression-anxiety.html',
    'psychiatric evaluation' => 'services/psychological-evaluations.html',
    'psychological evaluation' => 'services/psychological-evaluations.html',
    'medication management' => 'services/medication-management.html',
    'counseling' => 'services/counseling.html',
    'TRICARE TMS' => 'services/tricare-tms-therapy.html',
    'TRICARE-covered' => 'services/tricare-tms-therapy.html',
    'TRICARE' => 'services/tricare-tms-therapy.html',
    'ADHD' => 'specialties/adhd.html',
    'addiction' => 'specialties/addiction.html',
    'bipolar disorder' => 'specialties/bipolar-disorder.html',
    'OCD' => 'specialties/ocd.html',
    'trauma' => 'specialties/trauma.html',
    'PTSD' => 'specialties/trauma.html',
    'LGBTQI' => 'specialties/lgbtqi.html',
    "women's issues" => 'specialties/women-s-issues.html',
    'marriage issues' => 'specialties/relationship-marriage-issues.html',
    'grief' => 'specialties/grief-loss.html',
    'eating disorders' => 'specialties/eating-disorders.html',
    'chronic illness' => 'specialties/chronic-illness.html',
    'self-esteem' => 'specialties/self-esteem.html',
    'sleep disorders' => 'specialties/sleep-disorders.html'
];

function get_relative_link($from_path, $to_path) {
    // Normalizes windows paths
    $from_path = str_replace('\\', '/', $from_path);
    $from_parts = explode('/', trim($from_path, '/'));
    $depth = count($from_parts) - 1;
    
    if ($depth <= 0) {
        return './' . $to_path;
    }
    
    $prefix = str_repeat('../', $depth);
    return $prefix . $to_path;
}

function replace_keywords_in_main($html, $mapping, $relative_path_prefix, $from_path) {
    // Extract <main> ... </main> block
    if (preg_match('/(<main[^>]*>)(.*?)(<\/main>)/is', $html, $main_match)) {
        $main_start = $main_match[1];
        $main_content = $main_match[2];
        $main_end = $main_match[3];
        
        foreach ($mapping as $keyword => $to_path) {
            $url = get_relative_link($from_path, $to_path);
            
            // Skip linking if the page is the same
            if (strpos($url, './' . $to_path) !== false && $from_path === $to_path) continue;

            $linkClass = "text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium";
            
            $escaped_keyword = preg_quote($keyword, '/');
            // Regex to ignore a, script, style, heading tags
            $pattern = '/(<a\b[^>]*>.*?<\/a>|<h[1-6]\b[^>]*>.*?<\/h[1-6]>|<script\b[^>]*>.*?<\/script>|<style\b[^>]*>.*?<\/style>|<button\b[^>]*>.*?<\/button>|<[^>]+>)|(\b' . $escaped_keyword . '\b)/is';
            
            $replaced = false;
            
            $main_content = preg_replace_callback($pattern, function($matches) use (&$replaced, $url, $linkClass) {
                if ($replaced) {
                    return $matches[0];
                }
                if (!empty($matches[1])) {
                    return $matches[1];
                }
                if (!empty($matches[2])) {
                    $replaced = true;
                    return '<a href="' . htmlspecialchars($url) . '" class="' . $linkClass . '">' . $matches[2] . '</a>';
                }
                return $matches[0];
            }, $main_content);
        }
        
        $new_html = str_replace($main_match[0], $main_start . $main_content . $main_end, $html);
        return $new_html;
    }
    return $html;
}

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($base_dir));
$processed_count = 0;

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'html') {
        $path = $file->getPathname();
        
        // Skip certain dirs
        if (strpos($path, 'node_modules') !== false || 
            strpos($path, '.git') !== false || 
            strpos($path, '.html') === false ||
            strpos($path, 'blog_backup.html') !== false) {
            continue;
        }

        // Compute relative path from base_dir 
        $rel_path = str_replace($base_dir . DIRECTORY_SEPARATOR, '', $path);
        $rel_path = str_replace('\\', '/', $rel_path);

        $html = file_get_contents($path);
        
        $new_html = replace_keywords_in_main($html, $keywords_mapping, '', $rel_path);
        
        if ($new_html !== $html) {
            file_put_contents($path, $new_html);
            $processed_count++;
            echo "Updated internal links in: " . $rel_path . "\n";
        }
    }
}

echo "Total files updated: " . $processed_count . "\n";

?>
