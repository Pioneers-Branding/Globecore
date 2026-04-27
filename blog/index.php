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

    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-108.jpg" alt="Blog"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay filter blur-[2px]">
            <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-[#071e26]/80 to-transparent"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center">
            <div
                class="inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">Help & Information</span>
            </div>
            <h1
                class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">
                Blog
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care,
                and profound expertise.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../contact.php"
                    class="bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 text-lg">Book
                    a Consultation</a>
            </div>
        </div>

        <!-- Custom Wave Divider -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none drop-shadow-lg text-white">
            <svg fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none"
                class="w-full h-[60px] md:h-[100px]">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,108.83,106.6,117.8,162,118.8,216.7,119.78,271.69,103.55,321.39,56.44Z">
                </path>
            </svg>
        </div>
    </section>


    <!-- BLOG MAIN CONTENT SECTION -->
    <main id="main" class="bg-[#f8fcfc] py-24 selection:bg-deepTeal/20">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 md:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-primary font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Our Journal</span>
                <h1
                    class="text-[40px] md:text-[54px] font-extrabold text-[#071e26] mb-6 font-raleway tracking-tight leading-tight">
                    Latest Insights & Updates
                </h1>
                <p class="text-gray-500 text-lg">Discover the latest news, research, and stories on <a href="../services/tms-therapy.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">TMS therapy</a> and
                    mental wellness.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
                    <div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
                        <a href="./how-to-calm-anxiety.php" class="block w-full h-full">
                            <img src="https://globecoreinc.com/wp-content/uploads/2026/04/gemini_generated_image_ivhigmivhigmivhi.png" alt="How to Calm Anxiety" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out">
                        </a>
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none"></div>
                        <div class="absolute top-6 left-6 z-10">
                            <span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">ANXIETY</span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow relative bg-white w-full">
                        <div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                14/04/2026
                            </span>
                        </div>
                        <h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
                            <a href="./how-to-calm-anxiety.php" class="focus:outline-none before:absolute before:inset-0 cursor-pointer">How to Calm Anxiety: Proven Techniques for Immediate Relief</a>
                        </h2>
                        <div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
                            <p>Anxiety can feel like a heavy weight sitting on your chest, a racing heart that won’t slow down, or a mind that constantly plays “what-if” scenarios on repeat. Discover proven techniques for immediate relief and long-term management.</p>
                        </div>
                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
                            <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest flex items-center gap-2">By Kelly Lewis-Arthur</span>
                            <span class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform cursor-pointer">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
                    <div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
                        <a href="./does-marriage-counseling-work.php" class="block w-full h-full">
                            <img src="https://globecoreinc.com/wp-content/uploads/2026/04/marriage-counseling.jpg" alt="Does Marriage Counseling Work?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out">
                        </a>
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none"></div>
                        <div class="absolute top-6 left-6 z-10">
                            <span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">COUNSELLING</span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow relative bg-white w-full">
                        <div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                09/04/2026
                            </span>
                        </div>
                        <h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
                            <a href="./does-marriage-counseling-work.php" class="focus:outline-none before:absolute before:inset-0 cursor-pointer">Does Marriage Counseling Work? What the Research Really Says</a>
                        </h2>
                        <div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
                            <p>Whether you are dealing with constant conflict, emotional distance, or infidelity, couples therapy may be the turning point your relationship needs. Explore what the research says about marriage counseling success rates.</p>
                        </div>
                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
                            <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest flex items-center gap-2">By Kelly Lewis-Arthur</span>
                            <span class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform cursor-pointer">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </article>


                <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
                    <div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
                        <a href="./can-veterans-get-tricare-for-tms-therapy.php" class="block w-full h-full">
                            <img src="https://globecoreinc.com/wp-content/uploads/2026/04/image-globecore-1.jpg" alt="Can Veterans Get TRICARE for TMS Therapy?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out">
                        </a>
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none"></div>
                        <div class="absolute top-6 left-6 z-10">
                            <span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">TMS</span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow relative bg-white w-full">
                        <div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                07/04/2026
                            </span>
                        </div>
                        <h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
                            <a href="./can-veterans-get-tricare-for-tms-therapy.php" class="focus:outline-none before:absolute before:inset-0 cursor-pointer">Can Veterans Get TRICARE for TMS Therapy? (Complete Coverage Guide)</a>
                        </h2>
                        <div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
                            <p>Mental health conditions such as depression and PTSD affect a large number of veterans. While traditional treatments are effective for many, some struggle with persistent symptoms. Learn about TRICARE coverage for TMS therapy.</p>
                        </div>
                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
                            <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest flex items-center gap-2">By Kelly Lewis-Arthur</span>
                            <span class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform cursor-pointer">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </article>


                <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
                    <div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
                        <a href="./is-adhd-a-disability.php" class="block w-full h-full">
                            <img src="https://globecoreinc.com/wp-content/uploads/2026/04/is-adhd-a-disability-1024x742.png" alt="Is ADHD a Disability?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out">
                        </a>
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none"></div>
                        <div class="absolute top-6 left-6 z-10">
                            <span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">ADHD</span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow relative bg-white w-full">
                        <div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                07/04/2026
                            </span>
                        </div>
                        <h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
                            <a href="./is-adhd-a-disability.php" class="focus:outline-none before:absolute before:inset-0 cursor-pointer">Is ADHD a Disability? What You Need to Know</a>
                        </h2>
                        <div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
                            <p>Millions live with ADHD and wonder whether it qualifies as a disability under the law. The answer is yes, but it depends on how significantly it affects daily life. Understand your rights and support options.</p>
                        </div>
                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
                            <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest flex items-center gap-2">By Kelly Lewis-Arthur</span>
                            <span class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform cursor-pointer">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./what-happens-during-a-psychiatric-evaluation.php">
<img alt="What Happens During a Psychiatric Evaluation?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="../assets/psych_eval_blog_1773723989285.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                EVALUATIONS
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                17/03/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./what-happens-during-a-psychiatric-evaluation.php">What Happens During a Psychiatric Evaluation?</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>If you've been feeling overwhelmed, anxious, or unable to focus, a is often the critical first step toward healing. Demystifying the evaluation process can ease your mind, help you prepare the right questions, and ultimately set you on the best path toward finding clarity and achieving a balanced mental state.</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./therapy-for-psychological-abuse-how-recovery-works.php">
<img alt="Therapy for Psychological Abuse: How Recovery Works" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="../assets/psych_abuse_blog_1773724005530.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                <a href="../specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">TRAUMA</a> THERAPY
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                16/03/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./therapy-for-psychological-abuse-how-recovery-works.php">Therapy for Psychological Abuse: How Recovery Works</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Psychological abuse is a devastating form of trauma that leaves deep, invisible scars on your mental health. With targeted, trauma-informed therapy, you can learn to recognize manipulation tactics, rebuild your shattered <a href="../specialties/self-esteem.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">self-esteem</a>, set rigid boundaries, and rediscover your true identity outside of the abusive dynamic.</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./does-tricare-cover-mental-health-therapy.php">
<img alt="Does TRICARE Cover Mental Health Therapy?" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="../assets/tricare_mental_health_blog_1773724024240.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                INSURANCE & <a href="../services/tricare-tms-therapy.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">TRICARE</a>
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                14/03/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./does-tricare-cover-mental-health-therapy.php">Does TRICARE Cover Mental Health Therapy?</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Navigating mental health insurance coverage can be confusing, especially for active-duty military members, veterans, and their dependents. Understanding exactly what TRICARE covers for mental health—including standard psychotherapy, psychological evaluations, and innovative treatments like TMS therapy—is the key to unlocking the care you deserve.</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./hormonal-mood-disorders-in-women-what-you-should-know.php">
<img alt="Hormonal Mood Disorders in Women: What You Should Know" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="../assets/hormonal_mood_blog_1773724039183.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                WOMEN'S HEALTH
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                12/03/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./hormonal-mood-disorders-in-women-what-you-should-know.php">Hormonal Mood Disorders in Women: What You Should Know</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Hormonal fluctuations can have a profound impact on a woman's mood, emotional resilience, and overall mental well-being across her lifespan. Recognizing the unique signs of these distinct hormonal mood disorders—from PMDD to postpartum <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">depression</a>—is absolutely essential for women to receive the correct diagnosis and the most effective psychological support.</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./is-tms-therapy-safe.php">
<img alt="Is TMS Therapy Safe? What You Need to Know" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="https://globecoreinc.com/wp-content/uploads/2026/02/globecore-blgo-photoroom-1024x683.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                TMS
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                10/02/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./is-tms-therapy-safe.php">Is TMS
                                Therapy Safe? What You Need to Know</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Transcranial Magnetic Stimulation (TMS) therapy has become an increasingly popular option
                                for individuals seeking non-invasive, drug-free treatment for mental health and
                                neurological conditions. As interest grows, one question consistently comes up: Is TMS
                                therapy safe? This is a valid and important concern. Any treatment involving the brain
                                naturally raises questions about risk, side effects, and […]</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./tms-therapy-for-adhd.php">
<img alt="TMS Therapy for ADHD: How Non-Invasive Brain Stimulation Works" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="https://globecoreinc.com/wp-content/uploads/2026/02/gemini_generated_image_vhpn1svhpn1svhpn-1024x571.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                TMS
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                06/02/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./tms-therapy-for-adhd.php">TMS
                                Therapy for ADHD: How Non-Invasive Brain Stimulation Works</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Attention-Deficit/Hyperactivity Disorder (<a href="../specialties/adhd.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">ADHD</a>) is a complex neurological condition that
                                affects focus, impulse control, emotional regulation, and executive functioning. For
                                many individuals, ADHD can interfere with work performance, academic success,
                                relationships, and daily routines. While medication and behavioral therapy remain common
                                treatment options, they don’t work for everyone. Side effects, incomplete symptom
                                relief, or a desire</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./is-a-tms-dip-normal.php">
<img alt="Is TMS Dip Normal? Understanding Temporary Mood Changes During TMS Therapy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="https://globecoreinc.com/wp-content/uploads/2026/02/gemini_generated_image_efctrefctrefctre-1024x570.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                TMS
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                31/01/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./is-a-tms-dip-normal.php">Is TMS
                                Dip Normal? Understanding Temporary Mood Changes During TMS Therapy</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Transcranial Magnetic Stimulation (TMS therapy) has become a highly effective
                                non-invasive treatment for depression, <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">anxiety</a>, <a href="../specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">PTSD</a>, and <a href="../specialties/ocd.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">OCD</a>. While most patients
                                notice improvement over the course of therapy, some may experience a temporary dip in
                                mood, energy, or motivation, often referred to as a TMS dip. If you’re starting TMS
                                therapy or curious about potential</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./is-tms-therapy-legitimate.php">
<img alt="Is TMS Therapy Legitimate? Exploring the Science, Safety &amp; Real Benefits" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="https://globecoreinc.com/wp-content/uploads/2026/01/gemini_generated_image_wx4n7fwx4n7fwx4n.png"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                TMS
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                30/01/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./is-tms-therapy-legitimate.php">Is TMS
                                Therapy Legitimate? Exploring the Science, Safety &amp; Real Benefits</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Transcranial Magnetic Stimulation (TMS) Therapy has grown rapidly in popularity as a
                                non-invasive mental health treatment, but many people still ask: “Is TMS therapy
                                legitimate?” If you’re considering this innovative treatment for depression, anxiety,
                                PTSD, OCD, or other conditions, it’s important to understand the science, the evidence,
                                and how it works. In this comprehensive guide,</p>
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

<article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
<div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
<a class="block w-full h-full" href="./why-some-people-feel-tms-ruined-my-life.php">
<img alt="Why Some People Feel: “TMS Ruined My Life”" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="https://globecoreinc.com/wp-content/uploads/2026/01/apollo_acool_greiner-tms-therapy-system-1-1024x683.webp"/>
</a>
<div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none">
</div>
<!-- Category Badge -->
<div class="absolute top-6 left-6 z-10">
<span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">
                                TMS
                            </span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow relative bg-white w-full">
<!-- Meta -->
<div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
<span class="flex items-center gap-1.5">
<svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
</path>
</svg>
                                22/01/2026
                            </span>
</div>
<!-- Title -->
<h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
<a class="focus:outline-none before:absolute before:inset-0 cursor-pointer" href="./why-some-people-feel-tms-ruined-my-life.php">Why
                                Some People Feel: “TMS Ruined My Life”</a>
</h2>
<!-- Excerpt -->
<div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
<p>Transcranial Magnetic Stimulation (TMS) therapy is often introduced as a hopeful option
                                for people who have struggled with depression for years without success from medications
                                or talk therapy. For many, it becomes a turning point toward recovery. Yet for some
                                individuals, the experience feels frightening, overwhelming, and emotionally
                                destabilizing, leading them to say things like</p>
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
</div>

<!-- Pagination block -->
            <div class="mt-16 flex justify-center items-center gap-2 md:gap-3 font-inter flex-wrap">
                <span class="px-6 h-12 mr-2 flex items-center justify-center rounded-full bg-gray-50 border border-gray-100 text-gray-300 font-extrabold text-lg cursor-not-allowed gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
            </svg>
            Prev
        </span>
                <span class="w-12 h-12 flex items-center justify-center rounded-full bg-[#071e26] text-white font-extrabold text-lg shadow-[0_8px_16px_rgb(7,30,38,0.2)]">1</span>
                <a href="./page-2.php" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all">2</a>
                <a href="./page-3.php" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all">3</a>
                <a href="./page-4.php" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all">4</a>
                <a href="./page-5.php" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all">5</a>
                <a href="./page-2.php" class="px-6 h-12 ml-2 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all group gap-2">
            Next
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
            </svg>
        </a>
            </div>
        </div>
    </main>

    <?php include "partials/footer.php"; ?>
