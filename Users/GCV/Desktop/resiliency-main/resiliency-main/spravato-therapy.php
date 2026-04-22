<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/spravato-banner.png" alt="Spravato Treatment Consultation" class="w-full h-full object-cover object-[50%_30%] ">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Esketamine Nasal Spray</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    SPRAVATO&reg; Treatment <span class="text-[#23bfe2] font-light">in Newport Beach & San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    A breakthrough FDA-approved treatment for adults with treatment-resistant depression and suicidal ideation, offering rapid relief where traditional antidepressants have failed.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Get Started <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#how-it-works" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        The Process
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Spravato Section -->
    <section class="py-12 relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Breakthrough Therapy</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Redefining Depression Treatment</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        SPRAVATO&reg; (esketamine) is the first FDA-approved nasal spray medication, taken with an oral antidepressant, for adults with treatment-resistant depression (TRD) and depressive symptoms in adults with major depressive disorder (MDD) with suicidal thoughts or actions.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Unlike traditional antidepressants that can take weeks to show results, Spravato works differently by targeting the N-methyl-D-aspartate (NMDA) receptor, helping to restore neural connections in the brain faster and more effectively for many patients.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-3 p-4 bg-neutral rounded-xl border border-gray-100">
                            <i data-lucide="zap" class="w-6 h-6 text-[#23bfe2]"></i>
                            <span class="text-sm font-semibold">Fast-Acting Relief</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-neutral rounded-xl border border-gray-100">
                            <i data-lucide="shield-check" class="w-6 h-6 text-[#23bfe2]"></i>
                            <span class="text-sm font-semibold">FDA Approved</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-neutral rounded-xl border border-gray-100">
                            <i data-lucide="brain" class="w-6 h-6 text-[#23bfe2]"></i>
                            <span class="text-sm font-semibold">Targets TRD</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-neutral rounded-xl border border-gray-100">
                            <i data-lucide="heart" class="w-6 h-6 text-[#23bfe2]"></i>
                            <span class="text-sm font-semibold">Supports Long-term Wellness</span>
                        </div>
                    </div>
                </div>

                <!-- Image with decorative elements -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100">
                        <img src="assets\images\dr-L-with-p.jpg" alt="Spravato Treatment relief" class="w-full h-[500px] object-cover object-top ">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0B2035]/40 to-transparent"></div>
                    </div>
                    
                    <div class="absolute -bottom-6 -right-6 bg-white p-8 rounded-3xl shadow-xl border border-gray-50 max-w-[280px]">
                        <p class="text-[#0B2035] font-light italic leading-relaxed text-sm">
                            "A revolutionary approach for those who haven't found relief with standard treatments."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Video: SPRAVATO with Resiliency -->
    <section class="py-12 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Content Side -->
                <div class="w-full lg:w-1/2 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Visual Insight</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-8 leading-tight">
                        Experience SPRAVATO <br><span class="text-[#23bfe2]">at Resiliency</span>
                    </h3>
                    <p class="text-gray-600 text-lg font-light leading-relaxed mb-8">
                        Get a glimpse into the healing journey with Spravato at our Newport Beach clinic. We prioritize your comfort and safety every step of the way, providing a serene environment where you can focus on your recovery.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-[#0B2035]">
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2]">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium">Private Treatment Suites</span>
                        </div>
                        <div class="flex items-center gap-4 text-[#0B2035]">
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2]">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium">Professional Medical Supervision</span>
                        </div>
                        <div class="flex items-center gap-4 text-[#0B2035]">
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2]">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium">Rapid-Acting Results</span>
                        </div>
                    </div>
                </div>

                <!-- Video Side (Vertical / Portrait) -->
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end reveal reveal-delay-1">
                    <div class="relative w-full max-w-[350px] aspect-[9/16] rounded-[3rem] overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.1)] border-8 border-[#0B2035] bg-[#0B2035]">
                        <iframe 
                            class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/HPLexvo4ht0?autoplay=0&controls=1&rel=0" 
                            title="SPRAVATO with Resiliency" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Decorative Accents -->
        <div class="absolute top-1/4 -right-20 w-80 h-80 bg-[#23bfe2]/5 rounded-full blur-3xl pointer-events-none"></div>
    </section>

    <!-- Dr. LaFrenierre Unique Approach -->
    <section class="py-12 bg-neutral relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/40 -skew-x-12 transform translate-x-1/2 pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-24">
                
                <div class="w-full lg:w-1/2 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Expert Oversight</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-8 leading-tight">
                        Integrative Spravato <br><span class="text-[#23bfe2]">Care with Dr. LaFrenierre</span>
                    </h3>
                    
                    <div class="space-y-6 text-gray-600 text-lg font-light leading-relaxed">
                        <p class="relative pl-8 border-l-4 border-[#23bfe2]">
                            Dr. LaFrenierre emphasizes a holistic approach to Spravato therapy, ensuring that the biological benefits of esketamine are supported by a comprehensive plan for emotional and physical wellness.
                        </p>
                        <p>
                            As a REMS-certified provider with extensive experience in interventional psychiatry, Dr. LaFrenierre personally oversees the protocol for each patient, adjusting treatment plans as needed to achieve the best possible outcomes in a safe, boutique environment.
                        </p>
                    </div>

                    <!-- <div class="mt-12 flex items-center gap-6">
                        <div class="w-16 h-[1px] bg-gray-300"></div>
                        <p class="font-serif italic text-2xl text-[#0B2035]">Dr. LaFrenierre, MD</p>
                    </div> -->
                </div>

                <div class="w-full lg:w-1/2 reveal reveal-delay-1">
                    <div class="relative group">
                        <div class="absolute -inset-6 bg-gradient-to-br from-[#23bfe2]/20 to-transparent rounded-[3rem] blur-2xl opacity-60"></div>
                        <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border-4 border-white ring-1 ring-gray-100">
                            <img 
                                src="assets/images/mental-Health/TMS/Dr.-L-tms.webp" 
                                alt="Dr. LaFrenierre" 
                                class="w-full h-[500px] object-cover object-top grayscale-[0.2] transition-all duration-700 group-hover:grayscale-0 group-hover:scale-105"
                            >
                            <div class="absolute bottom-10 -left-6 bg-[#0B2035] text-white p-6 rounded-3xl shadow-2xl border border-white/10 group-hover:-translate-y-2 transition-transform duration-500">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-[#23bfe2] rounded-2xl flex items-center justify-center text-[#0B2035]">
                                        <i data-lucide="award" class="w-6 h-6"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-lg leading-tight">REMS Certified</p>
                                        <p class="text-[#23bfe2] text-xs font-bold uppercase tracking-widest mt-1">Spravato Specialist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Resiliency for Spravato -->
    <section class="py-12 bg-[#0B2035] relative overflow-hidden text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center mb-12">
            <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Patient-Centered Care</h2>
            <h3 class="text-4xl md:text-5xl font-bold mb-6">A Boutique Treatment Experience</h3>
            <p class="text-gray-300 text-lg font-light max-w-2xl mx-auto">
                Spravato treatment requires a 2-hour observation period. At Resiliency, we've designed this time to be as comfortable and therapeutic as possible.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white/5 backdrop-blur-sm p-10 rounded-[2.5rem] border border-white/10 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-[#23bfe2] rounded-2xl flex items-center justify-center text-[#0B2035] mb-8 group-hover:scale-110 transition-transform">
                        <i data-lucide="coffee" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Luxury Lounges</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Relax in private, sound-dampened suites with reclining chairs and calming aesthetics designed to enhance your therapeutic journey.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white/5 backdrop-blur-sm p-10 rounded-[2.5rem] border border-white/10 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-[#23bfe2] rounded-2xl flex items-center justify-center text-[#0B2035] mb-8 group-hover:scale-110 transition-transform">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Expert Monitoring</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Our clinical team provides continuous, non-intrusive monitoring throughout your session to ensure safety and provide support if needed.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white/5 backdrop-blur-sm p-10 rounded-[2.5rem] border border-white/10 hover:bg-white/10 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-[#23bfe2] rounded-2xl flex items-center justify-center text-[#0B2035] mb-8 group-hover:scale-110 transition-transform">
                        <i data-lucide="sparkles" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Holistic Support</h4>
                    <p class="text-gray-400 font-light leading-relaxed">We integrate your Spravato therapy with other wellness modalities like integrative psychiatry for a truly comprehensive approach.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Treatment Process -->
    <section id="how-it-works" class="py-12 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="w-full lg:w-1/2 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">The Journey</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-8">What to Expect During Your Treatment</h3>
                    
                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#0B2035] text-[#23bfe2] flex items-center justify-center font-bold">1</div>
                            <div>
                                <h4 class="font-bold text-[#0B2035] mb-2">Clinical Consultation</h4>
                                <p class="text-gray-600 font-light">We perform a thorough evaluation to ensure Spravato is the right choice for your specific needs and medical history.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#0B2035] text-[#23bfe2] flex items-center justify-center font-bold">2</div>
                            <div>
                                <h4 class="font-bold text-[#0B2035] mb-2">Treatment Session</h4>
                                <p class="text-gray-600 font-light">You'll self-administer the nasal spray under the supervision of our medical staff in a private, comfortable suite.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#0B2035] text-[#23bfe2] flex items-center justify-center font-bold">3</div>
                            <div>
                                <h4 class="font-bold text-[#0B2035] mb-2">Relaxation & Monitoring</h4>
                                <p class="text-gray-600 font-light">You'll remain in our clinic for 2 hours to rest as the treatment takes effect, while we monitor your vital signs and well-being.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#0B2035] text-[#23bfe2] flex items-center justify-center font-bold">4</div>
                            <div>
                                <h4 class="font-bold text-[#0B2035] mb-2">Same-Day Recovery</h4>
                                <p class="text-gray-600 font-light">After the observation period, you'll need a pre-arranged ride home. Most patients return to normal activities the following day.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 reveal reveal-delay-1">
                    <div class="bg-neutral rounded-[3rem] p-12 border border-gray-100 shadow-xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-[#23bfe2]/5 rounded-full -translate-y-12 translate-x-12"></div>
                        <h4 class="text-2xl font-bold text-[#0B2035] mb-6 flex items-center gap-3">
                            <i data-lucide="info" class="w-6 h-6 text-[#23bfe2]"></i>
                            Important Safety Info
                        </h4>
                        <ul class="space-y-4 text-gray-600 font-light">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-[#23bfe2] mt-0.5"></i>
                                <span>Spravato can cause temporary dissociation (feeling detached from yourself or surroundings).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-[#23bfe2] mt-0.5"></i>
                                <span>A temporary increase in blood pressure may occur shortly after administration.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-[#23bfe2] mt-0.5"></i>
                                <span>Common side effects include dizziness, nausea, lethargy, and a metallic taste.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-[#23bfe2] mt-0.5"></i>
                                <span>A designated driver is required for transportation post-treatment.</span>
                            </li>
                        </ul>
                        <div class="mt-8 pt-8 border-t border-gray-200">
                            <p class="text-xs text-gray-400 leading-relaxed uppercase tracking-widest font-bold">REMS Certified Clinic</p>
                            <p class="text-sm text-gray-500 mt-2 font-light italic">Resiliency is a fully certified SPRAVATO&reg; REMS site, ensuring the highest standards of safety and care.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-[#0B2035] text-white relative border-t-[8px] border-[#23bfe2]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Common Questions</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Spravato Therapy FAQs</h3>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>How is Spravato different from Ketamine infusion?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            SPRAVATO&reg; is esketamine, an intranasal spray, while ketamine is typically administered through an IV (intravenous) infusion. Spravato is the only esketamine nasal spray that is FDA-approved and often covered by insurance for treatment-resistant depression.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Will my insurance cover Spravato Treatment?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Many commercial insurance plans and Medicare cover Spravato treatment for patients who meet the clinical criteria (typically having failed at least two oral antidepressants). Our team will work directly with your provider to verify coverage and obtain necessary authorizations.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>How often are the treatment sessions?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            The standard induction phase involves sessions twice a week for the first 4 weeks, then once a week for weeks 5 to 8. Afterward, we move to a maintenance phase, which is typically once every 1 or 2 weeks based on your clinical response.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="#contact" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Talk to our Spravato specialists.</a></p>
            </div>
        </div>
    </section>

    <!-- Patient Reviews -->
    <section class="py-12 bg-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Success Stories</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035]">Real Results from Real Patients</h3>
            </div>
            
            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
                <!-- Review 1 -->
                <div class="break-inside-avoid bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-6">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-8 font-light italic">
                        "I have never before found a psychiatric group that is so clearly dedicated to making people better. I can honestly say that I am better today because Dr. LaFrenierre and her team listened to my story and devised a treatment plan for me. I thought there was no hope left, and now I legitimately feel excited to be alive!"
                    </p>
                    <div class="flex items-center gap-3 border-t border-gray-50 pt-6">
                        <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 text-primary flex items-center justify-center font-bold text-xs">PM</div>
                        <span class="font-bold text-gray-800 text-sm">Pagu Ma</span>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="break-inside-avoid bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-6">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-8 font-light italic">
                        "Resiliency has changed my life. I've been treatment resistant and suffered debilitating depression since childhood with no relief. Since coming here I've been able to get up, get a job and even start going out with friends again."
                    </p>
                    <div class="flex items-center gap-3 border-t border-gray-50 pt-6">
                        <div class="w-10 h-10 rounded-full bg-pink-50 text-pink-600 flex items-center justify-center font-bold text-xs">JM</div>
                        <span class="font-bold text-gray-800 text-sm">Jesse M</span>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="break-inside-avoid bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm hover:shadow-lg transition-all duration-300 group">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-6">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-8 font-light italic">
                        "Brian Tran is very pleasant and easy to work with. He has been a real help. Rylee in the front office is a dream! She really makes things easy as well as being a cheerful and friendly presence. I can highly recommend this facility."
                    </p>
                    <div class="flex items-center gap-3 border-t border-gray-50 pt-6">
                        <div class="w-10 h-10 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xs">LM</div>
                        <span class="font-bold text-gray-800 text-sm">Lory Moger</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-12 relative overflow-hidden bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Reclaim Your <span class="text-[#23bfe2]">Life Today</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Treatment-resistant depression doesn't have to be your final destination. Discover if Spravato is the right choice for your recovery.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
                        <i data-lucide="arrow-up-right" class="w-6 h-6 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const triggers = document.querySelectorAll('.bg-white\\/5 button');
        triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                const icon = trigger.querySelector('[data-lucide="plus"]');
                const content = trigger.nextElementSibling;
                
                if (content.classList.contains('hidden')) {
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
