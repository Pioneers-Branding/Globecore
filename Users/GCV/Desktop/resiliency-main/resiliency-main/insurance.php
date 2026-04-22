<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Insurance and Payment Options" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Patient Resources</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Insurance & <span class="text-[#23bfe2] font-light">Payment Options</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    We're in-network with most major insurance providers and offer flexible payment options to make care accessible.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Verify My Insurance <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> Call Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Accepted Insurance Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Accepted Plans</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Insurance We Accept</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">We're in-network with the following insurance providers. Our team verifies your benefits before your first visit.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 reveal">
                <!-- Aetna -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/aetna.webp" alt="Aetna" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Aetna</p>
                </div>
                <!-- Anthem Blue Cross Blue Shield -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/anthem.webp" alt="Anthem Blue Cross Blue Shield" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Anthem BCBS</p>
                </div>
                <!-- Blue Shield of California -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/blue-california.webp" alt="Blue Shield of California" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Blue Shield of CA</p>
                </div>
                <!-- CalOptima Health -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/caloptima.svg" alt="CalOptima Health" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">CalOptima Health</p>
                </div>
                <!-- Cigna -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/cigna.webp" alt="Cigna Healthcare" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Cigna Healthcare</p>
                </div>
                <!-- Health Net -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/health-net.png" alt="Health Net" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Health Net</p>
                </div>
                <!-- Hoag Medical Group -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/hoag.jpeg" alt="Hoag Medical Group" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Hoag Medical Group</p>
                </div>
                <!-- Magellan Health -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/magellan.webp" alt="Magellan Health" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Magellan Health</p>
                </div>
                <!-- Medicare -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/medicare.webp" alt="Medicare" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Medicare</p>
                </div>
                <!-- MHN -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/mhn.jpeg" alt="MHN - Managed Health Network" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">MHN</p>
                </div>
                <!-- Optum -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/optum.webp" alt="Optum" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">Optum</p>
                </div>
                <!-- SCAN -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/scan.png" alt="SCAN Health Plan" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">SCAN Health Plan</p>
                </div>
                <!-- TriCare -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/tricare.webp" alt="TriCare" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">TriCare</p>
                </div>
                <!-- TriWest Healthcare Alliance -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <img src="assets/images/insurance/triwest.png" alt="TriWest Healthcare Alliance" class="max-h-16 w-auto object-contain mb-3">
                    <p class="text-[#0B2035] font-semibold text-xs">TriWest</p>
                </div>
                <!-- United Healthcare -->
                <div class="bg-white rounded-2xl p-6 shadow-soft border border-gray-100 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center min-h-[140px]">
                    <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-3">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <p class="text-[#0B2035] font-semibold text-xs">United Healthcare</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What's Covered Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Coverage Details</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">What's Typically Covered</h3>
                <p class="text-gray-300 text-lg font-light leading-relaxed">Most of our core psychiatric services are covered by in-network insurance plans.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-10 hover:bg-white/10 transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-white mb-4">Deep TMS Therapy</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Covered by most commercial insurers and Medicare for treatment-resistant depression and OCD. We handle prior authorization.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-10 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="droplets" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-white mb-4">SPRAVATO</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Covered by many plans for treatment-resistant depression. Requires prior authorization, which our team manages.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-10 hover:bg-white/10 transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="pill" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-white mb-4">Psychiatry Visits</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Psychiatric evaluations and medication management visits are covered by most plans with standard copays.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Self-Pay & Payment Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Flexible Options</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Self-Pay & Payment Plans</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        For services not covered by insurance&mdash;including IV therapy, aesthetics, supplements, and weight loss medications&mdash;we offer competitive self-pay rates. Cherry payment plans are available for flexible financing. Contact our team for current pricing.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                            <div class="bg-[#23bfe2]/10 p-3 rounded-lg text-[#23bfe2]">
                                <i data-lucide="dollar-sign" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-[#0B2035] font-bold">Competitive Self-Pay Rates</h4>
                                <p class="text-gray-500 text-sm font-light">Transparent pricing for cash-pay patients</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                            <div class="bg-[#23bfe2]/10 p-3 rounded-lg text-[#23bfe2]">
                                <i data-lucide="credit-card" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-[#0B2035] font-bold">Cherry Payment Plans</h4>
                                <p class="text-gray-500 text-sm font-light">Split your costs into manageable monthly payments</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 bg-white rounded-xl p-5 border border-gray-100 shadow-soft">
                            <div class="bg-[#23bfe2]/10 p-3 rounded-lg text-[#23bfe2]">
                                <i data-lucide="file-text" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-[#0B2035] font-bold">Superbills for Out-of-Network</h4>
                                <p class="text-gray-500 text-sm font-light">Submit to your insurer for potential reimbursement</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process Steps -->
                <div class="w-full lg:w-1/2 reveal reveal-delay-1">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">How It Works</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-10">Our Insurance Process</h3>

                    <div class="space-y-8">
                        <!-- Step 1 -->
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <span class="text-2xl font-bold">01</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-[#0B2035] mb-2">Benefits Verification</h4>
                                <p class="text-gray-500 font-light leading-relaxed">Before your first visit, our team verifies your insurance benefits so you know exactly what's covered.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <span class="text-2xl font-bold">02</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-[#0B2035] mb-2">Prior Authorization</h4>
                                <p class="text-gray-500 font-light leading-relaxed">For Deep TMS, SPRAVATO, and other procedures, we handle the entire prior authorization process with your insurer.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <span class="text-2xl font-bold">03</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-[#0B2035] mb-2">Transparent Billing</h4>
                                <p class="text-gray-500 font-light leading-relaxed">No surprise bills. We discuss any expected costs before treatment begins.</p>
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
                Questions About <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Coverage?</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Our team is happy to verify your insurance benefits and explain your coverage options. Call us today.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="tel:+19499965355" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        <i data-lucide="phone" class="w-6 h-6"></i>
                        Call : (949) 996-5355
                    </span>
                </a>
                <a href="contact.php" class="inline-flex items-center gap-2 text-[#0B2035] font-bold hover:text-[#23bfe2] transition-colors text-lg">
                    Contact Online <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

