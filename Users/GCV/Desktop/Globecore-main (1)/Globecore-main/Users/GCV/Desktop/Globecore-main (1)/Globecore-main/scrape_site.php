<?php
$urls = [
    "https://globecoreinc.com/",
    "https://globecoreinc.com/about-practice/",
    "https://globecoreinc.com/tms-therapy/",
    "https://globecoreinc.com/psychological-evaluation/",
    "https://globecoreinc.com/medication-management/",
    "https://globecoreinc.com/workshops-training/",
    "https://globecoreinc.com/contact/"
];

$options = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/91.0.4472.124 Safari/537.36\r\n"
    ],
    "ssl" => [
        "verify_peer" => false,
        "verify_peer_name" => false,
    ]
];
$context = stream_context_create($options);

$data = [];
foreach ($urls as $url) {
    echo "Scraping: $url\n";
    $html = @file_get_contents($url, false, $context);
    if ($html) {
        $html = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $html);
        $html = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', "", $html);
        $html = preg_replace('/<header\b[^>]*>(.*?)<\/header>/is', "", $html);
        $html = preg_replace('/<footer\b[^>]*>(.*?)<\/footer>/is', "", $html);
        $text = strip_tags($html);
        $text = preg_replace('/\s+/', ' ', $text);
        
        $data[$url] = substr(trim($text), 0, 3000);
    } else {
        $data[$url] = "Failed to load.";
    }
}
file_put_contents(__DIR__ . "/scraped_data.json", json_encode($data, JSON_PRETTY_PRINT));
echo "Done saving to scraped_data.json\n";
