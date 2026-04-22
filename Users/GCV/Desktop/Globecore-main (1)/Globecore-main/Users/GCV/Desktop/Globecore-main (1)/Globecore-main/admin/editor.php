<?php
require_once 'config.php';
requireLogin();

$filename = $_GET['file'] ?? '';
$content = '';
$isEditing = false;

if ($filename) {
    $content = getBlogContent($filename);
    if ($content !== null) {
        $isEditing = true;
    }
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $category = $_POST['category'] ?? 'Mental Health';
    $author = $_POST['author'] ?? 'Kelly Lewis-Arthur';
    $date = $_POST['date'] ?? date('m/d/Y');
    $excerpt = $_POST['excerpt'] ?? '';
    $bodyContent = $_POST['body_content'] ?? '';
    $imageUrl = $_POST['image_url'] ?? '';
    $existingFilename = $_POST['existing_filename'] ?? '';
    
    $slug = slugify($title);
    if (empty($slug)) {
        $slug = 'blog-' . time();
    }
    
    if ($existingFilename && isset($_POST['save_existing'])) {
        $newFilename = $existingFilename;
    } else {
        $newFilename = $slug . '.html';
    }
    
    $blogHtml = generateBlogHtml($title, $category, $author, $date, $excerpt, $bodyContent, $imageUrl);
    
    if (saveBlog($newFilename, $blogHtml)) {
        $message = $isEditing ? 'Blog updated successfully!' : 'Blog created successfully!';
        if (!$isEditing) {
            header('Location: dashboard.php?message=' . urlencode($message));
            exit;
        }
    } else {
        $message = 'Error saving blog. Please try again.';
    }
}

function generateBlogHtml($title, $category, $author, $date, $excerpt, $bodyContent, $imageUrl) {
    $imageHtml = $imageUrl ? '<img alt="' . htmlspecialchars($title) . '" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="' . htmlspecialchars($imageUrl) . '"/>' : '<div class="w-full h-full bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center"><svg class="w-20 h-20 text-primary/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></div>';
    
    $bodyParagraphs = '';
    $paragraphs = explode("\n\n", $bodyContent);
    foreach ($paragraphs as $para) {
        if (trim($para)) {
            $bodyParagraphs .= '<p class="mb-6 text-[16px] leading-relaxed text-gray-600">' . nl2br(htmlspecialchars(trim($para))) . '</p>';
        }
    }
    
    return '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($title) . ' | GlobeCoRe Inc. Atlanta, GA</title>
    <meta name="description" content="' . htmlspecialchars($excerpt ?: substr($bodyContent, 0, 160)) . '">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="GlobeCoRe Inc.">
    <link rel="canonical" href="https://globecoreinc.com/' . slugify($title) . '.html">

    <meta property="og:type" content="article">
    <meta property="og:url" content="https://globecoreinc.com/' . slugify($title) . '.html">
    <meta property="og:title" content="' . htmlspecialchars($title) . '">
    <meta property="og:description" content="' . htmlspecialchars($excerpt ?: substr($bodyContent, 0, 160)) . '">
    <meta property="og:image" content="' . htmlspecialchars($imageUrl ?: 'https://globecoreinc.com/assets/globecore-og-image.jpg') . '">
    <meta property="og:site_name" content="GlobeCoRe Inc.">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="' . htmlspecialchars($title) . '">
    <meta name="twitter:description" content="' . htmlspecialchars($excerpt ?: substr($bodyContent, 0, 160)) . '">
    <meta name="twitter:image" content="' . htmlspecialchars($imageUrl ?: 'https://globecoreinc.com/assets/globecore-og-image.jpg') . '">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: \'#8BAF4C\',
                        secondary: \'#0F7A8D\',
                        deepTeal: \'#027289\',
                        textMain: \'#424242\',
                        bgOffWhite: \'#F3F3F3\',
                    },
                    fontFamily: {
                        raleway: [\'Raleway\', \'sans-serif\'],
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .line-clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
    </style>
</head>

<body class="font-raleway text-textMain bg-white">
    <div class="bg-[#071e26] text-gray-300 text-xs shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex justify-between items-center">
            <div class="hidden md:flex items-center gap-1">
                <a href="./client-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Client Portal</a>
                <a href="./staff-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Staff Portal</a>
            </div>
            <div class="flex items-center gap-2 font-semibold ml-auto text-white">
                <a href="tel:7702841044" class="hover:text-primary transition-all duration-300 flex items-center gap-2">
                    <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                    (770) 284-1044</a>
            </div>
        </div>
    </div>

    <header class="bg-white/80 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
            <a href="./index.html">
                <img src="./assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Logo" class="h-11 w-auto">
            </a>
            <nav class="hidden xl:flex items-center gap-2 text-[13px] font-semibold relative">
                <a href="./index.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Home</a>
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">About <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
                            <a href="./about.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">About Us</a>
                            <a href="./about/meet-our-team.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Meet Our Team</a>
                            <a href="./about/philosophy-core-values.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Philosophy & Values</a>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-72 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
                            <a href="./services/counseling.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>Counseling</a>
                            <a href="./services/psychological-evaluations.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>Psychological Evaluations</a>
                            <a href="./services/medication-management.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>Medication Management</a>
                            <a href="./services/tms-therapy.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>TMS Therapy</a>
                            <a href="./services/personal-development.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>Personal Development</a>
                            <a href="./services/professional-development.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>Professional Development</a>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Specialties <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-1/2 -ml-[350px] mt-0 w-[700px] bg-white shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="grid grid-cols-3 gap-2 p-4 border border-gray-100 rounded-2xl">
                            <a href="./specialties/addiction.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Addiction</a>
                            <a href="./specialties/adhd.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">ADHD</a>
                            <a href="./specialties/aging-issues.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Aging Issues</a>
                            <a href="./specialties/anger-management.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Anger Management</a>
                            <a href="./specialties/bipolar-disorder.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Bipolar Disorder</a>
                            <a href="./specialties/chronic-illness.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Chronic Illness</a>
                            <a href="./specialties/codependency.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Codependency</a>
                            <a href="./specialties/depression-anxiety.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Depression & Anxiety</a>
                            <a href="./specialties/developmental-intellectual-disabilities.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Developmental & Intellectual Disabilities</a>
                            <a href="./specialties/eating-disorders.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Eating Disorders</a>
                            <a href="./specialties/fertility-pregnancy-parenting.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Fertility, Pregnancy & Parenting</a>
                            <a href="./specialties/finding-purpose.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Finding Purpose</a>
                            <a href="./specialties/finding-the-love-you-deserve.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Finding The Love You Deserve</a>
                            <a href="./specialties/grief-loss.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Grief & Loss</a>
                            <a href="./specialties/life-transitions.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Life Transitions</a>
                            <a href="./specialties/lgbtqi.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">LGBTQI+</a>
                            <a href="./specialties/ocd.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">OCD</a>
                            <a href="./specialties/racial-ethnic-and-religious-stressors.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Racial, Ethnic and Religious Stressors</a>
                            <a href="./specialties/relationship-marriage-issues.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Relationship & Marriage Issues</a>
                            <a href="./specialties/self-esteem.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Self-Esteem</a>
                            <a href="./specialties/sleep-disorders.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Sleep Disorders</a>
                            <a href="./specialties/trauma.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Trauma</a>
                            <a href="./specialties/women-s-issues.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Women\'s Issues</a>
                            <a href="./specialties/work-related-or-academic-stressors.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors">Work-Related or Academic Stressors</a>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Locations <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-96 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="grid grid-cols-2 gap-2 p-3 border border-gray-100 rounded-xl bg-gray-50/50">
                            <a href="./areas-we-serve/marietta.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Marietta</a>
                            <a href="./areas-we-serve/alpharetta.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Alpharetta</a>
                            <a href="./areas-we-serve/sandy-springs.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Sandy Springs</a>
                            <a href="./areas-we-serve/brookhaven.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Brookhaven</a>
                            <a href="./areas-we-serve/decatur.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Decatur</a>
                            <a href="./areas-we-serve/smyrna.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Smyrna</a>
                            <a href="./areas-we-serve/johns-creek.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Johns Creek</a>
                            <a href="./areas-we-serve/dunwoody.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Dunwoody</a>
                            <a href="./areas-we-serve/peachtree-corners.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Peachtree Corners</a>
                            <a href="./areas-we-serve/lawrenceville.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Lawrenceville</a>
                            <a href="./areas-we-serve/duluth.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Duluth</a>
                            <a href="./areas-we-serve/woodstock.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Woodstock</a>
                            <a href="./areas-we-serve/canton.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Canton</a>
                            <a href="./areas-we-serve/newnan.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Newnan</a>
                            <a href="./areas-we-serve/peachtree-city.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">Peachtree City</a>
                        </div>
                    </div>
                </div>
                <a href="./blog.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Blog</a>
                <a href="./pricing-insurance.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Rates</a>
                <a href="./contact.html" class="bg-primary text-white border border-primary/20 px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-primary/30 hover:bg-[#7a9e3f] transition-all duration-300 ml-3 font-bold tracking-wide">Book Now</a>
            </nav>
            <button id="mobileMenuBtn" class="xl:hidden w-10 h-10 rounded-xl bg-bgOffWhite flex items-center justify-center hover:bg-gray-200 transition-all duration-300" aria-label="Open Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        <div id="mobileMenu" class="hidden xl:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100 px-6 pb-5 shadow-2xl absolute w-full">
            <nav class="flex flex-col gap-2 text-sm font-semibold pt-4">
                <a href="./index.html" class="bg-primary/10 text-primary px-4 py-3 rounded-xl">Home</a>
                <a href="./about.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">About</a>
                <a href="./services/counseling.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Services</a>
                <a href="./specialties/adhd.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Specialties</a>
                <a href="./blog.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Blog</a>
                <a href="./pricing-insurance.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Rates</a>
                <a href="./contact.html" class="px-4 py-3 rounded-xl bg-primary text-white text-center mt-2 hover:bg-[#7a9e3f] transition-all duration-300">Contact</a>
            </nav>
        </div>
    </header>

    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="./assets/Globe Core-108.jpg" alt="Blog" class="w-full h-full object-cover opacity-30 mix-blend-overlay filter blur-[2px]">
            <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-[#071e26]/80 to-transparent"></div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">' . htmlspecialchars($category) . '</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">' . htmlspecialchars($title) . '</h1>
            <div class="flex items-center justify-center gap-4 text-gray-300 text-sm font-medium">
                <span>' . htmlspecialchars($date) . '</span>
                <span class="w-1 h-1 bg-primary rounded-full"></span>
                <span>By ' . htmlspecialchars($author) . '</span>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none drop-shadow-lg text-white">
            <svg fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[100px]">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,108.83,106.6,117.8,162,118.8,216.7,119.78,271.69,103.55,321.39,56.44Z"></path>
            </svg>
        </div>
    </section>

    <main class="py-16 lg:py-24 bg-white">
        <article class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="mb-10">
                <img alt="' . htmlspecialchars($title) . '" class="w-full rounded-2xl shadow-lg" src="' . htmlspecialchars($imageUrl ?: 'https://globecoreinc.com/assets/globecore-og-image.jpg') . '"/>
            </div>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-xl text-gray-500 leading-relaxed mb-8 font-medium">' . htmlspecialchars($excerpt) . '</p>
                ' . $bodyParagraphs . '
            </div>

            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <a href="./blog.html" class="inline-flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Back to Blog
                    </a>
                    <a href="./contact.html" class="bg-primary text-white font-bold px-6 py-3 rounded-full hover:bg-[#7a9e3f] transition-all duration-300 shadow-lg shadow-primary/30">
                        Book a Consultation
                    </a>
                </div>
            </div>
        </article>
    </main>

    <footer class="relative bg-gradient-to-b from-deepTeal to-[#024d5e] text-gray-200 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <img src="./assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Logo" class="h-10 w-auto brightness-0 invert mb-5">
                    <p class="text-sm leading-relaxed text-gray-400">Providing expert psychological services, testing, and consulting in the Atlanta area.</p>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="./about.html" class="hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="./services/counseling.html" class="hover:text-primary transition-colors">Services</a></li>
                        <li><a href="./blog.html" class="hover:text-primary transition-colors">Blog</a></li>
                        <li><a href="./contact.html" class="hover:text-primary transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Services</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="./services/tms-therapy.html" class="hover:text-primary transition-colors">TMS Therapy</a></li>
                        <li><a href="./services/counseling.html" class="hover:text-primary transition-colors">Counseling</a></li>
                        <li><a href="./services/psychological-evaluations.html" class="hover:text-primary transition-colors">Evaluations</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>(770) 284-1044</li>
                        <li>Atlanta, GA</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10 mt-10 pt-6 text-center text-sm text-gray-500">
                <p>&copy; ' . date('Y') . ' GlobeCoRe Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById("mobileMenuBtn").addEventListener("click", function() {
            document.getElementById("mobileMenu").classList.toggle("hidden");
        });
    </script>
</body>
</html>';
}

if ($isEditing && $content) {
    preg_match('/<title>([^<]+)/i', $content, $titleMatch);
    $pageTitle = $titleMatch[1] ?? '';
    
    preg_match('/<span class="text-white text-xs[^>]*>([^<]+)<\/span>/i', $content, $categoryMatch);
    $pageCategory = $categoryMatch[1] ?? 'Mental Health';
    
    preg_match('/By ([^<]+)</i', $content, $authorMatch);
    $pageAuthor = $authorMatch[1] ?? 'Kelly Lewis-Arthur';
    
    preg_match('/(\d{1,2}\/\d{1,2}\/\d{4})/', $content, $dateMatch);
    $pageDate = $dateMatch[1] ?? date('m/d/Y');
    
    preg_match('/<p class="text-xl[^>]*>([^<]+)<\/p>/i', $content, $excerptMatch);
    $pageExcerpt = $excerptMatch[1] ?? '';
    
    preg_match('/<img[^>]+src="([^"]+)"/i', $content, $imageMatch);
    $pageImage = $imageMatch[1] ?? '';
    
    $pageBody = '';
    $contentWithoutHtml = strip_tags($content);
    $contentWithoutHtml = html_entity_decode($contentWithoutHtml);
    $pageBody = trim(preg_replace('/\s+/', ' ', $contentWithoutHtml));
} else {
    $pageTitle = '';
    $pageCategory = 'Mental Health';
    $pageAuthor = 'Kelly Lewis-Arthur';
    $pageDate = date('m/d/Y');
    $pageExcerpt = '';
    $pageImage = '';
    $pageBody = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $isEditing ? 'Edit Blog' : 'Create New Blog' ?> | GlobeCoRe Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8BAF4C',
                        secondary: '#0F7A8D',
                        deepTeal: '#027289',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-raleway min-h-screen">
    <nav class="bg-[#071e26] text-white px-6 py-4 shadow-lg">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                <span class="text-xl font-bold"><?= $isEditing ? 'Edit Blog' : 'Create New Blog' ?></span>
            </div>
            <a href="dashboard.php" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Dashboard
            </a>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 py-8">
        <?php if ($message): ?>
            <div class="bg-green-50 text-green-600 px-6 py-4 rounded-xl mb-6 font-medium">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-8">
            <?php if ($isEditing): ?>
                <input type="hidden" name="existing_filename" value="<?= htmlspecialchars($filename) ?>">
                <input type="hidden" name="save_existing" value="1">
            <?php endif; ?>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-lg font-bold text-[#071e26] mb-6">Basic Information</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Blog Title *</label>
                        <input type="text" name="title" required value="<?= htmlspecialchars($pageTitle) ?>"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                            placeholder="Enter blog title">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                        <select name="category" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all">
                            <option value="Mental Health" <?= $pageCategory === 'Mental Health' ? 'selected' : '' ?>>Mental Health</option>
                            <option value="TMS" <?= $pageCategory === 'TMS' ? 'selected' : '' ?>>TMS Therapy</option>
                            <option value="Counseling" <?= $pageCategory === 'Counseling' ? 'selected' : '' ?>>Counseling</option>
                            <option value="Depression" <?= $pageCategory === 'Depression' ? 'selected' : '' ?>>Depression</option>
                            <option value="Anxiety" <?= $pageCategory === 'Anxiety' ? 'selected' : '' ?>>Anxiety</option>
                            <option value="Wellness" <?= $pageCategory === 'Wellness' ? 'selected' : '' ?>>Wellness</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Publish Date</label>
                        <input type="text" name="date" value="<?= htmlspecialchars($pageDate) ?>"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                            placeholder="MM/DD/YYYY">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Author</label>
                        <input type="text" name="author" value="<?= htmlspecialchars($pageAuthor) ?>"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                            placeholder="Author name">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Featured Image URL</label>
                        <input type="url" name="image_url" value="<?= htmlspecialchars($pageImage) ?>"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                            placeholder="https://example.com/image.jpg">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Excerpt (Short Description)</label>
                        <textarea name="excerpt" rows="2"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                            placeholder="Brief description for blog listing"><?= htmlspecialchars($pageExcerpt) ?></textarea>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-lg font-bold text-[#071e26] mb-6">Blog Content</h2>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Blog Body Content</label>
                    <textarea name="body_content" rows="15" required
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all font-mono text-sm"
                        placeholder="Write your blog content here... Use blank lines to separate paragraphs."><?= htmlspecialchars($pageBody) ?></textarea>
                    <p class="text-sm text-gray-500 mt-2">Tip: Use blank lines to separate paragraphs. The system will automatically format them.</p>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4">
                <a href="dashboard.php" class="px-6 py-3 border border-gray-200 text-gray-600 font-semibold rounded-xl hover:bg-gray-50 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-8 py-3 bg-primary text-white font-bold rounded-xl hover:bg-[#7a9e3f] transition-all duration-300 shadow-lg shadow-primary/30">
                    <?= $isEditing ? 'Update Blog' : 'Publish Blog' ?>
                </button>
            </div>
        </form>
    </main>
</body>
</html>
