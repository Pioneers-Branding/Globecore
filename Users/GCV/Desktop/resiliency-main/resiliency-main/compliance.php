<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="No Surprises Act Compliance" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Patient Rights</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    No Surprises <span class="text-[#23bfe2] font-light">Act Compliance</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Your rights under the No Surprises Act&mdash;protection against unexpected medical bills.
                </p>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Overview</h2>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-6">About the No Surprises Act</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">
                    The No Surprises Act protects patients from unexpected out-of-network medical bills. At Resiliency Mind + Body Medicine, we are committed to transparent billing practices and compliance with all federal billing regulations.
                </p>
            </div>
        </div>
    </section>

    <!-- Your Rights Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Know Your Rights</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Your Rights</h3>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-soft border border-gray-100 p-6 reveal hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0 mt-1">
                            <i data-lucide="check-circle" class="w-6 h-6"></i>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg">You have the right to receive a <strong class="text-[#0B2035]">Good Faith Estimate</strong> of expected charges before scheduled services.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-soft border border-gray-100 p-6 reveal reveal-delay-1 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0 mt-1">
                            <i data-lucide="check-circle" class="w-6 h-6"></i>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg">You have the right to be <strong class="text-[#0B2035]">informed if any provider</strong> involved in your care is out-of-network.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-soft border border-gray-100 p-6 reveal reveal-delay-2 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0 mt-1">
                            <i data-lucide="check-circle" class="w-6 h-6"></i>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg">You have the right to <strong class="text-[#0B2035]">dispute bills</strong> that exceed your Good Faith Estimate by $400 or more.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-soft border border-gray-100 p-6 reveal reveal-delay-3 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0 mt-1">
                            <i data-lucide="check-circle" class="w-6 h-6"></i>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg">You have the right to receive <strong class="text-[#0B2035]">clear, upfront information</strong> about costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Request Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <div class="flex items-center gap-3 mb-4">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Good Faith Estimate</h2>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-6">How to Request a Good Faith Estimate</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed mb-8">
                    Contact our billing team at <a href="tel:+19499965355" class="text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors">(949) 996-5355</a> or <a href="mailto:info@resiliencymbmedicine.com" class="text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors">info@resiliencymbmedicine.com</a>. We will provide an estimate within the timeframes required by law.
                </p>
            </div>

            <div class="reveal">
                <div class="flex items-center gap-3 mb-4 mt-12">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Disputes</h2>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-6">Dispute Process</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">
                    If your final bill exceeds your Good Faith Estimate by $400 or more, you may initiate the patient-provider dispute resolution process. Visit <a href="https://www.cms.gov/nosurprises" target="_blank" rel="noopener noreferrer" class="text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors">cms.gov/nosurprises</a> for more information about your rights and the dispute resolution process.
                </p>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

