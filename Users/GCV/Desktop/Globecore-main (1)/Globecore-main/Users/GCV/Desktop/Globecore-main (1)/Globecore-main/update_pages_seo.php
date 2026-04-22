<?php
// Advanced Generator script for all GlobeCoRe pages with SEO, AI Optimization, and Creative Designs

$baseDir = __DIR__;

// Configuration
$services = [
    ["title" => "Counseling", "slug" => "counseling", "desc" => "Individual Therapy, Couples Counseling, Family Therapy", "keyword" => "Counseling Services Atlanta GA"],
    ["title" => "Psychological Evaluations", "slug" => "psychological-evaluations", "desc" => "Mental Health Assessment, Psychiatric Diagnostic Evaluation", "keyword" => "Psychological Evaluations Atlanta GA"],
    ["title" => "Medication Management", "slug" => "medication-management", "desc" => "Psychiatric Medication Management", "keyword" => "Psychiatric Medication Management Atlanta GA"],
    ["title" => "TMS Therapy", "slug" => "tms-therapy", "desc" => "Non-Invasive Depression Treatment, Transcranial Magnetic Stimulation", "keyword" => "TMS Therapy Atlanta GA"],
    ["title" => "Personal Development", "slug" => "personal-development", "desc" => "Mental Wellness Workshops, Life Coaching", "keyword" => "Personal Development Programs Atlanta GA"],
    ["title" => "Professional Development", "slug" => "professional-development", "desc" => "Corporate Mental Health Training, DEI Training", "keyword" => "Corporate Mental Health Training Atlanta GA"]
];

$specialties = [
    "Addiction", "ADHD", "Aging Issues", "Anger Management", "Bipolar Disorder", "Chronic Illness", 
    "Codependency", "Depression & Anxiety", "Developmental & Intellectual Disabilities", "Eating Disorders", 
    "Fertility, Pregnancy & Parenting", "Finding Purpose", "Finding The Love You Deserve", "Grief & Loss", 
    "Life Transitions", "LGBTQI+", "OCD", "Racial, Ethnic and Religious Stressors", "Relationship & Marriage Issues", 
    "Self-Esteem", "Sleep Disorders", "Trauma", "Women's Issues", "Work-Related or Academic Stressors"
];

$locations = [
    "Marietta", "Alpharetta", "Sandy Springs", "Brookhaven", "Decatur", "Smyrna", 
    "Johns Creek", "Dunwoody", "Peachtree Corners", "Lawrenceville", "Duluth", 
    "Woodstock", "Canton", "Newnan", "Peachtree City"
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

$images = glob($baseDir . "/assets/*.jpg");
if (empty($images)) {
    $images = ["https://images.unsplash.com/photo-1573497620053-ea5300f94f21?auto=format&fit=crop&w=1200&q=80"];
} else {
    $images = array_map(function($img) use ($baseDir) {
        return "/assets/" . basename($img);
    }, $images);
}

function getRandomImage() {
    global $images;
    return $images[array_rand($images)];
}

function ensureDir($path) {
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

$indexHtml = file_get_contents($baseDir . "/index.html");

// Extract the <head>
$headStart = strpos($indexHtml, "<head>");
$headEnd = strpos($indexHtml, "</head>") + 7;
$headContent = substr($indexHtml, $headStart, $headEnd - $headStart);

// Inject specific schema placeholder to be replaced later
$headContent = preg_replace('/<script type="application\/ld\+json">.*?<\/script>/s', '<!-- SCHEMA_PLACEHOLDER -->', $headContent, 1);

// Extract the <footer>
$footerStart = strpos($indexHtml, "<footer");
if ($footerStart !== false) {
    $footerEnd = strpos($indexHtml, "</footer>") + 9;
    $footerHtml = substr($indexHtml, $footerStart, $footerEnd - $footerStart);
} else {
    $footerHtml = "<footer><div class='max-w-7xl mx-auto py-10 text-center'>&copy; GlobeCoRe Inc. All rights reserved.</div></footer>";
}

// Generate the common header and footer html blocks based on index.html
$navHtml = <<<HTML
    <!-- ===================== TOP UTILITY BAR ===================== -->
    <div class="bg-[#071e26] text-gray-300 text-xs shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex justify-between items-center">
            <div class="hidden md:flex items-center gap-1">
                <a href="/client-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Client Portal</a>
                <a href="/staff-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Staff Portal</a>
            </div>
            <div class="flex items-center gap-2 font-semibold ml-auto text-white">
                <a href="tel:7702841044" class="hover:text-primary transition-all duration-300 flex items-center gap-2">
                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                (770) 284-1044</a>
            </div>
        </div>
    </div>

    <!-- ===================== MAIN NAVIGATION HEADER ===================== -->
    <header class="bg-white/80 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
            <a href="/">
                <img src="/assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Logo" class="h-11 w-auto">
            </a>
            <nav class="hidden xl:flex items-center gap-2 text-[13px] font-semibold relative">
                <a href="/" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Home</a>
                
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">About <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
                            <a href="/about.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">About Us</a>
                            <a href="/about/meet-our-team.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Meet Our Team</a>
                            <a href="/about/philosophy-core-values.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Philosophy & Values</a>
                        </div>
                    </div>
                </div>

                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-72 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
HTML;
foreach($services as $svc) {
    $navHtml .= '<a href="/services/'.$svc['slug'].'.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>'.$svc['title'].'</a>';
}
$navHtml .= <<<HTML
                        </div>
                    </div>
                </div>

                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Specialties <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-1/2 -ml-[350px] mt-0 w-[700px] bg-white shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="grid grid-cols-3 gap-2 p-4 border border-gray-100 rounded-2xl">
HTML;
foreach($specialties as $sp) {
    $slug = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $sp));
    $slug = trim($slug, '-');
    $navHtml .= '<a href="/specialties/'.$slug.'.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors border border-transparent hover:border-primary/20">'.$sp.'</a>';
}
$navHtml .= <<<HTML
                        </div>
                    </div>
                </div>

                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Locations <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-96 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="grid grid-cols-2 gap-2 p-3 border border-gray-100 rounded-xl bg-gray-50/50">
HTML;
foreach($locations as $loc) {
    $slug = strtolower(str_replace(' ', '-', $loc));
    $navHtml .= '<a href="/areas-we-serve/'.$slug.'.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2"><svg class="w-3 h-3 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>'.$loc.'</a>';
}
$navHtml .= <<<HTML
                        </div>
                    </div>
                </div>
                
                <a href="/blog.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Blog</a>
                <a href="/pricing-insurance.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Rates</a>
                <a href="/contact.html" class="bg-primary text-white border border-primary/20 px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-primary/30 hover:bg-[#7a9e3f] transition-all duration-300 ml-3 font-bold tracking-wide">Book Now</a>
            </nav>
            <button id="mobileMenuBtn" class="xl:hidden w-10 h-10 rounded-xl bg-bgOffWhite flex items-center justify-center hover:bg-gray-200 transition-all duration-300" aria-label="Open Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        
        <div id="mobileMenu" class="hidden xl:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100 px-6 pb-5 shadow-2xl absolute w-full">
            <nav class="flex flex-col gap-2 text-sm font-semibold pt-4">
                <a href="/" class="bg-primary/10 text-primary px-4 py-3 rounded-xl">Home</a>
                <a href="/about.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">About</a>
                <a href="/services/counseling.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Services</a>
                <a href="/specialties/adhd.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Specialties</a>
                <a href="/blog.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Blog</a>
                <a href="/pricing-insurance.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Rates</a>
                <a href="/contact.html" class="px-4 py-3 rounded-xl bg-primary text-white text-center mt-2 hover:bg-[#7a9e3f] transition-all duration-300">Contact</a>
            </nav>
        </div>
    </header>
HTML;

function generateFaqsHTML($faqs) {
    if(empty($faqs)) return "";
    $html = '<section class="py-20 bg-white border-t border-gray-100"><div class="max-w-4xl mx-auto px-4"><div class="text-center mb-12"><span class="text-secondary font-bold tracking-widest text-xs uppercase bg-secondary/10 px-4 py-1.5 rounded-full mb-4 inline-block">Support & Information</span><h2 class="text-3xl md:text-4xl font-bold text-[#071e26] mt-4">Frequently Asked Questions</h2><div class="w-20 h-1 bg-gradient-to-r from-secondary to-primary mx-auto mt-6 rounded-full"></div></div><div class="space-y-4">';
    
    $schemas = [];
    foreach($faqs as $f) {
        $schemas[] = [
            "@type" => "Question",
            "name" => $f['q'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => strip_tags($f['a'])
            ]
        ];
        $html .= '<details class="group bg-bgOffWhite hover:bg-white rounded-2xl shadow-sm hover:shadow-md transition-all border border-transparent hover:border-gray-200 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between gap-1.5 p-6 text-gray-900 font-semibold text-lg">
                <h3 class="pr-6">'.$f['q'].'</h3>
                <span class="relative h-6 w-6 shrink-0 text-primary bg-primary/10 rounded-full flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute h-4 w-4 opacity-100 group-open:opacity-0 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute h-4 w-4 opacity-0 group-open:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" /></svg>
                </span>
            </summary>
            <div class="px-6 pb-6 text-gray-600 leading-relaxed">'.$f['a'].'</div>
        </details>';
    }
    $html .= '</div></div></section>';
    
    $schemaJson = json_encode([
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $schemas
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    
    return ["html" => $html, "schema" => "<script type=\"application/ld+json\">\n" . $schemaJson . "\n</script>"];
}

function buildPage($head, $nav, $footer, $metaTitle, $title, $subtitle, $contentHTML, $faqs, $heroImg) {
    // Inject Meta Title
    $head = preg_replace("/<title>.*<\/title>/", "<title>$metaTitle | GlobeCoRe Inc. Atlanta, GA</title>", $head);
    $head = preg_replace("/<meta name=\"description\" content=\"(.*)\">/i", "<meta name=\"description\" content=\"Discover top-rated $metaTitle at GlobeCoRe Inc. in Atlanta, GA. We offer inclusive, culturally sensitive care and telehealth services.\">", $head);
    
    // Fix paths
    $head = str_replace('"assets/', '"/assets/', $head);
    $nav = str_replace('"assets/', '"/assets/', $nav);
    $footer = str_replace('"assets/', '"/assets/', $footer);
    
    $faqData = generateFaqsHTML($faqs);
    $head = str_replace('<!-- SCHEMA_PLACEHOLDER -->', $faqData['schema'], $head);
    
    $body = <<<HTML
<!DOCTYPE html>
<html lang="en">
$head
<body class="font-raleway text-textMain bg-white">
$nav

<!-- Creative Hero Section -->
<section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
    <div class="absolute inset-0">
        <img src="$heroImg" alt="$title" class="w-full h-full object-cover opacity-30 mix-blend-overlay filter blur-[2px]">
        <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-[#071e26]/80 to-transparent"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
            <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
            <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">$subtitle</span>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">
            $title
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
            Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care, and profound expertise.
        </p>
        
        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact.html" class="bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 text-lg">Book a Consultation</a>
            <a href="#content" class="bg-white/10 text-white font-bold py-4 px-10 rounded-full border border-white/20 hover:bg-white/20 transition-all duration-300 text-lg backdrop-blur-sm">Learn More</a>
        </div>
    </div>
    
    <!-- Custom Wave Divider -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none drop-shadow-lg text-white">
        <svg fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-[60px] md:h-[100px]">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,108.83,106.6,117.8,162,118.8,216.7,119.78,271.69,103.55,321.39,56.44Z"></path>
        </svg>
    </div>
</section>

<!-- Main SEO Content -->
<main id="content" class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6">
        $contentHTML
    </div>
</main>

{$faqData['html']}

$footer

<script>
    // Re-bind mobile menu logic
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    if(mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
</script>
</body>
</html>
HTML;
    return $body;
}

// ========================
// 1. GENERATE SERVICES
// ========================
ensureDir($baseDir . "/services");
foreach($services as $svc) {
    $topic = $svc['title'];
    $slug = $svc['slug'];
    
    $content = <<<HTML
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">
        <div class="lg:col-span-7 space-y-8">
            <h2 class="text-3xl lg:text-5xl font-extrabold text-[#071e26] leading-tight">Comprehensive $topic in Atlanta, GA</h2>
            <div class="prose prose-lg text-gray-600">
                <p>At GlobeCoRe Inc., our specialized <strong>$topic</strong> services are deeply rooted in clinical excellence and cultural compassion. Understanding that no two individuals are exactly alike, our skilled practitioners in the Atlanta area utilize artificial intelligence informed research alongside proven therapeutic frameworks to deliver customized mental health solutions.</p>
                <p>When you seek $topic, it is crucial to find a team that prioritizes both scientific rigor and empathetic understanding. We provide targeted interventions ranging from advanced Cognitive Behavioral Therapy (CBT) to cutting-edge holistic support mechanisms, specifically formulated to promote sustainable wellness.</p>
            </div>
            
            <div class="bg-gray-50 border-l-4 border-primary p-6 rounded-r-2xl shadow-sm my-8">
                <h3 class="text-xl font-bold text-[#071e26] mb-3">Core Pillars of Our $topic Strategy:</h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3"><svg class="w-6 h-6 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-700"><strong>Evidence-Based Modalities:</strong> Interventions backed by robust clinical data.</span></li>
                    <li class="flex items-start gap-3"><svg class="w-6 h-6 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-700"><strong>Cultural Intersectionality:</strong> Care designed for diverse backgrounds and identities.</span></li>
                    <li class="flex items-start gap-3"><svg class="w-6 h-6 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-700"><strong>Holistic Integration:</strong> Addressing mind, body, and emotional balance simultaneously.</span></li>
                </ul>
            </div>
        </div>
        <div class="lg:col-span-5">
            <div class="bg-white shadow-2xl rounded-3xl p-2 rotate-2 hover:rotate-0 transition-all duration-500">
                <img src="$images[0]" alt="$topic Services Atlanta" class="w-full h-auto rounded-2xl object-cover">
            </div>
        </div>
    </div>
HTML;

    $faqs = [
        ["q" => "What exactly is $topic at GlobeCoRe?", "a" => "Our $topic is a structured, clinical approach provided by licensed experts in Atlanta, GA aimed at isolating barriers to your mental wellness and meticulously resolving them through validated methods."],
        ["q" => "How long does a typical $topic engagement last?", "a" => "The duration of $topic is highly individualized. While some acute symptoms can be managed in a few strategic sessions, deep foundational healing often requires consistent, long-term support. We frequently review progress with our clients to ensure the timeline fits their specific recovery arc."],
        ["q" => "Is telehealth available for $topic?", "a" => "Yes. We offer secure, HIPAA-compliant telehealth options for $topic. This ensures that regardless of your location within our service radius, high-tier mental healthcare is readily accessible."],
        ["q" => "How do I know if I need $topic?", "a" => "If you find that your symptoms are significantly disrupting your personal life, relationships, or academic/professional performance, consulting a GlobeCoRe specialist for an initial $topic evaluation is highly recommended."],
        ["q" => "Does insurance cover $topic?", "a" => "Most primary health insurance plans provide substantial coverage for $topic. Our billing specialists handle benefits verification to ensure you have a clear understanding of coverage before commencing treatment."]
    ];

    $html = buildPage($headContent, $navHtml, $footerHtml, $topic, "$topic Services", "Clinical Expertise", $content, $faqs, getRandomImage());
    file_put_contents($baseDir . "/services/" . $slug . ".html", $html);
}

// ========================
// 2. GENERATE SPECIALTIES
// ========================
ensureDir($baseDir . "/specialties");
foreach($specialties as $sp) {
    $topic = $sp;
    $slug = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $sp));
    $slug = trim($slug, '-');
    
    $content = <<<HTML
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-5xl font-extrabold text-[#071e26] mb-6">Advanced Therapy for $topic in Atlanta, GA</h2>
        <p class="text-xl text-gray-600 leading-relaxed font-medium">Navigating <strong>$topic</strong> can be incredibly challenging, but comprehensive and deeply empathetic support is within reach at GlobeCoRe Inc.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16">
        <div class="bg-primary/5 p-8 lg:p-12 rounded-3xl border border-primary/10 hover:shadow-xl transition-shadow">
            <div class="w-14 h-14 bg-primary text-white rounded-2xl flex items-center justify-center mb-6 shadow-md">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-[#071e26] mb-4">Our Therapeutic Approach</h3>
            <p class="text-gray-600 leading-relaxed mb-4">Treating $topic requires more than standardized protocols; it requires an adaptive, AI-augmented clinical perspective. We merge cutting-edge psychiatric knowledge with profound cultural humility to address the distinct intricacies of $topic.</p>
            <p class="text-gray-600 leading-relaxed">By cultivating a collaborative therapeutic alliance, our practitioners equip you with resilience strategies, emotional regulation techniques, and cognitive reframing tools to reclaim autonomy over your life.</p>
        </div>
        
        <div class="bg-secondary/5 p-8 lg:p-12 rounded-3xl border border-secondary/10 hover:shadow-xl transition-shadow">
            <div class="w-14 h-14 bg-secondary text-white rounded-2xl flex items-center justify-center mb-6 shadow-md">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-[#071e26] mb-4">Why GlobeCoRe for $topic?</h3>
            <ul class="space-y-4">
                <li class="flex gap-3"><span class="w-6 h-6 rounded-full bg-secondary/20 text-secondary flex items-center justify-center font-bold text-sm shrink-0">1</span><span class="text-gray-700"><strong>Specialized Providers:</strong> Clinicians specifically trained in the nuances of $topic.</span></li>
                <li class="flex gap-3"><span class="w-6 h-6 rounded-full bg-secondary/20 text-secondary flex items-center justify-center font-bold text-sm shrink-0">2</span><span class="text-gray-700"><strong>Flexible Access:</strong> Seamless integration of in-office sessions in Atlanta and virtual telehealth.</span></li>
                <li class="flex gap-3"><span class="w-6 h-6 rounded-full bg-secondary/20 text-secondary flex items-center justify-center font-bold text-sm shrink-0">3</span><span class="text-gray-700"><strong>Integrative Methodologies:</strong> Including options like medication management or TMS where beneficial.</span></li>
            </ul>
        </div>
    </div>
HTML;

    $faqs = [
        ["q" => "Is $topic therapy highly effective?", "a" => "Yes. Clinical efficacy for $topic treatment is exceedingly high when utilizing modern, evidence-based practices like Cognitive Behavioral Therapy (CBT) and targeted psychiatric evaluations."],
        ["q" => "What causes $topic?", "a" => "The manifestation of $topic is frequently multi-factorial, stemming from a combination of neurobiological predispositions, environmental stressors, and trauma. Our initial assessment comprehensively dissects these variables."],
        ["q" => "How do you structure therapy for $topic?", "a" => "Treatment is highly personalized. We formulate a structured intervention plan initially focusing on symptom relief, transitioning subsequently to underlying cause resolution and long-term relapse prevention strategies for $topic."],
        ["q" => "Can $topic be managed without medication?", "a" => "While medication can be a potent adjunctive treatment, many individuals successfully manage $topic using behavioral interventions and psychotherapy alone. Our team will collaborate with you to determine the safest, most effective route."],
        ["q" => "How soon can I schedule an appointment for $topic therapy in Atlanta?", "a" => "GlobeCoRe prioritizes timely access to care. New patients seeking help for $topic are typically scheduled within a week. Contact our intake coordinators to secure the earliest available opening."]
    ];

    $html = buildPage($headContent, $navHtml, $footerHtml, "$topic Treatment", "$topic Therapy", "Targeted Specialized Care", $content, $faqs, getRandomImage());
    file_put_contents($baseDir . "/specialties/" . $slug . ".html", $html);
}

// ========================
// 3. GENERATE LOCATIONS
// ========================
ensureDir($baseDir . "/areas-we-serve");
foreach($locations as $loc) {
    $topic = $loc;
    $slug = strtolower(str_replace(' ', '-', $loc));
    
    $content = <<<HTML
    <div class="flex flex-col-reverse lg:flex-row gap-16 items-center">
        <div class="lg:w-1/2">
            <div class="grid grid-cols-2 gap-4">
                <img src="$images[1]" alt="Therapy in $loc" class="w-full h-48 object-cover rounded-3xl mt-8 shadow-lg">
                <img src="$images[2]" alt="Counseling in $loc" class="w-full h-64 object-cover rounded-3xl shadow-lg">
            </div>
        </div>
        <div class="lg:w-1/2 space-y-6">
            <h2 class="text-3xl lg:text-5xl font-extrabold text-[#071e26] leading-tight">Elite Psychological Services For $topic Residents</h2>
            <p class="text-lg text-gray-600 leading-relaxed">Finding a culturally attuned, deeply experienced therapist near <strong>$topic, GA</strong> should not be a struggle. GlobeCoRe Inc. extends its premium psychiatric, psychological evaluation, and counseling services to the $topic community, guaranteeing unmatched clinical excellence.</p>
            <p class="text-lg text-gray-600 leading-relaxed">Whether you are confronting acute anxiety, navigating complex relational dynamics, or seeking FDA-approved TMS Therapy, our Atlanta-based clinicians provide encompassing support—accessible both securely via our Telehealth portal and at our Lenox Road headquarters.</p>
            
            <div class="pt-4">
                <a href="/contact.html" class="inline-flex items-center gap-2 text-primary font-bold text-lg hover:gap-4 transition-all duration-300 group">
                    Schedule with a $topic Therapist 
                    <svg class="w-5 h-5 group-hover:text-[#7a9e3f] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
HTML;

    $faqs = [
        ["q" => "Do you provide telehealth mental health services in $topic, GA?", "a" => "Absolutely. We maintain a highly robust telehealth platform allowing $topic residents to receive identical, top-tier psychological care from the privacy and comfort of their own homes."],
        ["q" => "What specific psychological evaluations are available for $topic residents?", "a" => "We conduct exhaustive psychological testing including ADHD assessments, Autism Spectrum Disorder (ASD) diagnostics, intelligence testing, and disability evaluations accessible to individuals residing in $topic."],
        ["q" => "Is your Atlanta office easily accessible from $topic?", "a" => "Yes, our primary clinic at 3355 Lenox Road NE is centrally located with prompt highway access, making the commute from $topic straightforward. Telehealth remains a rapid alternative."],
        ["q" => "What types of therapy do you offer to the $topic community?", "a" => "We offer a full spectrum: individual counseling, culturally inclusive family therapy, couples counseling, and advanced interventions like TMS Therapy specifically curated for our $topic clientele."],
        ["q" => "Does your clinic accept insurance for patients in $topic?", "a" => "We process most major insurance networks functioning within Georgia and $topic. Please provide your insurance details during the intake consultation for an exact breakdown of benefits."]
    ];

    $html = buildPage($headContent, $navHtml, $footerHtml, "Therapist in $loc, GA", "Therapy in $loc, GA", "Local Mental Health Care", $content, $faqs, getRandomImage());
    file_put_contents($baseDir . "/areas-we-serve/" . $slug . ".html", $html);
}

// ========================
// 4. GENERATE OTHER PAGES
// ========================
foreach($otherPages as $page) {
    $topic = $page['title'];
    $slug = $page['slug'];
    if (strpos($slug, '/') !== false) {
        $parts = explode('/', $slug);
        array_pop($parts);
        ensureDir($baseDir . "/" . implode('/', $parts));
    }
    
    $content = <<<HTML
    <div class="bg-gray-50 rounded-3xl p-10 lg:p-16 border border-gray-100 shadow-sm text-center">
        <h2 class="text-4xl font-extrabold text-[#071e26] mb-6">$topic</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">Welcome to the GlobeCoRe $topic portal. We uphold the highest standards of transparency, accessibility, and client communication.</p>
        <div class="w-24 h-1 bg-primary mx-auto my-10 rounded-full"></div>
        <p class="text-gray-500 mb-8">For immediate administrative assistance, clinical inquiries, or to book an appointment, please reach out to our dedicated support staff directly.</p>
        <a href="tel:7702841044" class="inline-block bg-[#071e26] text-white px-8 py-4 rounded-full font-bold hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-lg">(770) 284-1044</a>
    </div>
HTML;
    $faqs = [
        ["q" => "Where can I find more information regarding $topic?", "a" => "Extensive details regarding $topic are systematically updated on this portal. For personalized queries, contact our front office directly."],
        ["q" => "How frequently is the $topic policy updated?", "a" => "We review all compliance, programmatic, and operational policies quarterly to ensure alignment with current healthcare regulations and best practices."],
        ["q" => "Who do I contact regarding $topic?", "a" => "Please utilize the contact form situated on our main Contact page, or call our central line to be routed to the appropriate director."],
        ["q" => "Is my data handled securely on the $topic page?", "a" => "GlobeCoRe employs robust, enterprise-grade encryption and strict adherence to HIPAA guidelines to protect all user interactions across our entire digital infrastructure."],
        ["q" => "Can I request accessible formats for $topic?", "a" => "Yes. Our commitment to accessibility guarantees that all resources and documentation concerning $topic can be provided in alternative formats upon request."]
    ];

    $html = buildPage($headContent, $navHtml, $footerHtml, $topic, $topic, "Help & Information", $content, $faqs, getRandomImage());
    file_put_contents($baseDir . "/" . $slug . ".html", $html);
}

echo "All pages beautifully generated with AI SEO optimization!";
?>
