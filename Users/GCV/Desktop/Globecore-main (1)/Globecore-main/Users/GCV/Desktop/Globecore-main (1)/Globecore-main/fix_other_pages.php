<?php
$baseDir = __DIR__;

$services = [
    ['title' => 'Counseling', 'slug' => 'counseling'],
    ['title' => 'Psychological Evaluations', 'slug' => 'psychological-evaluations'],
    ['title' => 'Medication Management', 'slug' => 'medication-management'],
    ['title' => 'TMS Therapy', 'slug' => 'tms-therapy'],
    ['title' => 'Personal Development', 'slug' => 'personal-development'],
    ['title' => 'Professional Development', 'slug' => 'professional-development']
];

$spList = ['Addiction', 'ADHD', 'Aging Issues', 'Anger Management', 'Bipolar Disorder', 'Chronic Illness', 
    'Codependency', 'Depression & Anxiety', 'Developmental & Intellectual Disabilities', 'Eating Disorders', 
    'Fertility, Pregnancy & Parenting', 'Finding Purpose', 'Finding The Love You Deserve', 'Grief & Loss', 
    'Life Transitions', 'LGBTQI+', 'OCD', 'Racial, Ethnic and Religious Stressors', 'Relationship & Marriage Issues', 
    'Self-Esteem', 'Sleep Disorders', 'Trauma', "Women's Issues", 'Work-Related or Academic Stressors'];
$locList = ['Marietta', 'Alpharetta', 'Sandy Springs', 'Brookhaven', 'Decatur', 'Smyrna', 'Johns Creek', 'Dunwoody', 'Peachtree Corners', 'Lawrenceville', 'Duluth', 'Woodstock', 'Canton', 'Newnan', 'Peachtree City'];

function generateNav($depth) {
    global $services, $spList, $locList;
    $prefix = str_repeat('../', $depth) ?: './';

    $navHtml = <<<HTML
    <!-- ===================== TOP UTILITY BAR ===================== -->
    <div class="bg-[#071e26] text-gray-300 text-xs shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex justify-between items-center">
            <div class="hidden md:flex items-center gap-1">
                <a href="{$prefix}client-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Client Portal</a>
                <a href="{$prefix}staff-portal.html" class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Staff Portal</a>
            </div>
            <div class="flex items-center gap-2 font-semibold ml-auto text-white">
                <a href="tel:7702841044" class="hover:text-primary transition-all duration-300 flex items-center gap-2">
                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                (770) 284-1044</a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVIGATION HEADER -->
    <header class="bg-white/80 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
            <a href="{$prefix}index.html">
                <img src="{$prefix}assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Logo" class="h-11 w-auto">
            </a>
            <nav class="hidden xl:flex items-center gap-2 text-[13px] font-semibold relative">
                <a href="{$prefix}index.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Home</a>
                
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">About <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
                            <a href="{$prefix}about.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">About Us</a>
                            <a href="{$prefix}about/meet-our-team.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Meet Our Team</a>
                            <a href="{$prefix}about/philosophy-core-values.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors">Philosophy & Values</a>
                        </div>
                    </div>
                </div>

                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <div class="absolute left-0 mt-0 w-72 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
HTML;

    foreach($services as $svc) {
        $navHtml .= '<a href="'.$prefix.'services/'.$svc['slug'].'.html" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>'.$svc['title'].'</a>';
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
    
    foreach($spList as $sp) {
        $slug = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $sp));
        $slug = trim($slug, '-');
        $navHtml .= '<a href="'.$prefix.'specialties/'.$slug.'.html" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors border border-transparent hover:border-primary/20">'.$sp.'</a>';
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
    foreach($locList as $loc) {
        $slug = strtolower(str_replace(' ', '-', $loc));
        $navHtml .= '<a href="'.$prefix.'areas-we-serve/'.$slug.'.html" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2"><svg class="w-3 h-3 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>'.$loc.'</a>';
    }
    
    $navHtml .= <<<HTML
                        </div>
                    </div>
                </div>
                
                <a href="{$prefix}blog.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Blog</a>
                <a href="{$prefix}pricing-insurance.html" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Rates</a>
                <a href="{$prefix}contact.html" class="bg-primary text-white border border-primary/20 px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-primary/30 hover:bg-[#7a9e3f] transition-all duration-300 ml-3 font-bold tracking-wide">Book Now</a>
            </nav>
            <button id="mobileMenuBtn" class="xl:hidden w-10 h-10 rounded-xl bg-bgOffWhite flex items-center justify-center hover:bg-gray-200 transition-all duration-300" aria-label="Open Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        
        <div id="mobileMenu" class="hidden xl:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100 px-6 pb-5 shadow-2xl absolute w-full">
            <nav class="flex flex-col gap-2 text-sm font-semibold pt-4">
                <a href="{$prefix}index.html" class="bg-primary/10 text-primary px-4 py-3 rounded-xl">Home</a>
                <a href="{$prefix}about.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">About</a>
                <a href="{$prefix}services/counseling.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Services</a>
                <a href="{$prefix}specialties/adhd.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Specialties</a>
                <a href="{$prefix}blog.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Blog</a>
                <a href="{$prefix}pricing-insurance.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Rates</a>
                <a href="{$prefix}contact.html" class="px-4 py-3 rounded-xl bg-primary text-white text-center mt-2 hover:bg-[#7a9e3f] transition-all duration-300">Contact</a>
            </nav>
        </div>
    </header>
HTML;
    return $navHtml;
}

$filesToUpdate = [
    'about.html' => 0,
    'blog.html' => 0,
    'contact.html' => 0,
    'pricing-insurance.html' => 0,
    'accessibility.html' => 0,
    'career.html' => 0,
    'client-portal.html' => 0,
    'privacy-policy.html' => 0,
    'staff-portal.html' => 0,
    'terms-of-service.html' => 0,
    'about/meet-our-team.html' => 1,
    'about/philosophy-core-values.html' => 1
];

foreach ($filesToUpdate as $file => $depth) {
    // We update everything!
    $path = $baseDir . '/' . $file;
    if (file_exists($path)) {
        $html = file_get_contents($path);
        
        $startPos = strpos($html, '<!-- ===================== TOP UTILITY BAR ===================== -->');
        if ($startPos === false) $startPos = strpos($html, '<!-- ===================== 1. TOP UTILITY BAR ===================== -->');
        if ($startPos === false) {
             preg_match('/<div[^>]*class="[^"]*bg-\[#071e26\]/', $html, $matches, PREG_OFFSET_CAPTURE);
             if ($matches) $startPos = $matches[0][1];
             else $startPos = strpos($html, '<header');
        }
        
        $endMarker = '</header>';
        $endPos = strpos($html, $endMarker, ($startPos !== false ? $startPos : 0));
        
        if ($startPos !== false && $endPos !== false) {
            $newNav = generateNav($depth);
            $html = substr_replace($html, $newNav, $startPos, ($endPos + 9) - $startPos);
            file_put_contents($path, $html);
            echo "Updated $file\n";
        } else {
             echo "Could not find markers in $file\n";
        }
    } else {
        echo "File not found: $file\n";
    }
}
?>
