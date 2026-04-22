<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Our Clinical Outcomes" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Clinical Excellence</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Our <span class="text-[#23bfe2] font-light">Outcomes</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Transparent, data-driven results—real clinical outcomes from thousands of treatments at Resiliency Mind + Body Medicine.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Book a Discovery Call <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#metrics" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        View Our Data
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview - White BG -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center reveal">
                <div class="flex items-center gap-3 mb-4 justify-center">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Commitment</h2>
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-6">Data-Driven Care</h3>
                <p class="text-gray-600 text-lg leading-relaxed font-light">
                    At Resiliency, we believe in transparency and accountability. Our clinical outcomes reflect our commitment to evidence-based treatment and patient-centered care. With over 7,000 treatments completed, our data speaks to the effectiveness of our approach.
                </p>
            </div>
        </div>
    </section>

    <!-- Key Metrics - Dark BG -->
    <section id="metrics" class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">By the Numbers</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Key Metrics</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Stat 1 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-10 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <p class="text-5xl md:text-6xl font-bold text-[#23bfe2] mb-3">7,000+</p>
                    <h4 class="text-xl font-bold text-white mb-2">Treatments Completed</h4>
                    <p class="text-gray-300 font-light text-sm leading-relaxed">Deep TMS, SPRAVATO, and interventional psychiatry treatments delivered.</p>
                </div>

                <!-- Stat 2 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-10 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <p class="text-5xl md:text-6xl font-bold text-[#23bfe2] mb-3">80%</p>
                    <h4 class="text-xl font-bold text-white mb-2">Clinic Response Rate</h4>
                    <p class="text-gray-300 font-light text-sm leading-relaxed">Patient response rate for Deep TMS and SPRAVATO combined.</p>
                </div>

                <!-- Stat 3 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-10 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <p class="text-5xl md:text-6xl font-bold text-[#23bfe2] mb-3">4.9/5</p>
                    <h4 class="text-xl font-bold text-white mb-2">Patient Rating</h4>
                    <p class="text-gray-300 font-light text-sm leading-relaxed">Average patient satisfaction rating on Google Reviews.</p>
                </div>

                <!-- Stat 4 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-10 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <p class="text-5xl md:text-6xl font-bold text-[#23bfe2] mb-3">87.8%</p>
                    <h4 class="text-xl font-bold text-white mb-2">SWIFT Response Rate</h4>
                    <p class="text-gray-300 font-light text-sm leading-relaxed">Hamilton Depression Rating Scale response rate for Accelerated Deep TMS protocol.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Outcomes - Light BG -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">More Results</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Additional Outcomes</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <p class="text-4xl font-bold text-[#23bfe2] mb-3">78%</p>
                    <h4 class="text-xl font-bold text-primary mb-4">Remission Rate</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Hamilton Depression Rating Scale remission rate for the SWIFT Accelerated Deep TMS protocol.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <p class="text-4xl font-bold text-[#23bfe2] mb-3">32-Point</p>
                    <h4 class="text-xl font-bold text-primary mb-4">QoL Improvement</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Average quality-of-life score improvement from baseline with Deep TMS treatment.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <p class="text-4xl font-bold text-[#23bfe2] mb-3">70%</p>
                    <h4 class="text-xl font-bold text-primary mb-4">Fewer Visits</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Accelerated Deep TMS reduces clinic visits by 70% compared to standard Deep TMS protocol.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology Note - White BG -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-neutral rounded-[2rem] p-10 border border-gray-100 shadow-soft reveal">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-[#23bfe2]/10 p-3 rounded-xl text-[#23bfe2]">
                        <i data-lucide="clipboard-check" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035]">Our Methodology</h4>
                </div>
                <p class="text-gray-600 text-lg leading-relaxed font-light">
                    Our outcomes are tracked using validated clinical instruments including the PHQ-9, GAD-7, Hamilton Depression Rating Scale, and Yale-Brown Obsessive Compulsive Scale. Data reflects real-world clinical practice at our Newport Beach and San Juan Capistrano locations.
                </p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section id="consultation" class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Experience These Results?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule Your Consultation and learn how our evidence-based treatments can help you achieve lasting improvement.
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

