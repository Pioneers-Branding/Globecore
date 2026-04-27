<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Meet Our Team | GlobeCoRe Inc. Atlanta, GA";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-52.jpg" alt="Meet Our Team"
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
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Team Directory
                </a>
            </div>

            <!-- Two-column layout: left sticky card + right scrolling content -->


            <div class="flex flex-col lg:flex-row gap-12 xl:gap-16 w-full">
                            <!-- LEFT COLUMN: Sticky Info Card -->
            <div class="lg:w-1/3 xl:w-1/3 flex-shrink-0">
                <div class="sticky top-32 bg-white rounded-[32px] p-4 sm:p-5 shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-100 flex flex-col items-center">
                    <div class="w-full rounded-[24px] overflow-hidden mb-6 bg-gray-100">
                        <img src="https://globecoreinc.com/wp-content/uploads/elementor/thumbs/screen-shot-2024-03-21-at-11.21.33-am-qljsvrflg6wiyd71zokbx5ikmpvvqi04ilsyusstjc.png" alt="Dr. Sharon Belhamel, LMFT, ND" class="w-full aspect-[4/5] object-cover object-top">
                    </div>
                    <div class="text-center w-full px-2">
                        <span class="inline-block bg-[#F1F6EC] text-[#7A9E3F] font-bold text-[11px] tracking-widest uppercase px-4 py-1.5 rounded-full mb-4">LMFT,
                                ND</span>
                        <h2 class="text-2xl font-bold text-[#071e26] mb-6">Sharon Belhamel, LMFT, ND</h2>
                        
                        <a href="../contact.php" class="flex items-center justify-center w-full gap-2 bg-[#071e26] text-white py-4 px-6 rounded-2xl font-semibold hover:bg-[#041116] transition-colors duration-300">
                            Book Consultation
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Bio Content -->
                <div class="lg:w-2/3 xl:w-3/4 flex flex-col gap-8">

                    <!-- WHAT IT'S LIKE TO WORK WITH ME -->
                    <div
                        class="bg-white rounded-[40px] p-8 md:p-12 lg:p-14 shadow-sm border border-gray-100 relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 group-hover:bg-primary/10 transition-colors duration-700">
                        </div>
                        <div class="relative z-10 w-full mb-10 overflow-hidden">
                            <div class="flex items-center gap-4 whitespace-nowrap">
                                <h3 class="text-3xl font-extrabold text-[#071e26] shrink-0">What It's Like To Work With
                                    Me</h3>
                                <div class="h-px bg-gradient-to-r from-gray-200 to-transparent flex-grow"></div>
                            </div>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-600">
                            <p class="leading-relaxed">I see you as more than a diagnosis. I provide a holistic focus on
                                your individual physical, emotional, and family health. Not every therapist looks at the
                                whole picture. I assess the entire person, not just their clinical diagnosis. I have a
                                very system-focused approach — I look at you within the context of your system, how you
                                interact differently or the same in various places and with various people. We do not
                                live in a vacuum. The way you see yourself impacts those around you and your system.</p>
                        </div>
                    </div>

                    <!-- PERSONAL HIGHLIGHTS -->
                    <div
                        class="bg-[#071e26] rounded-[40px] p-8 md:p-12 lg:p-14 shadow-lg relative overflow-hidden text-white group">
                        <div
                            class="absolute -top-24 -right-24 w-64 h-64 bg-primary/20 rounded-full blur-3xl group-hover:bg-primary/30 transition-colors duration-700">
                        </div>
                        <div
                            class="absolute -bottom-24 -left-24 w-64 h-64 bg-secondary/20 rounded-full blur-3xl group-hover:bg-secondary/30 transition-colors duration-700">
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-3xl font-extrabold text-white mb-8">Personal Highlights</h3>
                            <div class="prose prose-lg prose-invert max-w-none text-gray-300">
                                <p class="leading-relaxed">I specialize in using holistic health methods, <a href="../services/counseling.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">counseling</a>,
                                    and naturopathy to manage mood disorders. I am trained as a Licensed Marriage and
                                    Family Therapist (LMFT), a Doctor of Naturopathy (ND), certified as a Professional
                                    in Human Resources (PHR), and credentialed as a Substance Abuse Professional (SAP).
                                    This allows me to help individuals, families, and work environments improve
                                    relationships, culture, and overall health and wellness.</p>
                            </div>
                        </div>
                    </div>

                    <!-- SPECIALTIES & CLINICAL INTERESTS grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div
                            class="bg-white rounded-[32px] p-8 shadow-sm border border-gray-100 flex flex-col h-full hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-4 mb-8">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-[#071e26]">Specialties</h3>
                            </div>
                            <ul class="space-y-4 text-gray-600 flex-grow">
                                <li class="flex items-start gap-3"><svg class="w-5 h-5 text-primary mt-1 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg><span><a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Depression</a> and <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Anxiety</a></span></li>
                                <li class="flex items-start gap-3"><svg class="w-5 h-5 text-primary mt-1 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg><span>Relationship, Identity, and <a href="../specialties/relationship-marriage-issues.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Marriage Issues</a></span></li>
                                <li class="flex items-start gap-3"><svg class="w-5 h-5 text-primary mt-1 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg><span>Racial, Ethnic, and Religious Stressors</span></li>
                                <li class="flex items-start gap-3"><svg class="w-5 h-5 text-primary mt-1 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg><span>Addictions &amp; Dual Diagnosis</span></li>
                                <li class="flex items-start gap-3"><svg class="w-5 h-5 text-primary mt-1 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg><span>Dietary and Lifestyle Counseling</span></li>
                                <li class="flex items-start gap-3"><svg class="w-5 h-5 text-primary mt-1 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg><span><a href="../specialties/grief-loss.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Grief</a> &amp; Loss</span></li>
                            </ul>
                        </div>
                        <div
                            class="bg-white rounded-[32px] p-8 shadow-sm border border-gray-100 flex flex-col h-full hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-4 mb-8">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-[#071e26]">Clinical &amp; Consulting Interests</h3>
                            </div>
                            <ul class="space-y-4 text-gray-600 flex-grow">
                                <li class="flex items-start gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 relative">
                                        <div class="absolute inset-0 bg-secondary rounded-full animate-ping opacity-20">
                                        </div>
                                    </div><span>Individual, Family, and Group Therapy</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 relative">
                                        <div class="absolute inset-0 bg-secondary rounded-full animate-ping opacity-20">
                                        </div>
                                    </div><span>Workshops &amp; Corporate Wellness</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 relative">
                                        <div class="absolute inset-0 bg-secondary rounded-full animate-ping opacity-20">
                                        </div>
                                    </div><span>Supervision: Aimed toward APCs</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 relative">
                                        <div class="absolute inset-0 bg-secondary rounded-full animate-ping opacity-20">
                                        </div>
                                    </div><span>Concierge Therapy: Priority scheduling, extended hours, private
                                        locations</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 relative">
                                        <div class="absolute inset-0 bg-secondary rounded-full animate-ping opacity-20">
                                        </div>
                                    </div><span>Naturopathic medicine and natural healing</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- HONORS -->
                    <div class="bg-white rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-14 h-14 rounded-2xl bg-[#E8F0E4] flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7 text-[#7A9E3F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-extrabold text-[#071e26]">Honors, Awards &amp; Memberships</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 text-gray-600">
                            <div class="flex items-start gap-3"><span
                                    class="w-2 h-2 rounded-full bg-[#7A9E3F] mt-2 flex-shrink-0"></span><span>National
                                    Society of Leadership and Success</span></div>
                            <div class="flex items-start gap-3"><span
                                    class="w-2 h-2 rounded-full bg-[#7A9E3F] mt-2 flex-shrink-0"></span><span>Who's Who
                                    Among Executive and Professional Women in Counseling and Development</span></div>
                        </div>
                    </div>

                    <!-- EDUCATION -->
                    <div class="bg-white rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-extrabold text-[#071e26]">Education</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div
                                class="bg-secondary/5 rounded-2xl p-6 border border-secondary/10 hover:bg-secondary/10 transition-colors">
                                <p class="font-bold text-[#071e26] mb-1">Doctor of Naturopathy (ND, 2014)</p>
                                <p class="text-gray-500 text-sm">Trinity School of Natural Health</p>
                            </div>
                            <div
                                class="bg-secondary/5 rounded-2xl p-6 border border-secondary/10 hover:bg-secondary/10 transition-colors">
                                <p class="font-bold text-[#071e26] mb-1">MBA (2012) – Business Administration</p>
                                <p class="text-gray-500 text-sm">Columbia Southern University</p>
                            </div>
                            <div
                                class="bg-secondary/5 rounded-2xl p-6 border border-secondary/10 hover:bg-secondary/10 transition-colors">
                                <p class="font-bold text-[#071e26] mb-1">MA (1996) – Psychology</p>
                                <p class="text-gray-500 text-sm">Georgia School of Professional Psychology</p>
                            </div>
                            <div
                                class="bg-secondary/5 rounded-2xl p-6 border border-secondary/10 hover:bg-secondary/10 transition-colors">
                                <p class="font-bold text-[#071e26] mb-1">BS (1988) – Psychology</p>
                                <p class="text-gray-500 text-sm">Iowa State University</p>
                            </div>
                        </div>
                    </div>

                    <!-- LICENSES -->
                    <div class="bg-white rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-extrabold text-[#071e26]">Licenses</h3>
                        </div>
                        <ul class="space-y-4 text-gray-600">
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 ring-4 ring-secondary/20">
                                </div><span class="font-medium text-[#071e26]">Licensed Marriage &amp; Family Therapist
                                    (LMFT) – Georgia</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 ring-4 ring-secondary/20">
                                </div><span class="font-medium text-[#071e26]">Board Certified Holistic Health
                                    Practitioner (AADP) – National</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 ring-4 ring-secondary/20">
                                </div><span class="font-medium text-[#071e26]">Professional in Human Resources (PHR) –
                                    National</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 ring-4 ring-secondary/20">
                                </div><span class="font-medium text-[#071e26]">Certified National Health Professional
                                    (CNHP) – Georgia</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 ring-4 ring-secondary/20">
                                </div><span class="font-medium text-[#071e26]">Georgia Registered Mediator
                                    Arbitrator</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-1.5 h-1.5 rounded-full bg-secondary mt-2 flex-shrink-0 ring-4 ring-secondary/20">
                                </div><span class="font-medium text-[#071e26]">Paralegal Certification (Emory
                                    University)</span>
                            </li>
                        </ul>
                    </div>

                    <!-- TESTIMONIALS (Dark) -->
                    <div
                        class="bg-[#071e26] rounded-[40px] p-8 md:p-12 lg:p-14 shadow-lg relative overflow-hidden text-white group">
                        <svg class="absolute top-4 right-4 md:top-8 md:right-8 w-32 h-32 md:w-48 md:h-48 text-white/5 rotate-180"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="relative z-10">
                            <h3
                                class="text-3xl font-extrabold text-white mb-8 border-b-2 border-primary/30 pb-4 inline-block">
                                Testimonials</h3>
                            <div class="space-y-6">
                                <div class="bg-white/5 border border-white/10 p-6 md:p-8 rounded-3xl backdrop-blur-sm">
                                    <blockquote class="text-lg text-gray-300 italic leading-relaxed">"I suppose I could
                                        talk about all the good things that Dr. Belhamel has offered, but it would be
                                        too much to write. The truth is, she is a phenomenal young woman who serves the
                                        community to the best of her ability." ~Anonymous</blockquote>
                                </div>
                                <div class="bg-white/5 border border-white/10 p-6 md:p-8 rounded-3xl backdrop-blur-sm">
                                    <blockquote class="text-lg text-gray-300 italic leading-relaxed">"Thank you, Dr.
                                        Sharon, for this past year of guidance, growth, and advice. We are in a much
                                        better place now than we were before seeing you. You have been such a blessing
                                        to our marriage." ~Anonymous</blockquote>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- END OF TWO COLUMN LAYOUT --></div>
        </section>
    </main>

    <?php include "partials/footer.php"; ?>
