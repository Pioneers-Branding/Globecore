<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "About Us | GlobeCoRe Inc. Atlanta, GA";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-50.jpg" alt="About Us"
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
                About Us
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care,
                and profound expertise.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../contact.php"
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

    <!-- ===================== WHO WE ARE SECTION ===================== -->
    <section class="relative py-24 bg-white overflow-hidden">
        <!-- Subtle decorative blobs -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl translate-x-1/3 -translate-y-1/4 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary/5 rounded-full blur-3xl -translate-x-1/3 translate-y-1/4 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 bg-primary/10 border border-primary/20 text-primary text-xs font-bold tracking-[0.2em] uppercase px-5 py-2 rounded-full mb-5">
                    <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                    Our Identity
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#071e26] leading-tight">Who We Are</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-5 rounded-full"></div>
            </div>

            <!-- Identity Pillars Row -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
                <div
                    class="group relative bg-gradient-to-br from-[#071e26] to-[#0a2e3a] rounded-2xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div
                        class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl">
                    </div>
                    <div
                        class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-primary/30 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <p class="text-white font-bold text-sm">Individuals, Couples & Families</p>
                </div>
                <div
                    class="group relative bg-gradient-to-br from-primary/90 to-[#6a9038] rounded-2xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <p class="text-white font-bold text-sm">Global Reach, Local Roots</p>
                </div>
                <div
                    class="group relative bg-gradient-to-br from-secondary/80 to-[#027289] rounded-2xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <p class="text-white font-bold text-sm">Culturally Sensitive Care</p>
                </div>
                <div
                    class="group relative bg-gradient-to-br from-[#071e26] to-[#0a2e3a] rounded-2xl p-6 text-center hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <div
                        class="absolute inset-0 bg-secondary/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-2xl">
                    </div>
                    <div
                        class="w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-secondary/30 transition-colors">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <p class="text-white font-bold text-sm">Full-Service Psychological Practice</p>
                </div>
            </div>

            <!-- Main Content: Two column layout -->
            <div class="grid lg:grid-cols-5 gap-10 lg:gap-16 items-start">

                <!-- Left: Large descriptive text -->
                <div class="lg:col-span-3 space-y-5">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        GlobeCoRe Inc is an Atlanta based full service psychological and global consulting practice
                        specializing in empowerment and multicultural mental health across the lifespan for individuals,
                        couples, families, groups and organizations.
                    </p>
                    <p class="text-base text-gray-600 leading-relaxed">
                        With a commitment to diversity and cultural inclusion and humility, we specialize in providing
                        therapy, psychological evaluation, medication management, DEI Evaluation, personal development
                        courses &amp; corporate training, cultural immersion experiences and consultation &amp;
                        supervision that is culturally sensitive, holistic, and that meets clients where they are.
                    </p>
                    <p class="text-base text-gray-600 leading-relaxed">
                        Our diverse programs aim to help clients identify and work through historical trauma while
                        deconstructing cultural injustices and oppression, sorting through identity and self-esteem
                        struggles and working towards social justice for all.
                    </p>
                    <p class="text-base text-gray-600 leading-relaxed">
                        We also specialize in supporting clients through struggles with addiction; fertility, pregnancy
                        &amp; parenting; LGBTQI+; aging; finding deserving love; racial, ethnic and religious stressors;
                        work-related and academic stressors; depression &amp; anxiety; finding purpose; relationship,
                        identity and marriage issues; developmental &amp; intellectual disabilities; grief &amp; loss;
                        and other types of trauma.
                    </p>
                </div>

                <!-- Right: Ally badges + highlight box -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Allied highlight -->
                    <div class="bg-gradient-to-br from-[#071e26] to-[#0d2e3a] rounded-2xl p-7 text-white">
                        <p class="text-sm font-bold text-primary uppercase tracking-widest mb-4">We Are Allied With</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="bg-white/10 text-white text-xs font-semibold px-3 py-1.5 rounded-full border border-white/10 hover:border-primary/40 hover:bg-primary/20 transition-all cursor-default">Racial
                                Justice</span>
                            <span
                                class="bg-white/10 text-white text-xs font-semibold px-3 py-1.5 rounded-full border border-white/10 hover:border-primary/40 hover:bg-primary/20 transition-all cursor-default">LGBTQI+</span>
                            <span
                                class="bg-white/10 text-white text-xs font-semibold px-3 py-1.5 rounded-full border border-white/10 hover:border-primary/40 hover:bg-primary/20 transition-all cursor-default">Gender
                                Allied</span>
                            <span
                                class="bg-white/10 text-white text-xs font-semibold px-3 py-1.5 rounded-full border border-white/10 hover:border-primary/40 hover:bg-primary/20 transition-all cursor-default">HIV/AIDS
                                Allied</span>
                            <span
                                class="bg-white/10 text-white text-xs font-semibold px-3 py-1.5 rounded-full border border-white/10 hover:border-primary/40 hover:bg-primary/20 transition-all cursor-default">Disability
                                Allied</span>
                            <span
                                class="bg-white/10 text-white text-xs font-semibold px-3 py-1.5 rounded-full border border-white/10 hover:border-primary/40 hover:bg-primary/20 transition-all cursor-default">Body
                                Positive</span>
                        </div>
                        <div class="mt-5 pt-5 border-t border-white/10">
                            <p class="text-sm text-gray-300 leading-relaxed">We work with clients across <strong
                                    class="text-white">ALL</strong> racial, ethnic, religious and nationality groups.
                            </p>
                        </div>
                    </div>

                    <!-- Services quick list -->
                    <div class="bg-bgOffWhite rounded-2xl p-6 border border-gray-100">
                        <p class="text-xs font-bold text-secondary uppercase tracking-widest mb-4">Our Core Services</p>
                        <ul class="space-y-2.5 text-sm text-gray-700">
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>Therapy &amp;
                                Counseling</li>
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>Psychological
                                Evaluation</li>
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>Medication
                                Management</li>
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>DEI Evaluation</li>
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-secondary flex-shrink-0"></span>Personal
                                Development Courses</li>
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-secondary flex-shrink-0"></span>Corporate
                                Training</li>
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-secondary flex-shrink-0"></span>Cultural
                                Immersion Experiences</li>
                            <li class="flex items-center gap-2.5"><span
                                    class="w-1.5 h-1.5 rounded-full bg-secondary flex-shrink-0"></span>Consultation
                                &amp; Supervision</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== DIVIDER ===================== -->
    <div class="relative h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent mx-8 lg:mx-24"></div>

    <!-- ===================== HOW WE STARTED SECTION ===================== -->
    <section class="relative py-24 bg-white overflow-hidden">
        <!-- Decorative blobs -->
        <div
            class="absolute top-1/2 left-0 w-[350px] h-[350px] bg-primary/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 bg-secondary/10 border border-secondary/20 text-secondary text-xs font-bold tracking-[0.2em] uppercase px-5 py-2 rounded-full mb-5">
                    <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                    Our Story
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#071e26] leading-tight">How We Started</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-secondary to-primary mx-auto mt-5 rounded-full"></div>
            </div>

            <!-- Bamboo Symbolism Quote Card -->
            <div
                class="relative bg-gradient-to-br from-[#071e26] to-[#0d3040] rounded-3xl p-8 md:p-12 mb-14 overflow-hidden">
                <!-- Decorative circles -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full blur-2xl translate-x-1/4 -translate-y-1/4 pointer-events-none">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-48 h-48 bg-secondary/10 rounded-full blur-2xl -translate-x-1/4 translate-y-1/4 pointer-events-none">
                </div>

                <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
                    <!-- Bamboo Icon -->
                    <div class="flex-shrink-0 w-20 h-20 bg-primary/20 rounded-2xl flex items-center justify-center">
                        <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 3v18M9 6c0 0 1.5 1 3 0s3 0 3 0M9 10c0 0 1.5 1 3 0s3 0 3 0M9 14c0 0 1.5 1 3 0s3 0 3 0M9 18c0 0 1.5 1 3 0" />
                        </svg>
                    </div>
                    <!-- Quote -->
                    <div class="flex-1">
                        <svg class="w-8 h-8 text-primary/40 mb-3" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <p class="text-white text-base md:text-lg leading-relaxed font-medium italic">
                            As you will see throughout our website and in our offices, we use the bamboo to symbolize
                            <span class="text-primary font-bold">strength</span>, <span
                                class="text-primary font-bold">flexibility</span>, and <span
                                class="text-primary font-bold">health</span>. Its strength teaches us to stand upright
                            and its flexibility teaches us to adapt to the harshest circumstances. The combination of
                            these virtues teaches us how to find balance and inner peace in our lives, in turn improving
                            our health. This is our goal for you!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Founding Story: Timeline-style cards -->
            <div class="grid md:grid-cols-2 gap-6 mb-10">

                <!-- Story Card 1: The Founding -->
                <div
                    class="relative bg-bgOffWhite rounded-2xl p-8 border border-gray-100 hover:shadow-lg hover:border-primary/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-primary uppercase tracking-widest mb-1 block">November
                                2010</span>
                            <h3 class="text-lg font-bold text-[#071e26] mb-2">The Founding</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">GlobeCoRe was founded by <strong>Dr. Kelly
                                    M. Lewis-Arthur</strong> as a venue where she and other clinicians could work with
                                clients in a holistic way that encompasses their cultural identities and unique
                                experiences.</p>
                        </div>
                    </div>
                </div>

                <!-- Story Card 2: The Vision -->
                <div
                    class="relative bg-bgOffWhite rounded-2xl p-8 border border-gray-100 hover:shadow-lg hover:border-secondary/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center group-hover:bg-secondary/20 transition-colors">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-secondary uppercase tracking-widest mb-1 block">The
                                Vision</span>
                            <h3 class="text-lg font-bold text-[#071e26] mb-2">Empowerment to Change Lives</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">It all started with a vision to develop a
                                program that uses empowerment to change the lives of people. Dr. Lewis recognized that
                                people can reach their ultimate potential when they are empowered to be who they truly
                                are.</p>
                        </div>
                    </div>
                </div>

                <!-- Story Card 3: The Mission -->
                <div
                    class="relative bg-gradient-to-br from-primary/10 to-primary/5 rounded-2xl p-8 border border-primary/15 hover:shadow-lg hover:border-primary/30 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center group-hover:bg-primary/30 transition-colors">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-primary uppercase tracking-widest mb-1 block">Our Vision
                                Statement</span>
                            <h3 class="text-lg font-bold text-[#071e26] mb-2">Better People, Better Programs, Better
                                World</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">This shaped our formal vision at GlobeCoRe
                                and laid the foundation for our two branches: <strong>Psychological Services</strong>
                                &amp; <strong>Consulting Services</strong>.</p>
                        </div>
                    </div>
                </div>

                <!-- Story Card 4: Growth -->
                <div
                    class="relative bg-gradient-to-br from-secondary/10 to-secondary/5 rounded-2xl p-8 border border-secondary/15 hover:shadow-lg hover:border-secondary/30 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-secondary/20 rounded-xl flex items-center justify-center group-hover:bg-secondary/30 transition-colors">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-secondary uppercase tracking-widest mb-1 block">Growing
                                Together</span>
                            <h3 class="text-lg font-bold text-[#071e26] mb-2">A Continually Expanding Team</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">We now work diligently to provide diverse
                                services in a variety of domains and continue to grow as an organization, bringing on
                                diverse clinicians, consultants and staff that meet the diverse needs of our clients.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom CTA strip -->
            <div
                class="bg-gradient-to-r from-[#071e26] via-[#0d2e3a] to-[#071e26] rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl font-bold text-white mb-1">Ready to Begin Your Journey?</h3>
                    <p class="text-gray-400 text-sm">Clinicians and Consultants are available M–F from 9 am – 7 pm and
                        Saturdays by appointment only.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                    <a href="../contact.php"
                        class="inline-flex items-center justify-center gap-2 bg-primary text-white font-bold py-3.5 px-8 rounded-xl hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 transition-all duration-300">
                        Book a Consultation
                    </a>
                    <a href="tel:7702841044"
                        class="inline-flex items-center justify-center gap-2 border border-white/20 text-white font-bold py-3.5 px-8 rounded-xl hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        (770) 284-1044
                    </a>
                </div>
            </div>

        </div>
    </section>

    <?php include "partials/footer.php"; ?>
