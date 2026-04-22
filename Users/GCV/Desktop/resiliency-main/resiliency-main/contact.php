<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Contact Resiliency Mind Body Medicine" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Get In Touch</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Contact <span class="text-[#23bfe2] font-light">Us</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    We're here to help. Reach out to schedule an appointment, ask a question, or learn more about our services.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#contact-form" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Send a Message <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info + Form Section -->
    <section id="contact-form" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 lg:gap-20">

                <!-- Left Column - Contact Details -->
                <div class="w-full lg:w-5/12 reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Contact Information</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-[#0B2035] mb-8">Get in Touch</h3>

                    <div class="space-y-6 mb-10">
                        <!-- Phone -->
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="phone" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Main Line</p>
                                <a href="tel:+19499965355" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors">(949) 996-5355</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="mail" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Email</p>
                                <a href="mailto:info@resiliencymbmedicine.com" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors">info@resiliencymbmedicine.com</a>
                            </div>
                        </div>

                        <!-- Free Consultation -->
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="phone-call" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Consultation Line</p>
                                <a href="tel:+19497316976" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors">(949) 731-6976</a>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] flex-shrink-0">
                                <i data-lucide="clock" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-1">Office Hours</p>
                                <p class="text-[#0B2035] font-bold text-lg">Mon&ndash;Fri 9:00 AM &ndash; 5:00 PM</p>
                                <p class="text-gray-500 font-light text-sm">Saturday &ndash; Sunday Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div class="w-full lg:w-7/12 reveal reveal-delay-1">
                    <div class="bg-neutral rounded-[2rem] p-8 md:p-10 border border-gray-100 shadow-soft">
                        <h3 class="text-2xl font-bold text-[#0B2035] mb-2">Send Us a Message</h3>
                        <p class="text-gray-500 font-light mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>

                        <iframe
                            src="https://api.leadconnectorhq.com/widget/form/eqfimwhyHxljWdNlikHo"
                            style="width:100%;height:100%;border:none;border-radius:3px"
                            id="inline-eqfimwhyHxljWdNlikHo" 
                            data-layout="{'id':'INLINE'}"
                            data-trigger-type="alwaysShow"
                            data-trigger-value=""
                            data-activation-type="alwaysActivated"
                            data-activation-value=""
                            data-deactivation-type="neverDeactivate"
                            data-deactivation-value=""
                            data-form-name="New Website Form"
                            data-height="402"
                            data-layout-iframe-id="inline-eqfimwhyHxljWdNlikHo"
                            data-form-id="eqfimwhyHxljWdNlikHo"
                            title="New Website Form"
                        >
                        </iframe>
                        <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Locations Section -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                    <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Our Locations</h2>
                    <span class="h-[2px] w-8 bg-[#23bfe2]"></span>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-primary mb-6">Visit Us</h3>
                <p class="text-gray-600 text-lg font-light leading-relaxed">Two convenient Orange County locations to serve you.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Newport Beach -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 overflow-hidden reveal hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <h4 class="text-2xl font-bold text-primary">Newport Beach</h4>
                        </div>
                        <p class="text-gray-500 font-light leading-relaxed mb-2">1501 Superior Ave, Suite 210</p>
                        <p class="text-gray-500 font-light leading-relaxed mb-4">Newport Beach, CA 92663</p>
                        <a href="tel:+19499965355" class="inline-flex items-center gap-2 text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors text-sm">
                            <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                        </a>
                    </div>
                    <div class="px-4 pb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.5!2d-117.9314!3d33.6292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s1501+Superior+Ave+Suite+210+Newport+Beach+CA+92663!5e0!3m2!1sen!2sus!4v1700000000000" class="w-full h-64 rounded-xl border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- San Juan Capistrano -->
                <div class="bg-white rounded-[2rem] shadow-soft border border-gray-100 overflow-hidden reveal reveal-delay-1 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <h4 class="text-2xl font-bold text-primary">San Juan Capistrano</h4>
                        </div>
                        <p class="text-gray-500 font-light leading-relaxed mb-2">27184 Ortega Hwy, STE 103</p>
                        <p class="text-gray-500 font-light leading-relaxed mb-4">San Juan Capistrano, CA 92675</p>
                        <a href="tel:+19499965355" class="inline-flex items-center gap-2 text-[#23bfe2] font-semibold hover:text-[#0B2035] transition-colors text-sm">
                            <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                        </a>
                    </div>
                    <div class="px-4 pb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.5!2d-117.6628!3d33.5017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s27184+Ortega+Hwy+STE+103+San+Juan+Capistrano+CA+92675!5e0!3m2!1sen!2sus!4v1700000000000" class="w-full h-64 rounded-xl border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

