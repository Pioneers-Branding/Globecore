import glob
import os
import re

def create_new_page():
    with open('services/counseling.html', 'r', encoding='utf-8') as f:
        content = f.read()

    # Replacements for SEO / Meta tags
    content = content.replace('<title>Counseling | GlobeCoRe Inc. Atlanta, GA</title>', 
                              '<title>TRICARE-Covered TMS Therapy | GlobeCoRe Inc. Atlanta, GA</title>')
    content = content.replace('content="GlobeCoRe offers comprehensive psychological services, TMS therapy, counseling, psychological evaluations & telehealth in Atlanta, GA. Culturally sensitive, inclusive care for individuals, couples & families. Call (770) 284-1044."',
                              'content="GlobeCoRe offers TRICARE-Covered TMS Therapy for treatment resistant depression in Atlanta, GA. Expert TMS for veterens Atlanta and military families. Direct scheduling available."')
    content = content.replace('content="psychologist Atlanta, therapy Atlanta GA, TMS therapy Atlanta, psychological evaluation Atlanta, counseling services Atlanta, telehealth therapy Georgia, medication management Atlanta, couples therapy Atlanta, family therapy Atlanta, ADHD evaluation Atlanta, GlobeCoRe"',
                              'content="TRICARE TMS Atlanta, TMS for veterens Atlanta, TRICARE depression treatment, TMS therapy Atlanta, GlobeCoRe"')

    # Replace breadcrumb
    content = content.replace('<span itemprop="name">Counseling</span>', '<span itemprop="name">TRICARE-Covered TMS Therapy</span>')

    # Hero Section Replacements
    content = content.replace('Counseling Services', 'TRICARE-Covered TMS Therapy', 1)
    content = content.replace('Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care,\n                and profound expertise.', 
                              'Empowering active military, veterans, and their families in Atlanta with specialized treatment for persistent depression.')

    # Main Content replacement using regex to find the section to replace: <main id="content" ...> to </main>
    # Be careful not to replace the mobile menu form, wait, the form is inside the <main> tag.
    # The form starts with <!-- Form and Contact Info -->
    
    parts = content.split('<!-- Form and Contact Info -->')
    if len(parts) != 2:
        print("Could not split content at Form and Contact Info")
        return

    main_start = parts[0].find('<main id="content"')
    if main_start == -1:
        print("Could not find main tag")
        return
        
    before_main = parts[0][:main_start]

    new_main_content = """<main id="content" class="py-16 lg:py-24 bg-white relative">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <div class="mb-12">
                <h1 class="text-[#071e26] text-4xl lg:text-5xl font-extrabold mb-4 font-raleway">TRICARE-Covered TMS Therapy for Treatment Resistant Depression</h1>
                <p class="text-xl text-gray-600">Access advanced TRICARE depression treatment with our specialized TMS for veterens Atlanta and military families.</p>
            </div>

            <!-- Intro / Education -->
            <div class="bg-white p-8 md:p-10 rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 mb-12">
                <h2 class="text-3xl font-extrabold text-[#071e26] mb-6 font-raleway">PTSD & Depression Education</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed font-medium">
                    <p>For active-duty service members, veterans, and their families, the invisible wounds of service—such as PTSD and severe depression—are challenging realities. Often, standard treatments like medications or talk therapy aren't enough to provide relief. This is known as Treatment-Resistant Depression (TRD).</p>
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

            """
            
    final_content = before_main + new_main_content + "<!-- Form and Contact Info -->" + parts[1]

    with open('services/tricare-tms-therapy.html', 'w', encoding='utf-8') as f:
        f.write(final_content)
    print("Created services/tricare-tms-therapy.html")

def update_navbar():
    # We need to find all HTML files and insert the new menu item into the Services dropdown.
    # The existing last item in Services seems to be "Professional Development"
    
    html_files = []
    for root, dirs, files in os.walk('.'):
        for file in files:
            if file.endswith('.html'):
                html_files.append(os.path.join(root, file))

    count = 0
    for file in html_files:
        with open(file, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Determine the relative path to services directory from this file
        # If in root: "services/tricare-tms-therapy.html"
        # If in subdirectory: "../services/tricare-tms-therapy.html"
        # Look at how the existing professional-development link is structured in this file
        
        matches = re.finditer(r'<a href="([^"]+/services/professional-development\.html)"', content)
        match_list = list(matches)
        
        if not match_list:
            # Maybe it uses purely relative or no slashes. Let's find "professional-development.html"
            matches2 = re.finditer(r'<a href="([^"]*professional-development\.html)"', content)
            match_list = list(matches2)

        if match_list:
            # We will insert the new link right after this link's closing </a>
            
            # Since there could be multiple navs (desktop, mobile?), we do it for all matches of professional-development
            for match in match_list:
                full_href = match.group(1)
                new_href = full_href.replace("professional-development.html", "tricare-tms-therapy.html")
                
                # Extract the full a tag for professional-development
                a_tag_pattern = re.escape(match.group(0)) + r'[^>]*>.*?</a>'
                a_tag_match = re.search(a_tag_pattern, content, flags=re.DOTALL)
                
                if a_tag_match:
                    original_a_tag = a_tag_match.group(0)
                    
                    # Create the new a tag
                    # Replace text
                    new_a_tag = original_a_tag.replace(full_href, new_href)
                    new_a_tag = new_a_tag.replace("Professional Development", "TRICARE-Covered TMS Therapy")
                    
                    # Ensure we don't duplicate it if it's already there
                    if new_href not in content:
                        content = content.replace(original_a_tag, original_a_tag + new_a_tag)
                        count += 1
                        
            with open(file, 'w', encoding='utf-8') as f:
                f.write(content)
        else:
            print(f"Could not find professional-development link in {file}")
            
    print(f"Updated navbar in {count} locations.")

if __name__ == "__main__":
    create_new_page()
    update_navbar()
