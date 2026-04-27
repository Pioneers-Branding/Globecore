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


            <div class="flex flex-col lg:flex-row gap-8 xl:gap-12 w-full">
                            <!-- LEFT COLUMN: Sticky Info Card -->
            <div class="lg:w-1/3 xl:w-1/3 flex-shrink-0">
                <div class="sticky top-32 bg-white rounded-[32px] p-4 sm:p-5 shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-100 flex flex-col items-center">
                    <div class="w-full rounded-[24px] overflow-hidden mb-6 bg-gray-100">
                        <img src="https://globecoreinc.com/wp-content/uploads/2021/03/IMG_2992-819x1024.jpg" alt="Dr. Kelly Lewis-Arthur" class="w-full aspect-[4/5] object-cover object-top">
                    </div>
                    <div class="text-center w-full px-2">
                        <span class="inline-block bg-[#F1F6EC] text-[#7A9E3F] font-bold text-[11px] tracking-widest uppercase px-4 py-1.5 rounded-full mb-4">CEO</span>
                        <h2 class="text-2xl font-bold text-[#071e26] mb-6">Dr. Kelly Lewis-Arthur</h2>
                        
                        <a href="../contact.php" class="flex items-center justify-center w-full gap-2 bg-[#071e26] text-white py-4 px-6 rounded-2xl font-semibold hover:bg-[#041116] transition-colors duration-300">
                            Book Consultation
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Bio Content -->
                <div class="lg:w-2/3 xl:w-3/4 flex flex-col gap-8">

                    <!-- What It's Like To Work With Me -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <div class="flex items-center mb-6">
                            <h2 class="text-3xl font-extrabold text-[#071e26]">What It's Like To Work With Me</h2>
                            <div class="h-px bg-gray-200 flex-grow ml-6 hidden sm:block"></div>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-600 space-y-5">
                            <p class="leading-relaxed">I utilize a family system and interpersonal approach. These
                                methods allow me to look beyond the presenting issues you may be facing and see how the
                                world around you, and the context around your situation, has impacted you. I also focus
                                on empowerment and solution-focused sessions. Whether you are looking for therapy,
                                guidance, or a cultural experience, I can help you by creating an environment that is
                                focused on your future, your strengths, and the goals that you have set for yourself.
                            </p>
                            <p class="leading-relaxed">I am passionate about working with diverse populations around
                                multicultural mental health issues and have spent my entire career building expertise in
                                this area. Diversity stretches across numerous dimensions including race & ethnicity,
                                nationality, gender, sexual orientation, age, religion, ability, personality,
                                socioeconomic status. I bring that relatability into my sessions to help you understand
                                your own strengths and power in a way this is sensitive to your diverse identity areas
                                and needs. I work with clients to overcome clinical adversity in the workplace/school,
                                relationships, with self, and in communities. I do this by employing solution-focused,
                                culturally sensitive, and empowering therapy that facilitates positive growth in a safe,
                                collaborative, and nurturing way.</p>
                        </div>
                    </div>

                    <!-- Personal Highlights -->
                    <div class="bg-[#071e26] rounded-[32px] p-8 md:p-10 shadow-lg">
                        <h2 class="text-3xl font-extrabold text-white mb-6">Personal Highlights</h2>
                        <div class="prose prose-lg max-w-none text-gray-300">
                            <p class="leading-relaxed">My mission is to grow GlobeCoRe to be a nationally recognized
                                leader in multicultural mental health and empowerment. I aspire to grow GlobeCoRe to a
                                place where we are making significant contributions to the science and practice of
                                multicultural mental health. I want to continue to effect change and lead programs that
                                promote mental, social, emotional, and inter-personal wellbeing of the diverse
                                individuals and communities we serve across the globe. I also look forward to continuing
                                to work collaboratively in consultation with businesses, community members, government
                                agencies, and community-based organizations to provide effective psychological and
                                educational interventions that address psychosocial problems in the broader global
                                community.</p>
                        </div>
                    </div>

                    <!-- Specialties & Clinical Interests Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Specialties -->
                        <div class="bg-white rounded-[32px] p-8 shadow-sm border border-gray-100 flex flex-col">
                            <h2 class="text-2xl font-extrabold text-[#071e26] mb-6">Specialties</h2>
                            <ul class="space-y-4 text-gray-600 flex-grow">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium"><a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Depression</a> and <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Anxiety</a></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Racial, Ethnic, And Religious Stressors</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium"><a href="../specialties/grief-loss.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Grief</a> and Loss</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Finding Purpose & Deserving Love</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Relationship, Identity, And <a href="../specialties/relationship-marriage-issues.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Marriage Issues</a></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Issues Tied to <a href="../specialties/self-esteem.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Self-Esteem</a>/Identity</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium"><a href="../specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">Trauma</a></span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Work-Related Or Academic Stressors</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Women’s Issues</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-[#7A9E3F] flex-shrink-0 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="font-medium">Fertility, Pregnancy, And Parenting Issues</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Clinical & Consulting Interests -->
                        <div class="bg-white rounded-[32px] p-8 shadow-sm border border-gray-100 flex flex-col">
                            <h2 class="text-2xl font-extrabold text-[#071e26] mb-6">Clinical & Consulting Interests</h2>
                            <ul class="space-y-4 text-gray-600 flex-grow">
                                <li class="flex items-start gap-4">
                                    <span
                                        class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                    <span class="font-medium text-[#071e26] leading-snug">Individual, Couples, Family,
                                        and Group Therapy</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <span
                                        class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                    <span class="font-medium text-[#071e26] leading-snug">Workshops, Trainings, and
                                        Retreats: Healing from Racial Inequality, Women’s Wellness Weekend, Cultivating
                                        Equality in the Workplace, Achieving Work-Life Balance, Empowerment and
                                        Self-Esteem Building, Effective Communication Professionally, Cultural
                                        Sensitivity in the Treatment</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <span
                                        class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                    <span class="font-medium text-[#071e26] leading-snug">Psychological
                                        Evaluations</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <span
                                        class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                    <span class="font-medium text-[#071e26] leading-snug">Cultural Immersion
                                        Trips</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Honors, Awards & Memberships -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">Honors, Awards & Memberships</h2>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-600">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Best & Brightest Companies to Work for in
                                    Atlanta</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Patients’ Choice Award</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Best of Atlanta Award</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Outstanding Diversity Teaching Award</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Phi Beta Delta Honor Society for International
                                    Faculty</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Nominated for Study Abroad Program Director of
                                    the Year</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Diversity Committee, Georgia State
                                    University</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-[#7A9E3F] flex-shrink-0 mt-2"></span>
                                <span class="font-medium text-[#071e26]">Clinical Community Psychology (CLC) Program
                                    Committee</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Education -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">Education</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-[#027289] text-base mb-2">Post Doctoral Fellowship (2004-2006)
                                </h3>
                                <p class="text-[#071e26] font-semibold mb-1 leading-snug text-sm">Clinical-Community
                                    Psychology & African Studies</p>
                                <p class="text-sm text-gray-500">Emory University</p>
                            </div>
                            <div
                                class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-[#027289] text-base mb-2">Doctoral Degree (PhD, 2004)</h3>
                                <p class="text-[#071e26] font-semibold mb-1 leading-snug text-sm">Clinical-Community
                                    Psychology & African Studies</p>
                                <p class="text-sm text-gray-500">Michigan State University</p>
                            </div>
                            <div
                                class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-[#027289] text-base mb-2">Pre-Doctoral Psychology Fellowship
                                    (2003-2004)</h3>
                                <p class="text-[#071e26] font-semibold mb-1 leading-snug text-sm">Clinical-Community
                                    Psychology Internship</p>
                                <p class="text-sm text-gray-500">Yale University, Department of Psychiatry, School of
                                    Medicine</p>
                            </div>
                            <div
                                class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-[#027289] text-base mb-2">Master’s Degree (MA, 2001)</h3>
                                <p class="text-[#071e26] font-semibold mb-1 leading-snug text-sm">Clinical-Community
                                    Psychology & African Studies</p>
                                <p class="text-sm text-gray-500">Michigan State University</p>
                            </div>
                            <div
                                class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
                                <h3 class="font-bold text-[#027289] text-base mb-2">Bachelor’s Degree (BA, 1997)</h3>
                                <p class="text-[#071e26] font-semibold mb-1 leading-snug text-sm">Psychology &
                                    African/African-American Studies</p>
                                <p class="text-sm text-gray-500">DePaul University</p>
                            </div>
                        </div>
                    </div>

                    <!-- Licenses -->
                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">Licenses</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-semibold text-[#071e26]">Licensed Psychologist – Georgia</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-semibold text-[#071e26]">Licensed Psychologist – District of
                                    Columbia</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
                                <span class="font-semibold text-[#071e26]">Licensed Psychologist – Florida
                                    (Telepsychology Provider)</span>
                            </li>
                            <li class="flex items-start gap-4 bg-[#f4f8f9] p-5 rounded-3xl">
                                <span
                                    class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-2 ring-4 ring-[#027289]/10"></span>
                                <div class="flex flex-col gap-2">
                                    <span class="font-bold text-[#071e26] text-[15px] leading-snug">PSYPACT Certificate
                                        – Authorized to Practice Interjurisdictional Telepsychology (APIT)</span>
                                    <span class="text-sm text-[#071e26]/70 leading-relaxed font-medium">in Alabama,
                                        Arizona, Arkansas, Colorado, Commonwealth of the Northern Mariana Islands,
                                        Connecticut, Delaware, District of Columbia, Florida, Georgia, Idaho, Illinois,
                                        Indiana, Kansas, Kentucky, Maine, Maryland, Michigan, Minnesota, Mississippi,
                                        Missouri, Nebraska, Nevada, New Hampshire, New Jersey, North Carolina, North
                                        Dakota, Ohio, Oklahoma, Pennsylvania, Rhode Island, South Carolina, South
                                        Dakota, Tennessee, Texas, Utah, Virginia, Washington, West Virginia, Wisconsin,
                                        and Wyoming</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Testimonials -->
                    <div class="bg-[#027289] rounded-[32px] p-8 md:p-10 shadow-lg relative overflow-hidden group">
                        <svg class="absolute top-0 right-0 text-white/5 w-48 h-48 -mt-6 -mr-6 transform rotate-12 transition-transform duration-700 group-hover:rotate-6 group-hover:scale-110"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <h2 class="text-3xl font-extrabold text-white mb-8 relative z-10">Testimonials</h2>
                        <blockquote class="relative z-10">
                            <p class="text-lg md:text-xl text-white/95 italic leading-relaxed mb-8 font-medium">"Dr.
                                Lewis-Arthur was life-changing… the best therapist I ever encountered! I was really
                                feeling down and couldn’t think straight. Once I saw Dr. Lewis-Arthur, she opened a
                                window of life in my dark word. She helped me to understand that I didn’t have to close
                                myself off from the world, nor would I be able to change things just being still. Dr.
                                Lewis-Arthur has a saying about moving the squeaky wheels in order to make changes and
                                see the results. I didn’t have a great relationship with my mother, and now I do thanks
                                to Dr. Lewis-Arthur. I was dealing with a lot of hurt with the loss of my children and I
                                was able to get on the ball and get my children back!"</p>

    <?php include "partials/footer.php"; ?>
