<?php

function create_new_page() {
    $content = file_get_contents('services/counseling.html');

    if ($content === false) {
        echo "Could not read services/counseling.html\n";
        return;
    }

    // Replacements for SEO / Meta tags
    $content = str_replace('<title>Counseling | GlobeCoRe Inc. Atlanta, GA</title>', 
                              '<title>TRICARE-Covered TMS Therapy | GlobeCoRe Inc. Atlanta, GA</title>', $content);
    $content = str_replace('content="GlobeCoRe offers comprehensive psychological services, TMS therapy, counseling, psychological evaluations & telehealth in Atlanta, GA. Culturally sensitive, inclusive care for individuals, couples & families. Call (770) 284-1044."',
                              'content="GlobeCoRe offers TRICARE-Covered TMS Therapy for treatment resistant depression in Atlanta, GA. Expert TMS for veterens Atlanta and military families. Direct scheduling available."', $content);
    $content = str_replace('content="psychologist Atlanta, therapy Atlanta GA, TMS therapy Atlanta, psychological evaluation Atlanta, counseling services Atlanta, telehealth therapy Georgia, medication management Atlanta, couples therapy Atlanta, family therapy Atlanta, ADHD evaluation Atlanta, GlobeCoRe"',
                              'content="TRICARE TMS Atlanta, TMS for veterens Atlanta, TRICARE depression treatment, TMS therapy Atlanta, GlobeCoRe"', $content);

    // Replace breadcrumb
    $content = str_replace('<span itemprop="name">Counseling</span>', '<span itemprop="name">TRICARE-Covered TMS Therapy</span>', $content);

    // Hero Section Replacements
    $content = preg_replace('/Counseling Services/', 'TRICARE-Covered TMS Therapy', $content, 1);
    $content = str_replace('Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care,
                and profound expertise.', 
                              'Empowering active military, veterans, and their families in Atlanta with specialized treatment for persistent depression.', $content);

    // Main Content replacement using explode to find the section to replace
    $parts = explode('<!-- Form and Contact Info -->', $content);
    if (count($parts) < 2) {
        echo "Could not split content at Form and Contact Info\n";
        return;
    }

    $main_start = strpos($parts[0], '<main id="content"');
    if ($main_start === false) {
        echo "Could not find main tag\n";
        return;
    }
        
    $before_main = substr($parts[0], 0, $main_start);

    $new_main_content = '<main id="content" class="py-16 lg:py-24 bg-white relative">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <div class="mb-12">
                <h1 class="text-[#071e26] text-4xl lg:text-5xl font-extrabold mb-4 font-raleway">TRICARE-Covered TMS Therapy for Treatment Resistant Depression</h1>
                <p class="text-xl text-gray-600">Access advanced TRICARE depression treatment with our specialized TMS for veterens Atlanta and military families.</p>
            </div>

            <!-- Intro / Education -->
            <div class="bg-white p-8 md:p-10 rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 mb-12">
                <h2 class="text-3xl font-extrabold text-[#071e26] mb-6 font-raleway">PTSD & Depression Education</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed font-medium">
                    <p>For active-duty service members, veterans, and their families, the invisible wounds of service—such as PTSD and severe depression—are challenging realities. Often, standard treatments like medications or talk therapy aren\'t enough to provide relief. This is known as Treatment-Resistant Depression (TRD).</p>
                    <p>Transcranial Magnetic Stimulation (TMS) is an FDA-cleared, non-invasive treatment that uses magnetic fields to stimulate nerve cells in the brain to improve symptoms of depression. We are proud to offer <strong class="text-[#071e26]">TRICARE TMS Atlanta</strong> services to our military community, providing a beacon of hope when other treatments have fallen short.</p>
                </div>
            </div>

            <!-- Military Messaging -->
            <div class="bg-[#1C8193] text-white p-8 md:p-10 rounded-2xl shadow-lg mb-12">
                <h2 class="text-3xl font-extrabold mb-6 font-raleway text-white">To Our Military Families</h2>
                <div class="space-y-4 leading-relaxed font-medium text-lg">
                    <p>We understand the unique stressors faced by military families—deployments, relocations, and the transition back to civilian life. GlobeCoRe is deeply committed to supporting the mental health of those who serve and their loved ones.</p>
                    <p>Through our TRICARE-covered services, we strive to remove barriers to access, ensuring you receive the high-quality, compassionate care you deserve right here in Atlanta.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Eligibility Checklist -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col h-full">
                    <h2 class="text-2xl font-extrabold text-[#071e26] mb-6 font-raleway">TRICARE Eligibility Checklist</h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed font-medium flex-grow">
                        <p>To qualify for TRICARE coverage for TMS therapy, patients generally need to meet the following criteria:</p>
                        <ul class="list-disc pl-5 mt-4 space-y-2">
                            <li>Diagnosis of severe major depressive disorder (MDD).</li>
                            <li>Experienced failed trials of antidepressant medications.</li>
                            <li>Previously participated in evidence-based psychotherapy without adequate improvement.</li>
                            <li>Absence of contraindications, such as a history of seizures or metal implants in the head.</li>
                        </ul>
                    </div>
                </div>

                <!-- Referral Instructions -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col h-full">
                    <h2 class="text-2xl font-extrabold text-[#071e26] mb-6 font-raleway">Referral Instructions</h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed font-medium flex-grow">
                        <p>Starting TMS therapy through TRICARE requires proper authorization. Follow these steps:</p>
                        <ol class="list-decimal pl-5 mt-4 space-y-2">
                            <li><strong>Get a Referral:</strong> Contact your primary care manager (PCM) or TRICARE provider to request a referral for TMS therapy at GlobeCoRe.</li>
                            <li><strong>Authorization:</strong> TRICARE regional contractors will review the referral for authorization.</li>
                            <li><strong>Consultation:</strong> Once authorized, we will schedule your initial TMS consultation and evaluation.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- FAQs -->
            <div class="mb-12">
                <h2 class="text-3xl font-extrabold text-[#071e26] mb-6 font-raleway text-center">Frequently Asked Questions</h2>
                <div class="space-y-4 max-w-4xl mx-auto">
                    <details class="bg-white rounded-xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 group">
                        <summary class="p-6 cursor-pointer font-bold text-lg text-[#071e26] flex justify-between items-center">
                            Does TRICARE cover TMS for PTSD?
                            <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600 font-medium">
                            Currently, TRICARE typically covers TMS specifically for Major Depressive Disorder (Treatment-Resistant Depression). While PTSD and depression often co-occur, the primary diagnosis for coverage must usually be MDD.
                        </div>
                    </details>
                    
                    <details class="bg-white rounded-xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 group">
                        <summary class="p-6 cursor-pointer font-bold text-lg text-[#071e26] flex justify-between items-center">
                            How long is a TMS course of treatment?
                            <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </summary>
                        <div class="px-6 pb-6 text-gray-600 font-medium">
                            A standard course of TMS involves treatments five days a week for about 4 to 6 weeks, each session lasting around 20-40 minutes, depending on the specific protocol used.
                        </div>
                    </details>
                </div>
            </div>

            <!-- Direct Scheduling link -->
            <div class="mt-12 mb-20 flex justify-center">
                <a href="../contact.html" class="inline-block bg-[#027289] text-white font-bold py-4 px-10 rounded-full hover:bg-[#071e26] transition-colors focus:ring-2 focus:ring-[#027289] focus:ring-offset-2 text-lg shadow-lg">Schedule Your Consultation Directly</a>
            </div>

            ';
            
    $final_content = $before_main . $new_main_content . "<!-- Form and Contact Info -->" . $parts[1];

    file_put_contents('services/tricare-tms-therapy.html', $final_content);
    echo "Created services/tricare-tms-therapy.html\n";
}

function update_navbar() {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'));
    $html_files = [];
    foreach ($iterator as $file) {
        if ($file->isFile() && pathinfo($file->getFilename(), PATHINFO_EXTENSION) === 'html') {
            $html_files[] = $file->getPathname();
        }
    }

    $count = 0;
    foreach ($html_files as $file) {
        $content = file_get_contents($file);
        
        // Find links like <a href="../services/professional-development.html" ... >
        // or <a href="services/professional-development.html" ... >
        preg_match_all('/<a[^>]*href="([^"]*professional-development\.html)"[^>]*>.*?<\/a>/is', $content, $matches, PREG_SET_ORDER);
        
        if (count($matches) > 0) {
            foreach ($matches as $match) {
                $original_a_tag = $match[0];
                $full_href = $match[1];
                
                $new_href = str_replace("professional-development.html", "tricare-tms-therapy.html", $full_href);
                
                $new_a_tag = str_replace($full_href, $new_href, $original_a_tag);
                // The original tag has inner text like:
                // <div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div>Professional Development
                $new_a_tag = str_replace("Professional Development", "TRICARE-Covered TMS Therapy", $new_a_tag);
                
                if (strpos($content, $new_href) === false) {
                    $content = str_replace($original_a_tag, $original_a_tag . $new_a_tag, $content);
                    $count++;
                }
            }
            file_put_contents($file, $content);
        } else {
            // Note: Not printing for every file to reduce noise
        }
    }
            
    echo "Updated navbar in $count locations.\n";
}

create_new_page();
update_navbar();

?>
