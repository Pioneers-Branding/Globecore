<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Medication Management | GlobeCoRe Inc. Atlanta, GA";
include_once "../partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>

    <!-- BREADCRUMB -->
    <nav aria-label="Breadcrumb" class="bg-bgOffWhite border-b border-gray-200 py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <ol class="flex flex-wrap items-center gap-1.5 text-xs text-gray-500" itemscope
                itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="/index.php" class="hover:text-primary transition-colors" itemprop="item"><span
                            itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="text-gray-300">&#8250;</li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="/index.php#services" class="hover:text-primary transition-colors" itemprop="item"><span
                            itemprop="name">Services</span></a>
                    <meta itemprop="position" content="2">
                </li>
                <li class="text-gray-300">&#8250;</li>
                <li class="text-primary font-semibold" itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <span itemprop="name">Medication Management</span>
                    <meta itemprop="position" content="3">
                </li>
            </ol>
        </div>
    </nav>


    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="/assets/Globe Core-73.jpg" alt="Medication Management Services"
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
                Medication Management Services
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
    <main id="content" class="bg-white overflow-hidden">
        <!-- 1. Intro Section -->
        <section class="py-20 lg:py-28 bg-white relative">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#071e26] leading-tight mb-8">Medication Management
                </h2>
                <div class="prose prose-lg text-gray-600 mx-auto max-w-none leading-relaxed">
                    <p>
                        Medication Management focuses on treatment that involves providing patients with care and
                        continuous discussion in order to find the treatment plan that best fits their needs. GlobeCoRe
                        primarily utilizes two components of medication management which includes psychiatry and
                        naturopathy.
                    </p>
                    <p>
                        These services allow patients to choose between traditional medication such as pharmaceutical
                        prescriptions and holistic remedies such as herbal supplements. Ask your therapist today if
                        either of these treatments would be beneficial to you.
                    </p>
                </div>
                <div class="mt-10">
                    <a href="tel:770-284-1044"
                        class="inline-block bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 text-lg">Call
                        Now</a>
                </div>
            </div>
        </section>

        <!-- 2. Psychiatric Medicine (Left Image, Right Text) -->
        <section class="py-16 lg:py-24 bg-bgOffWhite relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Image Left -->
                    <div class="relative group">
                        <div
                            class="absolute -inset-4 bg-primary/10 rounded-[40px] transform group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <img src="/wp-content/uploads/2025/03/pm.png" alt="Psychiatric Medicine"
                            class="relative rounded-3xl shadow-2xl w-full object-cover aspect-[4/3]">
                    </div>
                    <!-- Content Right -->
                    <div
                        class="bg-white p-10 md:p-14 rounded-[32px] shadow-xl border border-gray-100 relative overflow-hidden group hover:shadow-2xl transition-all duration-500">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-secondary/5 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110 duration-500">
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#071e26] mb-8 relative inline-block">
                            Psychiatric Medicine
                            <span class="absolute -bottom-2 left-0 w-16 h-1 bg-secondary rounded-full"></span>
                        </h2>
                        <div class="prose prose-lg text-gray-700 space-y-6 leading-relaxed relative z-10 max-w-none">
                            <p>
                                Psychiatry services offers medication management that when taken in conjunction with
                                consistent talk therapy appointments can help aid in the progression of your treatment.
                                Medications can support & increase your chemical makeup in your brain and therefore
                                increase results of treatment. Results can include increase in mood, motivation and
                                outlook on life.
                            </p>
                            <p>
                                These can help you achieve your therapeutic goals and help you better function. You can
                                request a consultation or an appointment by calling our front desk to get scheduled.
                            </p>
                        </div>
                        <div class="mt-10">
                            <a href="/contact.php"
                                class="inline-flex items-center gap-2 bg-[#071e26] text-white font-bold py-3.5 px-8 rounded-full hover:bg-secondary hover:shadow-lg transition-all duration-300">
                                Request Info
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

        <!-- 3. Naturopathic Medicine (Left Text, Right Image) -->
        <section class="py-16 lg:py-24 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Content Left -->
                    <div
                        class="order-2 lg:order-1 bg-bgOffWhite p-10 md:p-14 rounded-[32px] shadow-lg border border-gray-50 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
                        <div
                            class="absolute bottom-0 left-0 w-32 h-32 bg-primary/5 rounded-tr-full -ml-8 -mb-8 transition-transform group-hover:scale-110 duration-500">
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#071e26] mb-8 relative inline-block">
                            Naturopathic Medicine
                            <span class="absolute -bottom-2 left-0 w-16 h-1 bg-primary rounded-full"></span>
                        </h2>
                        <div class="prose prose-lg text-gray-700 space-y-6 leading-relaxed relative z-10 max-w-none">
                            <p>
                                We offer naturopathic treatment options as an alternative solution to traditional
                                medicine. Naturopathic medicine is a distinct system of primary holistic health care
                                that emphasizes prevention, wellness, and self-healing processes through the use of
                                natural therapies including herbs, exercise, and nutritional <a href="/services/counseling.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">counseling</a>.
                            </p>
                            <p>
                                Traditional naturopathy does not treat diseases, but instead, recognizes that the
                                majority of health conditions are the result of cumulative lifestyle effects. You can
                                request a consultation or an appointment by calling our front desk to get scheduled.
                            </p>
                        </div>
                        <div class="mt-10">
                            <a href="/contact.php"
                                class="inline-flex items-center gap-2 bg-primary text-white font-bold py-3.5 px-8 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg transition-all duration-300">
                                Request Info
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Image Right -->
                    <div class="order-1 lg:order-2 relative group">
                        <div
                            class="absolute -inset-4 bg-secondary/10 rounded-[40px] transform group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <img src="/wp-content/uploads/2025/03/mm.png"
                            alt="Naturopathic Medicine"
                            class="relative rounded-3xl shadow-2xl w-full object-cover aspect-[4/3]">
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section Custom Build -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 pb-24 relative z-10 pt-10">
            <div
                class="bg-white rounded-[32px] md:rounded-[40px] shadow-2xl overflow-hidden flex flex-col lg:flex-row border border-gray-100 relative">

                <!-- Left Info Panel -->
                <div
                    class="lg:w-2/5 md:bg-gradient-to-br from-[#071e26] to-[#027289] bg-[#071e26] text-white p-8 md:p-12 lg:p-16 flex flex-col justify-between relative overflow-hidden">
                    <!-- Abstract decorative BG shapes -->
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-20 h-20 bg-white/10 rounded-2xl flex items-center justify-center mb-10 backdrop-blur-md border border-white/20 shadow-lg">
                            <img src="/assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Icon"
                                class="w-14 h-14 object-contain brightness-0 invert opacity-90">
                        </div>
                        <h3 class="text-3xl md:text-4xl font-extrabold mb-6 leading-tight tracking-tight">GlobeCoRe
                            Callback Scheduling</h3>
                        <p class="text-white/80 leading-relaxed text-[15px] mb-12">
                            Hi, Thank you for choosing GlobeCoRe for your Mental Health & Consulting Services. Please
                            schedule a day and time that works best for our callback so we can match you with one of our
                            clinicians. For questions and immediate concerns, please email us at <br><a
                                href="mailto:help@globecoreinc.com"
                                class="text-primary hover:text-white underline font-semibold transition-colors mt-2 inline-block">help@globecoreinc.com</a>
                            or call us at <strong class="text-white">(770) 284-1044</strong>. Thank you.
                        </p>
                    </div>
                    <!-- Details mimicking the widget sidepanel -->
                    <div
                        class="space-y-5 relative z-10 bg-black/10 p-6 rounded-2xl backdrop-blur-sm border border-white/10">
                        <div class="flex items-start gap-4 text-white">
                            <div
                                class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="font-bold block mb-0.5">Duration</span>
                                <span class="text-white/70 text-sm">15 Mins</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 text-white">
                            <div
                                class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <span class="font-bold block mb-0.5">Location</span>
                                <span class="text-white/70 text-sm">Web meeting details provided upon
                                    confirmation.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form Panel -->
                <div class="lg:w-3/5 p-8 md:p-12 lg:p-16 bg-white relative">
                    <h4 class="text-2xl md:text-3xl font-extrabold text-[#071e26] mb-8">Book Your Appointment</h4>
                    <div class="h-[600px] lg:h-[700px] overflow-y-auto pr-2 custom-scrollbar border border-gray-50 rounded-2xl">
                        <iframe src="https://api.leadconnectorhq.com/widget/bookings/globecore9wb1k6" style="border:none;" name="myiFrame" scrolling="yes" frameborder="0" height="1000" width="100%" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include "../partials/footer.php"; ?>
