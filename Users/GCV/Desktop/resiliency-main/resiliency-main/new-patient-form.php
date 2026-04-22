<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="New Patient Forms" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">New Patients</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Patient <span class="text-[#23bfe2] font-light">Intake Forms</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Complete your new patient forms online before your first visit to ensure a smooth, efficient appointment experience.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#forms" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        View Forms <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Welcome</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-6">Welcome to Resiliency Mind + Body Medicine</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">
                    Welcome to Resiliency Mind + Body Medicine! To ensure we make the most of your first appointment, please complete the following intake forms prior to your visit. If you have questions, contact us at <a href="tel:+19499965355" class="text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors">(949) 996-5355</a>.
                </p>
            </div>
        </div>
    </section>

    <!-- New Patient Form Section -->
    <section id="forms" class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">New Patient Inquiry</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Complete Your Intake Form</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed mb-10 max-w-2xl mx-auto">Click the button below to access and complete the new patient inquiry form. This single form covers all the information we need for your first visit.</p>

                <a href="https://intakeq.com/new/exzmni/hitbhg" target="_blank" rel="noopener" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-12 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl text-lg">
                    <span class="flex items-center gap-3">
                        <i data-lucide="file-text" class="w-6 h-6"></i>
                        New Patient Inquiry Form
                        <i data-lucide="external-link" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- What to Bring Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto reveal">
                <div class="text-center mb-12">
                    <div class="flex items-center justify-center gap-3 mb-4">
                        <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Be Prepared</h2>
                        <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-6">What to Bring</h3>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center gap-4 bg-neutral rounded-xl p-5 border border-gray-100">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <p class="text-[#0B2035] font-medium">Valid photo ID</p>
                    </div>
                    <div class="flex items-center gap-4 bg-neutral rounded-xl p-5 border border-gray-100">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <p class="text-[#0B2035] font-medium">Insurance card (front and back)</p>
                    </div>
                    <div class="flex items-center gap-4 bg-neutral rounded-xl p-5 border border-gray-100">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <p class="text-[#0B2035] font-medium">List of current medications</p>
                    </div>
                    <div class="flex items-center gap-4 bg-neutral rounded-xl p-5 border border-gray-100">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <p class="text-[#0B2035] font-medium">Prior medical records (if available)</p>
                    </div>
                    <div class="flex items-center gap-4 bg-neutral rounded-xl p-5 border border-gray-100">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <p class="text-[#0B2035] font-medium">Payment method for copay</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Questions?</h2>
            <p class="text-gray-300 text-lg font-light mb-8 max-w-2xl mx-auto">We're here to help you prepare for your first visit.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+19499965355" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i> Call (949) 996-5355
                </a>
                <a href="mailto:info@resiliencymbmedicine.com" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                    <i data-lucide="mail" class="w-5 h-5"></i> info@resiliencymbmedicine.com
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

