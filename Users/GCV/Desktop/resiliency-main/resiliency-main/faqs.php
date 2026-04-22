<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Frequently Asked Questions" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Patient Resources</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Frequently <span class="text-[#23bfe2] font-light">Asked Questions</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Find answers to common questions about our services, treatments, insurance, and what to expect at Resiliency.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#faqs" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Browse FAQs <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories Section -->
    <section id="faqs" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Category 1: General Questions -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="help-circle" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">General Questions</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What services does Resiliency offer?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                We offer Deep TMS therapy, Accelerated Deep TMS (SWIFT protocol), SPRAVATO (esketamine), conservative medication management, integrative psychiatry, IV vitamin therapy, NAD+ therapy, medical weight loss and more.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">Do you offer virtual appointments?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Yes! We offer secure telehealth appointments for psychiatric evaluations, medication management, and treatment planning. Some services like Deep TMS, SPRAVATO, and IV therapy require in-person visits.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">Where are you located?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                We have two locations: Newport Beach (1501 Superior Ave, Suite 210) and San Juan Capistrano (27184 Ortega Hwy, STE 103). Hours are Monday&ndash;Friday 9AM&ndash;5PM.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 2: Deep TMS Therapy -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="brain" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">Deep TMS Therapy</h2>
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
                                Transcranial Magnetic Stimulation is a non-invasive technique that uses magnetic fields to stimulate nerve cells in the brain. It's FDA-cleared for depression, anxious depression, and OCD.
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
                                Deep TMS is generally well-tolerated. Most patients describe a mild tapping sensation on the scalp. Any discomfort typically subsides after the first week of sessions.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">How many Deep TMS sessions will I need?</span>
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
                            <span class="text-[#0B2035]">Will insurance cover Deep TMS?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Most commercial insurers and Medicare cover Deep TMS for treatment-resistant depression. Our team handles verification and prior authorization.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 3: SPRAVATO -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="droplets" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">SPRAVATO</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What is SPRAVATO?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                SPRAVATO (esketamine) is an FDA-approved nasal spray for treatment-resistant depression. It works through different brain pathways than traditional antidepressants.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">How is SPRAVATO administered?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                SPRAVATO is self-administered as a nasal spray under medical supervision in our certified clinic. You'll be monitored for 2 hours after each session.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 4: Insurance & Billing -->
            <div class="mb-16 reveal">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                        <i data-lucide="credit-card" class="w-5 h-5"></i>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#0B2035]">Insurance & Billing</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What insurance do you accept?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                We accept Aetna, Anthem Blue Cross Blue Shield, Blue Shield of California, CalOptima, Cigna, Health Net, Hoag Medical Group, Magellan, MHN, Medicare, Optum, TriCare, TriWest, United Healthcare and others, please gives us a call to verify your benefits .
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">Do you offer payment plans?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                Yes. We offer Cherry payment plans for patients who need flexible financing options.
                            </div>
                        </div>
                    </div>

                    <div class="bg-neutral border border-gray-100 rounded-2xl overflow-hidden">
                        <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-lg flex items-center justify-between focus:outline-none hover:bg-gray-100 transition-colors group">
                            <span class="text-[#0B2035]">What if I have out-of-network insurance?</span>
                            <div class="w-10 h-10 rounded-full bg-[#23bfe2]/10 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors flex-shrink-0 ml-4">
                                <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="px-8 pb-8 text-gray-600 font-light leading-relaxed text-base hidden faq-content">
                            <div class="pt-2 border-t border-gray-200 mt-2">
                                We can provide superbills for out-of-network reimbursement. Contact our office for details on self-pay rates.
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
                Still Have <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Questions?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Our team is here to help. Reach out and we'll get back to you as soon as possible.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Contact Us
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

