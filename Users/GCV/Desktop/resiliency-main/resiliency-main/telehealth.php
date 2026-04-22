<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section
        class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/telehealth_hero.png" alt="Telehealth Appointments"
                class="w-full h-full object-cover object-[50%_70%]">
            <div
                class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Virtual
                        Care</span>
                </div>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Telehealth Appointments <span class="text-[#23bfe2] font-light">Across California</span>
                </h1>
                <p
                    class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Access high-quality psychiatric care from the comfort of your home, office, or anywhere with an
                    internet connection—secure, HIPAA-compliant video visits with our providers.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php"
                        class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule Your Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="#about"
                        class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer Virtually -->
    <section id="about" class="py-16 relative overflow-hidden bg-white">
        <!-- Decorative Background -->
        <div
            class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <!-- Content -->
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Virtual Psychiatric Care
                        </h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">What We Offer Virtually</h3>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Resiliency Mind + Body Medicine offers secure telehealth appointments for a range of psychiatric
                        services. Whether you're managing an ongoing condition, starting a new treatment plan, or
                        seeking a second opinion, our virtual visits provide the same personalized attention as our
                        in-office appointments—without the commute.
                    </p>

                    <div class="bg-neutral p-6 rounded-2xl mb-8 border border-gray-100">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">HIPAA-compliant, secure video
                                    platform</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Available for new and existing
                                    patients</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <div class="bg-[#23bfe2]/20 p-2 rounded-lg text-[#23bfe2]">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="text-[#0B2035] font-semibold text-base">Prescriptions sent directly to your
                                    pharmacy</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Badge -->
                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div
                        class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/telehealth_hero.png" alt="Telehealth virtual visit"
                            class="w-full h-[550px] object-cover">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent">
                        </div>
                    </div>

                    <!-- Floating Stat Badge -->
                    <div
                        class="absolute -bottom-8 -left-8 bg-white p-6 rounded-3xl border border-gray-100 shadow-[0_20px_40px_-10px_rgba(11,32,53,0.15)] flex items-center gap-5 group hover:-translate-y-2 transition-transform duration-500">
                        <div
                            class="w-16 h-16 bg-[#0B2035] rounded-2xl flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors duration-500">
                            <i data-lucide="lock" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-[#0B2035] tracking-tight">Secure</p>
                            <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-1">HIPAA Compliant
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Available via Telehealth -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <!-- Decorative Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Virtual Services</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Services Available via Telehealth</h3>
                <p class="text-gray-300 text-lg font-light leading-relaxed">
                    Access a wide range of psychiatric services from the comfort of your home.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1 -->
                <div
                    class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal text-center">
                    <div
                        class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="file-check-2" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Psychiatric Evaluations</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Comprehensive initial evaluations for new
                        patients including diagnostic assessment and treatment planning.</p>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal reveal-delay-1 text-center">
                    <div
                        class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="pill" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Medication Management</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Ongoing medication reviews, adjustments, and
                        refills for existing patients.</p>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal reveal-delay-2 text-center">
                    <div
                        class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Treatment Planning</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Collaborative treatment planning for integrative
                        psychiatry, including discussion of Deep TMS, SPRAVATO, and other in-person therapies.</p>
                </div>

                <!-- Service 4 -->
                <div
                    class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:bg-white/10 transition-colors reveal text-center">
                    <div
                        class="w-14 h-14 bg-[#23bfe2]/20 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-5 mx-auto">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-white font-bold text-lg mb-3">Follow-Up Visits</h4>
                    <p class="text-gray-400 font-light leading-relaxed">Regular check-ins to monitor progress, adjust
                        treatment, and provide ongoing support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- In-Person Only Services -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Important Note</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">In-Person Only Services</h3>
            </div>

            <div class="max-w-4xl mx-auto reveal">
                <div class="bg-white rounded-[2rem] p-10 shadow-soft border border-gray-100">
                    <div class="flex items-start gap-5">
                        <div
                            class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                            <i data-lucide="map-pin" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <p class="text-gray-600 text-lg font-light leading-relaxed mb-4">Some services require
                                in-person visits at our Newport Beach or San Juan Capistrano offices:</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2]">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-[#0B2035] font-medium text-sm">Deep TMS Therapy</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2]">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-[#0B2035] font-medium text-sm">Accelerated Deep TMS (SWIFT)</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2]">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-[#0B2035] font-medium text-sm">SPRAVATO Administration</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2]">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-[#0B2035] font-medium text-sm">IV Vitamin & NAD+ Therapy</span>
                                </div>
                                <!-- <div class="flex items-center gap-3">
                                    <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2]">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-[#0B2035] font-medium text-sm">Aesthetic Treatments</span>
                                </div> -->
                                <div class="flex items-center gap-3">
                                    <div class="bg-[#23bfe2]/20 p-1.5 rounded-lg text-[#23bfe2]">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-[#0B2035] font-medium text-sm">VNS Device Management</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Your Journey</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">How It Works</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">
                    Getting started with telehealth is simple and straightforward.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="relative reveal group">
                    <div
                        class="bg-neutral rounded-[2rem] p-8 border border-gray-100 hover:shadow-xl transition-all duration-300 h-full text-center">
                        <div
                            class="text-6xl font-bold text-[#23bfe2]/20 mb-4 group-hover:text-[#23bfe2]/40 transition-colors">
                            01</div>
                        <h4 class="text-xl font-bold text-[#0B2035] mb-3">Schedule</h4>
                        <p class="text-gray-500 font-light leading-relaxed text-sm">Book your telehealth appointment
                            online or by calling (949) 996-5355. Choose a time that works for your schedule.</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 text-[#23bfe2]/30">
                        <i data-lucide="chevron-right" class="w-8 h-8"></i>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative reveal reveal-delay-1 group">
                    <div
                        class="bg-neutral rounded-[2rem] p-8 border border-gray-100 hover:shadow-xl transition-all duration-300 h-full text-center">
                        <div
                            class="text-6xl font-bold text-[#23bfe2]/20 mb-4 group-hover:text-[#23bfe2]/40 transition-colors">
                            02</div>
                        <h4 class="text-xl font-bold text-[#0B2035] mb-3">Connect</h4>
                        <p class="text-gray-500 font-light leading-relaxed text-sm">You'll receive a secure video link
                            before your appointment. Join from any device with a camera, microphone, and internet
                            connection.</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 -right-4 text-[#23bfe2]/30">
                        <i data-lucide="chevron-right" class="w-8 h-8"></i>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative reveal reveal-delay-2 group">
                    <div
                        class="bg-neutral rounded-[2rem] p-8 border border-gray-100 hover:shadow-xl transition-all duration-300 h-full text-center">
                        <div
                            class="text-6xl font-bold text-[#23bfe2]/20 mb-4 group-hover:text-[#23bfe2]/40 transition-colors">
                            03</div>
                        <h4 class="text-xl font-bold text-[#0B2035] mb-3">Receive Care</h4>
                        <p class="text-gray-500 font-light leading-relaxed text-sm">Meet with your provider for a
                            thorough virtual visit. Prescriptions and referrals are sent electronically.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-1/2 left-0 w-64 h-64 bg-[#23bfe2]/5 rounded-full blur-3xl -z-10 -translate-x-1/2">
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
                    <button
                        class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>What do I need for a telehealth visit?</span>
                        <div
                            class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            A device with a camera and microphone (smartphone, tablet, or computer), a stable internet
                            connection, and a private, quiet location.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button
                        class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Can I get prescriptions via telehealth?</span>
                        <div
                            class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes. Your provider can send prescriptions electronically to any pharmacy, including
                            controlled substances when clinically appropriate.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button
                        class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Is telehealth covered by insurance?</span>
                        <div
                            class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes. Most insurance plans cover telehealth psychiatric visits at the same rate as in-person
                            visits. Our team verifies your benefits before your appointment.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="#contact"
                        class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact
                        our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div
            class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent">
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Schedule Your <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Consultation</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule a secure telehealth appointment with our team and receive expert psychiatric care from wherever
                you are.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php"
                    class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
                        <i data-lucide="arrow-up-right"
                            class="w-6 h-6 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </span>
                </a>
                <a href="tel:+19499965355"
                    class="inline-flex items-center gap-2 text-[#0B2035] font-bold hover:text-[#23bfe2] transition-colors text-lg">
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