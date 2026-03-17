import os
import shutil
import re
from datetime import datetime

base_dir = r"c:\Users\GCV\Desktop\Globecore-main (1)\Globecore-main"
assets_dir = os.path.join(base_dir, "assets")
template_file = os.path.join(base_dir, "does-tms-therapy-help-anxiety.html")
blog_index = os.path.join(base_dir, "blog.html")
artifact_dir = r"C:\Users\GCV\.gemini\antigravity\brain\cd1a6877-7dc8-40b0-aa2f-3daf493e4cff"

# Copy images to assets
for img in ["psych_eval_blog_1773723989285.png", "psych_abuse_blog_1773724005530.png", "tricare_mental_health_blog_1773724024240.png", "hormonal_mood_blog_1773724039183.png"]:
    src = os.path.join(artifact_dir, img)
    dst = os.path.join(assets_dir, img)
    if os.path.exists(src):
        shutil.copy2(src, dst)
        print(f"Copied {img} to assets.")

blogs = [
    {
        "id": "what-happens-during-a-psychiatric-evaluation",
        "title": "What Happens During a Psychiatric Evaluation?",
        "meta_title": "What Happens During a Psychiatric Evaluation? | GlobeCoRe",
        "meta_desc": "Wondering what to expect during a psychiatric evaluation in Atlanta? Learn about the intake process, assessments, diagnoses, and treatment planning at GlobeCoRe.",
        "keywords": "psychiatric evaluation Atlanta, mental health assessment, psychiatric intake process, psychological testing GA, GlobeCoRe",
        "image": "./assets/psych_eval_blog_1773723989285.png",
        "category": "EVALUATIONS",
        "date": "17/03/2026",
        "excerpt": "If you've been feeling overwhelmed, anxious, or unable to focus, a psychiatric evaluation is often the critical first step toward healing. Demystifying the evaluation process can ease your mind.",
        "content": """
<p>If you have been feeling overwhelmed, anxious, struggling to focus, or experiencing unexpected mood changes, a <strong>psychiatric evaluation</strong> is often the vital first step toward understanding your mental health and finding relief. Many individuals feel anxious before their first evaluation because they don’t know what to expect. In Atlanta, at GlobeCoRe, we make sure that our assessments are compassionate, comprehensive, and tailored to your unique multicultural background.</p>
<h2 class="wp-block-heading">Understanding a Psychiatric Evaluation</h2>
<h3 class="wp-block-heading">What is it exactly?</h3>
<p>A <a href="/services/psychological-evaluations.html">psychiatric evaluation</a> (also known as a psychological or psychiatric assessment) is a comprehensive diagnostic process used to assess a person's mental health. Unlike a standard medical checkup, this evaluation focuses heavily on your emotional, psychological, and behavioral health. The goal is to accurately diagnose any underlying mental health disorders, such as depression, anxiety, ADHD, or bipolar disorder, and to formulate a customized treatment plan.</p>
<h3 class="wp-block-heading">The Intake Process</h3>
<p>The evaluation always begins with a detailed intake interview. During this process, a licensed clinician or psychiatrist will ask you questions about your personal history, family medical history, current symptoms, and primary concerns. Be prepared to discuss:</p>
<ul class="wp-block-list">
<li>Your current physical symptoms and mental struggles.</li>
<li>Any past traumatic experiences or major life transitions.</li>
<li>Previous mental health treatments, including therapy and medications.</li>
<li>Your developmental history or learning challenges.</li>
</ul>
<p>There are no right or wrong answers. Being honest and open allows the psychiatrist to understand the full picture.</p>
<h2 class="wp-block-heading">Steps Involved in the Evaluation</h2>
<h3 class="wp-block-heading">1. Questionnaires and Psychological Testing</h3>
<p>Depending on your symptoms, you may be asked to complete standardized questionnaires or psychometric tests. These help the clinician objectively measure symptom severity for conditions like depression, anxiety, or ADHD. At GlobeCoRe, we offer targeted testing, including <a href="/specialties/adhd.html">ADHD evaluations</a>, autism assessments, and diagnostic clarity tests.</p>
<h3 class="wp-block-heading">2. Diagnostic Formulation</h3>
<p>After gathering all the information from your interview and tests, the professional will compare your symptoms against the criteria in the Diagnostic and Statistical Manual of Mental Disorders (DSM-5). This enables them to provide an accurate diagnosis, which is the foundation of any effective treatment strategy.</p>
<h3 class="wp-block-heading">3. Treatment Planning</h3>
<p>Once a diagnosis is made, your doctor will collaboratively design a holistic treatment plan with you. This plan might involve <a href="/services/medication-management.html">Medication Management</a>, individual counseling, cognitive behavioral therapy (CBT), or more specialized interventions like <a href="/services/tms-therapy.html">TMS Therapy</a>. You will be actively involved in deciding which treatment approach aligns best with your comfort level and lifestyle.</p>
<!-- CTA: Book Evaluation -->
<div class="cta-box-9482x bg-primary/10 p-6 rounded-xl my-8 border-l-4 border-primary">
  <h3 class="text-xl font-bold text-[#071e26] mb-2">Need a Comprehensive Psychiatric Evaluation in Atlanta?</h3>
  <p class="mb-4 text-gray-600">GlobeCoRe provides culturally sensitive, thorough evaluations for children, teens, and adults. Let us help you find the clarity and treatment path you deserve.</p>
  <a href="/contact.html" class="inline-block bg-primary text-white font-bold py-2.5 px-6 rounded-full hover:bg-deepTeal transition-colors">Schedule Your Evaluation Today</a>
</div>
<h2 class="wp-block-heading">Frequently Asked Questions</h2>
<div class="rank-math-block" id="rank-math-faq">
<div class="rank-math-list">
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">How long does a psychiatric evaluation take?</h3>
<div class="rank-math-answer">
<p>A typical psychiatric intake evaluation takes between 60 to 90 minutes. However, more complex psychological evaluations for learning disabilities or ADHD might require multiple sessions spanning a few hours each.</p>
</div>
</div>
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">Will I be prescribed medication on my first visit?</h3>
<div class="rank-math-answer">
<p>Not necessarily. While some patients may receive a medication prescription if it is immediately indicated, others may be referred solely for therapy or further diagnostic testing. The decision will be discussed openly with you.</p>
</div>
</div>
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">Is everything I say confidential?</h3>
<div class="rank-math-answer">
<p>Yes, all psychiatric evaluations are strictly confidential and HIPAA compliant, ensuring that a safe and private environment is maintained throughout your treatment journey.</p>
</div>
</div>
</div>
</div>
        """
    },
    {
        "id": "therapy-for-psychological-abuse-how-recovery-works",
        "title": "Therapy for Psychological Abuse: How Recovery Works",
        "meta_title": "Therapy for Psychological Abuse Atlanta | Trauma Recovery",
        "meta_desc": "Recovering from emotional and psychological abuse is possible. GlobeCoRe provides trauma-informed therapy in Atlanta to help you rebuild your self-esteem and heal.",
        "keywords": "therapy for psychological abuse, emotional abuse counseling, trauma therapy Atlanta, gaslighting recovery, narcissistic abuse therapist",
        "image": "./assets/psych_abuse_blog_1773724005530.png",
        "category": "TRAUMA THERAPY",
        "date": "16/03/2026",
        "excerpt": "Psychological abuse is a form of trauma that leaves deep, invisible scars. With targeted therapy, you can rebuild self-esteem, set boundaries, and rediscover your identity.",
        "content": """
<p>Psychological abuse—often taking the form of emotional manipulation, gaslighting, belittling, or narcissistic relationship dynamics—is a deeply damaging form of <a href="/specialties/trauma.html">trauma</a>. Because psychological abuse doesn't leave physical bruises, survivors often struggle to validate their own pain, leading to severe anxiety, depression, and loss of self-worth. In Atlanta, our therapists at GlobeCoRe specialize in helping survivors navigate the complex journey of recovery.</p>
<h2 class="wp-block-heading">Understanding Psychological Abuse</h2>
<h3 class="wp-block-heading">The Silent Trauma</h3>
<p>Psychological abuse involves a pattern of behavior that systematically dismantles a person's self-esteem and sense of reality. This can occur in intimate relationships, families, or even workplaces. Tactics include:</p>
<ul class="wp-block-list">
<li><strong>Gaslighting:</strong> Making the victim question their own memory, perception, or sanity.</li>
<li><strong>Isolation:</strong> Cutting the victim off from friends and supportive family members.</li>
<li><strong>Verbal Assaults:</strong> Constant criticism, name-calling, and shaming.</li>
<li><strong>Control:</strong> Controlling finances, time, and movements.</li>
</ul>
<p>The effects are profound, often resulting in complex PTSD, persistent self-doubt, and profound difficulties trusting oneself and others.</p>
<h2 class="wp-block-heading">How Therapy Facilitates Recovery</h2>
<h3 class="wp-block-heading">Validating the Experience</h3>
<p>The first and most critical step in <a href="/services/counseling.html">counseling for psychological abuse</a> is validation. A trauma-informed therapist will listen without judgment and affirm that the abuse was real, not your fault, and entirely unacceptable. Breaking the cycle of gaslighting begins when a professional helps you trust your own perceptions again.</p>
<h3 class="wp-block-heading">Cognitive Behavioral Therapy (CBT) and Trauma Processing</h3>
<p>Therapy often involves CBT to help identify and deconstruct the core negative beliefs instilled by the abuser (e.g., "I am worthless" or "No one else will love me"). The therapist works with you to reframe these thoughts. Moreover, trauma-focused approaches help the body process the intense nervous system dysregulation that stems from living in a state of high alert.</p>
<h3 class="wp-block-heading">Establishing Boundaries and Rebuilding Identity</h3>
<p>As recovery progresses, focus shifts toward building assertiveness skills and creating healthy boundaries. Survivors learn how to protect their emotional space and say "no." Simultaneously, they explore who they are outside of the abusive dynamic, reconnecting with their core values, passions, and strengths.</p>
<!-- CTA: Trauma Therapy -->
<div class="cta-box-9482x bg-secondary/10 p-6 rounded-xl my-8 border-l-4 border-secondary">
  <h3 class="text-xl font-bold text-[#071e26] mb-2">Start Your Healing Journey in Atlanta</h3>
  <p class="mb-4 text-gray-600">You don't have to carry the weight of psychological abuse alone. Our trauma-informed experts at GlobeCoRe offer a safe, inclusive space for you to heal and reclaim your power.</p>
  <a href="/contact.html" class="inline-block bg-secondary text-white font-bold py-2.5 px-6 rounded-full hover:bg-deepTeal transition-colors">Book a Therapy Session</a>
</div>
<h2 class="wp-block-heading">Frequently Asked Questions</h2>
<div class="rank-math-block" id="rank-math-faq">
<div class="rank-math-list">
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">How long does recovery from emotional abuse take?</h3>
<div class="rank-math-answer">
<p>Recovery is not linear and varies greatly for each individual. While some find significant relief in a few months, fully unpacking deep-seated trauma and rebuilding self-worth may take longer. Consistent therapy and a strong support network are key.</p>
</div>
</div>
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">What should I look for in a therapist for this?</h3>
<div class="rank-math-answer">
<p>It's vital to seek a therapist who is specifically "trauma-informed" and has experience with emotional abuse or narcissistic abuse dynamics. You must feel unconditionally supported and safe during sessions.</p>
</div>
</div>
</div>
</div>
        """
    },
    {
        "id": "does-tricare-cover-mental-health-therapy",
        "title": "Does TRICARE Cover Mental Health Therapy?",
        "meta_title": "Does TRICARE Cover Mental Health Therapy & TMS? | GlobeCoRe",
        "meta_desc": "Are you a veteran or military family member? Check our guide on what mental health services TRICARE covers, including therapy and TMS in Atlanta.",
        "keywords": "TRICARE mental health coverage, TRICARE TMS therapy Atlanta, veteran mental health benefits, TRICARE counseling GA, military family therapy",
        "image": "./assets/tricare_mental_health_blog_1773724024240.png",
        "category": "INSURANCE & TRICARE",
        "date": "14/03/2026",
        "excerpt": "Navigating mental health insurance coverage can be confusing, especially for military members, veterans, and their families. Find out what TRICARE covers for mental health.",
        "content": """
<p>Access to high-quality mental health care is vital for active-duty service members, veterans, and their families. Given the unique demands and immense stressors associated with military life—ranging from frequent relocations to deployment and post-traumatic stress—understanding your insurance benefits is the first crucial step to getting help. A frequent question we receive at GlobeCoRe is: <strong>Does TRICARE cover mental health therapy?</strong> The short answer is yes.</p>
<h2 class="wp-block-heading">TRICARE's Mental Health Coverage</h2>
<h3 class="wp-block-heading">Outpatient Psychotherapy and Counseling</h3>
<p>TRICARE provides robust coverage for medically necessary outpatient mental health care. This includes:</p>
<ul class="wp-block-list">
<li><strong>Individual Therapy:</strong> Treatment for conditions like <a href="/specialties/depression-anxiety.html">depression, anxiety</a>, and PTSD.</li>
<li><strong>Couples and Family Therapy:</strong> Offered when it is deemed medically necessary to treat an individual’s diagnosed mental health condition.</li>
<li><strong>Psychological Testing:</strong> Covered when required to accurately diagnose a condition or develop a treatment plan.</li>
</ul>
<h3 class="wp-block-heading">Specialized Treatments: TRICARE and TMS Therapy</h3>
<p>One of the most significant advancements in TRICARE's coverage is the inclusion of specialized treatments for medication-resistant conditions. TRICARE explicitly covers <strong>Transcranial Magnetic Stimulation (TMS) therapy</strong> for major depressive disorder. Because GlobeCoRe proudly offers <a href="/services/tricare-tms-therapy.html">TRICARE-Covered TMS Therapy</a> in Atlanta, veterans and military families have direct access to this FDA-approved, non-medication-based treatment for depression.</p>
<h2 class="wp-block-heading">How to Access Care Using TRICARE</h2>
<h3 class="wp-block-heading">Referrals and Authorizations</h3>
<p>The process depends on your specific TRICARE plan (e.g., TRICARE Prime vs. TRICARE Select):</p>
<ul class="wp-block-list">
<li><strong>TRICARE Prime:</strong> Active-duty members generally need a referral and pre-authorization from their Primary Care Manager (PCM) before seeking civilian mental health care. Active-duty family members, however, can typically seek outpatient therapy from network providers without a referral.</li>
<li><strong>TRICARE Select:</strong> Beneficiaries usually do not need a referral for outpatient therapy, though seeing a network provider (like those who partner closely with GlobeCoRe) reduces out-of-pocket costs significantly.</li>
</ul>
<p>For specialized care such as TMS Therapy or intensive psychological evaluations, prior authorization is almost always required regardless of the plan. It is highly recommended to reach out to our billing team to help verify your benefits.</p>
<!-- CTA: TRICARE Info -->
<div class="cta-box-9482x bg-primary/10 p-6 rounded-xl my-8 border-l-4 border-primary">
  <h3 class="text-xl font-bold text-[#071e26] mb-2">TRICARE-Covered Mental Health Services in Atlanta</h3>
  <p class="mb-4 text-gray-600">GlobeCoRe honors the service of military families by accepting TRICARE for therapy, evaluations, and TMS. Contact us today to verify your benefits and schedule an appointment.</p>
  <a href="/services/tricare-tms-therapy.html" class="inline-block bg-primary text-white font-bold py-2.5 px-6 rounded-full hover:bg-deepTeal transition-colors">Learn About TRICARE TMS</a>
</div>
<h2 class="wp-block-heading">Frequently Asked Questions</h2>
<div class="rank-math-block" id="rank-math-faq">
<div class="rank-math-list">
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">Are copays required for TRICARE therapy sessions?</h3>
<div class="rank-math-answer">
<p>Copayments and cost-shares depend purely on your TRICARE plan and sponsor status. Active-duty service members have no out-of-pocket costs, while family members or retirees using TRICARE Select may have a copay.</p>
</div>
</div>
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">Does TRICARE cover telehealth or online therapy?</h3>
<div class="rank-math-answer">
<p>Yes, TRICARE covers telehealth services for medically necessary psychotherapy. GlobeCoRe offers highly secure, HIPAA-compliant telehealth for patients across 42 states.</p>
</div>
</div>
</div>
</div>
        """
    },
    {
        "id": "hormonal-mood-disorders-in-women-what-you-should-know",
        "title": "Hormonal Mood Disorders in Women: What You Should Know",
        "meta_title": "Hormonal Mood Disorders & Women's Mental Health | GlobeCoRe",
        "meta_desc": "Learn about PMDD, postpartum depression, and perimenopausal mood swings. GlobeCoRe provides expert therapy for women's hormonal mood disorders in Atlanta.",
        "keywords": "hormonal mood disorders, PMDD treatment Atlanta, postpartum depression therapy, women's mental health Atlanta, perimenopausal depression",
        "image": "./assets/hormonal_mood_blog_1773724039183.png",
        "category": "WOMEN'S HEALTH",
        "date": "12/03/2026",
        "excerpt": "Hormonal fluctuations can have a profound impact on a woman's mood and mental well-being. Recognizing these hormonal mood disorders is essential for receiving the right mental health support.",
        "content": """
<p>The female reproductive life cycle brings about significant endocrine and hormonal shifts that can profoundly influence brain chemistry and mood. For many women, these hormonal fluctuations trigger more than just mild irritation; they can lead to severe, debilitating mood disorders. Recognizing the intersection between hormonal changes and mental health is vital. At GlobeCoRe's <a href="/specialties/women-s-issues.html">women’s issues</a> specialty clinic in Atlanta, we provide targeted, compassionate support for these specific transitions.</p>
<h2 class="wp-block-heading">Common Hormonal Mood Disorders</h2>
<h3 class="wp-block-heading">1. Premenstrual Dysphoric Disorder (PMDD)</h3>
<p>While many women experience Premenstrual Syndrome (PMS), PMDD is a much more severe condition. PMDD triggers severe irritability, extreme sadness, debilitating anxiety, and anger in the week or two leading up to menstruation. The symptoms disrupt daily functioning, relationships, and work. Unlike typical depression, PMDD symptoms reliably resolve a few days after the period begins.</p>
<h3 class="wp-block-heading">2. Perinatal & Postpartum Mood Disorders</h3>
<p>The hormonal crash that occurs following childbirth is biologically massive. While the "baby blues" are common, Postpartum Depression (PPD) and Postpartum Anxiety involve deep, persistent despair, overwhelming fear, panic attacks, or difficulty bonding with the baby. Specialized <a href="/specialties/fertility-pregnancy-parenting.html">pregnancy and parenting therapy</a> provides a crucial safety net for new mothers navigating this vulnerable time.</p>
<h3 class="wp-block-heading">3. Perimenopausal Depression</h3>
<p>The transition into menopause (perimenopause) involves erratic fluctuations in estrogen and progesterone. For women in their 40s and early 50s, this can trigger a first-time onset of clinical depression, severe anxiety, sleep disturbances, and intense mood swings, independent of any life stressors.</p>
<h2 class="wp-block-heading">Finding the Right Treatment</h2>
<h3 class="wp-block-heading">Integrated Care Approaches</h3>
<p>Treating hormonal mood disorders requires an approach that respects both biological and psychological factors. Effective treatments include:</p>
<ul class="wp-block-list">
<li><strong>Psychotherapy:</strong> Cognitive Behavioral Therapy (CBT) and Dialectical Behavior Therapy (DBT) to teach emotional regulation and coping strategies.</li>
<li><strong>Medication Management:</strong> SSRIs (which have been shown to be uniquely effective for PMDD symptoms) and mood stabilizers safely managed by a <a href="/services/medication-management.html">psychiatric provider</a>.</li>
<li><strong>Lifestyle & Alternative Interventions:</strong> Tracking symptoms, optimizing sleep hygiene, dietary changes, and in severe treatment-resistant depression cases, exploring options like <a href="/services/tms-therapy.html">TMS therapy</a>.</li>
</ul>
<!-- CTA: Women's Health -->
<div class="cta-box-9482x bg-[#eddbed] p-6 rounded-xl my-8 border-l-4 border-purple-400">
  <h3 class="text-xl font-bold text-[#071e26] mb-2">Expert Therapy for Women's Mood Disorders</h3>
  <p class="mb-4 text-gray-800">You don't have to navigate hormonal turbulence alone. Our compassionate clinicians in Atlanta specialize in PMDD, perinatal, and perimenopausal support.</p>
  <a href="/contact.html" class="inline-block bg-purple-600 text-white font-bold py-2.5 px-6 rounded-full hover:bg-purple-800 transition-colors">Book a Consultation</a>
</div>
<h2 class="wp-block-heading">Frequently Asked Questions</h2>
<div class="rank-math-block" id="rank-math-faq">
<div class="rank-math-list">
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">How is PMDD diagnosed?</h3>
<div class="rank-math-answer">
<p>A diagnosis of PMDD is typically made by tracking your mood and physical symptoms daily for at least two consecutive menstrual cycles to confirm the timing and severity of the emotional shifts.</p>
</div>
</div>
<div class="rank-math-list-item">
<h3 class="rank-math-question font-bold text-lg mt-4">Can therapy alone cure postpartum depression?</h3>
<div class="rank-math-answer">
<p>For moderate cases, therapy is highly effective and often sufficient. However, for severe or debilitating PPD, an integrated approach combining therapy and medication management ensures the safest and fastest recovery for mom and baby.</p>
</div>
</div>
</div>
</div>
        """
    }
]

# Create blog html files
with open(template_file, "r", encoding="utf-8") as f:
    template_html = f.read()

for blog in blogs:
    # We will replace sections in the HTML via regex or simple string replacement.
    html_out = template_html
    
    # Title tag replacement
    html_out = re.sub(r"<title>.*?</title>", f"<title>{blog['meta_title']}</title>", html_out)
    
    # Meta descriptions and tags
    html_out = re.sub(r'<meta content=".*?" name="description"/>', f'<meta content="{blog["meta_desc"]}" name="description"/>', html_out)
    html_out = re.sub(r'<meta content=".*?" name="keywords"/>', f'<meta content="{blog["keywords"]}" name="keywords"/>', html_out)
    html_out = re.sub(r'<meta content=".*?" property="og:title"/>', f'<meta content="{blog["meta_title"]}" property="og:title"/>', html_out)
    html_out = re.sub(r'<meta content=".*?" property="og:description"/>', f'<meta content="{blog["meta_desc"]}" property="og:description"/>', html_out)
    html_out = re.sub(r'<meta content=".*?" property="og:url"/>', f'<meta content="https://globecoreinc.com/{blog["id"]}.html" property="og:url"/>', html_out)
    html_out = re.sub(r'<meta content=".*?" name="twitter:title"/>', f'<meta content="{blog["meta_title"]}" name="twitter:title"/>', html_out)
    html_out = re.sub(r'<meta content=".*?" name="twitter:description"/>', f'<meta content="{blog["meta_desc"]}" name="twitter:description"/>', html_out)
    
    # Insert Schema JSON-LD at the end of HEAD
    schema_code = f'''
<!-- Schema Data -->
<script type="application/ld+json">
{{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {{
    "@type": "WebPage",
    "@id": "https://globecoreinc.com/{blog['id']}.html"
  }},
  "headline": "{blog['title']}",
  "image": "https://globecoreinc.com/{blog['image'].replace('./', '')}",
  "author": {{
    "@type": "Person",
    "name": "Kelly Lewis-Arthur"
  }},
  "publisher": {{
    "@type": "Organization",
    "name": "GlobeCoRe Inc.",
    "logo": {{
      "@type": "ImageObject",
      "url": "https://globecoreinc.com/assets/globecore_logo-removebg-preview.png"
    }}
  }},
  "datePublished": "{datetime.strptime(blog['date'], '%d/%m/%Y').strftime('%Y-%m-%d')}"
}}
</script>
</head>
'''
    html_out = html_out.replace('</head>', schema_code)
    
    # Header replacement
    html_out = re.sub(r'<span class="bg-primary/10 text-primary text-\[10px].*?</span>', f'<span class="bg-primary/10 text-primary text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] mb-6 inline-block">{blog["category"]}</span>', html_out, flags=re.DOTALL)
    
    # H1
    html_out = re.sub(r'<h1 class="text-\[32px\].*?</h1>', f'<h1 class="text-[32px] md:text-[42px] lg:text-[48px] font-extrabold text-[#071e26] leading-tight font-raleway mb-8">{blog["title"]}</h1>', html_out, flags=re.DOTALL)
    
    # Date
    html_out = re.sub(r'\d{2}/\d{2}/\d{4}</span>\n<span class="w-1.5', f'{blog["date"]}</span>\n<span class="w-1.5', html_out, flags=re.DOTALL)
    
    # Hero Image
    html_out = re.sub(r'<img alt=".*?" class="w-full h-auto object-cover max-h-\[500px\]" src=".*?"/>', f'<img alt="{blog["title"]}" class="w-full h-auto object-cover max-h-[500px]" src="{blog["image"]}"/>', html_out)
    
    # Body Content Replacement
    # The article body is inside <div class="article-content ..."> ... </div>
    # Let's replace anything from <div class="article-content text-[17px] md:text-[18px]"> to </div>\n</article>
    start_tag = '<div class="article-content text-[17px] md:text-[18px]">'
    end_tag = '</div>\n</article>'
    
    start_idx = html_out.find(start_tag)
    end_idx = html_out.find('</article>', start_idx)
    
    if start_idx != -1 and end_idx != -1:
        new_content = start_tag + "\n" + blog['content'] + "\n</div>"
        html_out = html_out[:start_idx] + new_content + html_out[end_idx:]
    
    # Write the new html file
    output_path = os.path.join(base_dir, f"{blog['id']}.html")
    with open(output_path, "w", encoding="utf-8") as outf:
        outf.write(html_out)
    print(f"Generated {output_path}")

# Now update the blog index page
with open(blog_index, "r", encoding="utf-8") as f:
    index_html = f.read()

# We need to inject the 4 new blog cards inside <div class="flex flex-col gap-10">
injection_point = '<div class="flex flex-col gap-10">'

cards_html = ""
for blog in blogs:
    card = f"""
<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col md:flex-row h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] md:aspect-auto md:w-[40%] flex-shrink-0">
<a class="block w-full h-full" href="./{blog['id']}.html">
<img alt="{blog['title']}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="{blog['image']}"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                {blog['category']}
                            </span>
</div>
</div>
<div class="p-8 md:p-10 flex flex-col flex-grow relative bg-white md:w-[60%] justify-center">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                {blog['date']}
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[28px] lg:text-[32px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./{blog['id']}.html">{blog['title']}</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>{blog['excerpt']}</p>
</div>
<!-- Footer -->
<div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
<span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest flex items-center gap-2">
                                By Kelly Lewis-Arthur
                            </span>
<span class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform cursor-pointer">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
</svg>
</span>
</div>
</div>
</article>
"""
    cards_html += card

new_index_html = index_html.replace(injection_point, injection_point + "\n" + cards_html)

with open(blog_index, "w", encoding="utf-8") as f:
    f.write(new_index_html)
print("Updated blog.html successfully.")
