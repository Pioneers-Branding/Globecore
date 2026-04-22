<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/philosophy_bg.png" alt="Integrative Psychiatry" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Whole-Person Mental Health</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Integrative Psychiatry <span class="text-[#23bfe2] font-light">in Newport Beach & San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    A physician-led approach combining advanced psychiatric treatment with functional medicine, nutritional optimization, and lifestyle interventions to heal the mind and body together.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule a Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#our-approach" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Our Approach
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Integrative Psychiatry -->
    <section id="our-approach" class="py-16 relative overflow-hidden bg-white">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Understanding Our Approach</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">What is Integrative Psychiatry?</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Integrative psychiatry goes beyond traditional medication-focused treatment by addressing the biological, psychological, and lifestyle factors that influence mental health. At Resiliency, we combine evidence-based psychiatric care with functional medicine, nutritional counseling, hormone optimization, and advanced neuromodulation to create comprehensive treatment plans. Led by Dr. Stefani LaFrenierre, MD—double board-certified in Adult Psychiatry and Addiction Medicine—our practice treats the root cause of symptoms, not just the symptoms themselves.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Physician-led, evidence-based treatment plans</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Combines psychiatry with functional medicine</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">In-person and telehealth appointments available</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Video -->
                <div class="w-full lg:w-1/2 flex justify-center reveal reveal-delay-1">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5" style="aspect-ratio: 9/16; width: min(100%, 380px);">
                        <iframe
                            class="w-full h-full"
                            src="https://www.youtube.com/embed/hcZ7shA4fPw"
                            title="What is Integrative Psychiatry?"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integrative Treatment Plans -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-[#23bfe2] to-transparent"></div>
        <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] bg-[#23bfe2]/5 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Header -->
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-16 reveal">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <span class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Approach</span>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035]">Integrative Treatment Plans</h3>
                </div>
                <p class="text-gray-500 font-light text-lg max-w-md leading-relaxed">Every plan is personalized — blending the best of psychiatry, nutrition, lifestyle, and functional medicine.</p>
            </div>

            <!-- Pillars: horizontal scrollable numbered list -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 mb-20">
                <!-- Medicine -->
                <div class="group relative bg-[#0B2035] rounded-3xl p-6 overflow-hidden reveal cursor-default">
                    <span class="absolute top-4 right-4 text-6xl font-black text-white/5 leading-none select-none">01</span>
                    <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-300">
                        <i data-lucide="pill" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Medicine</h4>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">Personalized medication plans using only what is truly needed — balancing effectiveness with comfort.</p>
                </div>
                <!-- Nutrition -->
                <div class="group relative bg-[#0B2035] rounded-3xl p-6 overflow-hidden reveal cursor-default">
                    <span class="absolute top-4 right-4 text-6xl font-black text-white/5 leading-none select-none">02</span>
                    <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-300">
                        <i data-lucide="apple" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Nutrition</h4>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">A balanced diet rich in omega-3s, vitamins, and minerals essential for optimal brain health and mood.</p>
                </div>
                <!-- Lifestyle -->
                <div class="group relative bg-[#0B2035] rounded-3xl p-6 overflow-hidden reveal cursor-default">
                    <span class="absolute top-4 right-4 text-6xl font-black text-white/5 leading-none select-none">03</span>
                    <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-300">
                        <i data-lucide="activity" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Lifestyle</h4>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">Exercise, sleep, stress management, and healthy relationships that profoundly affect mood and cognition.</p>
                </div>
                <!-- Supplements -->
                <div class="group relative bg-[#0B2035] rounded-3xl p-6 overflow-hidden reveal cursor-default">
                    <span class="absolute top-4 right-4 text-6xl font-black text-white/5 leading-none select-none">04</span>
                    <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-300">
                        <i data-lucide="flask-conical" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Supplements</h4>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">Vitamin D, magnesium, B vitamins, and Dr. LaFrenierre's own holistic supplement line for mood and cognition.</p>
                </div>
                <!-- Blood Tests -->
                <div class="group relative bg-[#0B2035] rounded-3xl p-6 overflow-hidden reveal cursor-default">
                    <span class="absolute top-4 right-4 text-6xl font-black text-white/5 leading-none select-none">05</span>
                    <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-300">
                        <i data-lucide="test-tube" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Blood Tests</h4>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">Vitamin deficiencies, hormone panels, and inflammation markers to fully assess total mind+body wellness.</p>
                </div>
            </div>

            <!-- Psychiatry Visits -->
            <div class="flex items-center gap-4 mb-10 reveal">
                <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035]">Psychiatry Visits</h3>
            </div>

            <div class="space-y-4">
                <!-- Row 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 reveal">
                    <div class="flex gap-5 bg-[#f8fafc] border border-gray-100 rounded-2xl p-6 hover:border-[#23bfe2]/40 hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="clipboard-list" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold tracking-widest text-[#23bfe2] uppercase mb-1">Includes pre-visit questionnaires</p>
                            <h4 class="text-lg font-bold text-[#0B2035] mb-2">Comprehensive Assessments</h4>
                            <p class="text-gray-500 text-sm font-light leading-relaxed">Treatment plan can include recommendations for medications, labs, therapy, lifestyle coaching, nutrition, and supplements.</p>
                        </div>
                    </div>
                    <div class="flex gap-5 bg-[#f8fafc] border border-gray-100 rounded-2xl p-6 hover:border-[#23bfe2]/40 hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="scale" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold tracking-widest text-[#23bfe2] uppercase mb-1">Weight Loss and Nutrition</p>
                            <h4 class="text-lg font-bold text-[#0B2035] mb-2">Metabolic Assessments</h4>
                            <p class="text-gray-500 text-sm font-light leading-relaxed">Safe, effective treatments for nutrition and weight goals. Medications such as Ozempic, Wegovy, and Mounjaro may be prescribed when indicated.</p>
                        </div>
                    </div>
                </div>
                <!-- Row 2 -->
                <div class="flex justify-center mt-4 reveal">
                    <div class="flex gap-5 bg-[#f8fafc] border border-gray-100 rounded-2xl p-6 hover:border-[#23bfe2]/40 hover:shadow-md transition-all duration-300 w-full md:w-[calc(50%-0.5rem)]">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="thermometer" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold tracking-widest text-[#23bfe2] uppercase mb-1">Whole Body Healing</p>
                            <h4 class="text-lg font-bold text-[#0B2035] mb-2">Hormone Assessments</h4>
                            <p class="text-gray-500 text-sm font-light leading-relaxed">Full medical assessment including tests to screen for common hormone imbalances. We offer testosterone therapy, management of PCOS, and other hormone conditions — working alongside specialist providers to enhance total wellness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Services</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">Comprehensive Treatment Modalities</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="pill" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Medication Management</h4>
                            <p class="text-gray-400 font-light">Conservative, personalized psychiatric medication with regular reviews and minimal effective dosing strategies.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal reveal-delay-1">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="brain" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Deep TMS Therapy</h4>
                            <p class="text-gray-400 font-light">FDA-cleared BrainsWay Deep TMS for depression, OCD, and anxiety—non-invasive with no systemic side effects.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal reveal-delay-2">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="droplets" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">SPRAVATO&reg; Treatment</h4>
                            <p class="text-gray-400 font-light">FDA-approved esketamine nasal spray for treatment-resistant depression, administered in our certified clinic.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="apple" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Nutritional Counseling</h4>
                            <p class="text-gray-400 font-light">Comprehensive nutritional review and evidence-based dietary guidance to support mental health from the inside out.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal reveal-delay-1">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="flask-conical" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Supplement Protocols</h4>
                            <p class="text-gray-400 font-light">Physician-curated supplement regimens targeting neurotransmitter support, inflammation reduction, and cognitive enhancement.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-colors reveal reveal-delay-2">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/20 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="activity" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Hormone & Metabolic Assessment</h4>
                            <p class="text-gray-400 font-light">Thorough hormonal and metabolic evaluation to identify biological factors contributing to mood and cognitive symptoms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions We Treat -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <!-- Abstract background accents -->
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Conditions We Treat</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Comprehensive Psychiatric Care</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Our board-certified providers offer expert integrative treatment for a wide range of psychiatric and neurological conditions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Condition 1 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="cloud-rain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Depression</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Major depressive disorder, persistent depressive disorder, and treatment-resistant depression.</p>
                </div>

                <!-- Condition 2 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="wind" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Anxiety Disorders</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Generalized anxiety, social anxiety, panic disorder, and phobias.</p>
                </div>

                <!-- Condition 3 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="repeat" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">OCD</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Obsessive-compulsive disorder with targeted pharmacotherapy and behavioral strategies.</p>
                </div>

                <!-- Condition 4 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield-alert" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">PTSD</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Post-traumatic stress disorder with trauma-informed, integrative treatment protocols.</p>
                </div>

                <!-- Condition 5 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">ADHD</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Attention-deficit/hyperactivity disorder management with careful stimulant and non-stimulant options.</p>
                </div>

                <!-- Condition 6 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Bipolar Disorder</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Mood stabilization with carefully monitored pharmacotherapy and lifestyle interventions.</p>
                </div>

                <!-- Condition 7 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Neurological Conditions</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Mental health symptoms of Alzheimer's, TBI, Parkinson's disease, and stroke recovery.</p>
                </div>

                <!-- Condition 8 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart-crack" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Substance Use Disorders</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Evidence-based addiction medicine with medication-assisted treatment and integrative recovery support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dr. LaFrenierre Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/40 -skew-x-12 transform translate-x-1/2 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

                <!-- Image Column -->
                <div class="w-full lg:w-1/2 reveal">
                    <div class="relative group">
                        <!-- Decorative Frame -->
                        <div class="absolute -inset-6 bg-gradient-to-br from-[#23bfe2]/20 to-transparent rounded-[3rem] blur-2xl opacity-60"></div>

                        <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border-4 border-white ring-1 ring-gray-100">
                            <img
                                src="assets/images/home/Stefani-LaFrenierre-main-home.webp"
                                alt="Dr. Stefani LaFrenierre, MD"
                                class="w-full h-[500px] object-cover object-top grayscale-[0.2] transition-all duration-700 group-hover:grayscale-0 group-hover:scale-105"
                            >

                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="w-full lg:w-1/2 reveal reveal-delay-1">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Meet Your Provider</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-8 leading-tight">
                        Dr. Stefani LaFrenierre, <span class="text-[#23bfe2]">MD</span>
                    </h3>

                    <div class="space-y-6 text-gray-600 text-lg font-light leading-relaxed">
                        <p>
                            Dr. LaFrenierre earned her medical degree from the David Geffen School of Medicine at UCLA and completed her Adult Psychiatry residency at San Mateo Behavioral Health. She holds a fellowship through the Harvard Program in Refugee Trauma with certification in Global Mental Health, Trauma and Recovery. Double board-certified in Adult Psychiatry and Addiction Medicine, she brings deep expertise in complex mood disorders, trauma, psychosis, and the neurodivergent spectrum.
                        </p>
                        <p>
                            Her integrative philosophy focuses on treating the whole person—combining advanced interventional psychiatry, functional medicine, and lifestyle optimization to help patients build lasting resilience and reclaim their lives.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us Benefits Grid -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">The Advantages</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Why Choose Resiliency?</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Experience the difference of a physician-led practice that prioritizes your long-term health over quick fixes.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="user-check" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Physician-Led Team</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Board-certified psychiatrist leading a multidisciplinary team of NPs, PAs, and wellness specialists.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="layers" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">All-In-One Practice</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Psychiatry, Deep TMS, SPRAVATO, IV therapy, supplements, and lifestyle medicine under one roof.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="laptop" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Telehealth Available</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Secure virtual appointments from anywhere—initial evaluations and follow-ups.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="file-check-2" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Insurance Accepted</h4>
                    <p class="text-gray-500 font-light leading-relaxed">In-network with most major insurance providers including Aetna, Anthem, Cigna, United, Medicare, and more.</p>
                </div>

                <!-- Benefit 5 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="timer" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Unhurried Appointments</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Thorough evaluations and meaningful follow-ups—never rushed 10-minute visits.</p>
                </div>

                <!-- Benefit 6 -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="trending-up" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Proven Results</h4>
                    <p class="text-gray-500 font-light leading-relaxed">7,000+ treatments completed with 80% clinic response rates for Deep TMS and SPRAVATO.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-[#0B2035] text-white relative border-t-[8px] border-[#23bfe2]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Common Questions</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Frequently Asked Questions</h3>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>What makes integrative psychiatry different from traditional psychiatry?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Traditional psychiatry often focuses primarily on medication management during brief appointments. Integrative psychiatry takes a comprehensive approach—combining medication when needed with nutritional optimization, lifestyle interventions, hormone assessment, advanced neuromodulation, and mind-body strategies to address root causes and promote lasting wellness.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Do I need to stop my current medications?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Not necessarily. We work collaboratively with your existing treatment team. During your evaluation, we'll review all current medications and develop a plan that may include continuing, adjusting, or gradually optimizing your regimen alongside integrative interventions.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is integrative psychiatry covered by insurance?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes, psychiatric evaluations and medication management visits are covered by most insurance plans. Some integrative services like IV therapy or supplements may be self-pay. Our team verifies your benefits before your first appointment.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Can I do virtual visits for integrative psychiatry?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Absolutely. We offer secure telehealth appointments for psychiatric evaluations, medication management, and treatment planning. Some services like Deep TMS, SPRAVATO, and IV therapy require in-person visits at our Newport Beach or San Juan Capistrano offices.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="#contact" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready for a <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Whole-Person Approach?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Experience the difference of integrative, physician-led psychiatric care. Schedule your consultation and start your journey toward lasting mental wellness.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
                        <i data-lucide="arrow-up-right" class="w-6 h-6 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </span>
                </a>
                <a href="tel:+19499965355" class="inline-flex items-center gap-2 text-[#0B2035] font-bold hover:text-[#23bfe2] transition-colors text-lg">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const triggers = document.querySelectorAll('.faq-toggle');
        triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                const icon = trigger.querySelector('[data-lucide="plus"]');
                const content = trigger.nextElementSibling;

                if (content.classList.contains('hidden')) {
                    // Close others
                    triggers.forEach(other => {
                        if (other !== trigger) {
                            other.nextElementSibling.classList.add('hidden');
                            other.querySelector('[data-lucide="plus"]').style.transform = 'rotate(0deg)';
                        }
                    });

                    content.classList.remove('hidden');
                    if (icon) icon.style.transform = 'rotate(45deg)';
                } else {
                    content.classList.add('hidden');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>

<?php include 'footer.php'; ?>

