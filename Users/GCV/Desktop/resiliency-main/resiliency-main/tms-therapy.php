<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <!-- <img src="assets/images/home/TMS-Therapy-Orange-County-homepage.webp" alt="Deep TMS Therapy" class="w-full h-full object-cover opacity-30 mix-blend-overlay border-none"> -->
            <!-- Placeholder for now if image isn't right, or we can use the same image with dark overlay -->
            <img src="assets/images/anxiety_consultation.png" alt="Deep TMS Therapy Consultation" class="w-full h-full object-cover object-[50%_30%]">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Non-Invasive Neuromodulation</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Deep TMS Therapy <span class="text-[#23bfe2] font-light">in Newport Beach & San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    An advanced, FDA-cleared treatment for major depressive disorder, anxious depression, and OCD—without the systemic side effects of medication.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Get Qualified <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#how-it-works" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        How It Works
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Deep TMS Section -->
    <section class="py-16 relative overflow-hidden bg-white">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Understanding Deep TMS</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">What is Transcranial Magnetic Stimulation?</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        Deep Transcranial Magnetic Stimulation (dTMS) utilizing the BrainsWay H-Coil technology is a non-invasive, outpatient therapy. It works by sending safe, targeted magnetic pulses to stimulate neurons in specific brain regions associated with mood control and obsessive-compulsive behaviors.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Unlike systemic treatments like medication, Deep TMS targets only the brain circuits that need healing, drastically reducing the risk of uncomfortable bodily side effects. Our clinic provides precise, customized Deep TMS mapping to ensure maximum therapeutic benefit.
                    </p>
                    
                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">FDA-Cleared for MDD, Anxious Depression & OCD</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="clock" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Takes ~20 minutes per daily session</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="brain" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Stay completely awake, alert, and functional</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/home/TMS-Therapy-Orange-County-homepage.webp" alt="Patient receiving Deep TMS Therapy" class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>
                    
                    <!-- Floating Stat Badge -->
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl border border-gray-100 shadow-[0_20px_40px_-10px_rgba(11,32,53,0.15)] flex items-center gap-5 group hover:-translate-y-2 transition-transform duration-500">
                        <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-500">
                            <i data-lucide="activity" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-[#0B2035] tracking-tight">75<span class="text-[#23bfe2]">%+</span></p>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">Response Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before and After Brain Effects -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                
                <!-- Content -->
                <div class="w-full lg:w-1/2 reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Neural Impact</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-white">Before and After Brain Effects of Deep TMS</h3>
                    
                    <div class="space-y-6 text-gray-300 font-light leading-relaxed text-lg">
                        <p>
                            PET scan images illustrate differences in brain activity patterns associated with depression and related conditions, with certain regions showing reduced activity before treatment.
                        </p>
                        <p>
                            After a course of Deep TMS, the scan depicts more balanced activity in mood-related brain networks, reflecting improved neural functioning.
                        </p>
                        <p class="text-sm text-gray-400 italic mt-8 border-l-2 border-[#23bfe2] pl-4">
                            *While individual results vary and PET scans are not used to guide routine clinical care, these visuals help explain how Deep TMS can modulate brain circuits involved in mood regulation.
                        </p>
                    </div>
                </div>

                <!-- Neural Impact Image -->
                <div class="w-full lg:w-1/2 reveal reveal-delay-1">
                    <div class="relative group">
                        <!-- Decorative Frame -->
                        <div class="absolute -inset-4 bg-gradient-to-tr from-[#23bfe2]/20 to-transparent rounded-[3rem] blur-2xl opacity-50 group-hover:opacity-75 transition-opacity duration-500"></div>
                        
                        <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-white/10 bg-[#0B2035]/50 backdrop-blur-sm p-2 ring-1 ring-white/20">
                            <img 
                                src="assets/images/mental-Health/TMS/how-tms-works-2048x1152.webp" 
                                alt="Before and After PET Scans showing Deep TMS Neural Impact" 
                                class="w-full h-auto rounded-[2rem] object-cover transition-transform duration-700 group-hover:scale-[1.02]"
                            >
                            
                            <!-- Overlay Label -->
                            <!-- <div class="absolute bottom-6 left-1/2 -translate-x-1/2 bg-[#0B2035]/80 backdrop-blur-md px-6 py-2 rounded-full border border-white/10">
                                <p class="text-[10px] text-[#23bfe2] font-bold uppercase tracking-[0.2em] whitespace-nowrap">Brain Activity Simulation</p>
                            </div> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Deep TMS with Resiliency Video Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                
                <!-- Video Side (Short Format) -->
                <div class="w-full lg:w-1/2 relative reveal flex justify-center lg:justify-center">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5 w-full max-w-[366px] aspect-[9/16]">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/S0hRwlIZXYQ" title="Deep TMS with Resiliency" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>

                <!-- Content Side -->
                <div class="w-full lg:w-1/2 reveal reveal-delay-1 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Personalized Care</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-6 leading-tight">Deep TMS <br><span class="text-[#23bfe2] font-light">with Resiliency</span></h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Experience advanced psychiatric care at Resiliency with state-of-the-art BrainsWay Deep TMS technology. Our dedicated team provides a comfortable, supportive environment throughout your treatment journey, tailoring each protocol specifically to your needs for depression or OCD.
                    </p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div class="mt-1 bg-[#23bfe2]/10 p-1.5 rounded-full text-[#23bfe2]">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0B2035] text-sm">Dedicated Team</h4>
                                <p class="text-sm text-gray-500 font-light">Hands-on guidance and support from experienced technicians and providers.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1 bg-[#23bfe2]/10 p-1.5 rounded-full text-[#23bfe2]">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#0B2035] text-sm">Comfortable Setting</h4>
                                <p class="text-sm text-gray-500 font-light">A relaxing environment designed for your comfort and peace of mind.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Background decorative elements -->
        <div class="absolute top-1/2 left-0 w-64 h-64 bg-[#23bfe2]/5 rounded-full blur-3xl -z-10 -translate-x-1/2"></div>
    </section>

    <!-- Why Choose Deep TMS (Benefits) Grid -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <!-- Abstract background accents -->
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">The Advantages</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Why Choose Deep TMS?</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">A revolutionary shift in psychiatric treatment, prioritizing safety, structural tolerability, and profound, enduring results.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">No Systemic Effects</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Unlike medications that circulate through the entire body causing weight gain, sexual dysfunction, or extreme fatigue, Deep TMS strictly focuses on the brain.</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="clock" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Zero Downtime</h4>
                    <p class="text-gray-500 font-light leading-relaxed">The procedure requires absolutely no sedation. You can safely drive yourself to and from the appointment and immediately return to your day.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="zap" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">High Efficacy</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Deep TMS has demonstrated profound clinical efficacy, achieving significant response criteria even in treatment-resistant cases.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="file-check-2" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Insurance Covered</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Deep TMS is widely recognized and covered by most major commercial insurance providers, as well as Medicare, for treatment-resistant depression.</p>
                </div>

                <!-- Benefit 5 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain-circuit" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Deep Coil Tech</h4>
                    <p class="text-gray-500 font-light leading-relaxed">We utilize BrainsWay's patented H-Coil, penetrating deeper and broader brain regions compared to standard, generic figure-8 coils.</p>
                </div>

                <!-- Benefit 6 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="infinity" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Lasting Remission</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Many patients experience sustained symptom reduction mimicking full clinical remission, empowering them to reclaim their lives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dr. LaFrenierre Unique Approach -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <!-- Abstract accents -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/40 -skew-x-12 transform translate-x-1/2 pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <!-- Content Column -->
                <div class="w-full lg:w-1/2 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">The Resiliency Difference</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-8 leading-tight">
                        Explore What Makes Deep TMS Therapy at <span class="text-[#23bfe2]">Resiliency Unique</span> with Dr. LaFrenierre
                    </h3>
                    
                    <div class="space-y-6 text-gray-600 text-lg font-light leading-relaxed">
                        <p class="relative pl-8 border-l-4 border-[#23bfe2]">
                            With a deep understanding of the nuances of mental health care, Dr. LaFrenierre’s approach to Transcranial Magnetic Stimulation (Deep TMS) Therapy goes beyond traditional methods, offering personalized and compassionate care tailored to each patient’s unique needs.
                        </p>
                        <p>
                            By focusing on innovative techniques and a holistic treatment model, Resiliency is redefining what it means to support mental well-being, helping patients achieve lasting, transformative results.
                        </p>
                    </div>

                    <div class="mt-12 flex items-center gap-6">
                        <div class="w-16 h-[1px] bg-gray-300"></div>
                        <p class="font-serif italic text-2xl text-[#0B2035]">Dr. LaFrenierre, MD</p>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="w-full lg:w-1/2 reveal reveal-delay-1">
                    <div class="relative group">
                        <!-- Decorative Frame -->
                        <div class="absolute -inset-6 bg-gradient-to-br from-[#23bfe2]/20 to-transparent rounded-[3rem] blur-2xl opacity-60"></div>
                        
                        <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border-4 border-white ring-1 ring-gray-100">
                            <img 
                                src="assets/images/mental-Health/TMS/Dr.-L-tms.webp" 
                                alt="Dr. LaFrenierre with Deep TMS Technology" 
                                class="w-full h-[500px] object-cover object-top grayscale-[0.2] transition-all duration-700 group-hover:grayscale-0 group-hover:scale-105"
                            >
                            
                            <!-- Floating Credential -->
                            <div class="absolute bottom-10 -left-6 bg-[#0B2035] text-white p-6 rounded-3xl shadow-2xl border border-white/10 group-hover:-translate-y-2 transition-transform duration-500">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-[#23bfe2] rounded-2xl flex items-center justify-center text-[#0B2035]">
                                        <i data-lucide="award" class="w-6 h-6"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-lg leading-tight">Board Certified</p>
                                        <p class="text-[#23bfe2] text-xs font-bold uppercase tracking-widest mt-1">Interventional Psychiatrist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Video Embed Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto mb-16 reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] leading-tight mb-6">
                    Don't Miss Another Moment with BrainsWay Deep TMS&trade; Treatment for Depression
                </h2>
                <p class="text-gray-600 text-lg font-light leading-relaxed">
                    Watch how Deep TMS technology is helping patients reclaim their lives and reconnect with what matters most.
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto reveal reveal-delay-1">
                <div class="relative pt-[56.25%] rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 group">
                    <iframe 
                        class="absolute inset-0 w-full h-full"
                        src="https://www.youtube.com/embed/Hge75JSodb4?rel=0" 
                        title="BrainsWay Deep TMS Treatment for Depression" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Video Decorative Accents -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-[#23bfe2]/10 rounded-full blur-3xl -z-10"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-[#0B2035]/5 rounded-full blur-3xl -z-10"></div>
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
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Does Deep TMS Therapy hurt?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Deep TMS is generally quite well-tolerated and is strictly non-invasive. Most patients describe the feeling of the magnetic pulses as a mild tapping sensation on the scalp. Scalp discomfort or mild headaches may occur initially, but typically subside completely after the first week of sessions as you habituate.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Can I drive after my session?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes, absolutely! Because Deep TMS therapy doesn't require anesthesia or sedation of any kind, it has zero impact on your cognitive alertness. You can safely drive to and from your appointments and seamlessly return to work or normal activities immediately afterward.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Will my insurance cover Deep TMS?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Most commercial insurance carriers and Medicare provide robust coverage for Deep TMS as a treatment for Major Depressive Disorder when medical necessity criteria are met (typically, having tried and failed 2 to 4 different oral antidepressants and having engaged in psychotherapy). Our dedicated clinic team will perform a full benefits verification for you.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>How is Deep TMS (BrainsWay) different?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Deep TMS utilizes a patented helmet structure known as the H-Coil. This advanced technology safely propagates magnetic fields significantly deeper and broader within the brain's cortical networks compared to older, traditional figure-8 coils. This allows us to target difficult-to-reach structures, driving powerful outcomes for OCD and severe depression.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="#contact" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Patient Reviews (Google Style) -->
    <section class="py-16 bg-gray-50 relative overflow-hidden">
        <!-- Background accents -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-[#23bfe2]/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#0B2035]/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Success Stories</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Patient Experiences</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">
                    Real results from patients who chose Deep TMS at Resiliency to reclaim their mental wellness.
                </p>
            </div>
            
            <!-- Review Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
                
                <!-- Review Card 1 -->
                <div class="break-inside-avoid bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-6">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-base leading-relaxed mb-8 font-light italic">
                        "Resiliency has changed my life. I've been treatment resistant and suffered debilitating depression since childhood with no relief. Since coming here I've been able to get up, get a job and even start going out with friends again."
                    </p>
                    <div class="flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-pink-100 text-[#0B2035] flex items-center justify-center font-bold text-sm">JM</div>
                            <span class="font-bold text-gray-800">Jesse M</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-3">
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div class="break-inside-avoid bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-6">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-base leading-relaxed mb-8 font-light italic">
                        "TMS truly changed my life. I was debilitated by depression and anxiety for years. The experience at Resiliency was more than I could have asked for. My TMS tech, Cyrus, was so personable, and made me feel like my progress and treatment was important to him."
                    </p>
                    <div class="flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 text-[#23bfe2] flex items-center justify-center font-bold text-sm">AB</div>
                            <span class="font-bold text-gray-800">Annessa Brock</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-3">
                            Google Review
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div class="break-inside-avoid bg-white border border-gray-100 p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 group">
                    <div class="flex items-center gap-1 text-[#23bfe2] mb-6">
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    </div>
                    <p class="text-gray-700 text-base leading-relaxed mb-8 font-light italic">
                        "This has been life changing. After suffering a brain injury, TMS gave me another chance to experience exercise, driving, full range of motion. PTSD was a result of my injury and trauma but with TMS I can see a new me. I recommend this 1000 percent."
                    </p>
                    <div class="flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-indigo-100 text-[#0B2035] flex items-center justify-center font-bold text-sm">AM</div>
                            <span class="font-bold text-gray-800">Alicia Mills</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-gray-400">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-3">
                            Google Review
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More on Google CTA -->
            <div class="text-center mt-12 reveal">
                <a href="#" class="inline-flex items-center gap-3 text-[#0B2035] font-bold hover:text-[#23bfe2] transition-colors group">
                    View More Success Stories on Google 
                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <!-- Abstract gradient blob -->
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to Experience <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Lasting Relief?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Take the decisive first step toward reclaiming your life from depression or OCD. Find out if Deep TMS therapy is the right path for you.
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

