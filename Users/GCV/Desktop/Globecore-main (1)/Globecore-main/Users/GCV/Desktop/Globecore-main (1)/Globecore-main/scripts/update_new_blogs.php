<?php
$base_dir = __DIR__ . '/..';
$json_path = __DIR__ . '/blogs_data.json';
$blog_index = $base_dir . '/blog.html';

// Load the JSON data
$data = json_decode(file_get_contents($json_path), true);

$index_html = file_get_contents($blog_index);

foreach ($data as $blog) {
    $id = $blog['id'];
    $file_path = $base_dir . '/' . $id . '.html';
    
    // Update individual blog file
    if (file_exists($file_path)) {
        $html = file_get_contents($file_path);
        
        $start_tag = '<div class="article-content text-[17px] md:text-[18px]">';
        $start_idx = strpos($html, $start_tag);
        $end_idx = strpos($html, '</div>' . "\n" . '</article>', $start_idx);
        
        if ($start_idx !== false && $end_idx !== false) {
            $new_content_block = $start_tag . "\n" . $blog['content'] . "\n</div>\n";
            $html = substr($html, 0, $start_idx) . $new_content_block . substr($html, $end_idx + 18);
            file_put_contents($file_path, $html);
            echo "Updated content for $id.html\n";
        } else {
            echo "Error finding article-content in $id.html\n";
        }
    }
    
    // Update excerpt in blog.html
    // Find the link to this blog in the cards
    $link_start = '<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./' . $id . '.html">';
    $link_pos = strpos($index_html, $link_start);
    if ($link_pos !== false) {
        $excerpt_container_start = strpos($index_html, '<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">', $link_pos);
        if ($excerpt_container_start !== false) {
            $p_start = strpos($index_html, '<p>', $excerpt_container_start) + 3;
            $p_end = strpos($index_html, '</p>', $p_start);
            
            $new_excerpt = $blog['excerpt'];
            $index_html = substr($index_html, 0, $p_start) . $new_excerpt . substr($index_html, $p_end);
            echo "Updated excerpt for $id in blog.html\n";
        }
    }
}

file_put_contents($blog_index, $index_html);
echo "All done.\n";
?>
