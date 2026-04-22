<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="CalOptima Coverage" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Insurance Coverage</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    CalOptima <span class="text-[#23bfe2] font-light">Coverage</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Resiliency Mind + Body Medicine is proud to accept CalOptima Health insurance for mental health services in Orange County.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Verify Your Benefits <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#coverage" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About CalOptima Coverage - White BG -->
    <section id="coverage" class="py-16 relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Insurance</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">About CalOptima Coverage</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Resiliency Mind + Body Medicine is in-network with CalOptima Health, Orange County's public health insurance plan. CalOptima members can access our psychiatric services including comprehensive evaluations, medication management, and select advanced treatments. Our team handles all benefits verification and prior authorization to ensure a smooth experience.
                    </p>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/hero_bg.png" alt="CalOptima coverage at Resiliency" class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>

                    <!-- Floating Stat Badge -->
                    <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl border border-gray-100 shadow-[0_20px_40px_-10px_rgba(11,32,53,0.15)] flex items-center gap-5 group hover:-translate-y-2 transition-transform duration-500">
                        <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-500">
                            <i data-lucide="shield-check" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-[#0B2035] tracking-tight">In</p>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">Network</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Covered Services - Dark BG -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">What's Covered</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Covered Services</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="pill" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Psychiatric Evaluations</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Comprehensive initial assessments and diagnostic evaluations.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="file-check-2" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Medication Management</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Ongoing medication management and follow-up visits.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Deep TMS Therapy</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Deep TMS with prior authorization for qualifying conditions.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="droplets" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">SPRAVATO</h4>
                    <p class="text-gray-400 font-light text-sm leading-relaxed">Esketamine treatment with prior authorization for treatment-resistant depression.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Get Started - Light BG -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Getting Started</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">How to Get Started</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4">01</div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Verify Benefits</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Call us at (949) 996-5355 or provide your CalOptima member ID. Our team verifies your coverage and benefits.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4">02</div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Prior Authorization</h4>
                    <p class="text-gray-500 font-light leading-relaxed">For Deep TMS and SPRAVATO, we handle the entire prior authorization process with CalOptima on your behalf.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="text-6xl font-bold text-[#23bfe2]/20 mb-4">03</div>
                    <h4 class="text-2xl font-bold text-primary mb-4">Schedule Your Visit</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Once benefits are confirmed, we schedule your initial appointment at our Newport Beach or San Juan Capistrano office.</p>
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
                        <span>What CalOptima plans do you accept?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            We accept CalOptima Health plans for psychiatric and behavioral health services. Contact our office to verify your specific plan and benefits.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Do I need a referral?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Referral requirements depend on your specific CalOptima plan. Our team can help determine if a referral is needed.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is Deep TMS covered under CalOptima?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Deep TMS may be covered with prior authorization for qualifying diagnoses. Our team manages the entire authorization process.
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
    <section id="consultation" class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Use Your CalOptima Benefits?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Let our team verify your CalOptima coverage and schedule your first appointment today.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Verify Your CalOptima Benefits
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

