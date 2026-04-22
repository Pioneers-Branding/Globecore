<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Deep TMS Therapy Resources" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Patient Education</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Deep TMS Therapy <span class="text-[#23bfe2] font-light">Resources</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Educational resources, guides, and information about Deep TMS therapy to help you make informed decisions about your treatment.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#resources" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Explore Resources <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Cards Section -->
    <section id="resources" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-6">
                    Deep TMS Therapy <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Resources</span>
                </h2>
                <p class="text-lg text-gray-600 font-light max-w-2xl mx-auto leading-relaxed">
                    Everything you need to know about Deep TMS therapy, from how it works to what your treatment journey will look like.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal">
                <!-- Card 1 -->
                <a href="tms-therapy.php" class="group bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-white transition-colors">
                        <i data-lucide="book-open" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Understanding Deep TMS</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Learn how Deep TMS works and what conditions it treats.</p>
                    <div class="mt-6 flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="accelerated-tms.php" class="group bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-white transition-colors">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Accelerated Deep TMS</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Discover the SWIFT protocol for remission in 5 days.</p>
                    <div class="mt-6 flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="tms-faq.php" class="group bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-white transition-colors">
                        <i data-lucide="help-circle" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Deep TMS FAQ</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Answers to the most common questions about Deep TMS therapy.</p>
                    <div class="mt-6 flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </a>

                <!-- Card 4 -->
                <a href="insurance.php" class="group bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-white transition-colors">
                        <i data-lucide="file-check-2" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Insurance Coverage</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Learn about insurance coverage for Deep TMS therapy.</p>
                    <div class="mt-6 flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </a>

                <!-- Card 5 -->
                <a href="team.php" class="group bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-white transition-colors">
                        <i data-lucide="user-check" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Meet Our Team</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Get to know the providers who will guide your treatment.</p>
                    <div class="mt-6 flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </a>

                <!-- Card 6 -->
                <a href="reviews.php" class="group bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-white transition-colors">
                        <i data-lucide="star" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Patient Reviews</h3>
                    <p class="text-gray-600 font-light leading-relaxed">Read what our patients say about their Deep TMS experience.</p>
                    <div class="mt-6 flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="py-20 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#23bfe2]/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <span class="text-[#23bfe2] text-sm font-bold tracking-widest uppercase">Watch & Learn</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        Deep TMS vs. <span class="text-[#23bfe2] font-light">Traditional Deep TMS</span>
                    </h2>
                    <p class="text-lg text-gray-300 font-light leading-relaxed mb-8">
                        Learn about the differences between Deep TMS and traditional Deep TMS technology. Our BrainsWay Deep TMS system reaches broader and deeper brain regions for more effective treatment outcomes.
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="shield-check" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-white font-bold">BrainsWay Technology</p>
                            <p class="text-gray-400 font-light text-sm">FDA-cleared Deep TMS with H-Coil technology</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="rounded-[2rem] overflow-hidden shadow-2xl aspect-video">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/p2xO4FdpAo0" title="Deep TMS vs. Traditional Deep TMS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Learn More?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule Your Consultation to learn how Deep TMS can help you on your journey to mental wellness.
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

