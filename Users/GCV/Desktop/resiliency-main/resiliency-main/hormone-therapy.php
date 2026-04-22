<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hormone_therapy_hero.png" alt="Hormone Therapy" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Integrative Wellness</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Hormone Therapy <span class="text-[#23bfe2] font-light">in Newport Beach & San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Comprehensive hormone and metabolic assessment with evidence-based hormone replacement therapy to address mood, energy, cognition, and overall vitality.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule Your Assessment <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#about" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer -->
    <section id="about" class="py-16 relative overflow-hidden bg-white">
        <!-- Decorative Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Hormone Optimization</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">What We Offer</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Hormonal imbalances can profoundly affect mood, energy, cognition, sleep, and overall quality of life. At Resiliency, our providers conduct thorough hormone and metabolic assessments to identify deficiencies and imbalances that may be contributing to psychiatric symptoms. When indicated, we offer evidence-based hormone replacement and optimization as part of our integrative approach to mental and physical wellness.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Comprehensive lab panels (thyroid, cortisol, testosterone, estrogen, progesterone)</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Evidence-based hormone replacement therapy</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Integrated with psychiatric treatment for whole-person care</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Video Container -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1 flex justify-center lg:justify-end pr-0 lg:pr-8">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5 w-full max-w-[366px] aspect-[9/16]">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/la12CKPx_uI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hormones We Assess -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Comprehensive Assessment</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Hormones We Assess</h3>
                <p class="text-gray-300 text-lg font-light leading-relaxed">
                    We evaluate key hormonal systems that directly impact mental health and overall wellness.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Hormone 1 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Thyroid (TSH, T3, T4)</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Thyroid dysfunction is a leading cause of depression, anxiety, brain fog, and fatigue. We screen and optimize thyroid function.</p>
                </div>

                <!-- Hormone 2 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal reveal-delay-1 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="zap" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Testosterone</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Low testosterone in both men and women can cause depression, low energy, cognitive decline, and reduced motivation.</p>
                </div>

                <!-- Hormone 3 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal reveal-delay-2 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Estrogen & Progesterone</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Hormonal fluctuations during perimenopause, menopause, and postpartum periods significantly impact mood and cognition.</p>
                </div>

                <!-- Hormone 4 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Cortisol & Adrenal</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Chronic stress dysregulates cortisol production, contributing to anxiety, insomnia, fatigue, and mood instability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Benefits -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Who Benefits</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Is Hormone Therapy Right for You?</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Hormone optimization can benefit patients experiencing a range of symptoms related to hormonal imbalances.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Benefit 1 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="user" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Low Testosterone</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Men experiencing low testosterone symptoms.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart-pulse" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Perimenopause & Menopause</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Women navigating perimenopause or menopause.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="shield-alert" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Treatment-Resistant Symptoms</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Patients with depression or anxiety resistant to standard treatment.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="battery-low" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-primary mb-2">Fatigue & Brain Fog</h4>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">Anyone with persistent fatigue, brain fog, or low motivation.</p>
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
                        <span>How do you test hormone levels?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            We order comprehensive lab panels including thyroid function, sex hormones, cortisol, DHEA, and metabolic markers. Results guide personalized treatment recommendations.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is hormone therapy safe?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            When prescribed by experienced providers and monitored with regular lab work, hormone replacement therapy has a well-established safety and efficacy profile. We use bioidentical hormones when appropriate.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Will this replace my psychiatric medication?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Hormone optimization complements psychiatric treatment—it doesn't replace it. Correcting hormonal imbalances often improves response to psychiatric medications and may allow dose reductions over time.
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
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Schedule Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Hormone Assessment</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Discover how hormone optimization can improve your mood, energy, cognition, and overall quality of life as part of a comprehensive treatment plan.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Hormone Assessment
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

