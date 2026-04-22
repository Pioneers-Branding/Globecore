<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/anxiety_consultation.png" alt="Conditions We Treat" class="w-full h-full object-cover object-[50%_30%]">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Comprehensive Care</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Conditions We Treat <span class="text-[#23bfe2] font-light">in Newport Beach & San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Expert psychiatric care for a wide range of mental health and neurological conditions, with personalized treatment plans tailored to each patient.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule Your Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:9499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions Grid -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Our Specialties</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Conditions We Specialize In</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">From mood disorders to cognitive optimization, our board-certified team provides expert care across a full spectrum of psychiatric and neurological conditions.</p>
            </div>

            <!-- First 9 cards in grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Depression -->
                <a href="depression.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="cloud-rain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Depression</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Major depressive disorder, persistent depression, treatment-resistant depression.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- Anxiety -->
                <a href="anxiety.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="wind" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Anxiety</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Generalized anxiety, social anxiety, panic disorder, phobias.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- OCD -->
                <a href="ocd.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="repeat" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">OCD</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Obsessive-compulsive disorder with targeted treatment.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- PTSD -->
                <a href="ptsd.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield-alert" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">PTSD</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Post-traumatic stress disorder with trauma-informed care.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- ADHD -->
                <a href="adhd.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">ADHD</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Attention-deficit/hyperactivity disorder management.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- Bipolar Disorder -->
                <a href="bipolar.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Bipolar Disorder</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Expert mood stabilization and long-term management.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- Substance Use -->
                <a href="substance-abuse.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="glass-water" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Substance Use</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Addiction medicine and dual diagnosis treatment.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- Autism Spectrum -->
                <a href="autism.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Autism Spectrum</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Specialized support for neurodivergent individuals.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- Suicidal Ideation -->
                <a href="suicidal-ideation.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group block text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="alert-triangle" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Suicidal Ideation</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Crisis intervention and treatment for suicidal thoughts.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>
            </div>

            <!-- Last row: 2 centered cards -->
            <div class="flex flex-col md:flex-row justify-center gap-8 mt-8">
                <!-- Cognitive Enhancement -->
                <a href="cognitive-enhancement.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group block text-center w-full md:w-[calc(33.333%-1.333rem)]">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sparkles" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Cognitive Enhancement</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Brain optimization and cognitive performance.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>

                <!-- Mental Clarity -->
                <a href="mental-clarity.php" class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group block text-center w-full md:w-[calc(33.333%-1.333rem)]">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="sun" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Mental Clarity</h4>
                    <p class="text-gray-500 font-light leading-relaxed mb-4">Treatment for brain fog, focus issues, and cognitive decline.</p>
                    <span class="text-[#23bfe2] font-semibold inline-flex items-center gap-1 group-hover:gap-2 transition-all">Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Find the Right <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Treatment</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule a consultation with our team and discover a personalized treatment plan designed for your unique needs.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
                        <i data-lucide="arrow-up-right" class="w-6 h-6 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </span>
                </a>
                <a href="tel:9499965355" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors flex items-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

