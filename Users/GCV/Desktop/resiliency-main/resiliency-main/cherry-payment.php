<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Cherry Payment Plans" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Flexible Financing</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Cherry <span class="text-[#23bfe2] font-light">Payment Plans</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Flexible payment plans through Cherry to make your care affordable&mdash;apply in seconds with no impact to your credit score.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#how-it-works" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Learn More <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Simple Process</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">How It Works</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="text-center reveal">
                    <div class="w-20 h-20 bg-[#23bfe2]/10 rounded-full flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <span class="text-3xl font-bold">1</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Apply in Seconds</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Quick application with no hard credit check. Get approved in minutes.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center reveal reveal-delay-1">
                    <div class="w-20 h-20 bg-[#23bfe2]/10 rounded-full flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <span class="text-3xl font-bold">2</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Choose Your Plan</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Select a payment plan that fits your budget with competitive rates.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center reveal reveal-delay-2">
                    <div class="w-20 h-20 bg-[#23bfe2]/10 rounded-full flex items-center justify-center text-[#23bfe2] mx-auto mb-6">
                        <span class="text-3xl font-bold">3</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Start Treatment</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Begin your care immediately while making affordable monthly payments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cherry Widget Embed (hidden until merchant ID is available) -->
    <section class="py-16 bg-neutral relative overflow-hidden hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Payment Calculator</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">See What You Could Pay</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Use Cherry's calculator to estimate your monthly payments. Apply in 60 seconds with no impact to your credit score.</p>
            </div>
            <div class="reveal">
                <div id="cherry-widget-container" class="rounded-2xl overflow-hidden shadow-soft border border-gray-100"></div>
                <script src="https://cdn.withcherry.com/widgets/widget.js" defer></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        if (typeof CherryWidget !== 'undefined') {
                            new CherryWidget({
                                container: '#cherry-widget-container',
                                merchantId: 'REPLACE_WITH_MERCHANT_ID'
                            });
                        }
                    });
                </script>
            </div>
        </div>
    </section>

    <!-- What You Can Finance Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Eligible Services</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">What You Can Finance</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Aesthetic Treatments</h4>
                    <p class="text-gray-400 font-light mt-2">Botox, fillers, Sculptra</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-1 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="droplets" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">IV Vitamin Therapy</h4>
                    <p class="text-gray-400 font-light mt-2">Revitalize with IV infusions</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-2 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="zap" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">NAD+ Therapy</h4>
                    <p class="text-gray-400 font-light mt-2">Cellular renewal treatments</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="scale" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Medical Weight Loss</h4>
                    <p class="text-gray-400 font-light mt-2">Physician-guided programs</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-1 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="pill" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Supplements</h4>
                    <p class="text-gray-400 font-light mt-2">Professional-grade supplements</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 reveal reveal-delay-2 hover:-translate-y-2 hover:bg-white/10 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] mb-4 mx-auto">
                        <i data-lucide="heart-handshake" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-lg font-bold text-white">Other Self-Pay Services</h4>
                    <p class="text-gray-400 font-light mt-2">Additional eligible treatments</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Cherry Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Why Cherry</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Treat Now, Pay Later</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Cherry is a buy now, pay later solution making it fast and easy to pay for health and wellness treatments over time.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-soft hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="shield-check" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-[#0B2035] mb-2">No Hard Credit Check</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Applying won't affect your credit score. Quick soft check with instant decision.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-soft hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="calendar" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-[#0B2035] mb-2">Flexible Plans (3&ndash;24 Months)</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Choose a repayment term that fits your budget with low monthly payments.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-soft hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="percent" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-[#0B2035] mb-2">True 0% APR Available</h4>
                    <p class="text-gray-500 font-light leading-relaxed">0% APR promotional options available. Interest-bearing plans start as low as 5.99% APR.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-soft hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="smartphone" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-[#0B2035] mb-2">60 Seconds to Apply</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Simple mobile-friendly application takes just 60 seconds. Get approved instantly from your phone.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-soft hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="repeat" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-[#0B2035] mb-2">Up to $50,000 Approvals</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Generous credit limits up to $50,000. Use your approval for multiple treatments at Resiliency.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-soft hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="ban" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-lg font-bold text-[#0B2035] mb-2">No Hidden Fees</h4>
                    <p class="text-gray-500 font-light leading-relaxed">No prepayment penalties, no hidden charges. Transparent terms you can trust.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Is Cherry For Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <div class="w-full lg:w-1/2 reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Is Cherry Right for You?</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-6">Don't Let Cost Stand Between You and Better Health</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        Many of our most effective treatments&mdash;including aesthetic services, IV therapy, supplements, and medical weight loss&mdash;are self-pay. Cherry bridges the gap so you can access the care you need today and pay over time.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Whether you're investing in a cosmetic procedure, starting a wellness protocol, or combining multiple services, Cherry gives you the flexibility to move forward without delay.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[#0B2035] font-semibold">Must be 18+ years old</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[#0B2035] font-semibold">Valid U.S. bank account required</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[#0B2035] font-semibold">Social Security Number for verification</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="text-[#0B2035] font-semibold">Available for self-pay services only</span>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/hero_bg.png" alt="Cherry Payment Plans at Resiliency" class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-[#0B2035] text-white relative border-t-[8px] border-[#23bfe2]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Common Questions</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Cherry Payment FAQ</h3>
            </div>

            <div class="space-y-4 reveal">
                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition-colors">
                        <span class="font-bold text-lg pr-4">Will applying affect my credit score?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-[#23bfe2] flex-shrink-0 faq-icon transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-300 font-light leading-relaxed">No. Cherry uses a soft credit check that does not impact your credit score. You can apply with confidence knowing there's no risk to your credit.</p>
                    </div>
                </div>

                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition-colors">
                        <span class="font-bold text-lg pr-4">How quickly will I know if I'm approved?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-[#23bfe2] flex-shrink-0 faq-icon transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-300 font-light leading-relaxed">Approval is instant. You'll receive a decision within seconds of completing the short application on your phone.</p>
                    </div>
                </div>

                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition-colors">
                        <span class="font-bold text-lg pr-4">What treatments can I finance with Cherry?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-[#23bfe2] flex-shrink-0 faq-icon transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-300 font-light leading-relaxed">Cherry can be used for any self-pay service at Resiliency, including aesthetic treatments (Botox, fillers, Sculptra, SKINVIVE), IV vitamin therapy, NAD+ therapy, medical weight loss, supplements, microneedling, and other wellness services.</p>
                    </div>
                </div>

                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition-colors">
                        <span class="font-bold text-lg pr-4">Can I use Cherry for insurance-covered treatments?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-[#23bfe2] flex-shrink-0 faq-icon transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-300 font-light leading-relaxed">Cherry is available for self-pay services only. Insurance-covered treatments like Deep TMS and SPRAVATO are billed through your insurance provider. However, Cherry can be used for copays or deductibles when applicable.</p>
                    </div>
                </div>

                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition-colors">
                        <span class="font-bold text-lg pr-4">Is there a minimum or maximum amount I can finance?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-[#23bfe2] flex-shrink-0 faq-icon transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-300 font-light leading-relaxed">Cherry offers financing starting from $200 with approvals up to $50,000. Your approved credit limit will be determined based on your application. For example, a $400 payment plan may cost $100/month over 3 months at 0% APR.</p>
                    </div>
                </div>

                <div class="border border-white/10 rounded-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition-colors">
                        <span class="font-bold text-lg pr-4">Can I pay off my plan early?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-[#23bfe2] flex-shrink-0 faq-icon transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-gray-300 font-light leading-relaxed">Yes. There are no prepayment penalties with Cherry. You can pay off your balance early at any time without additional fees.</p>
                    </div>
                </div>
            </div>

            <!-- Legal Disclaimer -->
            <div class="mt-12 reveal">
                <p class="text-gray-500 text-xs leading-relaxed">
                    0% APR and other promotional rates subject to eligibility. Exact terms and APR depend on credit score and other factors. For example, a $400 payment plan with Cherry may cost $100/month over 3 months at 0% APR with down payment in the amount of monthly payment due at the time of purchase. Not every provider that uses Cherry will offer the payment plan terms listed above. Payment options through Cherry Technologies, Inc. are issued by their lending partners. See <a href="https://withcherry.com/terms" target="_blank" rel="noopener" class="text-[#23bfe2] hover:text-white transition-colors">withcherry.com/terms</a> for details. Copyright &copy; 2020&ndash;2026 Cherry Technologies Inc. NMLS #2061234.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Get Started?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Ask our team about Cherry financing at your next visit or call us to learn more. Affordable care is just a conversation away.
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

