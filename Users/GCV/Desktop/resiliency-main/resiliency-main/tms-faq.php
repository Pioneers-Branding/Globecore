<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Deep TMS Therapy FAQ" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Patient Resources</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Deep TMS Therapy <span class="text-[#23bfe2] font-light">FAQ</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Detailed answers to frequently asked questions about Transcranial Magnetic Stimulation therapy.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#tms-faqs" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Browse FAQs <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="tms-faqs" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Category 1: About Deep TMS -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="brain" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">About Deep TMS</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What is Deep TMS?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Transcranial Magnetic Stimulation is a non-invasive technique using magnetic fields to stimulate nerve cells in the brain. It is FDA-cleared for depression, anxious depression, OCD, and nicotine dependence.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">How does Deep TMS work?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                A magnetic coil placed against the scalp delivers targeted pulses that stimulate underactive brain regions associated with mood regulation.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What conditions does Deep TMS treat?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Deep TMS is FDA-cleared for major depressive disorder, anxious depression, OCD, and smoking cessation. It is also showing promising results for PTSD, anxiety, bipolar depression, and substance use disorders.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 2: During Treatment -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="activity" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">During Treatment</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What does a session feel like?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                You sit comfortably while feeling a tapping sensation on your scalp. Sessions last about 20 minutes. You remain fully awake and alert throughout the entire treatment.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">Does Deep TMS hurt?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Deep TMS does not hurt. Most patients describe a mild tapping sensation. Any scalp discomfort typically subsides after the first week of treatment.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">Can I drive after treatment?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Yes. No sedation is required for Deep TMS therapy. You can drive and return to normal activities immediately after your session.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 3: Treatment Protocol -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="clipboard-list" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">Treatment Protocol</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">How many sessions will I need?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Standard protocol is 36 sessions over 6&ndash;8 weeks. Our Accelerated Deep TMS (SWIFT) protocol offers 30 sessions over just 6 days for rapid results.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">When will I feel results?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Many patients notice improvement within 2&ndash;3 weeks. Full benefits typically emerge by the end of the treatment course.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">Are results permanent?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Many patients experience sustained remission. Some may benefit from maintenance sessions. Results vary by individual.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 4: Insurance & Cost -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="credit-card" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">Insurance & Cost</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">Will insurance cover Deep TMS?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Most commercial insurers and Medicare cover Deep TMS for treatment-resistant depression. Our team handles verification and prior authorization on your behalf.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What are the requirements for insurance coverage?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Typically, insurance requires having tried and failed 2 antidepressant medications and having engaged in psychotherapy before approving Deep TMS coverage.
                            </div>
                        </div>
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
                Have More <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Questions?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Our team is here to answer any questions you have about Deep TMS therapy and help you determine if it's right for you.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Contact Our Team
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
                    icon.style.transform = 'rotate(45deg)';
                } else {
                    content.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>

<?php include 'footer.php'; ?>

