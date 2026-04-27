<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Blog | GlobeCoRe Inc. Atlanta, GA";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    <!-- Single Post Header Style -->
<style>
        .article-content p { margin-bottom: 1.5em; line-height: 1.8; color: #4b5563; }
        .article-content h1, .article-content h2, .article-content h3, .article-content h4 { font-family: 'Raleway', sans-serif; color: #071e26; font-weight: 800; margin-top: 1.5em; margin-bottom: 0.75em; }
        .article-content h2 { font-size: 2rem; margin-top: 2em; }
        .article-content h3 { font-size: 1.5rem; }
        .article-content ul, .article-content ol { margin-bottom: 1.5em; padding-left: 1.5em; color: #4b5563; }
        .article-content ul { list-style-type: disc; }
        .article-content ol { list-style-type: decimal; }
        .article-content li { margin-bottom: 0.5em; }
        .article-content a { color: #8BAF4C; text-decoration: none; font-weight: 600; border-bottom: 1px solid transparent; transition: border-color 0.3s; }
        .article-content a:hover { border-color: #8BAF4C; }
        .article-content blockquote { border-left: 4px solid #8BAF4C; padding-left: 1.5rem; font-style: italic; color: #6b7280; margin: 2rem 0; }
        .article-content img { border-radius: 1rem; margin: 2rem auto; }
        .article-content strong { color: #071e26; }
    
        /* Responsive Media */
        .article-content img, .article-content iframe, .article-content video { max-width: 100%; height: auto; }
        .article-content iframe { aspect-ratio: 16/9; width: 100%; border-radius: 1rem; margin: 2rem auto; display: block; }

        /* Line Tables with Stacked Mobile View */
        .article-content .wp-block-table { margin: 2rem 0; border-radius: 0.5rem; overflow: hidden; }
        .article-content table { width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; border: 1px solid #e5e7eb; margin: 0; }
        .article-content th, .article-content td { padding: 1rem 1.5rem; border: 1px solid #e5e7eb; vertical-align: top; }
        .article-content th { background-color: #f8fafc; font-weight: 800; color: #071e26; border-bottom: 2px solid #e5e7eb; }
        .article-content td { color: #4b5563; }
        .article-content tr:hover td { background-color: #f1f5f9; }
        .article-content tr:nth-child(even) td { background-color: #f9fafb; }

        /* Mobile Responsive Stacked Tables */
        @media (max-width: 767px) {
            .article-content table, .article-content thead, .article-content tbody, .article-content th, .article-content td, .article-content tr { display: block; width: 100%; }
            .article-content thead { display: none; }
            .article-content tr.mobile-header-row { display: none !important; }
            .article-content tr { margin-bottom: 1.5rem; border: 1px solid #e5e7eb; border-radius: 0.5rem; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.02); }
            .article-content tr:last-child { margin-bottom: 0; }
            .article-content td { 
                border: none; border-bottom: 1px solid #e5e7eb; 
                position: relative; padding: 1rem; padding-left: 45%; text-align: left;
                min-height: 2.5rem; background-color: white !important;
            }
            .article-content td:last-child { border-bottom: 0; }
            .article-content td::before {
                content: attr(data-label);
                position: absolute; left: 1rem; top: 1rem; width: 40%; padding-right: 10px;
                white-space: normal; text-align: left; font-weight: 800; color: #071e26; font-size: 0.85rem; line-height: 1.4;
            }
        }
    </style>
<main class="bg-[#f8fcfc] py-24 selection:bg-deepTeal/20 font-inter pt-32 lg:pt-40" id="main">
<div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
<a class="inline-flex items-center gap-2 text-primary hover:text-deepTeal font-bold mb-10 transition-colors" href="./page-4.php">
<svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                Back to Blog
            </a>
<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 p-8 md:p-14 mb-16 relative">
<!-- Header block -->
<div class="mb-10 text-center pb-10 border-b border-gray-100">
<span class="bg-primary/10 text-primary text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] mb-6 inline-block">
                        Blog
                    </span>
<h1 class="text-[32px] md:text-[42px] lg:text-[48px] font-extrabold text-[#071e26] leading-tight font-raleway mb-8">
                        Transcranial Magnetic Stimulation (TMS): A Beginner’s Guide to Rapid Relief
                    </h1>
<div class="flex items-center justify-center gap-6 text-xs text-gray-400 font-bold uppercase tracking-widest flex-wrap">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
                            10/11/2025
                        </span>
<span class="w-1.5 h-1.5 rounded-full bg-gray-200"></span>
<span class="flex items-center gap-1.5">
                            By Kelly Lewis-Arthur
                        </span>
</div>
</div>
<!-- Hero Image -->
<div class="rounded-2xl overflow-hidden mb-12 relative shadow-md">
<img alt="Transcranial Magnetic Stimulation (TMS): A Beginner’s Guide to Rapid Relief" class="w-full h-auto object-cover max-h-[500px]" src="https://globecoreinc.com/wp-content/uploads/2025/09/transcranial-magnetic-stimulation-tms-a-beginner-guide.png"/>
</div>
<!-- Article Content -->
<div class="article-content text-[17px] md:text-[18px]">
<div class="elementor elementor-14334" data-elementor-id="14334" data-elementor-post-type="post" data-elementor-settings='{"ha_cmc_init_switcher":"no"}' data-elementor-type="wp-post">
<div class="elementor-element elementor-element-76d7ec09 e-flex e-con-boxed e-con e-parent" data-e-type="container" data-element_type="container" data-id="76d7ec09" data-settings='{"_ha_eqh_enable":false}'>
<div class="e-con-inner">
<div class="elementor-element elementor-element-8701916 elementor-widget elementor-widget-post-info" data-e-type="widget" data-element_type="widget" data-id="8701916" data-widget_type="post-info.default">
<div class="elementor-widget-container">
<ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">
<li class="elementor-icon-list-item elementor-repeater-item-590d911 elementor-inline-item" itemprop="author">
<a href="#">
<span class="elementor-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg e-far-user-circle" viewbox="0 0 496 512" xmlns="http://www.w3.org/2000/svg"><path d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"></path></svg> </span>
<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-author">
										Kelly Lewis-Arthur					</span>
</a>
</li>
<li class="elementor-icon-list-item elementor-repeater-item-06ad55b elementor-inline-item" itemprop="datePublished">
<a href="#">
<span class="elementor-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg e-fas-calendar" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path></svg> </span>
<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-date">
<time>August 13, 2025</time> </span>
</a>
</li>
<li class="elementor-icon-list-item elementor-repeater-item-3814a4c elementor-inline-item">
<span class="elementor-icon-list-icon">
<svg aria-hidden="true" class="e-font-icon-svg e-far-clock" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg> </span>
<span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-time">
<time>9:06 am</time> </span>
</li>
</ul>
</div>
</div>
<div class="elementor-element elementor-element-552ec50d elementor-widget elementor-widget-text-editor" data-e-type="widget" data-element_type="widget" data-id="552ec50d" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p>Transcranial Magnetic Stimulation (TMS) is a non-invasive brain treatment unlike any other. With a coil on the scalp, magnetic pulses are sent into parts of the brain that regulate mood. It’s an outpatient treatment, nonsurgical and with no anesthesia, that is generally used for treatment-resistant <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">depression</a> (TRD).</p>
<p>The FDA approved TMS for depression in 2008, as well as <a href="../specialties/ocd.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">OCD</a> (2018) and smoking cessation. The U.K. has similar guidance through NICE.</p>
<div class="wp-block-wpseopress-table-of-contents">
<h2>Table of Contents</h2>
<nav>
<ul>
<li><a href="#you-may-be-wondering-how-tms-works">You may be wondering how TMS works.</a></li>
<li><a href="#types-of-tms">Types of TMS</a></li>
<li><a href="#conditions-treated">Conditions Treated</a>
<ul>
<li><a href="#whos-eligible">Who’s Eligible?</a></li>
<li><a href="#not-appropriate-for">Not appropriate for:</a></li>
</ul>
</li>
<li><a href="#how-a-course-works">How a Course Works</a>
<ul>
<li><a href="#effectiveness">Effectiveness</a></li>
<li><a href="#safety-side-effects">Safety &amp; Side Effects</a></li>
<li><a href="#tms-vs-medication-vs-ect">TMS vs Medication vs ECT</a></li>
</ul>
</li>
<li><a href="#what-you-need-to-know-before-your-first-session">What You Need to Know Before Your First Session</a>
<ul>
<li><a href="#during-and-after-the-session">During and After the Session</a></li>
<li><a href="#pragmatics-cost-insurance">Pragmatics: Cost &amp; Insurance</a></li>
</ul>
</li>
<li><a href="#myths-versus-facts">Myths versus Facts</a></li>
<li><a href="#conclusion">Conclusion</a></li>
<li><a href="#frequently-asked-questions-faqs">Frequently Asked Questions (FAQ’s)</a></li>
</ul>
</nav></div>
<h2 class="wp-block-heading" id="you-may-be-wondering-how-tms-works">You may be wondering how TMS works.</h2>
<p>A TMS device generates magnetic pulses to stimulate nerve cells in specific areas of the brain, usually in the left dorsolateral prefrontal cortex. Once a certain number of treatments is reached, these magnetic pulses will “reset” the circuits in the brain that control mood and motivational functions.</p>
<p>Depending on the frequency of the magnetic pulses generated by the device, there are several different responses to brain activity. There are even accelerated options in which the TMS system can be programmed to deliver a variety of short <a href="../services/tms-therapy.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">TMS therapy</a> sessions daily, allowing for results to be achieved as quickly as possible.</p>
<h2 class="wp-block-heading" id="types-of-tms">Types of TMS</h2>
<ul class="wp-block-list">
<li>rTMS: This is a standard therapy, delivering 20-30 sessions over 4-6 weeks</li>
<li>Deep TMS (dTMS): This method uses specially calibrated coils (H-coils) and can stimulate deeper regions. FDA approved to treat depression and smoking.</li>
<li>Accelerated TMS: This option allows several treatments to occur in a day, and it is often possible to condense all the treatments into just one week.</li>
</ul>
<h2 class="wp-block-heading" id="conditions-treated">Conditions Treated</h2>
<p>Approved uses:</p>
<ul class="wp-block-list">
<li>Major Depressive Disorder (especially TRD)</li>
<li>OCD</li>
<li>Smoking cessation</li>
</ul>
<p>Research areas include <a href="../specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">PTSD</a>, bipolar depression, migraine, chronic pain, and cognitive decline.</p>
<h3 class="wp-block-heading" id="whos-eligible">Who’s Eligible?</h3>
<p>TMS may be appropriate if:</p>
<ul class="wp-block-list">
<li>You have tried and not gotten better with medication or therapy.</li>
<li>You can commit to daily visits.</li>
</ul>
<h3 class="wp-block-heading" id="not-appropriate-for">Not appropriate for:</h3>
<p>* People with metal implants in their head (such as an aneurysm clip).<br/>* People with uncontrolled seizure disorders.</p>
<h2 class="wp-block-heading" id="how-a-course-works">How a Course Works</h2>
<ol class="wp-block-list">
<li>Mapping: The clinician identifies the applicable brain location using test pulses.</li>
<li>Sessions: 5 days/week for 4 – 6 weeks (20 – 40 minutes long).</li>
<li>Check-ins: weekly progress checks.</li>
<li>Boosters: optional maintenance sessions.</li>
</ol>
<h3 class="wp-block-heading" id="effectiveness">Effectiveness</h3>
<p>The studies done to date have shown that TMS outperformed sham treatments for TRD. Response and remission rates are promising, and often the effects last for many months, especially with the boosting sessions.</p>
<h3 class="wp-block-heading" id="safety-side-effects">Safety &amp; Side Effects</h3>
<p>Common: Scalp discomfort, headache, facial twitches, or lightheadedness (typically mild).<br/>Rare: Seizures (very rare with proper screening).<br/>Precautions: Ear protection is used because it can be loud.</p>
<h3 class="wp-block-heading" id="tms-vs-medication-vs-ect">TMS vs Medication vs ECT</h3>
<ul class="wp-block-list">
<li>Medication: widely available but can include systemic side effects.</li>
<li>TMS: non-invasive, outpatient, does not use anesthesia, and almost no cognitive side effects.</li>
<li>ECT: very effective but requires anesthesia and can raise risk of memory issue.</li>
</ul>
<h2 class="wp-block-heading" id="what-you-need-to-know-before-your-first-session">What You Need to Know Before Your First Session</h2>
<p>* Provide full medical and medication history.<br/>* Avoid metal or metallic accessories near the coil.<br/>* Eat and stay self-hydrated as you normally would.<br/>* If you suspect you will want to have multiple daily appointments, plan ahead.</p>
<h3 class="wp-block-heading" id="during-and-after-the-session">During and After the Session</h3>
<p>There may be a sensation of tapping and a clicking sound that occurs. Most people will return to their regular activities immediately after. Headaches, if any, usually go away with time.</p>
<h3 class="wp-block-heading" id="pragmatics-cost-insurance">Pragmatics: Cost &amp; Insurance</h3>
<p>For most insurers, TMS is covered if and only if you have attempted treatment with standard therapies first. If you are going to self-pay, costs are very varied, and clinics may have packages or payment plans.</p>
<h2 class="wp-block-heading" id="myths-versus-facts">Myths versus Facts</h2>
<ul class="wp-block-list">
<li>Myth: TMS is “shock therapy.”</li>
<li>Fact: It uses magnets, not electrical shocks.</li>
<li>Myth: TMS alters personality.</li>
<li>Fact: It makes symptoms less severe without changing personality.</li>
<li>Myth: TMS works instantaneously.</li>
<li>Fact: Progress is slow, most often over the course of weeks.</li>
</ul>
<h2 class="wp-block-heading" id="conclusion">Conclusion</h2>
<p>Transcranial Magnetic Stimulation (TMS) is a safe, effective, and non-invasive option for those who have not been able to find relief with medication or therapy. As FDA approval continues, protocols continue to expand &amp; safety data continue to be strengthened, TMS is likely to gain traction &amp; become a more mainstream treatment not just for depression, but also for other applications.</p>
<p>If you’re considering TMS, now it’s the time to take the next step. Reach out to a qualified provider, inquire about the common questions on TMS, discuss if TMS could be a part of the recovery process, and find out what options are available to you.</p>
<h2 class="wp-block-heading" id="frequently-asked-questions-faqs">Frequently Asked Questions (FAQ’s)</h2>
<div class="wp-block-wpseopress-faq-block-v2 is-layout-flow wp-block-wpseopress-faq-block-v2-is-layout-flow"><details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow" id="how-long-until-i-see-results">
<summary>How long until I see results?</summary>
<p>Typically, it can take around 2-4 weeks into treatment.</p>
</details><details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow" id="can-i-drive-after-tms">
<summary>Can I drive after TMS?</summary>
<p>Yes, there is no sedation involved.</p>
</details><details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow" id="what-are-the-most-common-side-effects">
<summary>What are the most common side effects?</summary>
<p>Scalp discomfort and mild headaches.</p>
</details><details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow" id="is-it-safe-to-have-dental-fillings-or-braces">
<summary>Is it safe to have dental fillings or braces?</summary>
<p>Yes, these are safe, but you must inform your provider of these presents.</p>
</details><details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow" id="how-many-sessions-will-i-need">
<summary>How many sessions will I need?</summary>
<p>In total, people typically might receive 20-30 sessions in around 4-6 weeks.</p>
</details><details class="wp-block-details is-layout-flow wp-block-details-is-layout-flow" id="is-tms-the-same-as-ect">
<summary>Is TMS the same as ECT?</summary>
<p>No, ECT involves anesthesia and incites seizures; TMS does not.</p>
</details></div>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-2ac5481 e-flex e-con-boxed e-con e-parent" data-e-type="container" data-element_type="container" data-id="2ac5481" data-settings='{"_ha_eqh_enable":false}'>
<div class="e-con-inner">
<div class="elementor-element elementor-element-0533552 elementor-author-box--avatar-yes elementor-author-box--name-yes elementor-author-box--biography-yes elementor-author-box--link-no elementor-widget elementor-widget-author-box" data-e-type="widget" data-element_type="widget" data-id="0533552" data-widget_type="author-box.default">
<div class="elementor-widget-container">
<div class="elementor-author-box">
<div class="elementor-author-box__avatar">
<img alt="Picture of Kelly Lewis-Arthur" decoding="async" loading="lazy" src="https://secure.gravatar.com/avatar/9c7d6bd536c2f0261108e30cd010804a305f7c35d67d8f128ef500d0aca42dc6?s=300&amp;d=mm&amp;r=g">
</img></div>
<div class="elementor-author-box__text">
<div>
<h4 class="elementor-author-box__name">
							Kelly Lewis-Arthur						</h4>
</div>
<div class="elementor-author-box__bio">
						Dr. Kelly Lewis-Arthur is the visionary founder and President of GlobeCoRe, Inc., a full-service psychological and global consulting practice based in Atlanta, GA. With 20+ years of experience in culturally sensitive psychotherapy, , consultation, and training, she has dedicated her career to empowering individuals and organizations across diverse communities.					</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</article>
</div>
</main>

    <?php include "partials/footer.php"; ?>
