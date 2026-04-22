<?php include 'header.php'; ?>
<main>

    <!-- 1. Hero Section -->
    <section
        class="relative min-h-[600px] md:h-[85vh] flex items-center justify-center overflow-hidden pt-28 pb-16 md:pt-24 md:pb-12">
        <!-- Background Video -->
        <div class="absolute inset-0 z-0">
            <video autoplay loop muted playsinline class="w-full h-full object-cover">
                <source
                    src="https://res.cloudinary.com/de4kw1t2i/video/upload/v1774957698/334716_1_Online-Video-Cutter.Com_wn4n7v.webm"
                    type="video/webm">
            </video>
            <div
                class="absolute inset-0 bg-primary/80 md:bg-gradient-to-r md:from-primary/90 md:via-primary/70 md:to-transparent">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl reveal">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-8 bg-secondary flex-shrink-0"></span>
                    <span class="text-secondary text-xs sm:text-sm font-bold tracking-widest uppercase">Start Now, Feel
                        Better By Summer</span>
                </div>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Advanced Psychiatry & Deep
                    TMS Therapy <span class="text-secondary font-light"> in California</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-100 mb-6 sm:mb-8 leading-relaxed font-light">
                    Experience advanced psychiatry in california with personalized treatments for depression, anxiety, OCD, and PTSD using evidence-based therapies and
                    advanced neuromodulation technology.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mb-8 sm:mb-10">
                    <a href="contact.php"
                        class="bg-lightblue text-primary font-bold px-6 sm:px-8 py-3.5 rounded-full text-center text-sm sm:text-base transition-all hover:bg-[#1aadd0] hover:shadow-lg shadow-md hover:-translate-y-1 transform">
                        Schedule Your Consultation
                    </a>
                    <a href="#treatments"
                        class="bg-white/10 backdrop-blur-sm border border-white/30 text-white font-medium px-6 sm:px-8 py-3.5 rounded-full text-center text-sm sm:text-base transition-all hover:bg-white/20">
                        Explore Treatments
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 pt-6 border-t border-white/20">
                    <div class="flex items-center gap-2 text-white/90">
                        <i data-lucide="shield-check" class="w-5 h-5 text-secondary"></i>
                        <span class="text-sm font-medium">FDA Approved</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <i data-lucide="file-check-2" class="w-5 h-5 text-secondary"></i>
                        <span class="text-sm font-medium">Insurance Accepted</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <i data-lucide="award" class="w-5 h-5 text-secondary"></i>
                        <span class="text-sm font-medium">Board-Certified</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <i data-lucide="zap" class="w-5 h-5 text-secondary"></i>
                        <span class="text-sm font-medium">Advanced Tech</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Treatment Response Rates (Stats Section) -->
    <section class="py-12 relative z-20 -mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Background Container with Light Tint and Concentric Rings -->
            <div
                class="bg-primary/5 rounded-[2rem] p-8 md:p-10 shadow-soft flex flex-col lg:flex-row items-center gap-8 relative overflow-hidden">

                <!-- Decorative Concentric Rings (mimicking image watermark) -->
                <div
                    class="absolute -left-32 top-1/2 transform -translate-y-1/2 w-96 h-96 border-[1.5rem] border-primary/[0.03] rounded-full pointer-events-none">
                </div>
                <div
                    class="absolute -left-16 top-1/2 transform -translate-y-1/2 w-64 h-64 border-[1.5rem] border-primary/[0.03] rounded-full pointer-events-none">
                </div>
                <div
                    class="absolute -left-0 top-1/2 transform -translate-y-1/2 w-32 h-32 border-[1.5rem] border-primary/[0.03] rounded-full pointer-events-none">
                </div>

                <!-- Left Content -->
                <div class="lg:w-1/3 text-center lg:text-left reveal relative z-10 pl-0 lg:pl-4">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary leading-tight mb-1">Treatment</h2>
                    <h2 class="text-3xl md:text-4xl font-bold text-accent mb-4 leading-tight">Response Rates</h2>
                    <p class="text-gray-600 mb-6 font-light text-sm leading-relaxed max-w-sm mx-auto lg:mx-0">
                        Research shows evidence-based psychiatry and advanced neuromodulation can significantly boost
                        mental health.
                    </p>
                    <a href="tms-therapy.php"
                        class="inline-flex items-center gap-2 bg-primary text-white font-bold uppercase tracking-wider text-[10px] px-6 py-2.5 rounded-md transition-all hover:bg-primary/90 hover:shadow-md">
                        LEARN MORE <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Stats Grid (Right) -->
                <div class="lg:w-2/3 grid grid-cols-2 md:grid-cols-4 gap-4 w-full place-items-center relative z-10">

                    <!-- Stat 1: Depression -->
                    <div class="flex flex-col items-center text-center reveal">
                        <div class="relative w-24 h-24 mb-4">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#A3B19B" stroke-opacity="0.2"
                                    stroke-width="3.5"></circle>
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#A3B19B" stroke-width="3.5"
                                    stroke-dasharray="100 100" stroke-dashoffset="7" stroke-linecap="round"
                                    pathLength="100" style="--target-offset: 7;"></circle>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-2xl font-light" style="color:#A3B19B">93%</span>
                            </div>
                        </div>
                        <p class="text-[9px] font-bold text-primary uppercase tracking-wider px-2 leading-tight">
                            DEPRESSION SUCCESS</p>
                    </div>

                    <!-- Stat 2: Anxiety -->
                    <div class="flex flex-col items-center text-center reveal reveal-delay-1">
                        <div class="relative w-24 h-24 mb-4">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#26A69A" stroke-opacity="0.2"
                                    stroke-width="3.5"></circle>
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#26A69A" stroke-width="3.5"
                                    stroke-dasharray="100 100" stroke-dashoffset="25" stroke-linecap="round"
                                    pathLength="100" style="--target-offset: 25;"></circle>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-2xl font-light" style="color:#26A69A">75%</span>
                            </div>
                        </div>
                        <p class="text-[9px] font-bold text-primary uppercase tracking-wider px-2 leading-tight">ANXIETY
                            RELIEF</p>
                    </div>

                    <!-- Stat 3: OCD -->
                    <div class="flex flex-col items-center text-center reveal reveal-delay-2">
                        <div class="relative w-24 h-24 mb-4">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="15.5" fill="none" class="stroke-current text-primary/20"
                                    stroke-width="3.5"></circle>
                                <circle cx="18" cy="18" r="15.5" fill="none" class="stroke-current text-primary"
                                    stroke-width="3.5" stroke-dasharray="100 100" stroke-dashoffset="20"
                                    stroke-linecap="round" pathLength="100" style="--target-offset: 20;"></circle>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-2xl font-light text-primary">80%</span>
                            </div>
                        </div>
                        <p class="text-[9px] font-bold text-primary uppercase tracking-wider px-2 leading-tight">OCD
                            IMPROVEMENT</p>
                    </div>

                    <!-- Stat 4: PTSD -->
                    <div class="flex flex-col items-center text-center reveal reveal-delay-3">
                        <div class="relative w-24 h-24 mb-4">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#D4AF37" stroke-opacity="0.2"
                                    stroke-width="3.5"></circle>
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#D4AF37" stroke-width="3.5"
                                    stroke-dasharray="100 100" stroke-dashoffset="15" stroke-linecap="round"
                                    pathLength="100" style="--target-offset: 15;"></circle>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-2xl font-light" style="color:#D4AF37">85%</span>
                            </div>
                        </div>
                        <p class="text-[9px] font-bold text-primary uppercase tracking-wider px-2 leading-tight">PTSD
                            RECOVERY</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 3. Conditions We Treat Section (Modernized) -->
    <section id="conditions" class="py-16 relative overflow-hidden bg-white">

        <!-- Section Background Image with Frosted Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="assets/images/hero_bg.png" alt="Clinical Background" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 z-0 bg-white/90 backdrop-blur-[2px]"></div>

        <!-- Decorative Medical Cross Pattern Background -->
        <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none"
            style="background-image: radial-gradient(#0B2035 2px, transparent 2px); background-size: 32px 32px;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16 reveal">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Specialized Care</h2>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] leading-tight">Conditions We Treat</h3>
                </div>
                <div class="max-w-md">
                    <p class="text-gray-500 text-lg leading-relaxed font-light">
                        Compassionate, evidence-based care tailored to your unique psychological biology. We specialize
                        in providing relief when standard treatments have failed.
                    </p>
                </div>
            </div>

            <!-- Modern Interactive Hover-to-Expand Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <!-- Card 1: Depression -->
                <div
                    class="group relative rounded-[2rem] overflow-hidden min-h-[350px] md:min-h-[420px] flex flex-col justify-end p-8 reveal transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100/10 cursor-pointer">
                    <!-- Background Image -->
                    <div class="absolute inset-0 z-0">
                        <img src="assets/images/service_spravato.png" alt="Depression Treatment"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                    <!-- Overlay Gradient (ensures readability) -->
                    <div
                        class="absolute inset-0 z-0 bg-gradient-to-t from-[#0B2035]/80 via-[#0B2035]/40 to-transparent group-hover:opacity-0 transition-opacity duration-500">
                    </div>
                    <!-- Hover Overlay - further reduced opacity -->
                    <div
                        class="absolute inset-0 z-0 bg-[#0B2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="relative z-10 flex flex-col h-full justify-end transform transition-transform duration-500">
                        <!-- Heading -->
                        <h4
                            class="text-2xl font-bold text-white group-hover:text-[#23bfe2] transition-colors duration-500">
                            Depression</h4>

                        <!-- Hidden Expandable Content -->
                        <div
                            class="grid grid-rows-[0fr] opacity-0 group-hover:grid-rows-[1fr] group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                            <div class="overflow-hidden flex flex-col">
                                <p class="text-gray-100 leading-relaxed mb-6 font-light group-hover:text-gray-200">
                                    Advanced therapies including Deep TMS, SPRAVATO, and tailored medication management
                                    for persistent, treatment-resistant depression scenarios.
                                </p>
                                <a href="depression.php"
                                    class="inline-flex items-center gap-2 text-white font-semibold tracking-wide uppercase text-xs hover:text-white group-hover:text-[#23bfe2] transition-colors duration-500 mt-auto w-max">
                                    View Protocol <i data-lucide="arrow-right"
                                        class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Anxiety -->
                <div
                    class="group relative rounded-[2rem] overflow-hidden min-h-[350px] md:min-h-[420px] flex flex-col justify-end p-8 reveal reveal-delay-1 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100/10 cursor-pointer">
                    <!-- Background Image -->
                    <div class="absolute inset-0 z-0">
                        <img src="assets/images/doctor_consult.png" alt="Anxiety Consultation"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 z-0 bg-gradient-to-t from-[#0B2035]/80 via-[#0B2035]/40 to-transparent group-hover:opacity-0 transition-opacity duration-500">
                    </div>
                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 z-0 bg-[#0B2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="relative z-10 flex flex-col h-full justify-end transform transition-transform duration-500">
                        <!-- Heading -->
                        <h4
                            class="text-2xl font-bold text-white group-hover:text-[#23bfe2] transition-colors duration-500">
                            Anxiety Disorders</h4>

                        <!-- Hidden Expandable Content -->
                        <div
                            class="grid grid-rows-[0fr] opacity-0 group-hover:grid-rows-[1fr] group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                            <div class="overflow-hidden flex flex-col">
                                <p class="text-gray-100 leading-relaxed mb-6 font-light group-hover:text-gray-200">
                                    Comprehensive, multi-modal management for generalized anxiety, severe panic
                                    disorders, social anxiety, and phobias.
                                </p>
                                <a href="anxiety.php"
                                    class="inline-flex items-center gap-2 text-white font-semibold tracking-wide uppercase text-xs hover:text-white group-hover:text-[#23bfe2] transition-colors duration-500 mt-auto w-max">
                                    View Protocol <i data-lucide="arrow-right"
                                        class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: OCD -->
                <div
                    class="group relative rounded-[2rem] overflow-hidden min-h-[350px] md:min-h-[420px] flex flex-col justify-end p-8 reveal reveal-delay-2 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100/10 cursor-pointer">
                    <!-- Background Image -->
                    <div class="absolute inset-0 z-0">
                        <img src="assets/images/brainsway-image.jpg" alt="Deep TMS for OCD"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 z-0 bg-gradient-to-t from-[#0B2035]/80 via-[#0B2035]/40 to-transparent group-hover:opacity-0 transition-opacity duration-500">
                    </div>
                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 z-0 bg-[#0B2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="relative z-10 flex flex-col h-full justify-end transform transition-transform duration-500">
                        <!-- Heading -->
                        <h4
                            class="text-2xl font-bold text-white group-hover:text-[#23bfe2] transition-colors duration-500">
                            OCD</h4>

                        <!-- Hidden Expandable Content -->
                        <div
                            class="grid grid-rows-[0fr] opacity-0 group-hover:grid-rows-[1fr] group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                            <div class="overflow-hidden flex flex-col">
                                <p class="text-gray-100 leading-relaxed mb-6 font-light group-hover:text-gray-200">
                                    Specialized, FDA-approved Deep TMS protocols using the BrainsWay H7-coil,
                                    specifically designed to target obsessive and compulsive circuitry.
                                </p>
                                <a href="ocd.php"
                                    class="inline-flex items-center gap-2 text-white font-semibold tracking-wide uppercase text-xs hover:text-white group-hover:text-[#23bfe2] transition-colors duration-500 mt-auto w-max">
                                    View Protocol <i data-lucide="arrow-right"
                                        class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: PTSD -->
                <div
                    class="group relative rounded-[2rem] overflow-hidden min-h-[350px] md:min-h-[420px] flex flex-col justify-end p-8 reveal transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100/10 cursor-pointer">
                    <!-- Background Image -->
                    <div class="absolute inset-0 z-0">
                        <img src="assets/images/service_wellness.png" alt="PTSD Wellness"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 z-0 bg-gradient-to-t from-[#0B2035]/80 via-[#0B2035]/40 to-transparent group-hover:opacity-0 transition-opacity duration-500">
                    </div>
                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 z-0 bg-[#0B2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="relative z-10 flex flex-col h-full justify-end transform transition-transform duration-500">
                        <!-- Heading -->
                        <h4
                            class="text-2xl font-bold text-white group-hover:text-[#23bfe2] transition-colors duration-500">
                            PTSD & Trauma</h4>

                        <!-- Hidden Expandable Content -->
                        <div
                            class="grid grid-rows-[0fr] opacity-0 group-hover:grid-rows-[1fr] group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                            <div class="overflow-hidden flex flex-col">
                                <p class="text-gray-100 leading-relaxed mb-6 font-light group-hover:text-gray-200">
                                    Deeply compassionate, trauma-informed care utilizing integrative approaches,
                                    lifestyle optimization, and neuro-restorative modalities.
                                </p>
                                <a href="ptsd.php"
                                    class="inline-flex items-center gap-2 text-white font-semibold tracking-wide uppercase text-xs hover:text-white group-hover:text-[#23bfe2] transition-colors duration-500 mt-auto w-max">
                                    View Protocol <i data-lucide="arrow-right"
                                        class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Adult ADHD -->
                <div
                    class="group relative rounded-[2rem] overflow-hidden min-h-[350px] md:min-h-[420px] flex flex-col justify-end p-8 reveal reveal-delay-1 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100/10 cursor-pointer">
                    <!-- Background Image -->
                    <div class="absolute inset-0 z-0">
                        <img src="assets/images/service_med_management.png" alt="ADHD Management"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 z-0 bg-gradient-to-t from-[#0B2035]/80 via-[#0B2035]/40 to-transparent group-hover:opacity-0 transition-opacity duration-500">
                    </div>
                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 z-0 bg-[#0B2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="relative z-10 flex flex-col h-full justify-end transform transition-transform duration-500">
                        <!-- Heading -->
                        <h4
                            class="text-2xl font-bold text-white group-hover:text-[#23bfe2] transition-colors duration-500">
                            Adult ADHD</h4>

                        <!-- Hidden Expandable Content -->
                        <div
                            class="grid grid-rows-[0fr] opacity-0 group-hover:grid-rows-[1fr] group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                            <div class="overflow-hidden flex flex-col">
                                <p class="text-gray-100 leading-relaxed mb-6 font-light group-hover:text-gray-200">
                                    Precision diagnosis and highly tailored medication management to enhance focus,
                                    executive function, and overall cognitive performance.
                                </p>
                                <a href="adhd.php"
                                    class="inline-flex items-center gap-2 text-white font-semibold tracking-wide uppercase text-xs hover:text-white group-hover:text-[#23bfe2] transition-colors duration-500 mt-auto w-max">
                                    View Protocol <i data-lucide="arrow-right"
                                        class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Bipolar & Mood -->
                <div
                    class="group relative rounded-[2rem] overflow-hidden min-h-[350px] md:min-h-[420px] flex flex-col justify-end p-8 reveal transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100/10 cursor-pointer">
                    <!-- Background Image -->
                    <div class="absolute inset-0 z-0">
                        <img src="assets/images/service_iv.png" alt="Mood Disorder Support"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 z-0 bg-gradient-to-t from-[#0B2035]/80 via-[#0B2035]/40 to-transparent group-hover:opacity-0 transition-opacity duration-500">
                    </div>
                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 z-0 bg-[#0B2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="relative z-10 flex flex-col h-full justify-end transform transition-transform duration-500">
                        <!-- Heading -->
                        <h4
                            class="text-2xl font-bold text-white group-hover:text-[#23bfe2] transition-colors duration-500">
                            Bipolar & Mood</h4>

                        <!-- Hidden Expandable Content -->
                        <div
                            class="grid grid-rows-[0fr] opacity-0 group-hover:grid-rows-[1fr] group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                            <div class="overflow-hidden flex flex-col">
                                <p class="text-gray-100 leading-relaxed mb-6 font-light group-hover:text-gray-200">
                                    Careful psychiatric evaluation, mood stabilization, and management protocols for
                                    bipolar disorder and complex mood cyclings.
                                </p>
                                <a href="bipolar.php"
                                    class="inline-flex items-center gap-2 text-white font-semibold tracking-wide uppercase text-xs hover:text-white group-hover:text-[#23bfe2] transition-colors duration-500 mt-auto w-max">
                                    View Protocol <i data-lucide="arrow-right"
                                        class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- View All Button -->
            <div class="mt-16 text-center reveal">
                <a href="conditions.php"
                    class="inline-flex items-center gap-2 bg-[#0B2035] text-white hover:bg-[#23bfe2] hover:text-[#0B2035] font-bold px-10 py-4 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1">
                    View All Conditions <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Featured Technology: Deep TMS -->
    <section id="technology" class="py-16 relative overflow-hidden text-white">

        <!-- Section Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="assets/images/anxiety_consultation.png" alt="Clinical Environment Background"
                class="w-full h-full object-cover">
        </div>

        <!-- Premium Dark Overlay -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]/90 backdrop-blur-[2px]"></div>

        <!-- Abstract background accents -->
        <div
            class="absolute top-0 right-0 w-3/4 h-full bg-gradient-to-l from-[#23bfe2]/5 to-transparent pointer-events-none">
        </div>
        <div
            class="absolute -bottom-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">

                <!-- Image Side -->
                <div class="w-full lg:w-1/2 relative reveal">
                    <!-- Polished Image Container -->
                    <div
                        class="relative rounded-[2rem] overflow-hidden border border-white/10 shadow-[0_20px_50px_rgba(35,191,226,0.15)] ring-1 ring-white/20">
                        <img src="assets/images/home/TMS-Therapy-Orange-County-homepage.webp"
                            alt="Advanced Deep TMS Machine"
                            class="w-full h-[500px] object-cover transition-transform duration-1000 hover:scale-105">

                        <!-- Elegant Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent">
                        </div>
                    </div>

                    <!-- Floating Stat Badge (Glassmorphism) -->
                    <!-- <div class="absolute -bottom-8 -right-4 lg:-right-8 bg-white/10 backdrop-blur-xl p-5 md:p-6 rounded-2xl border border-white/20 shadow-2xl flex items-center gap-4 group hover:-translate-y-2 transition-transform duration-500">
                            <div class="w-12 h-12 md:w-14 md:h-14 bg-[#23bfe2]/20 rounded-xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-primary transition-colors duration-500">
                                <i data-lucide="zap" class="w-6 h-6 md:w-7 md:h-7"></i>
                            </div>
                            <div>
                                <p class="text-sm md:text-base font-bold text-white tracking-wide">Breakthrough Tech</p>
                                <p class="text-xs md:text-sm text-[#23bfe2] font-medium uppercase tracking-wider">FDA-Cleared</p>
                            </div>
                        </div> -->
                </div>

                <!-- Content Side -->
                <div class="w-full lg:w-1/2 reveal reveal-delay-1 mt-8 lg:mt-0">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Technology</h2>
                    </div>

                    <h3 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">Advanced <span
                            class="text-[#23bfe2] font-light italic">Deep TMS Therapy in California</span></h3>

                    <p class="text-gray-300 text-lg mb-10 leading-relaxed font-light">
                        Transcranial Magnetic Stimulation (Deep TMS) is a highly effective, non-invasive treatment
                        utilizing precise magnetic fields to stimulate deeply-seated nerve cells in the brain, driving
                        robust remission for depression and OCD.
                    </p>

                    <!-- Feature List -->
                    <ul class="space-y-5 mb-12">
                        <li class="flex items-start gap-4">
                            <div class="mt-1 bg-white/10 p-1.5 rounded-full text-[#23bfe2]">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-white/90 font-medium text-base md:text-lg">Non-invasive therapy with no
                                systemic side effects</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="mt-1 bg-white/10 p-1.5 rounded-full text-[#23bfe2]">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-white/90 font-medium text-base md:text-lg">No anesthesia required—drive
                                yourself home</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="mt-1 bg-white/10 p-1.5 rounded-full text-[#23bfe2]">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-white/90 font-medium text-base md:text-lg">FDA-approved for MDD, Anxious
                                MDD, and OCD</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="mt-1 bg-white/10 p-1.5 rounded-full text-[#23bfe2]">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-white/90 font-medium text-base md:text-lg">Covered by most major insurance
                                providers</span>
                        </li>
                    </ul>

                    <a href="tms-therapy.php"
                        class="inline-flex items-center justify-center gap-2 bg-white text-primary hover:bg-[#23bfe2] font-bold px-8 py-4 rounded-full transition-all duration-300 shadow-[0_4px_20px_rgba(255,255,255,0.1)] hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] hover:-translate-y-1">
                        Explore Deep TMS Protocol <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Personalized Care Philosophy -->
    <section id="about" class="py-16 bg-white relative overflow-hidden">
        <!-- decorative background -->
        <div
            class="absolute top-0 right-0 w-1/2 h-full bg-secondary/10 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-16">
                <!-- Content Source -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <h2 class="text-sm font-bold tracking-wider text-secondary uppercase mb-2">Our Philosophy</h2>
                    <h3 class="text-3xl md:text-5xl font-bold mb-6">Mental Health Treatment Designed Around You</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        We believe in an integrative approach that treats the whole person, not just the symptoms. By
                        combining advanced neuromodulation technology with compassionate psychiatric care, we create
                        pathways to lasting wellness.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div>
                            <i data-lucide="brain" class="w-8 h-8 text-[#23bfe2] mb-3"></i>
                            <h4 class="text-lg font-bold mb-1">Psychiatry</h4>
                            <p class="text-sm text-gray-500 font-light">Evidence-based evaluation & diagnosis.</p>
                        </div>
                        <div>
                            <i data-lucide="cpu" class="w-8 h-8 text-[#23bfe2] mb-3"></i>
                            <h4 class="text-lg font-bold mb-1">Neuromodulation</h4>
                            <p class="text-sm text-gray-500 font-light">Targeted non-invasive brain stimulation.</p>
                        </div>
                        <div>
                            <i data-lucide="pill" class="w-8 h-8 text-[#23bfe2] mb-3"></i>
                            <h4 class="text-lg font-bold mb-1">Medication</h4>
                            <p class="text-sm text-gray-500 font-light">Expert management & genetic testing.</p>
                        </div>
                        <div>
                            <i data-lucide="leaf" class="w-8 h-8 text-[#23bfe2] mb-3"></i>
                            <h4 class="text-lg font-bold mb-1">Lifestyle Medicine</h4>
                            <p class="text-sm text-gray-500 font-light">Holistic wellness & optimization.</p>
                        </div>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-hover border border-gray-100">
                        <img src="assets/images/home/Resiliency01.webp" alt="Modern Clinic Consultation Room"
                            class="w-full h-[550px] object-cover">
                        <!-- Subtle highlight to match depth -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-white/10 via-transparent to-transparent">
                        </div>
                    </div>

                    <!-- Floating Accent -->
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-secondary/20 rounded-full blur-2xl -z-10"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#23bfe2]/10 rounded-full blur-3xl -z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Treatments and Services -->
    <section id="treatments" class="py-16 bg-neutral">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-sm font-bold tracking-wider text-accent uppercase mb-2">Comprehensive Services</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-primary">Advanced Psychiatric Treatments</h3>
                <p class="mt-4 text-gray-600 text-lg">Bringing to you the latest innovations in mental health care.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal">
                    <h4 class="text-xl font-bold text-primary mb-3">Deep TMS Therapy</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">Breakthrough magnetic stimulation
                        targeting deeper brain regions for robust remission.</p>
                    <div class="mb-6">
                        <a href="tms-therapy.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/brainsway-image.jpg" alt="Deep TMS Therapy"
                        class="w-full h-48 object-cover rounded-xl mt-auto">
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal reveal-delay-1">
                    <h4 class="text-xl font-bold text-primary mb-3">SPRAVATO® (Esketamine)</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">First-of-its-kind FDA-approved nasal
                        spray for treatment-resistant depression.</p>
                    <div class="mb-6">
                        <a href="spravato-therapy.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/spravato-home.jpg" alt="SPRAVATO"
                        class="w-full h-48 object-cover rounded-xl object-[50%_30%]">
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal reveal-delay-2">
                    <h4 class="text-xl font-bold text-primary mb-3">IV Drip Therapy</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">Customized intravenous vitamin infusions
                        to optimize hydration, energy, and overall wellbeing.</p>
                    <div class="mb-6">
                        <a href="iv-vitamin-therapy.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/service_iv.png" alt="IV Drip Therapy"
                        class="w-full h-48 object-cover rounded-xl mt-auto">
                </div>

                <!-- Service 4 -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal">
                    <h4 class="text-xl font-bold text-primary mb-3">Medical Weight Loss</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">Physician-supervised programs addressing
                        the mind-body connection in metabolic health.</p>
                    <div class="mb-6">
                        <a href="weight-loss.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/anxiety_consultation.png" alt="Medical Weight Loss"
                        class="w-full h-48 object-cover rounded-xl mt-auto">
                </div>

                <!-- Service 5 -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal reveal-delay-1">
                    <h4 class="text-xl font-bold text-primary mb-3">Medical Management</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">Expert psychiatric prescribing carefully
                        tailored to your unique biology and needs.</p>
                    <div class="mb-6">
                        <a href="medication-management.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/service_med_management.png" alt="Medical Management"
                        class="w-full h-48 object-cover rounded-xl mt-auto">
                </div>

                <!-- Service 6 -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal reveal-delay-2">
                    <h4 class="text-xl font-bold text-primary mb-3">Wellness Services</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">Integrative and complementary approaches
                        to ensure holistic optimization of mind and body.</p>
                    <div class="mb-6">
                        <a href="integrative-psychiatry.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/service_wellness.png" alt="Wellness Services"
                        class="w-full h-48 object-cover rounded-xl mt-auto">
                </div>
            </div>

            <!-- Last row: 2 centered cards -->
            <div class="flex flex-col md:flex-row justify-center gap-8 mt-8">
                <!-- Service 7: ProlivRx -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal w-full md:w-[calc(33.333%-1rem)] lg:w-[calc(33.333%-1.5rem)]">
                    <h4 class="text-xl font-bold text-primary mb-3">Proliv™Rx</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">FDA-approved, at-home brain
                        neuromodulation therapy for treatment-resistant depression.</p>
                    <div class="mb-6">
                        <a href="proliv-rx.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/Proliv™Rx-IMG-FINAL.png" alt="Proliv Rx At-Home Neuromodulation"
                        class="w-full h-48 object-cover rounded-xl mt-auto">
                </div>

                <!-- Service 8: VNS Therapy -->
                <div
                    class="bg-white rounded-2xl flex flex-col h-full border-[2px] border-primary p-6 shadow-sm hover:shadow-md transition-all duration-300 reveal reveal-delay-1 w-full md:w-[calc(33.333%-1rem)] lg:w-[calc(33.333%-1.5rem)]">
                    <h4 class="text-xl font-bold text-primary mb-3">VNS Therapy</h4>
                    <p class="text-gray-600 mb-6 font-light text-sm flex-grow">Advanced Vagus Nerve Stimulation
                        technology offering long-term relief for resistant conditions.</p>
                    <div class="mb-6">
                        <a href="vns-therapy.php"
                            class="inline-flex items-center gap-1 bg-primary text-white font-bold uppercase tracking-wider text-[11px] px-5 py-2.5 rounded hover:opacity-90 transition-opacity">
                            LEARN MORE <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                        </a>
                    </div>
                    <img src="assets/images/vns_therapy_device.png" alt="VNS Therapy"
                        class="w-full h-48 object-cover rounded-xl mt-auto border border-gray-100">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Us vs. Them Comparison -->
    <section class="py-16 bg-white relative overflow-hidden">
        <!-- Subtle background elements -->
        <div class="absolute top-0 left-1/4 w-px h-full bg-gradient-to-b from-transparent via-gray-100 to-transparent">
        </div>
        <div class="absolute top-0 right-1/4 w-px h-full bg-gradient-to-b from-transparent via-gray-100 to-transparent">
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal">
                <div
                    class="inline-block py-1 px-3 rounded-full bg-accent/10 text-accent text-[10px] font-bold tracking-widest uppercase mb-4">
                    The Resiliency Difference</div>
                <h3 class="text-3xl md:text-5xl font-bold text-primary leading-tight">Standard Care <span
                        class="text-gray-300 font-light mx-2">vs.</span> <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">Our
                        Approach</span></h3>
            </div>

            <div
                class="bg-white rounded-3xl shadow-[0_30px_60px_-15px_rgba(11,32,53,0.1)] border border-gray-100 overflow-hidden reveal reveal-delay-1">

                <!-- Header -->
                <div class="grid grid-cols-2 md:grid-cols-3 bg-gray-50/50 border-b border-gray-100">
                    <div
                        class="hidden md:block p-6 font-bold text-gray-400 text-[10px] uppercase tracking-[0.2em] flex items-center">
                        Key Features</div>
                    <div
                        class="p-6 text-center border-r md:border-x border-gray-100 text-gray-500 font-bold uppercase tracking-widest text-[10px] md:text-xs">
                        Conventional Care</div>
                    <div
                        class="p-6 text-center bg-primary text-white font-bold uppercase tracking-widest text-[10px] md:text-xs relative">
                        Resiliency Medicine
                        <div class="absolute bottom-0 left-0 w-full h-1 bg-accent"></div>
                    </div>
                </div>

                <!-- Row 1: Structure -->
                <div
                    class="grid grid-cols-2 md:grid-cols-3 border-b border-gray-100 group hover:bg-gray-50 transition-colors">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Clinic Structure
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">Limited Physician Oversight</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold text-[#0B2035] leading-snug">Physician-led
                            Clinic</span>
                    </div>
                </div>

                <!-- Row 2: Payment -->
                <div
                    class="grid grid-cols-2 md:grid-cols-3 border-b border-gray-100 group hover:bg-gray-50 transition-colors">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Payment Accessibility
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">Cash pay models</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold text-[#0B2035] leading-snug">Insurance Accepted</span>
                    </div>
                </div>

                <!-- Row 3: Tech -->
                <div
                    class="grid grid-cols-2 md:grid-cols-3 border-b border-gray-100 group hover:bg-gray-50 transition-colors">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Technologies Used
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">Standard TMS only</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold text-[#0B2035] leading-snug">BrainsWay® Deep TMS
                            Advanced tech</span>
                    </div>
                </div>

                <!-- Row 4: Protocols -->
                <div
                    class="grid grid-cols-2 md:grid-cols-3 border-b border-gray-100 group hover:bg-gray-50 transition-colors">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Treatment Speeds
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">Corporate-Run Clinics</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold text-[#0B2035] leading-snug">6-Day Accelerated Deep
                            TMS protocol</span>
                    </div>
                </div>

                <!-- Row 5: Philosophy -->
                <div
                    class="grid grid-cols-2 md:grid-cols-3 border-b border-gray-100 group hover:bg-gray-50 transition-colors">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Care Philosophy
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">No Long Term Care or Follow Up</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold text-[#0B2035] leading-snug">Personalized Treatments &
                            Integrative Care</span>
                    </div>
                </div>

                <!-- Row 6: Tracking -->
                <div
                    class="grid grid-cols-2 md:grid-cols-3 border-b border-gray-100 group hover:bg-gray-50 transition-colors">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Result Tracking
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">Minimal Outcome Tracking</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold text-[#0B2035] leading-snug">Outcome-Driven
                            Approach</span>
                    </div>
                </div>

                <!-- Row 7: Expertise -->
                <div
                    class="grid grid-cols-2 md:grid-cols-3 border-b border-gray-100 group hover:bg-gray-50 transition-colors">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Expertise
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">Unknown Provider Training &
                            Exp.</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold text-[#0B2035] leading-snug">Highly Trained,
                            Board-Certified Experts</span>
                    </div>
                </div>

                <!-- Row 8: Access -->
                <div class="grid grid-cols-2 md:grid-cols-3 group hover:bg-gray-50 transition-colors rounded-b-2xl">
                    <div
                        class="col-span-2 md:col-span-1 py-3 px-5 md:p-5 font-semibold text-gray-800 md:border-r border-b md:border-b-0 border-gray-100 flex items-center bg-gray-50/50 md:bg-transparent text-sm">
                        Access & Convenience
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 border-r border-gray-100 text-gray-500">
                        <i data-lucide="x" class="w-4 h-4 text-red-400 flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-medium leading-snug">Single Location Only</span>
                    </div>
                    <div
                        class="p-4 md:p-5 flex flex-col md:flex-row items-center text-center md:text-left md:justify-start gap-2 bg-[#518efa]/5 group-hover:bg-[#518efa]/10 transition-colors border-l border-transparent md:border-[#518efa]/20 rounded-br-2xl text-[#0B2035]">
                        <i data-lucide="check" class="w-4 h-4 text-[#23bfe2] flex-shrink-0"></i>
                        <span class="text-xs md:text-sm font-bold leading-snug">Multiple Locations in Orange
                            County</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. About the Doctor -->
    <section id="providers" class="py-16 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Large Card Container -->
            <div class="rounded-[2.5rem] p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row items-center gap-12 lg:gap-8 relative overflow-hidden shadow-soft"
                style="background-color: #0B2035;">

                <!-- Background Design Elements (Replacing Blob) -->
                <!-- In the reference, there's a blob behind the image. We'll use a stylized shape behind the image. -->
                <div
                    class="absolute right-0 bottom-0 w-full lg:w-1/2 h-full pointer-events-none z-0 flex items-end justify-center">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                        class="w-[120%] h-auto text-[#23bfe2] transform translate-y-[20%] lg:translate-y-[10%] translate-x-[5%] opacity-90">
                        <path fill="currentColor"
                            d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,81.3,-46.3C90.8,-33.5,96.8,-18,97.7,-2.1C98.6,13.8,94.5,30.3,85.4,43.9C76.3,57.5,62.2,68.2,46.9,76C31.6,83.8,15.8,88.7,0.3,88.1C-15.2,87.6,-30.4,81.6,-44.6,73.1C-58.8,64.6,-72,53.6,-80.7,39.9C-89.4,26.2,-93.6,9.8,-92.4,-5.9C-91.2,-21.6,-84.6,-36.5,-74.6,-48.5C-64.6,-60.5,-51.2,-69.6,-37.2,-76.8C-23.2,-84,-8.6,-89.3,3.7,-95.7C16,-102.1,30.6,-83.6,44.7,-76.4Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>

                <!-- Left Content Side -->
                <div class="w-full lg:w-1/2 relative z-10 reveal">
                    <h2 class="text-[10px] md:text-xs font-bold tracking-widest text-[#23bfe2] uppercase mb-4">
                        MEET DR. STEFANI LAFRENIERRE, FOUNDER/CHIEF MEDICAL OFFICER
                    </h2>

                    <h3 class="text-4xl md:text-5xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        Comprehensive & <span class="text-[#23bfe2]">Compassionate</span> Care
                    </h3>

                    <div class="space-y-5 text-white/90 font-light text-sm md:text-base leading-relaxed mb-8">
                        <p>
                            Hi, I'm Dr. Stefani LaFrenierre, a leading psychiatrist in california. I lead our multidisciplinary team with a deep passion for
                            integrative, evidence-based psychiatric care. My goal? Helping you navigate complex mood
                            disorders, trauma, and psychosis with treatments that actually work.
                        </p>
                        <p>
                            I work with patients to offer a compassionate, whole-person approach to mental health. You
                            deserve a personalized environment where clinical excellence meets holistic healing—because
                            true resilience requires balancing both your biology and your lifestyle.
                        </p>
                        <p class="font-medium text-white">Let's build a foundation for lasting wellness together.</p>
                    </div>

                    <a href="team.php"
                        class="inline-flex items-center gap-2 bg-[#23bfe2] text-[#0B2035] font-bold uppercase tracking-wider text-xs px-8 py-4 rounded-md transition-all hover:bg-opacity-90 hover:shadow-md hover:-translate-y-1">
                        GET TO KNOW DR. LAFRENIERRE <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </a>

                    <!-- Credential Logos/Text mimicking the bottom left logos in reference -->
                    <div class="mt-12 flex flex-wrap items-center gap-6 md:gap-10 opacity-80">
                        <div class="flex items-center gap-2 text-white font-medium text-sm md:text-base">
                            <i data-lucide="award" class="w-6 h-6 text-[#23bfe2]"></i> Double-Board Certified
                        </div>
                        <div class="flex items-center gap-2 text-white font-medium text-sm md:text-base">
                            <i data-lucide="leaf" class="w-6 h-6 text-[#23bfe2]"></i> Integrative Care
                        </div>
                        <div class="flex items-center gap-2 text-white font-medium text-sm md:text-base">
                            <i data-lucide="cpu" class="w-6 h-6 text-[#23bfe2]"></i> Deep TMS Specialist
                        </div>
                    </div>
                </div>

                <!-- Right Image Side -->
                <div
                    class="w-full lg:w-1/2 relative z-10 flex justify-center items-end mt-10 lg:mt-0 reveal reveal-delay-1 h-full min-h-[400px] lg:min-h-[500px]">
                    <!-- Doctor Image Outline/Cutout style as in reference -->
                    <!-- If the asset dr_profile.png is a square photo, we can apply an inner shadow or rounded styling. Ideally, it should be a transparent PNG cutout to sit perfectly on the blob, but we will ensure it looks good regardless by using object-contain and drop-shadow. -->
                    <img src="assets/images/home/Stefani-LaFrenierre-main-home.webp" alt="Stefani LaFrenierre, MD"
                        class="relative z-10 w-full max-w-[450px] object-contain object-bottom drop-shadow-2xl rounded-2xl lg:rounded-none lg:rounded-t-2xl lg:mt-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Patient Reviews (Google Style) -->
    <section class="py-24 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Life-Changing Results</h2>
                <p class="mt-4 text-gray-500 text-lg">See what our patients have to say about their journey to wellness.
                </p>
            </div>

            <!-- Review Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">

                <!-- Review Card 1 -->
                <div
                    class="break-inside-avoid bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-3">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-6">
                        "Resiliency has changed my life. I've been treatment resistant and suffered debilitating
                        depression since childhood with no relief. Since coming here I've been able to get up, get a job
                        and even start going out with friends again. Thank you to Lauren, Rylee, and Brian for being the
                        most supportive care team ever."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-pink-500 text-white flex items-center justify-center font-bold text-xs">
                                JM</div>
                            <span class="font-bold text-sm text-gray-800">Jesse M</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            Google Review <img
                                src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                                alt="Google" class="h-3 ml-1">
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div
                    class="break-inside-avoid bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-3">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-6">
                        "TMS truly changed my life. I was debilitated by depression and anxiety for years. I had done a
                        variety of therapy and mental health treatment and tried countless meds which helped alleviate
                        some symptoms but never got me to a place where I felt like my anxiety and depression was
                        manageable. The experience at Resiliency was more than I could have asked for."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold text-xs">
                                AB</div>
                            <span class="font-bold text-sm text-gray-800">Annessa Brock</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            Google Review <img
                                src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                                alt="Google" class="h-3 ml-1">
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div
                    class="break-inside-avoid bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-3">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-6">
                        "I can't say enough good things about my experience at Resiliency Mind + Body Medicine,
                        especially because of Cyrus, my TMS technician. He is skilled, knowledgeable, and genuinely
                        invested in his patients' well-being."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-indigo-500 text-white flex items-center justify-center font-bold text-xs">
                                RC</div>
                            <span class="font-bold text-sm text-gray-800">R Court</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            Google Review <img
                                src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                                alt="Google" class="h-3 ml-1">
                        </div>
                    </div>
                </div>

                <!-- Review Card 4 -->
                <div
                    class="break-inside-avoid bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-3">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-6">
                        "I have never before found a psychiatric group that is so clearly dedicated to making people
                        better. I finally feel like I am under the care of capable people. I can honestly say that I am
                        better today because Dr. LaFrenierre and her team listened to my story and devised a treatment
                        plan for me."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center font-bold text-xs">
                                PM</div>
                            <span class="font-bold text-sm text-gray-800">Pagu Ma</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            Google Review <img
                                src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                                alt="Google" class="h-3 ml-1">
                        </div>
                    </div>
                </div>

                <!-- Review Card 5 -->
                <div
                    class="break-inside-avoid bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-3">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-6">
                        "I have completed 8 weeks of treatments with Resiliency Mind + Body. It has been years since I
                        felt the relief Dr. L provided. If you feel you are at the end of your rope and exhausted by
                        medications that don't yield the result you hope and pray for, reach out to Resiliency. I am
                        beyond grateful."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-purple-500 text-white flex items-center justify-center font-bold text-xs">
                                WR</div>
                            <span class="font-bold text-sm text-gray-800">Wayne Rizzo</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            Google Review <img
                                src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                                alt="Google" class="h-3 ml-1">
                        </div>
                    </div>
                </div>

                <!-- Review Card 6 -->
                <div
                    class="break-inside-avoid bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-3">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-6">
                        "Truly wonderful down to earth folks who genuinely care about you. They went above and beyond
                        for me in so many ways. The staff are all exceptional people who love what they do and it shows.
                        I can't emphasize enough how amazing and hardworking this team is."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-red-400 text-white flex items-center justify-center font-bold text-xs">
                                KH</div>
                            <span class="font-bold text-sm text-gray-800">Kyle Hauk</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            Google Review <img
                                src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                                alt="Google" class="h-3 ml-1">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sections 10, 11, 12 removed as requested -->

    <!-- 13. Final CTA -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="assets/images/home/cta-bg.png" alt="Serene Clinical Environment"
                class="w-full h-full object-cover object-center">
        </div>

        <!-- Simple Dark Overlay for Text Readability -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]/70"></div>

        <!-- Subtle Gradient for Depth -->
        <div class="absolute inset-0 z-0 bg-gradient-to-t from-[#0B2035] via-transparent to-transparent opacity-80">
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <!-- Eyebrow -->
            <span
                class="inline-block py-1 px-4 rounded-full bg-white/10 text-lightblue text-sm font-semibold tracking-wider uppercase mb-8 border border-lightblue/30 backdrop-blur-sm">
                Begin Your Healing Journey
            </span>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                Take the First Step Toward <br class="hidden md:block" /> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">Better Mental
                    Health</span>
            </h2>

            <p class="text-xl md:text-2xl text-gray-300 mb-12 font-light max-w-3xl mx-auto leading-relaxed">
                Join the thousands of patients who have found relief through our advanced, integrative approach to
                psychiatry and neuromodulation.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php"
                    class="group relative inline-flex items-center justify-center bg-lightblue hover:bg-[#1aadd0] text-primary font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl overflow-hidden text-lg w-full sm:w-auto">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
                        <i data-lucide="arrow-right"
                            class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                    </span>
                </a>
                <a href="contact.php"
                    class="group inline-flex items-center justify-center bg-white/5 hover:bg-white/10 border-2 border-white/20 hover:border-white/40 text-white font-semibold px-10 py-5 rounded-full transition-all duration-300 text-lg w-full sm:w-auto">
                    Contact Our Team
                </a>
            </div>
        </div>
    </section>

    <!-- 14. FAQ Section -->
    <section class="py-24 bg-white border-t border-gray-50 relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary/5 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-lightblue/5 rounded-full blur-3xl -z-10 -translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal">
                <span class="inline-block py-1 px-3 rounded-full bg-secondary/10 text-secondary text-[10px] font-bold tracking-[0.2em] uppercase mb-4">
                    Clear Answers
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-primary leading-tight">Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Questions</span></h2>
                <p class="mt-4 text-gray-500 text-lg font-light">Everything you need to know about our advanced psychiatric treatments.</p>
            </div>

            <div class="space-y-4 reveal reveal-delay-1">
                <!-- FAQ 1 -->
                <div class="border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                    <button class="mobile-accordion-toggle w-full flex items-center justify-between p-6 md:p-8 text-left group">
                        <span class="text-lg md:text-xl font-bold text-primary pr-8">What is Deep TMS therapy?</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300 flex-shrink-0">
                             <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-6 md:px-8 pb-8 pt-0 animate-fadeIn">
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base font-light">
                            Deep Transcranial Magnetic Stimulation (Deep TMS) is a non-invasive, FDA-cleared treatment that uses magnetic fields to stimulate nerve cells in the brain to improve symptoms of depression and OCD. Unlike traditional TMS, our BrainsWay technology reaches deeper and broader brain structures, which can lead to better clinical outcomes even for treatment-resistant patients.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                    <button class="mobile-accordion-toggle w-full flex items-center justify-between p-6 md:p-8 text-left group">
                        <span class="text-lg md:text-xl font-bold text-primary pr-8">Does Deep TMS hurt?</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300 flex-shrink-0">
                             <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-6 md:px-8 pb-8 pt-0 animate-fadeIn">
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base font-light">
                            Most patients experience a tapping sensation or mild discomfort at the treatment site during the session, similar to a woodpecker tapping on a helmet. It is generally well-tolerated, requires no anesthesia, and has no systemic side effects common with medications. You can resume your normal day immediately after treatment.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                    <button class="mobile-accordion-toggle w-full flex items-center justify-between p-6 md:p-8 text-left group">
                        <span class="text-lg md:text-xl font-bold text-primary pr-8">How long are the treatment sessions?</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300 flex-shrink-0">
                             <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-6 md:px-8 pb-8 pt-0 animate-fadeIn">
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base font-light">
                            A typical standard Deep TMS session lasts approximately 20 minutes. We also offer accelerated 6-day protocols for those seeking faster results. Our standard treatment course usually involves daily sessions over several weeks, designed to fit conveniently into a lunch break or busy schedule.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                    <button class="mobile-accordion-toggle w-full flex items-center justify-between p-6 md:p-8 text-left group">
                        <span class="text-lg md:text-xl font-bold text-primary pr-8">Which insurance providers do you accept?</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300 flex-shrink-0">
                             <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-6 md:px-8 pb-8 pt-0 animate-fadeIn">
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base font-light">
                            We are in-network with many major carriers, including UnitedHealthcare, Optum, Cigna, and Evernorth. We also work with many PPO plans. Our team handles the prior authorization process for you to ensure you receive the maximum benefits allowed by your provider.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-white">
                    <button class="mobile-accordion-toggle w-full flex items-center justify-between p-6 md:p-8 text-left group">
                        <span class="text-lg md:text-xl font-bold text-primary pr-8">Are your treatments safe during pregnancy?</span>
                        <div class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300 flex-shrink-0">
                             <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-6 md:px-8 pb-8 pt-0 animate-fadeIn">
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base font-light">
                            Many patients choose neuromodulation treatments precisely because they do not involve systemic drugs that circulate through the body. Deep TMS is localized and non-invasive. We evaluate each patient individually to determine the safest and most effective care path for your specific circumstances.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 text-center reveal reveal-delay-2">
                <p class="text-gray-500 mb-6">Have more questions? We're here to help.</p>
                <a href="faqs.php" class="text-secondary font-bold uppercase tracking-widest text-xs hover:text-primary transition-colors flex items-center justify-center gap-2">
                    View All FAQs <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>