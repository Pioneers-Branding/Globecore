<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "TMS Therapy | GlobeCoRe Inc. Atlanta, GA";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    <!-- BREADCRUMB -->
    <nav aria-label="Breadcrumb" class="bg-bgOffWhite border-b border-gray-200 py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <ol class="flex flex-wrap items-center gap-1.5 text-xs text-gray-500" itemscope
                itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="../index.php" class="hover:text-primary transition-colors" itemprop="item"><span
                            itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="text-gray-300">&#8250;</li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="../index.php#services" class="hover:text-primary transition-colors" itemprop="item"><span
                            itemprop="name">Services</span></a>
                    <meta itemprop="position" content="2">
                </li>
                <li class="text-gray-300">&#8250;</li>
                <li class="text-primary font-semibold" itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <span itemprop="name">TMS Therapy</span>
                    <meta itemprop="position" content="3">
                </li>
            </ol>
        </div>
    </nav>


    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-55.jpg" alt="TMS Therapy Services"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay filter blur-[2px]">
            <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-[#071e26]/80 to-transparent"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center">
            <div
                class="inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">Clinical Expertise</span>
            </div>
            <h1
                class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">
                TMS Therapy Services
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care,
                and profound expertise.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../contact.php"
                    class="bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 text-lg">Book
                    a Consultation</a>
                <a href="../tms-quiz/"
                    class="bg-secondary text-white font-bold py-4 px-10 rounded-full hover:bg-deepTeal hover:shadow-lg hover:shadow-secondary/30 transition-all duration-300 text-lg">Take
                    Our Quiz</a>
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

    <!-- Main SEO Content -->
    <main id="content" class="py-20 lg:py-28 bg-white relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- LEFT: What is TMS & Image -->
                <div class="flex flex-col gap-10">
                    <div class="space-y-6">
                        <h2 class="text-3xl lg:text-5xl font-extrabold text-[#071e26] leading-tight tracking-tight">What
                            is TMS Therapy?</h2>
                        <p class="text-[17px] text-gray-600 leading-[1.8] font-medium">
                            Transcranial Magnetic Stimulation (TMS) Therapy in Atlanta is a non-invasive treatment for
                            mental health conditions like <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">depression</a>, <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">anxiety</a>, <a href="../specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">PTSD</a>, and <a href="../specialties/ocd.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">OCD</a>. It uses magnetic pulses to
                            stimulate brain areas responsible for mood regulation, aiding individuals who haven't
                            benefited from traditional treatments.
                        </p>
                    </div>

                    <div class="relative w-full rounded-3xl overflow-hidden shadow-2xl group">
                        <img src="https://globecoreinc.com/tms-therapy/apollo-i.jpg"
                            alt="Apollo TMS Therapy Machine in Atlanta"
                            class="w-full h-[400px] lg:h-[480px] object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-in-out">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#071e26]/90 via-transparent to-transparent opacity-80 mix-blend-multiply">
                        </div>

                        <!-- Floating badge -->
                        <div
                            class="absolute bottom-6 left-6 right-6 bg-white/10 backdrop-blur-md border border-white/20 p-5 rounded-2xl flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0 shadow-[0_0_20px_rgba(139,175,76,0.5)]">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold text-[15px] leading-tight">FDA-Approved</p>
                                <p class="text-white/80 text-[13px] font-medium mt-0.5">Safe & Non-Invasive Treatment
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: How it Works Grid -->
                <div class="flex flex-col h-full justify-center">
                    <div class="mb-10">
                        <span
                            class="text-primary font-bold tracking-[0.15em] text-[11px] uppercase bg-primary/10 px-4 py-1.5 rounded-full mb-4 inline-block">The
                            Mechanism</span>
                        <h2 class="text-[32px] md:text-[40px] font-extrabold text-[#071e26] mt-3 leading-tight">How TMS
                            Therapy Works</h2>
                        <p class="text-[16px] text-gray-600 mt-5 leading-relaxed font-medium">
                            TMS Therapy in Atlanta is ideal for those with treatment-resistant depression or seeking
                            drug-free options. By enhancing brain activity, it improves mood, motivation, and overall
                            well-being.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-6">
                        <div
                            class="bg-gray-50/80 border border-gray-100 rounded-[20px] p-6 flex gap-5 hover:bg-white hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300 group">
                            <div
                                class="w-[50px] h-[50px] bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:border-primary transition-colors">
                                <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-[17px] font-bold text-[#071e26] mb-2 leading-tight">Targeted Brain
                                    Stimulation</h4>
                                <p class="text-[14px] text-gray-600 leading-relaxed font-medium">Magnetic pulses target
                                    specific brain regions responsible for mood regulation.</p>
                            </div>
                        </div>

                        <div
                            class="bg-gray-50/80 border border-gray-100 rounded-[20px] p-6 flex gap-5 hover:bg-white hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300 group">
                            <div
                                class="w-[50px] h-[50px] bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0 group-hover:bg-secondary group-hover:border-secondary transition-colors">
                                <svg class="w-6 h-6 text-secondary group-hover:text-white transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-[17px] font-bold text-[#071e26] mb-2 leading-tight">Non-Invasive
                                    Treatment</h4>
                                <p class="text-[14px] text-gray-600 leading-relaxed font-medium">No surgery, no
                                    anesthesia, and minimal side effects compared to medications.</p>
                            </div>
                        </div>

                        <div
                            class="bg-gray-50/80 border border-gray-100 rounded-[20px] p-6 flex gap-5 hover:bg-white hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300 group">
                            <div
                                class="w-[50px] h-[50px] bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:border-primary transition-colors">
                                <svg class="w-6 h-6 text-primary group-hover:text-white transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-[17px] font-bold text-[#071e26] mb-2 leading-tight">Quick Sessions</h4>
                                <p class="text-[14px] text-gray-600 leading-relaxed font-medium">Sessions last 20-30
                                    minutes daily over 4-6 weeks with no downtime.</p>
                            </div>
                        </div>

                        <div
                            class="bg-gray-50/80 border border-gray-100 rounded-[20px] p-6 flex gap-5 hover:bg-white hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300 group">
                            <div
                                class="w-[50px] h-[50px] bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center flex-shrink-0 group-hover:bg-secondary group-hover:border-secondary transition-colors">
                                <svg class="w-6 h-6 text-secondary group-hover:text-white transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-[17px] font-bold text-[#071e26] mb-2 leading-tight">Long-Lasting Results
                                </h4>
                                <p class="text-[14px] text-gray-600 leading-relaxed font-medium">Patients often
                                    experience lasting relief and improved life functionality.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- ===== CONDITIONS TREATED GRID ===== -->
    <section class="py-24 bg-bgOffWhite relative border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span
                    class="text-primary font-bold tracking-[0.15em] text-[11px] uppercase bg-primary/10 px-4 py-1.5 rounded-full mb-4 inline-block">Indications</span>
                <h2 class="text-[32px] md:text-[40px] font-extrabold text-[#071e26] mt-4 leading-tight">Conditions TMS
                    Therapy Can Treat</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-6 rounded-full mb-6"></div>
                <p class="text-[16px] text-gray-600 leading-relaxed font-medium">Globecore Inc. utilizes advanced TMS
                    technology to provide relief for a variety of treatment-resistant mental health conditions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1: Depression -->
                <div
                    class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-[56px] h-[56px] bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-7 h-7 text-primary group-hover:text-white transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-[19px] font-bold text-[#071e26] mb-3 group-hover:text-primary transition-colors">
                        Depression (MDD)</h3>
                    <p class="text-[15px] text-gray-600 leading-relaxed font-medium">Stimulates underactive brain
                        regions to significantly improve mood and combat major depressive disorder safely.</p>
                </div>

                <!-- Card 2: Anxiety -->
                <div
                    class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-[56px] h-[56px] bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors duration-300">
                        <svg class="w-7 h-7 text-secondary group-hover:text-white transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-[19px] font-bold text-[#071e26] mb-3 group-hover:text-secondary transition-colors">
                        Anxiety Disorders</h3>
                    <p class="text-[15px] text-gray-600 leading-relaxed font-medium">Regulates brain activity linked to
                        worry and panic, providing calm and stability without the fog of medication.</p>
                </div>

                <!-- Card 3: OCD -->
                <div
                    class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-[56px] h-[56px] bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-7 h-7 text-primary group-hover:text-white transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-[19px] font-bold text-[#071e26] mb-3 group-hover:text-primary transition-colors">
                        Obsessive-Compulsive Disorder</h3>
                    <p class="text-[15px] text-gray-600 leading-relaxed font-medium">FDA-approved protocol that
                        effectively modulates neural circuits involved in highly compulsive behaviors.</p>
                </div>

                <!-- Card 4: PTSD -->
                <div
                    class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-[56px] h-[56px] bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors duration-300">
                        <svg class="w-7 h-7 text-secondary group-hover:text-white transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-[19px] font-bold text-[#071e26] mb-3 group-hover:text-secondary transition-colors">
                        Post-Traumatic Stress</h3>
                    <p class="text-[15px] text-gray-600 leading-relaxed font-medium">Reduces hyperactivity in
                        stress-related brain areas, allowing for improved emotional processing and resilience.</p>
                </div>

                <!-- Card 5: Chronic Pain -->
                <div
                    class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-[56px] h-[56px] bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors duration-300">
                        <svg class="w-7 h-7 text-primary group-hover:text-white transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-[19px] font-bold text-[#071e26] mb-3 group-hover:text-primary transition-colors">
                        Chronic Pain</h3>
                    <p class="text-[15px] text-gray-600 leading-relaxed font-medium">Alters pain perception by targeting
                        key brain areas involved in chronic pain processing, like fibromyalgia.</p>
                </div>

                <!-- Card 6: Addiction -->
                <div
                    class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1.5 transition-all duration-300 group">
                    <div
                        class="w-[56px] h-[56px] bg-secondary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors duration-300">
                        <svg class="w-7 h-7 text-secondary group-hover:text-white transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-[19px] font-bold text-[#071e26] mb-3 group-hover:text-secondary transition-colors">
                        Addiction Disorders</h3>
                    <p class="text-[15px] text-gray-600 leading-relaxed font-medium">Affects brain reward pathways to
                        significantly reduce cravings and support long-term substance recovery.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== WHY GLOBECORE ===== -->
    <section class="py-24 bg-[#071e26] relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 pointer-events-none">
            <div class="absolute top-10 left-10 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-secondary rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span
                        class="text-primary font-bold tracking-widest text-xs uppercase bg-primary/20 px-4 py-1.5 rounded-full mb-6 inline-block">Why
                        GlobeCoRe</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mt-4 mb-8 leading-tight">Why Atlanta Trusts
                        GlobeCoRe for TMS Therapy</h2>
                    <p class="text-gray-300 leading-relaxed mb-6">GlobeCoRe is proud to offer Deep TMS therapy — an
                        advanced evolution of standard TMS that reaches deeper brain structures for broader therapeutic
                        impact. Our clinicians are specially trained in TMS administration, safety protocols, and
                        outcome optimization.</p>
                    <p class="text-gray-300 leading-relaxed mb-8">Every TMS session at our Atlanta, GA clinic is
                        conducted in a calm, supportive environment. We combine the precision of neuroscience with the
                        warmth of compassionate mental health care, ensuring every patient feels safe and genuinely
                        supported.</p>
                    <a href="../contact.php"
                        class="inline-flex items-center gap-2 bg-primary text-white font-bold py-4 px-8 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 transition-all duration-300">
                        Start Your Journey Today
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-5">
                    <div
                        class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-colors duration-300">
                        <div class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="text-white font-bold mb-2 text-sm">Licensed Clinicians</h4>
                        <p class="text-gray-400 text-xs leading-relaxed">All services delivered by credentialed,
                            experienced mental health professionals.</p>
                    </div>
                    <div
                        class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-colors duration-300">
                        <div class="w-10 h-10 bg-secondary/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                            </svg>
                        </div>
                        <h4 class="text-white font-bold mb-2 text-sm">Culturally Inclusive</h4>
                        <p class="text-gray-400 text-xs leading-relaxed">Care designed for diverse backgrounds,
                            identities, and lived experiences.</p>
                    </div>
                    <div
                        class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-colors duration-300">
                        <div class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="text-white font-bold mb-2 text-sm">AI-Informed Care</h4>
                        <p class="text-gray-400 text-xs leading-relaxed">We leverage AI-assisted research and tools to
                            optimize every treatment plan.</p>
                    </div>
                    <div
                        class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-colors duration-300">
                        <div class="w-10 h-10 bg-secondary/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.069A1 1 0 0121 8.87v6.26a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="text-white font-bold mb-2 text-sm">Telehealth Ready</h4>
                        <p class="text-gray-400 text-xs leading-relaxed">HIPAA-compliant virtual sessions available
                            across Georgia and multiple states.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===== HOW TO GET STARTED (THE JOURNEY) ===== -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Decorative background elements -->
        <div class="absolute inset-0 opacity-5 pointer-events-none">
            <div class="absolute top-10 left-10 w-96 h-96 bg-primary rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-secondary rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT: Image -->
                <div class="relative order-2 lg:order-1 group">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-[2.5rem] blur-xl opacity-50 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <img src="https://globecoreinc.com/tms-therapy/2025-07-13.jpg" alt="TMS Therapy Patient in Atlanta"
                        class="w-full h-auto object-contain rounded-[2rem] shadow-2xl relative z-10 group-hover:scale-[1.02] transition-transform duration-500">
                </div>

                <!-- RIGHT: The Steps -->
                <div class="order-1 lg:order-2">
                    <span
                        class="text-primary font-bold tracking-[0.15em] text-[11px] uppercase bg-primary/10 px-4 py-1.5 rounded-full mb-6 inline-block">The
                        Journey</span>
                    <h2 class="text-[32px] md:text-[40px] font-extrabold text-[#071e26] mt-4 mb-10 leading-tight">How do
                        I Get Started With TMS Therapy in Atlanta?</h2>

                    <div
                        class="space-y-8 relative before:absolute before:inset-y-0 before:left-6 before:w-[2px] before:bg-gradient-to-b before:from-primary/20 before:via-secondary/20 before:to-transparent">

                        <!-- Step 1 -->
                        <div class="relative flex gap-6 group">
                            <div
                                class="w-12 h-12 rounded-full bg-white border-4 border-primary/20 flex flex-shrink-0 items-center justify-center font-black text-primary text-xl z-10 group-hover:bg-primary group-hover:text-white group-hover:border-primary/30 transition-all shadow-sm">
                                1</div>
                            <div>
                                <h3 class="text-[20px] font-bold text-[#071e26] mb-2 leading-tight">Schedule a
                                    Consultation</h3>
                                <p class="text-[15px] text-gray-600 leading-[1.7] font-medium">Discuss medical history,
                                    symptoms, and treatment goals with our compassionate team. We will also verify your
                                    insurance benefits to ensure a seamless start.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative flex gap-6 group">
                            <div
                                class="w-12 h-12 rounded-full bg-white border-4 border-secondary/20 flex flex-shrink-0 items-center justify-center font-black text-secondary text-xl z-10 group-hover:bg-secondary group-hover:text-white group-hover:border-secondary/30 transition-all shadow-sm">
                                2</div>
                            <div>
                                <h3 class="text-[20px] font-bold text-[#071e26] mb-2 leading-tight">Meet with a TMS
                                    Provider</h3>
                                <p class="text-[15px] text-gray-600 leading-[1.7] font-medium">Undergo a thorough
                                    evaluation to gather detailed info and design a personalized treatment plan. Our
                                    team will handle all insurance authorizations.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative flex gap-6 group">
                            <div
                                class="w-12 h-12 rounded-full bg-white border-4 border-primary/20 flex flex-shrink-0 items-center justify-center font-black text-primary text-xl z-10 group-hover:bg-primary group-hover:text-white group-hover:border-primary/30 transition-all shadow-sm">
                                3</div>
                            <div>
                                <h3 class="text-[20px] font-bold text-[#071e26] mb-2 leading-tight">Begin Your Treatment
                                    Journey</h3>
                                <p class="text-[15px] text-gray-600 leading-[1.7] font-medium">Attend daily, comfortable
                                    20-30 minute sessions. A typical course spans 6-8 weeks, leading to significant
                                    improvements in mood and overall well-being.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <a href="#contact"
                            class="inline-flex items-center gap-3 bg-primary text-white font-bold py-4 px-8 rounded-full hover:bg-[#7a9e3f] hover:shadow-[0_10px_30px_rgba(139,175,76,0.3)] transition-all duration-300 text-[16px]">
                            Start Your Journey
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE TMS THERAPY ===== -->
    <section class="py-24 bg-[#fbfffa] relative overflow-hidden border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <!-- Header -->
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="text-[32px] md:text-[40px] font-extrabold text-[#071e26] mb-6 leading-tight">Why Choose TMS
                    Therapy in Atlanta?</h2>
                <div class="w-16 h-[3px] bg-gradient-to-r from-[#027b87] to-[#8baf4c] mx-auto mb-8"></div>
                <p class="text-[16px] text-[#4a5568] leading-relaxed">
                    TMS Therapy in Atlanta offers unique benefits that set it apart from traditional treatments like
                    medication or talk therapy. It's ideal for individuals with treatment-resistant depression or those
                    who can't tolerate medication side effects.
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-10 mb-20 max-w-5xl mx-auto">
                <!-- Benefit 1 -->
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 bg-[#e2f0f1] rounded-lg flex items-center justify-center flex-shrink-0 text-[#027b87] shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a2b3c] text-[16px] mb-1">Non-Invasive Treatment</h4>
                        <p class="text-[14px] text-[#4a5568] leading-relaxed">Unlike medications, TMS targets the brain
                            directly without systemic side effects</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 bg-[#e2f0f1] rounded-lg flex items-center justify-center flex-shrink-0 text-[#027b87] shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a2b3c] text-[16px] mb-1">No Anesthesia Required</h4>
                        <p class="text-[14px] text-[#4a5568] leading-relaxed">Stay awake and alert during treatment with
                            no need for sedation</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 bg-[#e2f0f1] rounded-lg flex items-center justify-center flex-shrink-0 text-[#027b87] shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a2b3c] text-[16px] mb-1">Minimal Side Effects</h4>
                        <p class="text-[14px] text-[#4a5568] leading-relaxed">Well-tolerated with fewer side effects
                            compared to traditional medications</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 bg-[#e2f0f1] rounded-lg flex items-center justify-center flex-shrink-0 text-[#027b87] shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a2b3c] text-[16px] mb-1">No Downtime</h4>
                        <p class="text-[14px] text-[#4a5568] leading-relaxed">Resume daily activities immediately after
                            each session</p>
                    </div>
                </div>

                <!-- Benefit 5 -->
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 bg-[#eef5e1] rounded-lg flex items-center justify-center flex-shrink-0 text-[#8baf4c] shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a2b3c] text-[16px] mb-1">Targeted Brain Stimulation</h4>
                        <p class="text-[14px] text-[#4a5568] leading-relaxed">Precisely targets specific brain regions
                            responsible for mood regulation</p>
                    </div>
                </div>

                <!-- Benefit 6 -->
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 bg-[#e2f0f1] rounded-lg flex items-center justify-center flex-shrink-0 text-[#027b87] shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1a2b3c] text-[16px] mb-1">Long-Lasting Results</h4>
                        <p class="text-[14px] text-[#4a5568] leading-relaxed">Many patients experience sustained
                            improvements in mood and function</p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16 max-w-5xl mx-auto">
                <!-- Stat 1 -->
                <div
                    class="bg-white rounded-2xl p-10 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:-translate-y-1 transition-transform duration-300">
                    <p class="text-[48px] font-extrabold text-[#027b87] mb-2 leading-none">85%</p>
                    <p class="font-bold text-[#1a2b3c] text-[15px] mb-1">Success Rate</p>
                    <p class="text-sm text-gray-500">For treatment-resistant depression</p>
                </div>
                <!-- Stat 2 -->
                <div
                    class="bg-white rounded-2xl p-10 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:-translate-y-1 transition-transform duration-300">
                    <p class="text-[48px] font-extrabold text-[#8baf4c] mb-2 leading-none">6-8</p>
                    <p class="font-bold text-[#1a2b3c] text-[15px] mb-1">Weeks</p>
                    <p class="text-sm text-gray-500">Average treatment duration</p>
                </div>
                <!-- Stat 3 -->
                <div
                    class="bg-white rounded-2xl p-10 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:-translate-y-1 transition-transform duration-300">
                    <p class="text-[48px] font-extrabold text-[#027b87] mb-2 leading-none">0</p>
                    <p class="font-bold text-[#1a2b3c] text-[15px] mb-1">Systemic Side Effects</p>
                    <p class="text-sm text-gray-500">Unlike oral medications</p>
                </div>
            </div>

            <!-- CTA Banner -->
            <div
                class="bg-gradient-to-r from-[#027b87] to-[#8baf4c] rounded-[24px] p-10 md:p-12 text-center text-white shadow-xl relative overflow-hidden max-w-5xl mx-auto">
                <!-- Subtle Gradient Overlay -->
                <div class="absolute inset-0 bg-white/5"></div>

                <h3 class="text-[20px] md:text-[24px] font-bold mb-4 relative z-10 leading-snug max-w-4xl mx-auto">
                    For those seeking a drug-free, innovative solution, TMS Therapy in Atlanta is a game-changer.
                </h3>
                <p class="text-[15px] text-white/90 mb-8 relative z-10 font-medium">
                    Contact us today to learn more about how TMS therapy can help you achieve lasting mental health
                    improvements.
                </p>
                <a href="#contact"
                    class="inline-block bg-white text-[#027b87] font-bold py-3.5 px-8 rounded-full hover:bg-gray-50 transition-colors duration-300 relative z-10 shadow-lg text-[15px] hover:-translate-y-0.5 transform">
                    Contact Us Today
                </a>
            </div>
        </div>
    </section>

    <!-- ===== FAQS ===== -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <span
                    class="text-secondary font-bold tracking-[0.15em] text-[11px] uppercase bg-secondary/10 px-4 py-1.5 rounded-full mb-4 inline-block">Answers</span>
                <h2 class="text-[32px] md:text-[40px] font-extrabold text-[#071e26] mt-4 leading-tight">Frequently Asked
                    Questions</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-secondary to-primary mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <details
                    class="group bg-gray-50/50 rounded-[20px] border border-gray-100 [&_summary::-webkit-details-marker]:hidden open:bg-white open:shadow-[0_10px_30px_rgb(0,0,0,0.04)] open:border-primary/20 transition-all duration-300">
                    <summary class="flex items-center justify-between cursor-pointer p-6">
                        <h3 class="font-bold text-[#071e26] text-[17px] pr-8">Is TMS Therapy in Atlanta Safe?</h3>
                        <div
                            class="relative w-6 h-6 flex-shrink-0 text-primary group-open:text-secondary group-open:rotate-180 transition-all duration-300">
                            <svg class="w-6 h-6 absolute inset-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-[15px] text-gray-600 leading-relaxed font-medium">
                        Yes, TMS therapy is safe and very well-tolerated. It is completely non-invasive, requires no
                        anesthesia, and has minimal side effects compared to traditional psychotropic medications.
                    </div>
                </details>

                <!-- FAQ 2 -->
                <details
                    class="group bg-gray-50/50 rounded-[20px] border border-gray-100 [&_summary::-webkit-details-marker]:hidden open:bg-white open:shadow-[0_10px_30px_rgb(0,0,0,0.04)] open:border-primary/20 transition-all duration-300">
                    <summary class="flex items-center justify-between cursor-pointer p-6">
                        <h3 class="font-bold text-[#071e26] text-[17px] pr-8">How Long Does TMS Treatment in Atlanta
                            Take?</h3>
                        <div
                            class="relative w-6 h-6 flex-shrink-0 text-primary group-open:text-secondary group-open:rotate-180 transition-all duration-300">
                            <svg class="w-6 h-6 absolute inset-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-[15px] text-gray-600 leading-relaxed font-medium">
                        A typical course involves daily sessions lasting about 20-30 minutes, spanning over 4-6 weeks
                        (though depending on the individualized plan, some take 6-8 weeks total).
                    </div>
                </details>

                <!-- FAQ 3 -->
                <details
                    class="group bg-gray-50/50 rounded-[20px] border border-gray-100 [&_summary::-webkit-details-marker]:hidden open:bg-white open:shadow-[0_10px_30px_rgb(0,0,0,0.04)] open:border-primary/20 transition-all duration-300">
                    <summary class="flex items-center justify-between cursor-pointer p-6">
                        <h3 class="font-bold text-[#071e26] text-[17px] pr-8">Will My Insurance Cover TMS Therapy in
                            Atlanta?</h3>
                        <div
                            class="relative w-6 h-6 flex-shrink-0 text-primary group-open:text-secondary group-open:rotate-180 transition-all duration-300">
                            <svg class="w-6 h-6 absolute inset-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-[15px] text-gray-600 leading-relaxed font-medium">
                        Many insurance plans do cover TMS therapy, especially for patients diagnosed with
                        treatment-resistant depression. Our staff will actively work to verify and utilize your
                        benefits.
                    </div>
                </details>

                <!-- FAQ 4 -->
                <details
                    class="group bg-gray-50/50 rounded-[20px] border border-gray-100 [&_summary::-webkit-details-marker]:hidden open:bg-white open:shadow-[0_10px_30px_rgb(0,0,0,0.04)] open:border-primary/20 transition-all duration-300">
                    <summary class="flex items-center justify-between cursor-pointer p-6">
                        <h3 class="font-bold text-[#071e26] text-[17px] pr-8">What Results Can I Expect from TMS Therapy
                            in Atlanta?</h3>
                        <div
                            class="relative w-6 h-6 flex-shrink-0 text-primary group-open:text-secondary group-open:rotate-180 transition-all duration-300">
                            <svg class="w-6 h-6 absolute inset-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </summary>
                    <div class="px-6 pb-6 text-[15px] text-gray-600 leading-relaxed font-medium">
                        Patients often experience significant, lasting improvements in their mood, motivation, and
                        overall well-being, finally finding the relief they have been looking for.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- ===== STILL HAVE QUESTIONS ===== -->
    <section class="py-16 bg-bgOffWhite">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="bg-[#fcfdfa] rounded-[32px] p-10 md:p-14 text-center shadow-sm border border-gray-100">
                <h2 class="text-[28px] md:text-[32px] font-extrabold text-[#071e26] mb-4">Still have questions about TMS
                    Therapy?</h2>
                <p class="text-[15px] md:text-[16px] text-gray-600 mb-8 max-w-2xl mx-auto">We're here to help. Contact
                    us directly and we'll be happy to discuss your specific needs and how TMS therapy can help you.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:17702841044"
                        class="px-8 py-3.5 bg-[#027b87] text-white font-bold rounded-full hover:bg-[#026670] transition-colors duration-300">Call
                        +17702841044</a>
                    <a href="#contact-us"
                        class="px-8 py-3.5 border-2 border-[#8baf4c] text-[#8baf4c] font-bold rounded-full hover:bg-[#8baf4c] hover:text-white transition-colors duration-300">Schedule
                        Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT US ===== -->
    <section id="contact-us" class="py-24 bg-bgOffWhite border-t border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#1a2b3c] mb-4">Contact Us</h2>
                <p class="text-[15px] md:text-[16px] text-[#4a5568] max-w-2xl mx-auto">Ready to begin your TMS therapy
                    journey? Schedule your consultation today and take the first step toward better mental health.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24">
                <!-- Left: Contact Info -->
                <div>
                    <h3 class="text-2xl font-extrabold text-[#1a2b3c] mb-8">Get in Touch</h3>

                    <div class="space-y-8">
                        <!-- Office Location -->
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 bg-[#e2f0f1] rounded-xl flex items-center justify-center flex-shrink-0 text-[#027b87]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-[#1a2b3c] mb-1">Office Location</p>
                                <p class="text-[#4a5568] text-sm leading-relaxed">3355 Lenox Road NE, Suite
                                    700<br>Atlanta, GA 30326</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 bg-[#eef5e1] rounded-xl flex items-center justify-center flex-shrink-0 text-[#8baf4c]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-[#1a2b3c] mb-1">Phone</p>
                                <a href="tel:+17702841044"
                                    class="text-[#027b87] font-medium text-sm hover:underline">+17702841044</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 bg-[#e2f0f1] rounded-xl flex items-center justify-center flex-shrink-0 text-[#027b87]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-[#1a2b3c] mb-1">Email</p>
                                <a href="mailto:help@globecoreinc.com"
                                    class="text-[#027b87] font-medium text-sm hover:underline">help@globecoreinc.com</a>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 bg-[#eef5e1] rounded-xl flex items-center justify-center flex-shrink-0 text-[#8baf4c]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-[#1a2b3c] mb-1">Office Hours</p>
                                <p class="text-[#4a5568] text-sm leading-relaxed">Monday - Friday: 9:00 AM - 6:00
                                    PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: By appointment only</p>
                            </div>
                        </div>
                    </div>

                    <!-- Crisis Support -->
                    <div class="mt-8 bg-[#fff5f5] rounded-2xl p-6 border border-[#fed7d7]">
                        <h4 class="font-bold text-[#c53030] mb-3">Crisis Support</h4>
                        <p class="text-sm text-[#c53030] mb-4">If you're experiencing a mental health emergency, please
                            contact:</p>
                        <div class="space-y-2 text-sm text-[#c53030]">
                            <p class="font-bold">National Suicide Prevention Lifeline: 988</p>
                            <p class="font-bold">Crisis Text Line: Text HOME to 741741</p>
                            <p class="font-bold">Emergency Services: 911</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Form -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] h-fit">
                    <h3 class="text-[18px] font-bold text-[#1a2b3c] mb-6">Schedule Your Free TMS Consultation</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-[13px] font-bold text-[#1a2b3c] mb-1.5">Full Name *</label>
                            <input type="text" placeholder="Your full name"
                                class="w-full bg-white border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#027b87]/20 focus:border-[#027b87] transition-colors"
                                required>
                        </div>
                        <div>
                            <label class="block text-[13px] font-bold text-[#1a2b3c] mb-1.5">Email Address *</label>
                            <input type="email" placeholder="your.email@example.com"
                                class="w-full bg-white border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#027b87]/20 focus:border-[#027b87] transition-colors"
                                required>
                        </div>
                        <div>
                            <label class="block text-[13px] font-bold text-[#1a2b3c] mb-1.5">Phone Number *</label>
                            <input type="tel" placeholder="(555) 123-4567"
                                class="w-full bg-white border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#027b87]/20 focus:border-[#027b87] transition-colors"
                                required>
                        </div>
                        <div>
                            <label class="block text-[13px] font-bold text-[#1a2b3c] mb-1.5">Condition of
                                Interest</label>
                            <div class="relative">
                                <select
                                    class="w-full bg-white border border-gray-200 rounded-lg px-4 py-2.5 text-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#027b87]/20 focus:border-[#027b87] transition-colors text-gray-500">
                                    <option value="" disabled selected>Select a condition</option>
                                    <option value="depression">Depression</option>
                                    <option value="anxiety">Anxiety</option>
                                    <option value="ocd">OCD</option>
                                    <option value="other">Other</option>
                                </select>
                                <div
                                    class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[13px] font-bold text-[#1a2b3c] mb-1.5">Message</label>
                            <textarea rows="3"
                                placeholder="Tell us about your condition and any questions you have about TMS therapy..."
                                class="w-full bg-white border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#027b87]/20 focus:border-[#027b87] transition-colors resize-none"></textarea>
                        </div>
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-[#8baf4c] text-white font-bold py-3.5 rounded-lg hover:bg-[#7a9e3f] transition-colors text-sm">Schedule
                                Free Consultation</button>
                        </div>
                        <p class="text-[11px] text-center text-[#4a5568] mt-4 leading-relaxed">Our front office team
                            will reach out to you to provide the clinical assistance and schedule your consultation.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include "partials/footer.php"; ?>
