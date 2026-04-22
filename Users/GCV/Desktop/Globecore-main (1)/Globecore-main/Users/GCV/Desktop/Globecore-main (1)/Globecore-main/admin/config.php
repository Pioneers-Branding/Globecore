<?php
session_start();

$config = [
    'admin_password' => 'globeadmin2026',
    'blogs_dir' => __DIR__ . '/../',
    'site_url' => 'https://globecoreinc.com'
];

function getBlogs() {
    global $config;
    $blogs = [];
    $files = glob($config['blogs_dir'] . '*.html');
    
    $excluded = ['index.html', 'template.html', 'about.html', 'contact.html', 'blog.html', 
                 'pricing-insurance.html', 'privacy-policy.html', 'accessibility.html',
                 'career.html', 'team_page.html', 'client-portal.html', 'staff-portal.html',
                 'psych_eval.html'];
    
    foreach ($files as $file) {
        $filename = basename($file);
        if (in_array($filename, $excluded)) continue;
        
        $content = file_get_contents($file);
        
        if (preg_match('/<title>([^<]+)/i', $content, $matches)) {
            $title = trim($matches[1]);
        } else {
            $title = $filename;
        }
        
        if (preg_match('/(\d{1,2}\/\d{1,2}\/\d{4})/', $content, $matches)) {
            $date = $matches[1];
        } else {
            $date = date('m/d/Y', filemtime($file));
        }
        
        $blogs[] = [
            'filename' => $filename,
            'title' => $title,
            'date' => $date,
            'path' => $file
        ];
    }
    
    usort($blogs, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });
    
    return $blogs;
}

function getBlogContent($filename) {
    global $config;
    $file = $config['blogs_dir'] . $filename;
    if (file_exists($file)) {
        return file_get_contents($file);
    }
    return null;
}

function saveBlog($filename, $content) {
    global $config;
    $file = $config['blogs_dir'] . $filename;
    return file_put_contents($file, $content);
}

function deleteBlog($filename) {
    global $config;
    $file = $config['blogs_dir'] . $filename;
    if (file_exists($file)) {
        return unlink($file);
    }
    return false;
}

function slugify($text) {
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
    $text = preg_replace('/[\s-]+/', '-', $text);
    $text = trim($text, '-');
    return $text;
}

function isLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: index.php');
        exit;
    }
}
