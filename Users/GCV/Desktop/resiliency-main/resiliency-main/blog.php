<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Our Blog" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Insights & Education</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Our <span class="text-[#23bfe2] font-light">Blog</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Expert insights on mental health, Deep TMS therapy, integrative psychiatry, and wellness from the team at Resiliency Mind + Body Medicine.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#articles" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Read Articles <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section id="articles" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-6">
                    Latest <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Articles</span>
                </h2>
                <p class="text-lg text-gray-600 font-light max-w-2xl mx-auto leading-relaxed">
                    Stay informed with the latest insights on mental health treatments, wellness strategies, and integrative psychiatry.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal">
                <!-- Article 1 -->
                <a href="#" class="group bg-white border border-gray-100 rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-[#0B2035] to-[#0B2035]/80 flex items-center justify-center">
                        <i data-lucide="brain" class="w-16 h-16 text-[#23bfe2]/30"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Deep TMS Therapy</span>
                            <span class="text-gray-400 text-sm font-light">Coming Soon</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">Understanding Treatment-Resistant Depression</h3>
                        <p class="text-gray-600 font-light leading-relaxed line-clamp-2 mb-6">
                            When traditional antidepressants aren't enough, advanced therapies like Deep TMS and SPRAVATO offer new hope.
                        </p>
                        <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                            Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </a>

                <!-- Article 2 -->
                <a href="#" class="group bg-white border border-gray-100 rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-[#0B2035] to-[#0B2035]/80 flex items-center justify-center">
                        <i data-lucide="briefcase" class="w-16 h-16 text-[#23bfe2]/30"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Deep TMS Therapy</span>
                            <span class="text-gray-400 text-sm font-light">Coming Soon</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">Deep TMS Therapy for High Performers</h3>
                        <p class="text-gray-600 font-light leading-relaxed line-clamp-2 mb-6">
                            How busy professionals are using accelerated Deep TMS to address workplace stress and burnout.
                        </p>
                        <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                            Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </a>

                <!-- Article 3 -->
                <a href="#" class="group bg-white border border-gray-100 rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-[#0B2035] to-[#0B2035]/80 flex items-center justify-center">
                        <i data-lucide="heart-pulse" class="w-16 h-16 text-[#23bfe2]/30"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-emerald-500/10 text-emerald-600 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Wellness</span>
                            <span class="text-gray-400 text-sm font-light">Coming Soon</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">The Power of NAD+ for Mental Resilience</h3>
                        <p class="text-gray-600 font-light leading-relaxed line-clamp-2 mb-6">
                            Exploring how NAD+ IV therapy supports cognitive health, mood regulation, and cellular longevity.
                        </p>
                        <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                            Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </a>

                <!-- Article 4 -->
                <a href="#" class="group bg-white border border-gray-100 rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-[#0B2035] to-[#0B2035]/80 flex items-center justify-center">
                        <i data-lucide="droplets" class="w-16 h-16 text-[#23bfe2]/30"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-purple-500/10 text-purple-600 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">SPRAVATO</span>
                            <span class="text-gray-400 text-sm font-light">Coming Soon</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">Spravato: A New Era in Depression Treatment</h3>
                        <p class="text-gray-600 font-light leading-relaxed line-clamp-2 mb-6">
                            What patients should know about esketamine nasal spray for treatment-resistant depression.
                        </p>
                        <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                            Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </a>

                <!-- Article 5 -->
                <a href="#" class="group bg-white border border-gray-100 rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-[#0B2035] to-[#0B2035]/80 flex items-center justify-center">
                        <i data-lucide="shield" class="w-16 h-16 text-[#23bfe2]/30"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-emerald-500/10 text-emerald-600 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Wellness</span>
                            <span class="text-gray-400 text-sm font-light">Coming Soon</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">Building Mental Resilience in Orange County</h3>
                        <p class="text-gray-600 font-light leading-relaxed line-clamp-2 mb-6">
                            Practical strategies for strengthening your mindset and emotional well-being.
                        </p>
                        <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                            Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </a>

                <!-- Article 6 -->
                <a href="#" class="group bg-white border border-gray-100 rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-[#0B2035] to-[#0B2035]/80 flex items-center justify-center">
                        <i data-lucide="flask-conical" class="w-16 h-16 text-[#23bfe2]/30"></i>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Deep TMS Therapy</span>
                            <span class="text-gray-400 text-sm font-light">Coming Soon</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">The Science Behind Integrative Psychiatry</h3>
                        <p class="text-gray-600 font-light leading-relaxed line-clamp-2 mb-6">
                            How combining traditional psychiatry with functional medicine produces better outcomes.
                        </p>
                        <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                            Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Stay <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Connected</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Subscribe to our newsletter for the latest insights on mental health, treatment breakthroughs, and wellness tips.
            </p>
            <div class="max-w-lg mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-full border border-gray-200 focus:outline-none focus:border-[#23bfe2] focus:ring-2 focus:ring-[#23bfe2]/20 text-[#0B2035] font-light">
                    <button class="bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-8 py-4 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl flex items-center justify-center gap-2">
                        Subscribe <i data-lucide="send" class="w-5 h-5"></i>
                    </button>
                </div>
                <p class="text-sm text-gray-400 font-light mt-4">No spam, ever. Unsubscribe anytime.</p>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

