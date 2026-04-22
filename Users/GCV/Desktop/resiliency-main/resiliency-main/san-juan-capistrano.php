<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="San Juan Capistrano Location - Resiliency Mind Body Medicine" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Our Locations</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    San Juan <span class="text-[#23bfe2] font-light">Capistrano</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Psychiatric care and wellness services at our South Orange County location&mdash;serving San Juan Capistrano, Dana Point, Laguna Niguel, and surrounding communities.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="https://share.google/WTyrVunyeC2th7LC4" target="_blank" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        View Location Details <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1: Location Details -->
    <section id="location-details" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">

                <!-- Left Column - Location Info -->
                <div class="w-full lg:w-5/12 reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="map-pin" class="w-7 h-7"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-[#0B2035]">San Juan Capistrano Office</h2>
                    </div>

                    <div class="space-y-6 mb-10">
                        <!-- Address -->
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="building-2" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Address</p>
                                <p class="text-[#0B2035] font-bold text-lg">27184 Ortega Hwy, STE 103</p>
                                <p class="text-gray-500 font-light">San Juan Capistrano, CA 92675</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center gap-5">
                            <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Phone</p>
                                <a href="tel:+19499965355" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors">(949) 996-5355</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center gap-5">
                            <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Email</p>
                                <a href="mailto:info@resiliencymbmedicine.com" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors">info@resiliencymbmedicine.com</a>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-center gap-5">
                            <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="clock" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Office Hours</p>
                                <p class="text-[#0B2035] font-bold text-lg">Monday &ndash; Friday: 9:00 AM &ndash; 5:00 PM</p>
                                <p class="text-gray-500 font-light text-sm">Saturday &ndash; Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <a href="https://maps.google.com/?q=27184+Ortega+Hwy+STE+103+San+Juan+Capistrano+CA+92675" target="_blank" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full inline-flex items-center gap-2 transition-all hover:bg-[#0B2035] hover:text-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform">
                        <i data-lucide="navigation" class="w-5 h-5"></i> Get Directions
                    </a>
                </div>

                <!-- Right Column - Map -->
                <div class="w-full lg:w-7/12 reveal reveal-delay-1">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=27184+Ortega+Hwy+STE+103+San+Juan+Capistrano+CA+92675" width="100%" height="400" class="rounded-[2rem] border-0 shadow-soft" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 2: Services Available -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-[#23bfe2]/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Services at This Location</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">What We Offer in San Juan Capistrano</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Psychiatric Evaluations -->
                <div class="bg-white/5 backdrop-blur-sm rounded-[2rem] p-8 border border-white/10 reveal hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto">
                        <i data-lucide="pill" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Psychiatric Evaluations</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Comprehensive initial evaluations and diagnostic assessments.</p>
                </div>

                <!-- Medication Management -->
                <div class="bg-white/5 backdrop-blur-sm rounded-[2rem] p-8 border border-white/10 reveal reveal-delay-1 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto">
                        <i data-lucide="file-check-2" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Medication Management</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Ongoing medication management with our conservative, integrative approach.</p>
                </div>

                <!-- Deep TMS Therapy -->
                <div class="bg-white/5 backdrop-blur-sm rounded-[2rem] p-8 border border-white/10 reveal hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Deep TMS Therapy</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Deep TMS sessions for depression, OCD, anxiety, and PTSD.</p>
                </div>

                <!-- Telehealth Options -->
                <div class="bg-white/5 backdrop-blur-sm rounded-[2rem] p-8 border border-white/10 reveal reveal-delay-1 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto">
                        <i data-lucide="laptop" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Telehealth Options</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Virtual appointments available for patients who prefer remote care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Communities Served -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Serving South Orange County</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Communities We Serve</h3>
            </div>

            <div class="flex flex-wrap justify-center gap-4 reveal">
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">San Juan Capistrano</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Dana Point</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Laguna Niguel</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Mission Viejo</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Rancho Santa Margarita</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">San Clemente</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Ladera Ranch</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Aliso Viejo</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Laguna Beach</span>
                <span class="bg-white text-[#0B2035] font-semibold px-6 py-3 rounded-full border border-gray-100 shadow-soft hover:-translate-y-1 hover:shadow-2xl hover:border-[#23bfe2]/30 transition-all duration-300">Lake Forest</span>
            </div>
        </div>
    </section>

    <!-- Section 4: Other Location -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto reveal">
                <div class="bg-neutral rounded-[2rem] p-8 md:p-10 border border-gray-100 shadow-soft hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <i data-lucide="map-pin" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-[#0B2035] mb-3">Visit Our Newport Beach Office</h3>
                    <p class="text-gray-500 font-light leading-relaxed mb-2">1501 Superior Ave, Suite 210</p>
                    <p class="text-gray-500 font-light leading-relaxed mb-6">Newport Beach, CA 92663</p>
                    <a href="newport-beach.php" class="inline-flex items-center gap-2 text-[#23bfe2] font-bold hover:text-[#0B2035] transition-colors text-lg">
                        View Location <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-[#23bfe2]/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">Book an Appointment in San Juan Capistrano</h2>
            <p class="text-gray-300 text-lg font-light leading-relaxed mb-10 max-w-2xl mx-auto">Ready to start your journey toward better mental health? Contact our San Juan Capistrano office today.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                    Schedule Now <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
                <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

