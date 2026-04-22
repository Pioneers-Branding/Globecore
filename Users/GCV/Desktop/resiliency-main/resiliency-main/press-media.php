<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Press and Media" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">In The News</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Press & <span class="text-[#23bfe2] font-light">Media</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Resiliency Mind + Body Medicine in the news&mdash;media coverage, press mentions, and Dr. LaFrenierre's expert commentary on mental health topics.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#press" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        View Coverage <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Section -->
    <section id="press" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-6">
                    Media <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Coverage</span>
                </h2>
                <p class="text-lg text-gray-600 font-light max-w-2xl mx-auto leading-relaxed">
                    Recent press mentions and media features highlighting our work in interventional psychiatry.
                </p>
            </div>

            <!-- Featured Videos -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16 reveal">
                <div class="bg-[#0B2035] rounded-[2rem] overflow-hidden shadow-2xl">
                    <div class="relative w-full" style="padding-bottom:56.25%">
                        <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/V-DMSVf6jGQ" title="Resiliency Mind+Body Medicine" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="bg-[#0B2035] rounded-[2rem] overflow-hidden shadow-2xl">
                    <div class="relative w-full" style="padding-bottom:56.25%">
                        <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/qrHM1le9qr4" title="Resiliency Mind+Body Medicine - Media Feature" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal">
                <!-- Press Card - SDVoyager -->
                <a href="https://sdvoyager.com/interview/meet-dr-stefani-lafrenierre-of-resiliency-mindbody-medicine/" target="_blank" rel="noopener" class="bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 block group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="newspaper" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-light">Magazine Feature</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">SDVoyager: Meet Dr. Stefani LaFrenierre</h3>
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Dr. LaFrenierre featured in SDVoyager's interview series, sharing her inspiring journey of building Resiliency Mind+Body Medicine and her vision for integrative, physician-led mental health care.
                    </p>
                    <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        <span>Read Interview</span>
                    </div>
                </a>

                <!-- Press Card - SoMeDocs -->
                <a href="https://doctorsonsocialmedia.com/stefani-lafrenierre-md/" target="_blank" rel="noopener" class="bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 block group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="mic" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-light">Profile Feature</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">SoMeDocs: Doctors on Social Media</h3>
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Dr. Stefani LaFrenierre featured as a physician leader on SoMeDocs, highlighting her work in integrative psychiatry, addiction medicine, and patient empowerment through social media.
                    </p>
                    <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        <span>Read Feature</span>
                    </div>
                </a>

                <!-- Press Card 2 - BrainsWay Ultra Provider -->
                <div class="bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="award" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-light">Recognition</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">BrainsWay Ultra Provider</h3>
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Resiliency Mind + Body Medicine recognized as a BrainsWay Ultra Provider&mdash;the highest tier designation for Deep TMS treatment volume, clinical excellence, and 85% depression remission rates.
                    </p>
                    <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm">
                        <i data-lucide="trophy" class="w-4 h-4"></i>
                        <span>Highest Tier Designation</span>
                    </div>
                </div>

                <!-- Press Card 3 - Instagram Reel Medicine -->
                <a href="https://www.instagram.com/p/C9fZAf6ve5f/" target="_blank" rel="noopener" class="bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 block group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="video" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-light">Social Media</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">Reel Medicine Media Feature</h3>
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Dr. LaFrenierre welcomed Reel Medicine Media to Resiliency Mind+Body Medicine, sharing insights on Deep TMS therapy and integrative psychiatric care in Orange County.
                    </p>
                    <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        <span>Watch on Instagram</span>
                    </div>
                </a>

                <!-- Press Card 4 - Advancing Deep TMS -->
                <div class="bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="brain" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-light">Clinical Research</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Multi-Site Deep TMS Research Involvement</h3>
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Dr. LaFrenierre is a leader in the developing field of Transcranial Magnetic Stimulation with involvement in multi-site Deep TMS studies and on-site advancement of specialized Deep TMS PTSD protocols.
                    </p>
                    <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm">
                        <i data-lucide="flask-conical" class="w-4 h-4"></i>
                        <span>Clinical Research</span>
                    </div>
                </div>

                <!-- Press Card 5 - LinkedIn Thought Leadership -->
                <a href="https://www.linkedin.com/in/stefanilafrenierre/" target="_blank" rel="noopener" class="bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 block group">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="pen-tool" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-light">Thought Leadership</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors">LinkedIn: Expert Commentary</h3>
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Dr. LaFrenierre regularly shares insights on psilocybin research, supplements for mental health, and the latest developments in integrative psychiatry.
                    </p>
                    <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        <span>View on LinkedIn</span>
                    </div>
                </a>

                <!-- Press Card 6 - Harvard Fellowship -->
                <div class="bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 lg:col-start-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#23bfe2]/10 rounded-xl flex items-center justify-center text-[#23bfe2]">
                            <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-gray-400 font-light">Academic Recognition</span>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B2035] mb-3">Harvard Program in Refugee Trauma</h3>
                    <p class="text-gray-600 font-light leading-relaxed mb-6">
                        Dr. LaFrenierre completed a fellowship through the Harvard Program in Refugee Trauma with certification in Global Mental Health, Trauma and Recovery, and was awarded the SAMHSA Minority Fellowship.
                    </p>
                    <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm">
                        <i data-lucide="award" class="w-4 h-4"></i>
                        <span>SAMHSA Fellowship Recipient</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Inquiries Section -->
    <section class="py-20 bg-[#0B2035] relative overflow-hidden">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#23bfe2]/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
            <div class="w-16 h-16 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mx-auto mb-8">
                <i data-lucide="mail" class="w-8 h-8"></i>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                Media <span class="text-[#23bfe2] font-light">Inquiries</span>
            </h2>
            <p class="text-lg text-gray-300 font-light leading-relaxed mb-10 max-w-2xl mx-auto">
                For press inquiries, interviews, or media requests, please contact us at
                <a href="mailto:info@resiliencymbmedicine.com" class="text-[#23bfe2] hover:underline">info@resiliencymbmedicine.com</a>
                or call <a href="tel:+19499965355" class="text-[#23bfe2] hover:underline">(949) 996-5355</a>.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="mailto:info@resiliencymbmedicine.com" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                    <i data-lucide="mail" class="w-5 h-5"></i> Email Us
                </a>
                <a href="tel:+19499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Learn More About <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Our Practice</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Discover our approach to integrative psychiatry and advanced mental health treatments.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="about.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        About Us
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

