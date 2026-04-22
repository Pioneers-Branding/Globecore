<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/vns_therapy_device.png" alt="VNS Therapy Consultation" class="w-full h-full object-cover object-[50%_35%]">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Advanced Neuromodulation</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    VNS Therapy <span class="text-[#23bfe2] font-light">in Newport Beach & San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Vagus Nerve Stimulation using the LivaNova Symmetry™ System—an FDA-cleared, implantable neuromodulation therapy for treatment-resistant depression and epilepsy.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule a Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#about" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What is VNS -->
    <section id="about" class="py-16 relative overflow-hidden bg-white">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Understanding VNS</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">What is VNS Therapy?</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Vagus Nerve Stimulation (VNS) Therapy uses an implanted device to send mild electrical pulses through the vagus nerve to the brain. The LivaNova Symmetry™ System represents the latest generation of VNS technology, offering improved outcomes for patients with treatment-resistant depression who have not responded to medication, therapy, or other interventions. At Resiliency, we evaluate candidates for VNS and provide ongoing management and optimization of the device.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">FDA-cleared for treatment-resistant depression</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">LivaNova Symmetry™ System technology</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Complementary to other treatments (Deep TMS, medication)</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Badge -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/vns_therapy_device.png" alt="Realistic VNS Therapy stability and care" class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>

                    <!-- Floating Stat Badge -->
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl border border-gray-100 shadow-[0_20px_40px_-10px_rgba(11,32,53,0.15)] flex items-center gap-5 group hover:-translate-y-2 transition-transform duration-500">
                        <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-500">
                            <i data-lucide="shield-check" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-[#0B2035] tracking-tight">FDA</p>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">Cleared Device</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">The Science</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">How VNS Therapy Works</h3>
                <p class="text-gray-300 text-lg font-light leading-relaxed">
                    Understanding the three key principles behind Vagus Nerve Stimulation therapy.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Principle 1 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Vagus Nerve Stimulation</h4>
                    <p class="text-gray-400 font-light leading-relaxed">A small pulse generator implanted under the skin sends regular electrical impulses through the vagus nerve to mood-regulating brain regions.</p>
                </div>

                <!-- Principle 2 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal reveal-delay-1">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Neural Modulation</h4>
                    <p class="text-gray-400 font-light leading-relaxed">These pulses help regulate neurotransmitter systems including serotonin, norepinephrine, and GABA that are disrupted in depression.</p>
                </div>

                <!-- Principle 3 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal reveal-delay-2">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5">
                        <i data-lucide="trending-up" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Progressive Improvement</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Benefits typically build gradually over months as the brain's neural circuits are progressively modulated.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Vagus Nerve -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1/3 h-full bg-[#23bfe2]/5 skew-x-12 transform -translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">The Vagus Nerve</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">What is the Vagus Nerve?</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        The vagus nerve is the longest cranial nerve in the body, running from the brain all the way to the large intestine. It plays a critical role in regulating many of the body's most important functions.
                    </p>

                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="smile" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Mood regulation</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="utensils" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Digestion</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="heart-pulse" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Heart rate & blood pressure</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="wind" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Respiration</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="shield" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Immune responses</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="ear" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Sensory perception</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="message-circle" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Speech & taste</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2] flex-shrink-0"><i data-lucide="droplets" class="w-4 h-4"></i></div>
                            <span class="text-gray-700 text-sm font-medium">Mucus & saliva production</span>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/depression_relief.png" alt="The Vagus Nerve and mental wellness" class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Process -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Your Journey</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">The VNS Treatment Process</h3>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="relative reveal group">
                    <div class="bg-neutral rounded-[2rem] p-10 border border-gray-100 hover:shadow-xl transition-all duration-300 h-full">
                        <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4 group-hover:text-[#23bfe2]/40 transition-colors">01</div>
                        <h4 class="text-xl font-bold text-[#0B2035] mb-4">Evaluation & Candidacy</h4>
                        <p class="text-gray-500 font-light leading-relaxed">
                            Our team conducts a thorough psychiatric evaluation to determine if VNS is appropriate based on your treatment history, diagnosis, and overall health. We manage insurance prior authorization, which typically requires a 6-month process handled by the manufacturer.
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 text-[#23bfe2]/30">
                        <i data-lucide="chevron-right" class="w-8 h-8"></i>
                    </div>
                </div>

                <div class="relative reveal reveal-delay-1 group">
                    <div class="bg-neutral rounded-[2rem] p-10 border border-gray-100 hover:shadow-xl transition-all duration-300 h-full">
                        <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4 group-hover:text-[#23bfe2]/40 transition-colors">02</div>
                        <h4 class="text-xl font-bold text-[#0B2035] mb-4">Outpatient Implantation</h4>
                        <p class="text-gray-500 font-light leading-relaxed">
                            The device is surgically implanted during an outpatient procedure lasting 1-2 hours under general anesthesia. A pacemaker-like pulse generator is placed under the skin below the left collarbone, connected to a wire along the vagus nerve. Same-day discharge is typical.
                        </p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 text-[#23bfe2]/30">
                        <i data-lucide="chevron-right" class="w-8 h-8"></i>
                    </div>
                </div>

                <div class="relative reveal reveal-delay-2 group">
                    <div class="bg-neutral rounded-[2rem] p-10 border border-gray-100 hover:shadow-xl transition-all duration-300 h-full">
                        <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4 group-hover:text-[#23bfe2]/40 transition-colors">03</div>
                        <h4 class="text-xl font-bold text-[#0B2035] mb-4">Programming & Ongoing Care</h4>
                        <p class="text-gray-500 font-light leading-relaxed">
                            Programming and pulse adjustments are performed in-office and are quick and painless. Your physician adjusts the electrical pulse frequency and duration for optimal results. VNS is an adjunctive long-term treatment—you continue your existing therapies alongside it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who is a Candidate -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Candidacy</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Who Is a Candidate?</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">VNS Therapy may be appropriate for patients who meet the following criteria.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Candidate 1 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield-alert" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Treatment-Resistant Depression</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Patients with treatment-resistant depression who have failed multiple medications.</p>
                </div>

                <!-- Candidate 2 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Beyond Deep TMS & SPRAVATO</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Those who have tried Deep TMS and/or SPRAVATO without adequate response.</p>
                </div>

                <!-- Candidate 3 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Comorbid Epilepsy</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Patients with comorbid epilepsy and depression.</p>
                </div>

                <!-- Candidate 4 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="cpu" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Long-Term Solution</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Individuals seeking a long-term, implantable solution.</p>
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
                        <span>How is VNS different from Deep TMS?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Deep TMS is non-invasive and delivered in daily clinic sessions. VNS requires a minor surgical procedure to implant a device that then delivers continuous therapy 24/7. VNS is typically considered after Deep TMS and other non-invasive options have been tried.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is VNS covered by insurance?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            VNS is covered by many insurance plans and Medicare. Prior authorization typically requires approximately 6 months and is managed by the device manufacturer. Our team assists with benefits verification throughout the process.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>What are the side effects?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            The most common side effects include temporary hoarseness, cough, shortness of breath, and throat discomfort during stimulation. These are generally mild and well-tolerated, often decreasing over time.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Where is the device implanted and is it visible?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            The device is implanted during outpatient hospital surgery lasting 1-2 hours under general anesthesia, with same-day discharge typical. The lead wire remains invisible, and the neurostimulator (approximately 2 inches in diameter) is positioned below the left collarbone. It may be slightly visible on smaller frames.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Will I still need to take my medications?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes. VNS is an add-on treatment designed to complement your existing care. Most patients continue their antidepressant medications and other therapies alongside VNS for the best outcomes.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="contact.php" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0">
            <img src="assets/images/anxiety_relief.png" alt="Path to Relief" class="w-full h-full object-cover opacity-10">
            <div class="absolute inset-0 bg-gradient-to-b from-white via-white/80 to-white"></div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Learn If VNS Is <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Right For You</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule a consultation with our team to discuss whether VNS Therapy could be the next step in your treatment journey.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule a Consultation
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

