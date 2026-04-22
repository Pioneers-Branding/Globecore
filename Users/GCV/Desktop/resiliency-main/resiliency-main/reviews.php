<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/hero_bg.png" alt="Patient Reviews" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Patient Experiences</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Our <span class="text-[#23bfe2] font-light">Reviews</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Read what our patients say about their experience at Resiliency Mind + Body Medicine.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#reviews" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Read Reviews <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="contact.php" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Overall Rating Section -->
    <section id="reviews" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <div class="inline-flex flex-col items-center">
                    <p class="text-8xl md:text-9xl font-bold text-[#0B2035] leading-none mb-4">4.9</p>
                    <div class="flex items-center gap-1 mb-3">
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-8 h-8 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-500 font-light text-lg">based on Google Reviews</p>
                </div>
            </div>

            <!-- Reviews Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8 reveal">
                <!-- Review 1 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "I can't say enough good things about my experience at Resiliency Mind + Body Medicine, especially because of Cyrus, my TMS technician. He is skilled, knowledgeable, and genuinely invested in his patients' well-being. Cyrus is present and attentive at every session, checking in on how I'm doing and my comfort level during treatment."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">RC</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">R Court</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "Brian Tran is very pleasant and easy to work with. He has been a real help. Rylee in the front office is a dream! She really makes things easy as well as being a cheerful and friendly presence. I can highly recommend this facility."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">LM</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Lory Moger</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "I want to take a moment to recognize our two secretaries for their incredible work. They are consistently kind, patient, and attentive, and they truly care about everyone they help. Their professionalism, organization, and positive attitude make the office run smoothly every day."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">RM</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Rebeca McQuin</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "Resiliency has changed my life. I've been treatment resistant and suffered debilitating depression since childhood with no relief. Since coming here I've been able to get up, get a job and even start going out with friends again. Thank you to Lauren, Rylee, and Brian for being the most supportive care team ever."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">JM</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Jesse M</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "TMS truly changed my life. I was debilitated by depression and anxiety for years. I had done a variety of therapy and mental health treatment and tried countless meds which helped alleviate some symptoms but never got me to a place where I felt like my anxiety and depression was manageable. The experience at Resiliency was more than I could have asked for."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">AB</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Annessa Brock</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "I have never before found a psychiatric group that is so clearly dedicated to making people better. I finally feel like I am under the care of capable people. I can honestly say that I am better today because Dr. LaFrenierre and her team listened to my story and devised a treatment plan for me. I thought there was no hope left, and now I legitimately feel excited to be alive!"
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">PM</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Pagu Ma</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 7 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "I have completed 8 weeks of treatments with Resiliency Mind + Body. It has been years since I felt the relief Dr. L provided. If you feel you are at the end of your rope and exhausted by medications that don't yield the result you hope and pray for, reach out to Resiliency. I am beyond grateful."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">WR</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Wayne Rizzo</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 8 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "Truly wonderful down to earth folks who genuinely care about you. They went above and beyond for me in so many ways. The staff are all exceptional people who love what they do and it shows. I can't emphasize enough how amazing and hardworking this team is."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">KH</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Kyle Hauk</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 9 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "This has been life changing. After suffering a brain injury, it left me with pain unable to drive on the freeway. TMS gave me another chance to experience exercise, driving, full range of motion. PTSD was a result of my injury and trauma but TMS I can see a new me. I recommend this 1000 percent."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">AM</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Alicia Mills</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 10 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "After 4 treatments of Spravato, the results are astonishing. My racing thoughts, anxiety, and preoccupation have decreased substantially. My sleep is much better. Sleep scores have gone from the 60s to the high 80s and 90s."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">CR</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Chuck Rock</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 11 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "I just began my 2nd round of TMS at Resiliency. I cannot speak highly enough about this company. Everyone is welcoming, compassionate, professional and helpful. I am so grateful for the quality of care I've received here. If you are suffering from treatment resistant Depression, Trauma, and/or PTSD, call them now! It will absolutely change your life and restore your hope."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">KL</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Kelly L</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 12 -->
                <div class="break-inside-avoid bg-white border border-gray-100 rounded-[2rem] p-8 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                        <i data-lucide="star" class="w-5 h-5 text-[#23bfe2] fill-[#23bfe2]"></i>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed italic mb-6">
                        "Resiliency Mind + Body Medicine is truly special. I came here for TMS treatment, and from the very beginning, I was met with warmth and care. Dr. Stefani LaFrenierre is not only incredibly knowledgeable but also so compassionate. They made what could have been a difficult process feel seamless and supportive. Their kindness and professionalism were such a huge part of my healing journey."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#0B2035] rounded-full flex items-center justify-center text-white font-bold text-sm">CB</div>
                        <div>
                            <p class="font-bold text-[#0B2035]">Clara Boshra</p>
                            <div class="flex items-center gap-1 text-gray-400 text-sm">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                                Google Review
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
                Start Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Journey</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Take the first step toward lasting mental wellness. Schedule Your Consultation with our team today.
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

