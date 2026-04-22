<?php
// Generator script for all GlobeCoRe pages

$baseDir = __DIR__;

$services = [
    ["title" => "Counseling", "slug" => "counseling", "desc" => "Individual Therapy, Couples Counseling, Family Therapy"],
    ["title" => "Psychological Evaluations", "slug" => "psychological-evaluations", "desc" => "Mental Health Assessment, Psychiatric Diagnostic Evaluation"],
    ["title" => "Medication Management", "slug" => "medication-management", "desc" => "Psychiatric Medication Management"],
    ["title" => "TMS Therapy", "slug" => "tms-therapy", "desc" => "Non-Invasive Depression Treatment, Transcranial Magnetic Stimulation"],
    ["title" => "Personal Development", "slug" => "personal-development", "desc" => "Mental Wellness Workshops, Life Coaching"],
    ["title" => "Professional Development", "slug" => "professional-development", "desc" => "Corporate Mental Health Training, DEI Training"]
];

$specialties = [
    ["title" => "Addiction", "slug" => "addiction"],
    ["title" => "ADHD", "slug" => "adhd"],
    ["title" => "Aging Issues", "slug" => "aging-issues"],
    ["title" => "Anger Management", "slug" => "anger-management"],
    ["title" => "Bipolar Disorder", "slug" => "bipolar-disorder"],
    ["title" => "Chronic Illness", "slug" => "chronic-illness"],
    ["title" => "Codependency", "slug" => "codependency"],
    ["title" => "Depression & Anxiety", "slug" => "depression-anxiety"],
    ["title" => "Developmental & Intellectual Disabilities", "slug" => "developmental-intellectual-disabilities"],
    ["title" => "Eating Disorders", "slug" => "eating-disorders"],
    ["title" => "Fertility, Pregnancy & Parenting", "slug" => "fertility-pregnancy-parenting"],
    ["title" => "Finding Purpose", "slug" => "finding-purpose"],
    ["title" => "Finding The Love You Deserve", "slug" => "finding-the-love-you-deserve"],
    ["title" => "Grief & Loss", "slug" => "grief-loss"],
    ["title" => "Life Transitions", "slug" => "life-transitions"],
    ["title" => "LGBTQI+", "slug" => "lgbtqi"],
    ["title" => "OCD", "slug" => "ocd"],
    ["title" => "Racial, Ethnic and Religious Stressors", "slug" => "racial-ethnic-stressors"],
    ["title" => "Relationship & Marriage Issues", "slug" => "relationship-marriage-issues"],
    ["title" => "Self-Esteem", "slug" => "self-esteem"],
    ["title" => "Sleep Disorders", "slug" => "sleep-disorders"],
    ["title" => "Trauma", "slug" => "trauma"],
    ["title" => "Women's Issues", "slug" => "womens-issues"],
    ["title" => "Work-Related or Academic Stressors", "slug" => "work-stressors"]
];

$locations = [
    "Marietta", "Alpharetta", "Sandy Springs", "Brookhaven", "Decatur", "Smyrna", "Johns Creek", "Dunwoody", "Peachtree Corners", "Lawrenceville", "Duluth", "Woodstock", "Canton", "Newnan", "Peachtree City"
];

$otherPages = [
    ["title" => "About Us", "slug" => "about"],
    ["title" => "Meet Our Team", "slug" => "about/meet-our-team"],
    ["title" => "Philosophy & Core Values", "slug" => "about/philosophy-core-values"],
    ["title" => "Contact", "slug" => "contact"],
    ["title" => "Career", "slug" => "career"],
    ["title" => "Blog", "slug" => "blog"],
    ["title" => "Pricing & Insurance", "slug" => "pricing-insurance"],
    ["title" => "Client Portal", "slug" => "client-portal"],
    ["title" => "Staff Portal", "slug" => "staff-portal"],
    ["title" => "Privacy Policy", "slug" => "privacy-policy"],
    ["title" => "Terms of Service", "slug" => "terms-of-service"],
    ["title" => "Accessibility Statement", "slug" => "accessibility"]
];

// Helper to make directory if not exists
function ensureDir($path) {
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

// Generate the common header and footer html blocks based on index.html
$indexHtml = file_get_contents($baseDir . "/index.html");

// Extract the <head>
$headStart = strpos($indexHtml, "<head>");
$headEnd = strpos($indexHtml, "</head>") + 7;
$headContent = substr($indexHtml, $headStart, $headEnd - $headStart);

// We will manually construct a brand new beautiful dropdown navigation
$navHtml = <<<HTML
    <!-- ===================== TOP UTILITY BAR ===================== -->
    <div class="bg-[#071e26] text-gray-300 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex justify-between items-center">
            <div class="hidden md:flex items-center gap-1">
                <a href="/client-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Client Portal</a>
                <a href="/staff-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Staff Portal</a>
            </div>
            <div class="flex items-center gap-2 font-semibold ml-auto text-white">
                <a href="tel:7702841044" class="hover:text-primary transition-all duration-300">(770) 284-1044</a>
            </div>
        </div>
    </div>

    <!-- ===================== MAIN NAVIGATION HEADER ===================== -->
    <header class="bg-white/80 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
            <a href="/">
                <img src="/assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Logo" class="h-11 w-auto">
            </a>
            <nav class="hidden xl:flex items-center gap-2 text-[13px] font-semibold relative">
                <a href="/" class="px-4 py-2 text-textMain hover:text-primary">Home</a>
                
                <!-- About Dropdown -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1">About <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1">
                            <a href="/about.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary">About Us</a>
                            <a href="/about/meet-our-team.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary">Meet Our Team</a>
                            <a href="/about/philosophy-core-values.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary">Philosophy & Values</a>
                        </div>
                    </div>
                </div>

                <!-- Services Dropdown (Mega menu if many, but simple for 6) -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1">Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-64 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1">
HTML;

foreach($services as $svc) {
    $navHtml .= '<a href="/services/'.$svc['slug'].'.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary">'.$svc['title'].'</a>';
}

$navHtml .= <<<HTML
                        </div>
                    </div>
                </div>

                <!-- Specialties Dropdown -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1">Specialties <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-[600px] bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50 p-4">
                        <div class="grid grid-cols-2 gap-2">
HTML;

foreach($specialties as $sp) {
    $navHtml .= '<a href="/specialties/'.$sp['slug'].'.html" class="px-3 py-1.5 rounded-lg hover:bg-primary/10 hover:text-primary text-xs">'.$sp['title'].'</a>';
}

$navHtml .= <<<HTML
                        </div>
                    </div>
                </div>

                <!-- Locations Dropdown -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1">Locations <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-80 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50 p-4">
                        <div class="grid grid-cols-2 gap-2">
HTML;

foreach($locations as $loc) {
    $slug = strtolower(str_replace(' ', '-', $loc));
    $navHtml .= '<a href="/areas-we-serve/'.$slug.'.html" class="px-3 py-1.5 rounded-lg hover:bg-primary/10 hover:text-primary text-xs">'.$loc.'</a>';
}

$navHtml .= <<<HTML
                        </div>
                    </div>
                </div>
                
                <a href="/blog.html" class="px-3 py-2 text-textMain hover:text-primary">Blog</a>
                <a href="/pricing-insurance.html" class="px-3 py-2 text-textMain hover:text-primary">Rates</a>
                <a href="/contact.html" class="bg-primary text-white px-5 py-2 rounded-full hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 ml-2">Contact</a>
            </nav>
            <button id="mobileMenuBtn" class="xl:hidden w-10 h-10 rounded-xl bg-bgOffWhite flex items-center justify-center hover:bg-gray-200 transition-all duration-300" aria-label="Open Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        
        <div id="mobileMenu" class="hidden xl:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100 px-6 pb-5">
            <nav class="flex flex-col gap-1 text-sm font-semibold pt-4">
                <a href="/" class="bg-primary text-white px-4 py-3 rounded-xl text-center">Home</a>
                <a href="/about.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">About</a>
                <a href="/services/counseling.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Services</a>
                <a href="/specialties/adhd.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Specialties</a>
                <a href="/blog.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Blog</a>
                <a href="/pricing-insurance.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Rates</a>
                <a href="/contact.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Contact</a>
            </nav>
        </div>
    </header>
HTML;

// Exctract Footer from index (we'll just use a generic footer to simplify, but wait, we can just grab the existing footer from <footer to </footer>
$footerStart = strpos($indexHtml, "<footer");
if ($footerStart !== false) {
    $footerEnd = strpos($indexHtml, "</footer>") + 9;
    $footerHtml = substr($indexHtml, $footerStart, $footerEnd - $footerStart);
} else {
    $footerHtml = "<footer><div class='max-w-7xl mx-auto py-10 text-center'>&copy; GlobeCoRe Inc. All rights reserved.</div></footer>";
}

function generateFaqs($topic, $count=5) {
    $faqs = [];
    for($i=1; $i<=$count; $i++) {
        $faqs[] = [
            "q" => "What should I know about $topic (Question $i)?",
            "a" => "This is an AI optimized detailed response offering SEO rich value and elaborating on our customized and creative approach to $topic. We ensure comprehensive care in the Atlanta area."
        ];
    }
    
    $html = '<section class="py-16 bg-bgOffWhite"><div class="max-w-4xl mx-auto px-4"><h2 class="text-3xl font-bold text-center mb-10">Frequently Asked Questions</h2><div class="space-y-4">';
    foreach($faqs as $f) {
        $html .= '<details class="group bg-white rounded-xl shadow-sm [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between gap-1.5 p-5 text-gray-900 font-semibold">
                <h3 class="pr-6">'.$f['q'].'</h3>
                <span class="relative h-5 w-5 shrink-0 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 h-5 w-5 opacity-100 group-open:opacity-0 faq-chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 h-5 w-5 opacity-0 group-open:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                </span>
            </summary>
            <div class="px-5 pb-5 text-gray-600 leading-relaxed border-t border-gray-100 pt-4">'.$f['a'].'</div>
        </details>';
    }
    $html .= '</div></div></section>';
    return $html;
}

function buildPage($head, $nav, $footer, $title, $subtitle, $content, $typeClass="bg-primary/5") {
    // We update the <title> tag in head
    $head = preg_replace("/<title>.*<\/title>/", "<title>$title | GlobeCoRe Inc. Atlanta</title>", $head);
    
    // adjust base paths in head if nested (a bit hacky but works for absolute imports since they are missing /)
    // Actually the user's index.html has relative "assets/..." we should replace with "/assets/..." to be safe on nested pages
    $head = str_replace('"assets/', '"/assets/', $head);
    $nav = str_replace('"assets/', '"/assets/', $nav);
    $footer = str_replace('"assets/', '"/assets/', $footer);
    
    $body = <<<HTML
<!DOCTYPE html>
<html lang="en">
$head
<body class="font-raleway text-textMain bg-white">
$nav

<!-- Page Hero -->
<section class="relative py-24 $typeClass overflow-hidden">
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white" style="clip-path: polygon(0 40%, 100% 0, 100% 100%, 0% 100%);"></div>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 relative z-10 text-center">
        <span class="inline-block px-3 py-1 bg-primary/20 text-primary font-bold tracking-widest text-xs rounded-full mb-4 uppercase">$subtitle</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-[#071e26] leading-tight mb-6">$title</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Expert care and tailored approaches to support your mental wellness journey in Atlanta and beyond.</p>
    </div>
</section>

<!-- Main Content -->
<main class="py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 prose prose-lg prose-primary text-gray-600">
        $content
    </div>
</main>

HTML;

    $body .= generateFaqs($title);

    $body .= <<<HTML
$footer
</body>
</html>
HTML;
    return $body;
}

// 1. Generate Services
ensureDir($baseDir . "/services");
foreach($services as $svc) {
    $content = "<h2 class='text-3xl font-bold text-textMain mb-4'>Comprehensive {$svc['title']} in Atlanta</h2>";
    $content .= "<p class='mb-6'>At GlobeCoRe, we offer leading-edge <strong>{$svc['title']}</strong> tailored to your unique challenges and goals. Our experienced clinicians use evidence-based therapies and an empathetic approach to ensure the best outcomes.</p>";
    $content .= "<div class='bg-secondary/10 p-8 rounded-3xl mb-8'><h3 class='text-xl font-bold text-secondary mb-3'>Why Choose Us?</h3><ul class='list-disc pl-5 space-y-2'><li>Personalized treatment plans</li><li>Expert, licensed mental health professionals</li><li>Culturally sensitive, inclusive care</li><li>Flexible appointment scheduling including Telehealth</li></ul></div>";
    $content .= "<p>Contact us today to learn more about how our {$svc['desc']} can support you.</p>";
    
    $html = buildPage($headContent, $navHtml, $footerHtml, $svc['title'], "Our Services", $content, "bg-gradient-to-br from-primary/10 to-transparent");
    file_put_contents($baseDir . "/services/" . $svc['slug'] . ".html", $html);
}

// 2. Generate Specialties
ensureDir($baseDir . "/specialties");
foreach($specialties as $sp) {
    $content = "<h2 class='text-3xl font-bold text-textMain mb-4'>Specialized Care for {$sp['title']}</h2>";
    $content .= "<p class='mb-6'>Navigating <strong>{$sp['title']}</strong> can be challenging, but you don't have to do it alone. GlobeCoRe provides dedicated, specialized therapy and interventions focusing on treating {$sp['title']} with the utmost care, utilizing modern therapeutic modalities.</p>";
    $content .= "<p class='mb-6'>Our practitioners are highly trained in addressing the specific complexities associated with {$sp['title']}, ensuring you receive comprehensive, AI-optimized treatment methodologies structured for long-term emotional well-being.</p>";
    $content .= "<div class='p-6 bg-[#071e26] text-white rounded-2xl text-center'><h3 class='text-2xl font-bold mb-3'>Ready to find relief?</h3><a href='/contact.html' class='inline-block bg-primary px-6 py-3 rounded-full font-bold hover:scale-105 transition-transform'>Book an Appointment</a></div>";
    
    $html = buildPage($headContent, $navHtml, $footerHtml, $sp['title'] . " Therapy", "Specialty Treatment", $content, "bg-gradient-to-tr from-secondary/10 to-transparent");
    file_put_contents($baseDir . "/specialties/" . $sp['slug'] . ".html", $html);
}

// 3. Generate Locations
ensureDir($baseDir . "/areas-we-serve");
foreach($locations as $loc) {
    $slug = strtolower(str_replace(' ', '-', $loc));
    
    $content = "<h2 class='text-3xl font-bold text-textMain mb-4'>Mental Health Services in $loc, GA</h2>";
    $content .= "<p class='mb-6'>GlobeCoRe is proud to serve the community of <strong>$loc, Georgia</strong>. Whether you seek counseling, TMS therapy, or psychological evaluations, our telehealth services and Atlanta office provide accessible, premium care for residents of $loc.</p>";
    $content .= "<p class='mb-6'>We prioritize a holistic, culturally affirming approach. Searching for the best therapist near $loc? Look no further.</p>";
    
    $content .= '<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
        <div class="p-6 border border-gray-100 shadow-sm rounded-2xl hover:shadow-md transition-shadow">
            <h3 class="font-bold text-lg mb-2">Telehealth for '.$loc.'</h3>
            <p class="text-sm">Access top-tier psychiatric and psychological support from the comfort of your home in '.$loc.'.</p>
        </div>
        <div class="p-6 border border-gray-100 shadow-sm rounded-2xl hover:shadow-md transition-shadow">
            <h3 class="font-bold text-lg mb-2">Comprehensive Assessments</h3>
            <p class="text-sm">We provide meticulous ADHD, Autism, and diagnostic evaluations for adults and children.</p>
        </div>
    </div>';

    $html = buildPage($headContent, $navHtml, $footerHtml, "Therapy in $loc, GA", "Areas We Serve", $content, "bg-gradient-to-r from-[#071e26]/5 to-[#071e26]/10");
    file_put_contents($baseDir . "/areas-we-serve/" . $slug . ".html", $html);
}

// 4. Generate Other Pages
foreach($otherPages as $page) {
    $slug = $page['slug'];
    if (strpos($slug, '/') !== false) {
        $parts = explode('/', $slug);
        array_pop($parts);
        ensureDir($baseDir . "/" . implode('/', $parts));
    }
    
    $content = "<h2 class='text-3xl font-bold text-textMain mb-4'>{$page['title']}</h2>";
    $content .= "<p class='mb-6'>Welcome to the {$page['title']} page. GlobeCoRe is dedicated to providing transparency, effective support, and accessible information for all our clients.</p>";
    $content .= "<p>Please contact our support team at (770) 284-1044 if you need further assistance navigating our resources or understanding our practice.</p>";
    
    $html = buildPage($headContent, $navHtml, $footerHtml, $page['title'], "Information & Resources", $content, "bg-gray-50");
    file_put_contents($baseDir . "/" . $slug . ".html", $html);
}

// 5. Update index.html navigation replacing everything between "<!-- ===================== 2. MAIN NAVIGATION HEADER ===================== -->" and "<!-- ===================== 3. ALERT / PROMO BAR ===================== -->"
$indexHtml = preg_replace(
    "/<!-- ===================== 2\. MAIN NAVIGATION HEADER ===================== -->(.*?)<!-- ===================== 3\. ALERT \/ PROMO BAR ===================== -->/s",
    $navHtml . "\n\n    <!-- ===================== 3. ALERT / PROMO BAR ===================== -->",
    $indexHtml
);
file_put_contents($baseDir . "/index.html", $indexHtml);

echo "All pages generated successfully!";
?>
