<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Psychological & Consulting Services in Atlanta, GA | GlobeCoRe Inc.";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    <!-- ===================== 3. ALERT / PROMO BAR ===================== -->
    <a href="tms-quiz/"
        class="group block bg-gradient-to-r from-secondary via-deepTeal to-secondary text-white text-center py-3 font-bold tracking-widest text-xs relative overflow-hidden hover:opacity-95 transition-all duration-300">
        <span class="relative z-10">TAKE OUR QUIZ TO SEE IF TMS IS RIGHT FOR YOU &#10148;</span>
        <span
            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></span>
    </a>

    <!-- ===================== 4. HERO IMAGE SECTION ===================== -->
    <style>
        @keyframes morphBlob {

            0%,
            100% {
                border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            }

            25% {
                border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
            }

            50% {
                border-radius: 50% 60% 30% 60% / 30% 60% 70% 40%;
            }

            75% {
                border-radius: 60% 30% 60% 40% / 70% 40% 50% 60%;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse-line {

            0%,
            100% {
                opacity: 0.4;
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes float-gentle {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes scroll-bounce {

            0%,
            100% {
                transform: translateY(0);
                opacity: 1;
            }

            50% {
                transform: translateY(8px);
                opacity: 0.5;
            }
        }

        .hero-up {
            animation: slideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .hero-right {
            animation: slideRight 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .delay-1 {
            animation-delay: 0.15s;
        }

        .delay-2 {
            animation-delay: 0.3s;
        }

        .delay-3 {
            animation-delay: 0.45s;
        }

        .delay-4 {
            animation-delay: 0.6s;
        }
    </style>

    <section class="relative min-h-[85vh] lg:min-h-[90vh] flex items-center overflow-hidden bg-[#071e26]">

        <!-- Animated Mesh Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#071e26]"></div>
            <!-- Morphing Blobs -->
            <div class="absolute -top-20 -right-20 w-[500px] h-[500px] bg-gradient-to-br from-primary/25 to-secondary/15 blur-3xl"
                style="animation: morphBlob 12s ease-in-out infinite;"></div>
            <div class="absolute -bottom-32 -left-20 w-[600px] h-[600px] bg-gradient-to-tr from-secondary/20 to-primary/10 blur-3xl"
                style="animation: morphBlob 15s ease-in-out infinite reverse;"></div>
            <div class="absolute top-1/3 right-1/4 w-[300px] h-[300px] bg-primary/8 rounded-full blur-3xl"
                style="animation: float-gentle 8s ease-in-out infinite;"></div>
        </div>

        <!-- Geometric Line Accents -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-[15%] left-0 w-[200px] h-[1px] bg-gradient-to-r from-primary/50 to-transparent"
                style="animation: pulse-line 3s ease-in-out infinite;"></div>
            <div class="absolute top-[40%] right-0 w-[150px] h-[1px] bg-gradient-to-l from-secondary/50 to-transparent"
                style="animation: pulse-line 4s ease-in-out infinite 1s;"></div>
            <div class="absolute bottom-[25%] left-[5%] w-[1px] h-[100px] bg-gradient-to-b from-primary/40 to-transparent"
                style="animation: pulse-line 3.5s ease-in-out infinite 0.5s;"></div>
            <!-- Corner Frame -->
            <div class="absolute top-8 left-8 w-16 h-16 border-l-2 border-t-2 border-primary/20 rounded-tl-lg"></div>
            <div class="absolute bottom-8 right-8 w-16 h-16 border-r-2 border-b-2 border-primary/20 rounded-br-lg">
            </div>
        </div>

        <!-- Main Content Grid -->
        <div
            class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center py-24 lg:py-0">

            <!-- Left: Text Content -->
            <div class="text-left">
                <!-- Badge -->
                <div
                    class="hero-right inline-flex items-center gap-2 bg-primary/10 border border-primary/25 rounded-full px-4 py-1.5 mb-8">
                    <span class="w-1.5 h-1.5 bg-primary rounded-full animate-pulse"></span>
                    <span class="text-primary/90 text-[11px] font-bold tracking-[0.2em] uppercase">Accepting New
                        Patients</span>
                </div>

                <h1
                    class="hero-up delay-1 text-4xl md:text-5xl lg:text-[3.2rem] xl:text-[3.8rem] font-bold text-white leading-[1.1] tracking-tight mb-6 relative">
                    Mental Health & Psychological Services in Atlanta
                    <span class="absolute bottom-2 left-0 w-48 h-2 bg-primary/40 -skew-x-12 rounded-full"></span>
                </h1>

                <p
                    class="hero-up delay-2 text-base md:text-lg text-gray-400 mb-10 max-w-lg leading-relaxed font-medium">
                    Comprehensive, culturally sensitive care designed to empower you through therapy, assessment, and
                    consulting.
                </p>

                <div class="hero-up delay-3 flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="#services"
                        class="group relative bg-primary text-white font-bold py-4 px-8 rounded-xl overflow-hidden hover:shadow-2xl hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-3">
                        <span
                            class="absolute inset-0 bg-gradient-to-r from-primary to-[#7a9e3f] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        <span class="relative">Our Services</span>
                        <svg class="relative w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="#contact"
                        class="text-white font-bold py-4 px-8 rounded-xl border border-white/15 hover:bg-white/5 hover:border-white/30 hover:-translate-y-0.5 transition-all duration-300 text-center">
                        Contact Us
                    </a>
                </div>

                <!-- Mini Stats Row -->
                <div class="hero-up delay-4 flex flex-wrap gap-8 text-white/70">
                    <div>
                        <span class="block text-2xl font-bold text-white">15+</span>
                        <span class="text-xs tracking-wider uppercase">Years Experience</span>
                    </div>
                    <div class="w-[1px] bg-white/10 self-stretch"></div>
                    <div>
                        <span class="block text-2xl font-bold text-white">5,000+</span>
                        <span class="text-xs tracking-wider uppercase">Patients Helped</span>
                    </div>
                    <div class="w-[1px] bg-white/10 self-stretch"></div>
                    <div>
                        <span class="block text-2xl font-bold text-white">4.9</span>
                        <span class="text-xs tracking-wider uppercase">★ Rating</span>
                    </div>
                </div>
            </div>

            <!-- Right: Feature Image Card -->
            <div class="hidden lg:block relative hero-up delay-2">
                <div class="relative">
                    <!-- Main Image -->
                    <div class="rounded-3xl overflow-hidden shadow-2xl shadow-black/40 border border-white/5">
                        <img src="assets/hero-main-v2.jpg" alt="Professional counseling session at GlobeCoRe"
                            class="w-full h-auto max-h-[450px] lg:max-h-[550px] xl:max-h-[600px] object-cover bg-[#071e26]">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#071e26]/60 via-transparent to-transparent rounded-3xl">
                        </div>
                    </div>

                    <!-- Floating Accent Card -->
                    <div class="absolute -bottom-6 -left-4 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/15 p-5 shadow-xl"
                        style="animation: float-gentle 5s ease-in-out infinite;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white text-sm font-bold">Inclusive</p>
                                <p class="text-white font-bold text-xs">Care</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Right Card -->
                    <div class="absolute -top-4 -right-4 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/15 p-4 shadow-xl"
                        style="animation: float-gentle 6s ease-in-out infinite 1s;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-secondary/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white text-sm font-bold">Expert</p>
                                <p class="text-white font-bold text-xs">Clinicians</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 z-10">
            <span class="text-white/40 text-[10px] tracking-[0.3em] uppercase font-medium">Scroll</span>
            <div class="w-5 h-8 rounded-full border border-white/30 flex items-start justify-center p-1.5">
                <div class="w-1 h-2 bg-primary rounded-full" style="animation: scroll-bounce 2s ease-in-out infinite;">
                </div>
            </div>
        </div>

        <!-- Bottom Gradient Fade -->
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-white"></div>
    </section>

    <!-- ===================== TELEHEALTH BANNER ===================== -->
    <div class="bg-white py-5 border-b border-gray-100">
        <p class="text-center text-2xl md:text-3xl font-bold text-textMain tracking-wide whitespace-nowrap px-4">Now Offering Telehealth Services In 42 States And Growing</p>
    </div>

    <!-- ===================== MISSION STATEMENT SECTION ===================== -->
    <section class="bg-secondary py-10 lg:py-12">
        <div class="max-w-5xl mx-auto px-6 text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold italic mb-6">Better People, Better Programs, In A Better World
            </h2>
            <p class="text-base md:text-lg leading-relaxed text-white/85">
                Where there is a thirst, there is a need. We support diverse individuals, couples, families, groups,
                and organizations locally and abroad to develop and implement sustainable solutions to the
                challenges of life and new life directions. With our psychological services in Atlanta, GA, we are
                committed to diversity, cultural inclusion and humility. Our work extends across the lifespan to
                children, adolescents, adults, and aging populations.
            </p>
        </div>
    </section>

    <!-- ===================== 5. PSYCHOLOGICAL SERVICES SECTION ===================== -->
    <section id="services" class="py-14 bg-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="mb-10">
                <span
                    class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase bg-primary/20 px-4 py-1.5 rounded-full mb-4">What
                    We Offer</span>
                <h2 class="text-4xl md:text-5xl font-bold text-textMain">Our Psychological Services in Atlanta, GA
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card: Counseling -->
                <a href="services/counseling.php" class="block">
                    <div
                        class="group bg-white rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 cursor-pointer">

                        <h3 class="text-lg font-bold text-textMain mb-2">Counseling</h3>
                        <p class="text-sm leading-relaxed text-gray-500 mb-5">Compassionate individual, couples, and
                            family
                            therapy tailored to your unique needs. Our licensed therapists provide a safe space for
                            healing
                        </p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="assets/counseling-main.jpg" alt="Counseling session at GlobeCoRe Atlanta"
                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </a>

                <!-- Card: Psychological Evaluations -->
                <!-- Card: Medication Management -->
                <a href="services/medication-management.php" class="block">
                    <div
                        class="group bg-white rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 cursor-pointer">

                        <h3 class="text-lg font-bold text-textMain mb-2">Medication Management</h3>
                        <p class="text-sm leading-relaxed text-gray-500 mb-5">Expert psychiatric medication management
                            to
                            optimize your treatment plan. Our providers ensure safe and effective pharmacological care.
                        </p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?auto=format&fit=crop&w=600&q=80"
                                alt="Medication management services"
                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </a>

                <!-- Card: TMS Therapy -->
                <a href="services/tms-therapy.php" class="block">
                    <div
                        class="group bg-white rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-500 cursor-pointer">

                        <h3 class="text-lg font-bold text-textMain mb-2">TMS Therapy</h3>
                        <p class="text-sm leading-relaxed text-gray-500 mb-5">Transcranial Magnetic Stimulation is an
                            FDA-approved, non-invasive treatment for depression. Experience breakthrough results with
                            us.
                        </p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="assets/Globe Core-109.jpg" alt="TMS therapy session at GlobeCoRe Atlanta"
                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </a>

                <!-- Card: Personal Development -->
            </div>
        </div>
    </section>




    <!-- ===================== CONDITIONS WE TREAT ===================== -->
    <section id="specialties" class="py-10 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-10">
                <span
                    class="inline-block text-secondary text-xs font-bold tracking-[0.2em] uppercase bg-secondary/10 px-4 py-1.5 rounded-full mb-4">Specialties</span>
                <h2 class="text-3xl md:text-4xl font-bold text-textMain">Conditions We Treat</h2>
                <div class="w-16 h-1 bg-gradient-to-r from-secondary to-primary rounded-full mx-auto mt-5"></div>
            </div>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="./specialties/addiction.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Addiction</a>
                <a href="./specialties/adhd.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">ADHD</a>
                <a href="./specialties/aging-issues.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Aging
                    Issues</a>
                <a href="./specialties/anger-management.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Anger
                    Management</a>
                <a href="./specialties/bipolar-disorder.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Bipolar
                    Disorder</a>
                <a href="./specialties/chronic-illness.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Chronic
                    Illness</a>
                <a href="./specialties/codependency.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Codependency</a>
                <a href="./specialties/depression-anxiety.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Depression
                    & Anxiety</a>
                <a href="./specialties/developmental-intellectual-disabilities.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Developmental
                    & Intellectual Disabilities</a>
                <a href="./specialties/eating-disorders.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Eating
                    Disorders</a>
                <a href="./specialties/fertility-pregnancy-parenting.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Fertility,
                    Pregnancy & Parenting</a>
                <a href="./specialties/finding-purpose.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Finding
                    Purpose</a>
                <a href="./specialties/grief-loss.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Grief
                    & Loss</a>
                <a href="./specialties/life-transitions.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Life
                    Transitions</a>
                <a href="./specialties/lgbtqi.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">LGBTQI+</a>
                <a href="./specialties/ocd.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">OCD</a>
                <a href="./specialties/racial-ethnic-and-religious-stressors.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Racial,
                    Ethnic and Religious Stressors</a>
                <a href="./specialties/relationship-marriage-issues.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Relationship
                    & Marriage Issues</a>
                <a href="./specialties/self-esteem.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Self-Esteem</a>
                <a href="./specialties/sleep-disorders.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Sleep
                    Disorders</a>
                <a href="./specialties/trauma.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Trauma</a>
                <a href="./specialties/women-s-issues.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Women's
                    Issues</a>
                <a href="./specialties/work-related-or-academic-stressors.php"
                    class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium text-textMain hover:bg-primary/15 hover:border-primary/40 hover:text-primary hover:shadow-sm transition-all duration-300 cursor-pointer text-center leading-tight hover:-translate-y-0.5">Work-Related
                    or Academic Stressors</a>
            </div>
        </div>
    </section>

    <!-- ===================== 6. COUNSELING & PSYCHOTHERAPY SECTION ===================== -->
    <section id="consulting" class="py-14 bg-bgOffWhite">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Split Header -->
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-10">
                <div class="lg:max-w-xl">
                    <span class="inline-block text-secondary text-xs font-bold tracking-[0.2em] uppercase mb-4">/
                        Counseling</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-textMain leading-tight">Our Consulting Services In Atlanta, GA</h2>
                </div>
                <div class="lg:max-w-md">
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">From individual therapy to couples, family,
                        and group sessions, our licensed therapists provide compassionate care to help you heal, grow,
                        and thrive. Choose excellence, choose GlobeCoRe.</p>
                    <div class="flex items-center gap-6">
                        <a href="./services/counseling.php"
                            class="inline-flex items-center text-secondary font-bold text-sm hover:gap-2 gap-1 transition-all duration-300">View
                            All Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg></a>
                        <a href="tel:7702841044"
                            class="inline-flex items-center text-secondary font-bold text-sm hover:gap-2 gap-1 transition-all duration-300">Call
                            For Booking <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <!-- Horizontal Image Cards -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">

                <!-- Card 1: Individual Therapy -->
                <a href="./services/counseling.php" class="group relative rounded-3xl overflow-hidden cursor-pointer h-64 lg:h-80 block">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=400&q=80"
                        alt="Individual therapist in Atlanta"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                        <h3 class="text-white text-sm font-bold leading-tight">Individual<br>Therapy</h3>
                        <div
                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 17L17 7M17 7H7M17 7v10" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Card 2: Couples Therapy -->
                <a href="./services/counseling.php" class="group relative rounded-3xl overflow-hidden cursor-pointer h-64 lg:h-72 block">
                    <img src="assets/Couple-Tharapy.webp"
                        alt="Couples therapist in Atlanta"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                        <h3 class="text-white text-sm font-bold leading-tight">Couples<br>Therapy</h3>
                        <div
                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 17L17 7M17 7H7M17 7v10" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Card 3: Family Therapy -->
                <a href="./services/counseling.php" class="group relative rounded-3xl overflow-hidden cursor-pointer h-64 lg:h-80 block">
                    <img src="https://images.unsplash.com/photo-1609220136736-443140cffec6?auto=format&fit=crop&w=400&q=80"
                        alt="Family therapist in Atlanta"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                        <h3 class="text-white text-sm font-bold leading-tight">Family<br>Therapy</h3>
                        <div
                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 17L17 7M17 7H7M17 7v10" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Card 4: Racial Healing and Hope -->
                <a href="./services/counseling.php" class="group relative rounded-3xl overflow-hidden cursor-pointer h-64 lg:h-72 block">
                    <img src="https://globecoreinc.com/wp-content/uploads/2023/08/group-therapy-racial-healing-and-hope-2-1-724x1024.png"
                        alt="Racial Healing and Hope group therapy"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                        <h3 class="text-white text-sm font-bold leading-tight">Racial Healing<br>&amp; Hope</h3>
                        <div
                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 17L17 7M17 7H7M17 7v10" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Card 5: The Roaring 20s -->
                <a href="./services/counseling.php" class="group relative rounded-3xl overflow-hidden cursor-pointer h-64 lg:h-80 block">
                    <img src="https://globecoreinc.com/wp-content/uploads/2023/07/Group-Therapy-The-Roaring-20s-1-791x1024.png"
                        alt="The Roaring 20s group therapy"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                        <h3 class="text-white text-sm font-bold leading-tight">The<br>Roaring 20s</h3>
                        <div
                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 17L17 7M17 7H7M17 7v10" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Card 6: Self Esteem Building for Women -->
                <a href="./services/counseling.php" class="group relative rounded-3xl overflow-hidden cursor-pointer h-64 lg:h-72 block">
                    <img src="https://globecoreinc.com/wp-content/uploads/2023/07/Group-Therapy-Self-Esteem-Building-1-724x1024.png"
                        alt="Self Esteem Building for Women group therapy"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 flex items-end justify-between">
                        <h3 class="text-white text-sm font-bold leading-tight">Self Esteem<br>Building</h3>
                        <div
                            class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 17L17 7M17 7H7M17 7v10" />
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- ===================== VIDEO SECTION ===================== -->
    <section class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-10">
                <span
                    class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase bg-primary/10 px-4 py-1.5 rounded-full mb-4">Watch</span>
                <h2 class="text-3xl md:text-4xl font-bold text-textMain">Learn More About GlobeCoRe</h2>
                <div class="w-16 h-1 bg-gradient-to-r from-primary to-secondary rounded-full mx-auto mt-5"></div>
            </div>
            <div class="relative w-full rounded-3xl overflow-hidden shadow-2xl" style="padding-top: 56.25%;">
                <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/u3w1ZifAZV8"
                    title="GlobeCoRe - Psychological &amp; Consulting Services" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <!-- ===================== PHOTO GALLERY CAROUSEL ===================== -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 mb-8">
            <div class="text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-textMain">Our <span class="text-primary">Gallery</span>
                </h3>
                <p class="text-gray-500 text-sm mt-2">A glimpse into our practice, team, and community.</p>
            </div>
        </div>
        <div class="relative max-w-7xl mx-auto px-12 sm:px-14">
            <div id="galleryTrack" class="flex gap-4 overflow-x-auto scroll-smooth pb-4 gallery-track"></div>
            <button id="galleryPrev"
                class="absolute left-2 sm:left-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white shadow-md border border-gray-200 flex items-center justify-center text-textMain hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 z-10"
                aria-label="Previous"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg></button>
            <button id="galleryNext"
                class="absolute right-2 sm:right-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white shadow-md border border-gray-200 flex items-center justify-center text-textMain hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 z-10"
                aria-label="Next"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg></button>
        </div>
    </section>
    <style>
        .gallery-track img {
            width: 300px;
            height: 220px;
            object-fit: cover;
            border-radius: 0.75rem;
            flex-shrink: 0;
        }

        .gallery-track::-webkit-scrollbar {
            height: 6px;
        }

        .gallery-track::-webkit-scrollbar-track {
            background: transparent;
        }

        .gallery-track::-webkit-scrollbar-thumb {
            background: #8BAF4C;
            border-radius: 3px;
        }

        .gallery-track {
            scrollbar-width: thin;
            scrollbar-color: #8BAF4C transparent;
        }
    </style>
    <script>
            (function () {
                var track = document.getElementById('galleryTrack');
                var imgs = [1, 2, 12, 16, 23, 25, 50, 52, 53, 54, 55, 58, 60, 61, 72, 73, 74, 75, 76, 80, 82, 83, 84, 85, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 111];
                imgs.forEach(function (n) {
                    var img = document.createElement('img');
                    img.src = 'assets/Globe Core-' + n + '.jpg';
                    img.alt = 'GlobeCoRe Gallery ' + n;
                    img.loading = 'lazy';
                    track.appendChild(img);
                });
                document.getElementById('galleryPrev').addEventListener('click', function () { track.scrollBy({ left: -640, behavior: 'smooth' }); });
                document.getElementById('galleryNext').addEventListener('click', function () { track.scrollBy({ left: 640, behavior: 'smooth' }); });
            })();
    </script>



    <!-- ===================== 7. IDENTITY & MISSION SECTION ===================== -->
    <section id="about" class="py-14 bg-gray-100 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Left: Image -->
            <div class="relative">
                <div class="absolute -top-6 -left-6 w-48 h-48 bg-primary/10 rounded-3xl -z-10"></div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary/10 rounded-3xl -z-10"></div>
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="GlobeCoRe team - diverse professionals providing inclusive psychological services in Atlanta"
                        class="w-full h-[450px] object-cover">
                </div>
            </div>

            <!-- Right: Our Mission -->
            <div>
                <span
                    class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase bg-primary/10 px-4 py-1.5 rounded-full mb-4">Who
                    We Are</span>
                <h2 class="text-3xl md:text-4xl font-bold text-textMain mb-6">Our Mission</h2>
                <p class="text-base leading-relaxed text-gray-500 mb-5">
                    At GlobeCoRe, we are dedicated to providing inclusive, culturally responsive psychological services
                    that honor the unique backgrounds and experiences of every individual we serve. Our team of licensed
                    professionals brings decades of combined expertise in therapy, psychological evaluation, and
                    organizational consulting.
                </p>
                <p class="text-base leading-relaxed text-gray-500 mb-8">
                    We believe that mental healthcare should be accessible, stigma-free, and reflective of the diverse
                    communities we serve. Whether through in-person sessions in Atlanta or our comprehensive telehealth
                    platform, our mission is to empower you on your journey toward lasting well-being and personal
                    growth.
                </p>
                <a href="#"
                    class="group inline-flex items-center bg-primary text-white font-bold py-3 px-7 rounded-xl hover:shadow-lg hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-300">
                    Read More
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <!-- ===================== WHY CHOOSE GLOBECORE ===================== -->
    <section class="py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-textMain">Why Choose <span
                        class="text-primary">GlobeCoRe?</span></h2>
            </div>

            <!-- 2-Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Left: Feature Cards -->
                <div class="space-y-6">

                    <!-- Feature 1 -->
                    <div class="flex items-start gap-4 bg-gray-100 rounded-2xl p-5 shadow-sm border border-gray-200">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-textMain mb-1">Culturally Responsive Care</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">Our clinicians honor diverse cultural
                                backgrounds, ensuring every client feels seen, heard, and respected throughout their
                                therapeutic journey.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start gap-4 bg-gray-100 rounded-2xl p-5 shadow-sm border border-gray-200">
                        <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-textMain mb-1">Evidence-Based Treatments</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">We utilize scientifically proven approaches
                                including TMS therapy, cognitive-behavioral techniques, and comprehensive psychological
                                evaluations for lasting results.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start gap-4 bg-gray-100 rounded-2xl p-5 shadow-sm border border-gray-200">
                        <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-textMain mb-1">Expert Multidisciplinary Team</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">Our licensed psychologists, therapists, and
                                consultants bring decades of combined experience across therapy, testing, and
                                organizational consulting.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex items-start gap-4 bg-gray-100 rounded-2xl p-5 shadow-sm border border-gray-200">
                        <div class="w-14 h-14 rounded-2xl bg-purple-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-textMain mb-1">In-Person & Telehealth Options</h4>
                            <p class="text-sm text-gray-500 leading-relaxed">Access quality mental health care from our
                                Atlanta office or from the comfort of your home. Flexible scheduling available Monday
                                through Saturday.</p>
                        </div>
                    </div>

                </div>

                <!-- Right: Image with Decorative Frame -->
                <div class="relative flex justify-center">
                    <div class="relative">
                        <!-- Decorative border frame -->
                        <div class="absolute -top-3 -right-3 w-full h-full rounded-3xl border-2 border-secondary"></div>
                        <img src="assets/Globe Core-81.jpg"
                            alt="GlobeCoRe team member presenting on TMS therapy and neurocare services"
                            class="relative rounded-3xl w-full max-w-lg h-[520px] object-cover shadow-xl">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== 8. TESTIMONIAL SLIDER ===================== -->
    <section class="relative py-14 overflow-hidden bg-gray-200">

        <!-- Header -->
        <div class="text-center mb-10 relative z-10">
            <span class="text-secondary text-sm font-semibold tracking-wide">Our Testimonials</span>
            <h2 class="text-3xl md:text-4xl font-bold text-textMain mt-2">What Our <span
                    class="text-primary italic">Patients Say</span></h2>
        </div>

        <!-- Slider Wrapper -->
        <div class="relative max-w-7xl mx-auto px-12 sm:px-14">

            <!-- Cards Track -->
            <div id="testimonialTrack" class="flex gap-6 overflow-x-hidden scroll-smooth">

                <!-- Card 1 -->
                <div
                    class="testimonial-card flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-bold text-textMain">5.0</span>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-gray-400 font-medium">01-15-2025</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6 min-h-[100px]">GlobeCoRe provided a deeply
                        compassionate and understanding environment. Their culturally sensitive approach made all the
                        difference in my personal growth journey. I felt truly seen and heard for the first time.</p>
                    <div class="pt-4 border-t border-gray-100">
                        <p class="text-sm"><span class="font-bold text-textMain">M.L.</span> <span
                                class="text-gray-400">on</span> <a href="#"
                                class="text-secondary font-semibold hover:underline">Google</a></p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="testimonial-card flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-bold text-textMain">5.0</span>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-gray-400 font-medium">08-19-2024</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6 min-h-[100px]">The TMS therapy at GlobeCoRe
                        changed my life. After years of struggling with treatment-resistant depression, I finally found
                        relief. The staff was incredibly supportive and knowledgeable throughout the entire process.</p>
                    <div class="pt-4 border-t border-gray-100">
                        <p class="text-sm"><span class="font-bold text-textMain">J.R.</span> <span
                                class="text-gray-400">on</span> <a href="#"
                                class="text-secondary font-semibold hover:underline">Google</a></p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="testimonial-card flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-bold text-textMain">5.0</span>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-gray-400 font-medium">06-22-2024</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6 min-h-[100px]">As a couple, we were on the
                        verge of giving up. The couples counseling at GlobeCoRe helped us rebuild our communication and
                        rediscover our connection. We are so grateful for the guidance we received.</p>
                    <div class="pt-4 border-t border-gray-100">
                        <p class="text-sm"><span class="font-bold text-textMain">A.T. &amp; D.T.</span> <span
                                class="text-gray-400">on</span> <a href="#"
                                class="text-secondary font-semibold hover:underline">Google</a></p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="testimonial-card flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-bold text-textMain">5.0</span>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-gray-400 font-medium">03-10-2024</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6 min-h-[100px]">Getting my son evaluated for
                        ADHD at GlobeCoRe was the best decision we made. The psychological evaluation was thorough, and
                        the team explained everything in a way we could understand. Now he's thriving in school.</p>
                    <div class="pt-4 border-t border-gray-100">
                        <p class="text-sm"><span class="font-bold text-textMain">S.K.</span> <span
                                class="text-gray-400">on</span> <a href="#"
                                class="text-secondary font-semibold hover:underline">Google</a></p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="testimonial-card flex-shrink-0 w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-bold text-textMain">5.0</span>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-gray-400 font-medium">11-05-2024</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-600 mb-6 min-h-[100px]">The telehealth option made
                        therapy accessible for me despite my busy schedule. My therapist was warm, professional, and
                        truly understood the unique challenges I face as a woman of color. I can't recommend GlobeCoRe
                        enough.</p>
                    <div class="pt-4 border-t border-gray-100">
                        <p class="text-sm"><span class="font-bold text-textMain">N.W.</span> <span
                                class="text-gray-400">on</span> <a href="#"
                                class="text-secondary font-semibold hover:underline">Google</a></p>
                    </div>
                </div>

            </div>

            <!-- Navigation Arrows -->
            <button id="testimonialPrev"
                class="absolute left-1 sm:left-2 top-1/2 translate-y-4 w-11 h-11 rounded-full bg-white shadow-lg border border-gray-100 flex items-center justify-center text-secondary hover:bg-secondary hover:text-white hover:scale-110 transition-all duration-300 z-10"
                aria-label="Previous testimonial">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="testimonialNext"
                class="absolute right-1 sm:right-2 top-1/2 translate-y-4 w-11 h-11 rounded-full bg-white shadow-lg border border-gray-100 flex items-center justify-center text-secondary hover:bg-secondary hover:text-white hover:scale-110 transition-all duration-300 z-10"
                aria-label="Next testimonial">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

        </div>
    </section>

    <!-- ===================== BLOG SLIDER SECTION ===================== -->
    <section class="py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Header -->
            <div class="text-center mb-10">
                <div class="flex items-center justify-center gap-2 mb-3">
                    <span class="w-2.5 h-2.5 bg-primary rounded-full"></span>
                    <span class="text-primary text-xs font-bold tracking-[0.15em] uppercase">Blog</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-textMain">Our Latest <span
                        class="text-primary">Blogs</span></h2>
                <p class="text-gray-500 text-sm mt-3 max-w-xl mx-auto">Stay informed with the latest insights on mental
                    health, therapy, and wellness from our expert team.</p>
            </div>

            <!-- Slider Wrapper -->
            <div class="relative px-6 sm:px-10">

                <!-- Blog Cards Track -->
                <div id="blogTrack" class="flex gap-6 overflow-x-hidden scroll-smooth">
                    <!-- Cards injected by JS -->
                </div>

                <!-- Navigation Arrows -->
                <button id="blogPrev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white shadow-lg border border-gray-100 flex items-center justify-center text-secondary hover:bg-primary hover:text-white hover:border-primary hover:scale-110 transition-all duration-300 z-10"
                    aria-label="Previous blog">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="blogNext"
                    class="absolute right-0 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white shadow-lg border border-gray-100 flex items-center justify-center text-secondary hover:bg-primary hover:text-white hover:border-primary hover:scale-110 transition-all duration-300 z-10"
                    aria-label="Next blog">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

            </div>

            <!-- View All Button -->
            <div class="text-center mt-10">
                <a href="#"
                    class="inline-flex items-center gap-2 bg-primary text-white font-bold py-3 px-8 rounded-xl hover:shadow-lg hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-300">
                    View All Blogs
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <!-- ===================== 9. FAQ SECTION ===================== -->
    <section id="faq" class="py-14 bg-bgOffWhite">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">

                <!-- Left Column: Heading + CTA Card -->
                <div class="lg:col-span-4">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2.5 h-2.5 bg-primary rounded-full"></span>
                        <span class="text-primary text-xs font-bold tracking-[0.15em] uppercase">FAQs</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-textMain leading-tight mb-10">Frequently Asked
                        Questions</h2>

                    <!-- CTA Card -->
                    <div class="bg-gray-50 rounded-2xl p-6">
                        <h3 class="text-xl font-bold text-primary mb-3">Still have questions?</h3>
                        <p class="text-sm text-gray-500 leading-relaxed mb-5">If you have more questions that
                            weren't covered here, feel free to reach out. We're here to help and
                            provide you with the information you need.</p>
                        <a href="#contact"
                            class="inline-block bg-primary text-white font-bold py-3 px-8 rounded-lg hover:shadow-lg hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-300">Contact
                            Us</a>
                    </div>
                </div>

                <!-- Right Column: Accordion -->
                <div class="lg:col-span-8">
                    <div class="space-y-3">
                        <details open
                            class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden group hover:border-primary/20 transition-all duration-300">
                            <summary
                                class="flex items-center justify-between cursor-pointer px-6 py-5 font-bold text-textMain hover:text-primary transition-all duration-300">
                                <span>What types of therapy do you offer?</span>
                                <span
                                    class="faq-icon w-8 h-8 rounded-full bg-bgOffWhite flex items-center justify-center flex-shrink-0 ml-4 text-textMain transition-all duration-300">
                                    <svg class="faq-plus w-4 h-4 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <svg class="faq-close w-4 h-4" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="px-6 pb-5 text-sm leading-relaxed text-gray-500">
                                We offer a wide range of therapeutic services including individual therapy, couples
                                counseling,
                                family therapy, TMS (Transcranial Magnetic Stimulation) therapy, psychological
                                evaluations, and
                                medication management. All of our services are available both in-person at our Atlanta
                                office
                                and via our secure telehealth platform.
                            </div>
                        </details>
                        <details
                            class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden group hover:border-primary/20 transition-all duration-300">
                            <summary
                                class="flex items-center justify-between cursor-pointer px-6 py-5 font-bold text-textMain hover:text-primary transition-all duration-300">
                                <span>Do you accept insurance?</span>
                                <span
                                    class="faq-icon w-8 h-8 rounded-full bg-bgOffWhite flex items-center justify-center flex-shrink-0 ml-4 text-textMain transition-all duration-300">
                                    <svg class="faq-plus w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <svg class="faq-close w-4 h-4 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="px-6 pb-5 text-sm leading-relaxed text-gray-500">
                                Yes, we accept most major insurance plans. We also offer competitive self-pay rates and
                                can
                                provide superbills for out-of-network reimbursement. Please contact our office at (770)
                                284-1044
                                for specific insurance verification and to discuss your coverage options before
                                scheduling.
                            </div>
                        </details>
                        <details
                            class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden group hover:border-primary/20 transition-all duration-300">
                            <summary
                                class="flex items-center justify-between cursor-pointer px-6 py-5 font-bold text-textMain hover:text-primary transition-all duration-300">
                                <span>How do I schedule an appointment?</span>
                                <span
                                    class="faq-icon w-8 h-8 rounded-full bg-bgOffWhite flex items-center justify-center flex-shrink-0 ml-4 text-textMain transition-all duration-300">
                                    <svg class="faq-plus w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <svg class="faq-close w-4 h-4 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="px-6 pb-5 text-sm leading-relaxed text-gray-500">
                                Scheduling is easy! You can call us at (770) 284-1044, use our online Client Portal, or
                                fill out
                                our New Appointment Request form on the Contact page. We offer flexible scheduling
                                including
                                evening slots to accommodate your availability. New patients are typically seen within
                                one to
                                two weeks.
                            </div>
                        </details>
                        <details
                            class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden group hover:border-primary/20 transition-all duration-300">
                            <summary
                                class="flex items-center justify-between cursor-pointer px-6 py-5 font-bold text-textMain hover:text-primary transition-all duration-300">
                                <span>What does a psychological consultant do?</span>
                                <span
                                    class="faq-icon w-8 h-8 rounded-full bg-bgOffWhite flex items-center justify-center flex-shrink-0 ml-4 text-textMain transition-all duration-300">
                                    <svg class="faq-plus w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <svg class="faq-close w-4 h-4 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="px-6 pb-5 text-sm leading-relaxed text-gray-500">
                                A psychological consultant provides expert guidance to individuals, organizations, and
                                groups on
                                mental health, behavioral, and emotional matters. Unlike traditional therapy, consulting
                                often
                                focuses on assessment, strategic recommendations, program development, and culturally
                                informed
                                solutions. At GlobeCoRe, our consultants work with schools, businesses, and community
                                organizations to improve well-being and performance.
                            </div>
                        </details>
                        <details
                            class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden group hover:border-primary/20 transition-all duration-300">
                            <summary
                                class="flex items-center justify-between cursor-pointer px-6 py-5 font-bold text-textMain hover:text-primary transition-all duration-300">
                                <span>What is the difference between a therapist and a consultant?</span>
                                <span
                                    class="faq-icon w-8 h-8 rounded-full bg-bgOffWhite flex items-center justify-center flex-shrink-0 ml-4 text-textMain transition-all duration-300">
                                    <svg class="faq-plus w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <svg class="faq-close w-4 h-4 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="px-6 pb-5 text-sm leading-relaxed text-gray-500">
                                A therapist provides ongoing treatment for mental health conditions through regular
                                sessions
                                focused on healing, coping, and personal growth. A consultant, on the other hand,
                                typically
                                offers specialized expertise for a defined period — such as evaluations, organizational
                                assessments, or program recommendations. Both roles are valuable, and at GlobeCoRe, we
                                offer
                                both services to provide comprehensive support.
                            </div>
                        </details>
                        <details
                            class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden group hover:border-primary/20 transition-all duration-300">
                            <summary
                                class="flex items-center justify-between cursor-pointer px-6 py-5 font-bold text-textMain hover:text-primary transition-all duration-300">
                                <span>What are the 5 C's of mental health?</span>
                                <span
                                    class="faq-icon w-8 h-8 rounded-full bg-bgOffWhite flex items-center justify-center flex-shrink-0 ml-4 text-textMain transition-all duration-300">
                                    <svg class="faq-plus w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                    <svg class="faq-close w-4 h-4 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </span>
                            </summary>
                            <div class="px-6 pb-5 text-sm leading-relaxed text-gray-500">
                                The 5 C's of mental health are: <strong>Connection</strong> (building meaningful
                                relationships),
                                <strong>Competence</strong> (developing skills and confidence), <strong>Coping</strong>
                                (managing stress effectively), <strong>Contribution</strong> (finding purpose through
                                giving
                                back), and <strong>Control</strong> (feeling empowered over your choices). These
                                principles
                                guide a balanced approach to well-being and are woven into our therapeutic work at
                                GlobeCoRe.
                            </div>
                        </details>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== 10. FOOTER ===================== -->

    <?php include "partials/footer.php"; ?>
