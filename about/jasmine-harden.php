<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Jasmine Harden | GlobeCoRe Inc. Atlanta, GA";
    include_once "../partials/head.php";
    ?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>

    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="/assets/Globe Core-52.jpg" alt="Meet Our Team"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay filter blur-[2px]">
            <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-[#071e26]/80 to-transparent"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center">
            <div
                class="inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">Help & Information</span>
            </div>
            <h1
                class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">
                Meet Our Team
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care,
                and profound expertise.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php"
                    class="bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 text-lg">Book
                    a Consultation</a>
            </div>
        </div>

        <!-- Custom Wave Divider -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none drop-shadow-lg text-white">
            <svg fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none"
                class="w-full h-[60px] md:h-[100px]">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,108.83,106.6,117.8,162,118.8,216.7,119.78,271.69,103.55,321.39,56.44Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- Main Content -->
    <main id="content" class="py-12 lg:py-20 bg-[#fafafa] relative">
        <!-- Large Background Abstract Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-br from-primary/5 to-secondary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-secondary/5 to-transparent rounded-full blur-3xl translate-y-1/3 -translate-x-1/3">
            </div>
        </div>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 transition-all duration-500">
            <!-- Back Button -->
            <div class="mb-10">
                <a href="meet-our-team.php"
                    class="inline-flex items-center gap-2 text-secondary hover:text-primary font-bold transition-all bg-white px-5 py-2.5 rounded-full shadow-sm hover:shadow-md border border-gray-100 group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Team Directory
                </a>
            </div>

            <!-- Two-column layout: left sticky card + right scrolling content -->
            <div class="flex flex-col lg:flex-row gap-8 xl:gap-12 w-full">

                <!-- LEFT COLUMN: Sticky Info Card -->
                <div class="lg:w-1/3 xl:w-1/3 flex-shrink-0">
                    <div
                        class="sticky top-32 bg-white rounded-[32px] p-4 sm:p-5 shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-100 flex flex-col items-center">
                        <div
                            class="w-full rounded-[24px] overflow-hidden mb-6 bg-gray-100 aspect-[4/5] flex items-center justify-center">
                            <img alt="Jasmine Harden" class="w-full aspect-[4/5] object-cover object-top"
                                src="/assets/images/J-Harden.webp" />
                        </div>
                        <div class="text-center w-full px-2">
                            <span
                                class="inline-block bg-[#F1F6EC] text-[#7A9E3F] font-bold text-[11px] tracking-widest uppercase px-4 py-1.5 rounded-full mb-4">Licensed
                                Professional Counselor</span>
                            <h2 class="text-2xl font-bold text-[#071e26] mb-6">Jasmine Harden</h2>

                            <a href="/contact.php"
                                class="flex items-center justify-center w-full gap-2 bg-[#071e26] text-white py-4 px-6 rounded-2xl font-semibold hover:bg-[#041116] transition-colors duration-300">
                                Book Consultation
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Bio Content -->
                <div class="lg:w-2/3 xl:w-3/4 flex flex-col gap-8">

                    <!-- What it is like to work with me -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <div class="flex items-center mb-6">
                            <h2 class="text-3xl font-extrabold text-[#071e26]">What is it like to work with me</h2>
                            <div class="h-px bg-gray-200 flex-grow ml-6 hidden sm:block"></div>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-600 space-y-5">
                            <h3 class="text-xl font-bold text-[#071e26]">As a Voice Amplifier</h3>
                            <p class="leading-relaxed">I help clients find their voice by putting a name to their
                                feelings and empowering them to assert themselves as they care for the vulnerable. As we
                                quiet the ruminating noise of doubt and shame, confidence builds, and passions are
                                ignited. During therapy, I encourage my clients to show up as their most authentic
                                selves, as sessions are a judgment-free zone. It is a privilege to work alongside my
                                clients as they create a sustainable way of living that includes self-compassion and
                                care.</p>
                            <p class="leading-relaxed">I am passionate about disrupting the narrative that trauma is to
                                be worn as a badge of honor. This normalized view of trauma can be maladaptive and
                                consequential to many people throughout their lives. Thus, my superpower is speaking to
                                the younger version inside of you and helping them communicate their childhood needs
                                that continue to inhibit her from thriving in the present day.</p>
                        </div>
                    </div>

                    <!-- Personal Highlights -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <div class="flex items-center mb-6">
                            <h2 class="text-3xl font-extrabold text-[#071e26]">Personal Highlights</h2>
                            <div class="h-px bg-gray-200 flex-grow ml-6 hidden sm:block"></div>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-600 space-y-5">
                            <p class="leading-relaxed">I have over 13 years of experience in mental health. As a result
                                of working with children and adults, I specialize in trauma (PTSD), anxiety, depression,
                                life transitions, LGBTQ+, coping skills, postpartum depression, sexual/intimacy issues,
                                and corporate burnout.</p>
                            <p class="leading-relaxed">I use evidence-based interventions from Dialectical Behavioral,
                                Cognitive Behavior, Trauma-Focused, and Acceptance and Commitment therapies. I develop
                                personalized treatment goals with each client. I understand it takes courage to seek
                                support to create a more fulfilling and happier life. I aim to support and empower my
                                clients as they work towards a better future.</p>
                        </div>
                    </div>

                    <!-- Clinical and Consultation Interests -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <div class="flex items-center mb-6">
                            <h2 class="text-3xl font-extrabold text-[#071e26]">Clinical and Consultation Interests</h2>
                            <div class="h-px bg-gray-200 flex-grow ml-6 hidden sm:block"></div>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]"><strong class="text-[#071e26]">Combating
                                        Compassion Fatigue</strong> - This consultation is intended to support
                                    clinicians in recognizing, processing, and responding to compassion fatigue in a
                                    reflective and collaborative environment.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Specialties -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">Specialties</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Clinical Supervision</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Dialectical Behavioral Therapy</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">LGBTQTIA+ advocate</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Acceptance and Commitment Therapy</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Cognitive Behavioral Therapy</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Trauma Focused Cognitive Behavioral
                                    Therapy</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Women’s Health & Wellness (Post
                                    Partum/Perinatal)</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Veterans</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Education -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">Education</h2>
                        <div class="grid grid-cols-1 gap-4">
                            <div
                                class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-[#027289] text-base mb-2">Master of Arts in Community
                                    Counseling</h3>
                                <p class="text-sm text-gray-500">Argosy University</p>
                            </div>
                            <div
                                class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-[#027289] text-base mb-2">Bachelor of Arts in Psychology</h3>
                                <p class="text-sm text-gray-500">Clark Atlanta University</p>
                            </div>
                        </div>
                    </div>

                    <!-- License -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">License</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Licensed Professional Counselor
                                    (LPC013653)</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Honors, Awards & Memberships -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">Honors, Awards & Memberships</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Licensed Professional Counselors Association of
                                    Georgia</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Leadership Douglas Alumni</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-medium text-[#071e26]">Association for the Treatment and Prevention of
                                    Sexual Abuse</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Hobbies -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <div class="flex items-center mb-6">
                            <h2 class="text-3xl font-extrabold text-[#071e26]">Hobbies</h2>
                            <div class="h-px bg-gray-200 flex-grow ml-6 hidden sm:block"></div>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-600 space-y-5">
                            <p class="leading-relaxed">I love iced coffee; it’s the elixir of my life. I make a
                                concerted effort to prioritize wellness. I’m a plant mom who enjoys traveling, 90s RnB,
                                and festivals. YouTube web series are guilty pleasure of mine; it’s incredible to watch
                                a passion project turn into a media powerhouse- ask Issa Rae!</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END OF TWO COLUMN LAYOUT -->
        </section>
    </main>

    <?php include "../partials/footer.php"; ?>
</body>

</html>