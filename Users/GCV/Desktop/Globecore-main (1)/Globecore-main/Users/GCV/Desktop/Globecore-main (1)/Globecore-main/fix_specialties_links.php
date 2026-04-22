<?php
$baseDir = __DIR__;
$indexFile = $baseDir . '/index.html';

if (!file_exists($indexFile)) {
    die("File not found\n");
}

$html = file_get_contents($indexFile);

$startMarker = '<div class="flex flex-wrap justify-center gap-3">';
$startPos = strpos($html, $startMarker, strpos($html, 'Conditions We Treat'));
if ($startPos === false) {
    die("Start marker not found\n");
}

$endMarker = '</div>';
$endPos = strpos($html, $endMarker, $startPos + strlen($startMarker));

if ($endPos === false) {
    die("End marker not found\n");
}

$block = substr($html, $startPos, $endPos - $startPos + strlen($endMarker));

// Find all <span> tags
$pattern = '/<span\s+class="([^"]+)"[^>]*>([\s\S]*?)<\/span>/i';
$replacedBlock = preg_replace_callback($pattern, function($matches) {
    $class = $matches[1];
    $rawText = $matches[2];
    
    // Clean up text
    $text = preg_replace('/\s+/', ' ', trim($rawText));
    
    // Make slug
    $slug = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $text));
    $slug = trim($slug, '-');
    
    // Exceptions like women-s-issues => womens-issues
    // But wait, the previous generated files were women-s-issues.html ?
    // Let's check what they actually are in the folder: 
    // They are women-s-issues.html, ocd.html, etc.
    
    return '<a href="./specialties/' . $slug . '.html" class="' . $class . ' text-center leading-tight hover:-translate-y-0.5">' . $text . '</a>';
}, $block);

if ($block === $replacedBlock) {
    echo "No changes made.\n";
} else {
    $html = substr_replace($html, $replacedBlock, $startPos, $endPos - $startPos + strlen($endMarker));
    file_put_contents($indexFile, $html);
    echo "Successfully updated specialties to hyperlinks in index.html!\n";
}
?>
