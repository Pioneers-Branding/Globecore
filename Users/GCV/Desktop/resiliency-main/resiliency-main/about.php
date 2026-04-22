<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="About Resiliency Mind Body Medicine" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Our Story</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    About <span class="text-[#23bfe2] font-light">Resiliency</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    A physician-led, integrative mental health practice dedicated to accessible, evidence-based care in Orange County.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule a Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#mission" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Our Mission
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section id="mission" class="py-16 relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Mission</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Healing the Mind and Body Together</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        Resiliency Mind + Body Medicine is a boutique clinical practice specializing in advanced neuro-psychiatric treatments and integrative wellness. Founded by Dr. Stefani LaFrenierre, MD, our practice was built on the belief that mental health care should be comprehensive, compassionate, and personalized.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        We combine cutting-edge interventional psychiatry&mdash;including Deep TMS, SPRAVATO, and conservative medication management&mdash;with functional medicine, nutritional optimization, and lifestyle interventions.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="brain" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Advanced interventional psychiatry treatments</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="leaf" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Integrative wellness and functional medicine</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="heart" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Compassionate, personalized care plans</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/home/Resiliency01.webp" alt="Resiliency Mind Body Medicine clinic" class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>

                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl border border-gray-100 shadow-[0_20px_40px_-10px_rgba(11,32,53,0.15)] flex items-center gap-5 group hover:-translate-y-2 transition-transform duration-500">
                        <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-500">
                            <i data-lucide="stethoscope" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-[#0B2035] tracking-tight">4.9<span class="text-[#23bfe2]">&#9733;</span></p>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">Patient Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dr. LaFrenierre Bio Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">

                <!-- Image -->
                <div class="w-full lg:w-1/2 reveal">
                    <div class="relative group">
                        <div class="absolute -inset-6 bg-gradient-to-br from-[#23bfe2]/20 to-transparent rounded-[3rem] blur-2xl opacity-60"></div>
                        <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border-4 border-white/10 ring-1 ring-white/5">
                            <img src="assets/images/home/Stefani-LaFrenierre-main-home.webp" alt="Dr. Stefani LaFrenierre, MD" class="w-full h-[550px] object-cover object-top transition-all duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0B2035]/60 via-transparent to-transparent"></div>
                        </div>

                        <div class="absolute bottom-10 -right-6 bg-[#0B2035] text-white p-6 rounded-3xl shadow-2xl border border-white/10 group-hover:-translate-y-2 transition-transform duration-500">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-[#23bfe2] rounded-2xl flex items-center justify-center text-[#0B2035]">
                                    <i data-lucide="award" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-lg leading-tight">Double Board-Certified</p>
                                    <p class="text-[#23bfe2] text-xs font-bold uppercase tracking-widest mt-1">Psychiatry & Addiction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="w-full lg:w-1/2 reveal reveal-delay-1">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Meet Our Founder</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-white">Dr. Stefani LaFrenierre, MD</h3>

                    <div class="space-y-6 text-gray-300 font-light leading-relaxed text-lg">
                        <p>
                            Double board-certified in Adult Psychiatry and Addiction Medicine, Dr. LaFrenierre earned her medical degree from the David Geffen School of Medicine at UCLA and completed her Adult Psychiatry residency at San Mateo Behavioral Health.
                        </p>
                        <p>
                            She completed a fellowship through the Harvard Program in Refugee Trauma with certification in Global Mental Health, Trauma and Recovery. She was awarded the SAMHSA Minority Fellowship through the APA and previously served as Medical Director of an addiction treatment practice.
                        </p>
                        <p>
                            Named Chief Resident and recipient of the Resident Award in Excellence two years in a row, Dr. LaFrenierre brings deep expertise in depression, anxiety, ADHD, PTSD, bipolar disorder, psychotic disorders, autism spectrum, substance use, and dual diagnosis.
                        </p>
                    </div>

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl p-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]"><i data-lucide="graduation-cap" class="w-5 h-5"></i></div>
                            <span class="text-white font-medium text-sm">UCLA Medical School</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl p-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]"><i data-lucide="shield" class="w-5 h-5"></i></div>
                            <span class="text-white font-medium text-sm">Harvard Fellowship</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl p-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]"><i data-lucide="award" class="w-5 h-5"></i></div>
                            <span class="text-white font-medium text-sm">SAMHSA Fellowship</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl p-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]"><i data-lucide="star" class="w-5 h-5"></i></div>
                            <span class="text-white font-medium text-sm">Chief Resident</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">What We Stand For</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Our Core Values</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">The principles that guide every aspect of our practice and patient care.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Value 1 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Patient-Centered Care</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Every treatment plan is personalized to your unique needs, goals, and lifestyle.</p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Clinical Excellence</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Board-certified providers using the latest evidence-based treatments and technologies.</p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="leaf" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Whole-Person Healing</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Addressing biological, psychological, and lifestyle factors for lasting wellness.</p>
                </div>

                <!-- Value 4 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="user-check" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Accessible Care</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">In-network insurance, telehealth options, and two convenient Orange County locations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Our Team Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Providers</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Meet Our Team</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">A multidisciplinary team of board-certified psychiatrists, physician associates, and psychiatric nurse practitioners dedicated to your well-being.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
                <!-- Dr. Stefani LaFrenierre -->
                <a href="team.php" class="group reveal">
                    <div class="bg-neutral rounded-[2rem] overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <div class="h-56 overflow-hidden">
                            <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/03/Dr.-Stefani-LaFrenierre-MD-1024x862.png" alt="Dr. Stefani LaFrenierre, MD" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 text-center">
                            <h4 class="text-sm font-bold text-primary leading-tight">Dr. Stefani LaFrenierre, MD</h4>
                            <p class="text-[#23bfe2] text-xs font-semibold mt-1">Founder & Psychiatrist</p>
                        </div>
                    </div>
                </a>

                <!-- Dr. Heather Wong -->
                <a href="team.php" class="group reveal reveal-delay-1">
                    <div class="bg-neutral rounded-[2rem] overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <div class="h-56 overflow-hidden">
                            <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/03/Dr.-Heather-Wong-DMSc-MPAS-PA-C-CAQ-Psych-1024x862.png" alt="Dr. Heather Wong" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 text-center">
                            <h4 class="text-sm font-bold text-primary leading-tight">Dr. Heather Wong, PA-C</h4>
                            <p class="text-[#23bfe2] text-xs font-semibold mt-1">Physician Associate</p>
                        </div>
                    </div>
                </a>

                <!-- Milinda Estrada -->
                <a href="team.php" class="group reveal reveal-delay-2">
                    <div class="bg-neutral rounded-[2rem] overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <div class="h-56 overflow-hidden">
                            <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/10/Milinda.png" alt="Milinda Estrada, PA-C" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 text-center">
                            <h4 class="text-sm font-bold text-primary leading-tight">Milinda Estrada, PA-C</h4>
                            <p class="text-[#23bfe2] text-xs font-semibold mt-1">Physician Associate</p>
                        </div>
                    </div>
                </a>

                <!-- Regina Dizon -->
                <a href="team.php" class="group reveal reveal-delay-3">
                    <div class="bg-neutral rounded-[2rem] overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <div class="h-56 overflow-hidden">
                            <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/03/Regina-Dizon-PMHNP-BC-1024x862.png" alt="Regina Dizon, PMHNP-BC" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 text-center">
                            <h4 class="text-sm font-bold text-primary leading-tight">Regina Dizon, PMHNP-BC</h4>
                            <p class="text-[#23bfe2] text-xs font-semibold mt-1">Psychiatric NP</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Second row: 2 centered cards -->
            <div class="flex flex-col sm:flex-row justify-center flex-wrap gap-6 mb-12">
                <!-- Brian Tran -->
                <a href="team.php" class="group reveal w-full sm:w-[calc(50%-0.75rem)] md:w-[calc(33.333%-1rem)] lg:w-[calc(25%-1.125rem)]">
                    <div class="bg-neutral rounded-[2rem] overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <div class="h-56 overflow-hidden">
                            <img src="https://resiliencymbmedicine.com/wp-content/uploads/2025/08/Brian-Tran-team-headshot-1024x862.png" alt="Brian Tran, PMHNP-BC" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 text-center">
                            <h4 class="text-sm font-bold text-primary leading-tight">Brian Tran, PMHNP-BC</h4>
                            <p class="text-[#23bfe2] text-xs font-semibold mt-1">Psychiatric NP</p>
                        </div>
                    </div>
                </a>

                <!-- Lina Kurdi -->
                <a href="team.php" class="group reveal reveal-delay-1 w-full sm:w-[calc(50%-0.75rem)] md:w-[calc(33.333%-1rem)] lg:w-[calc(25%-1.125rem)]">
                    <div class="bg-neutral rounded-[2rem] overflow-hidden border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                        <div class="h-56 overflow-hidden">
                            <img src="https://resiliencymbmedicine.com/wp-content/uploads/2026/01/Lina-Kurdi-PMHNP-BC-Resiliency-1024x862.png" alt="Lina Kurdi, PMHNP-BC" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 text-center">
                            <h4 class="text-sm font-bold text-primary leading-tight">Lina Kurdi, PMHNP-BC</h4>
                            <p class="text-[#23bfe2] text-xs font-semibold mt-1">Psychiatric NP</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="text-center reveal">
                <a href="team.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-4 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl">
                    <span class="flex items-center gap-2">
                        View Full Team & Bios
                        <i data-lucide="arrow-right" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Locations</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Visit Us in Orange County</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Two convenient locations to serve you better.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Newport Beach -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="map-pin" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Newport Beach</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">1501 Superior Ave, Suite 210<br>Newport Beach, CA 92663</p>
                    <a href="tel:+19499965355" class="inline-flex items-center gap-2 text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                    </a>
                </div>

                <!-- San Juan Capistrano -->
                <div class="bg-neutral rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="map-pin" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-4">San Juan Capistrano</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">27184 Ortega Hwy, STE 103<br>San Juan Capistrano, CA 92675</p>
                    <a href="tel:+19499965355" class="inline-flex items-center gap-2 text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                    </a>
                </div>
            </div>

            <div class="text-center reveal">
                <div class="inline-flex items-center gap-3 bg-neutral rounded-full px-8 py-4 border border-gray-100">
                    <i data-lucide="clock" class="w-5 h-5 text-[#23bfe2]"></i>
                    <span class="text-[#0B2035] font-medium">Monday&ndash;Friday 9:00 AM &ndash; 5:00 PM</span>
                    <span class="text-gray-400 mx-2">|</span>
                    <span class="text-gray-500 font-light">Saturday&ndash;Sunday Closed</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Begin?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Take the first step toward comprehensive, compassionate mental health care. Schedule a free discovery call with our team today.
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

<?php include 'footer.php'; ?>

