<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Medication Management | GlobeCoRe Inc. Atlanta, GA";
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
                    <span itemprop="name">Medication Management</span>
                    <meta itemprop="position" content="3">
                </li>
            </ol>
        </div>
    </nav>


    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-73.jpg" alt="Medication Management Services"
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
                        <img src="https://globecoreinc.com/wp-content/uploads/2025/03/pm.png" alt="Psychiatric Medicine"
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
                            <a href="../contact.php"
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
                                natural therapies including herbs, exercise, and nutritional <a href="../services/counseling.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">counseling</a>.
                            </p>
                            <p>
                                Traditional naturopathy does not treat diseases, but instead, recognizes that the
                                majority of health conditions are the result of cumulative lifestyle effects. You can
                                request a consultation or an appointment by calling our front desk to get scheduled.
                            </p>
                        </div>
                        <div class="mt-10">
                            <a href="../contact.php"
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
                        <img src="https://globecoreinc.com/wp-content/uploads/2025/03/mm.png"
                            alt="Naturopathic Medicine"
                            class="relative rounded-3xl shadow-2xl w-full object-cover aspect-[4/3]">
                    </div>
                </div>
            </div>
        </section>

        <!-- Schedule A 15 Minute Consultation CTA & Form -->
        <section class="bg-white py-14 lg:py-20 mb-8">
            <div class="max-w-[1050px] mx-auto px-4 sm:px-6">
                <!-- Banner Section -->
                <div class="relative w-full rounded-[24px] overflow-visible mb-16 shadow-none border border-transparent"
                    style="height: 380px;">
                    <!-- Image Container to strictly clip the corners without hiding the absolute overlapping button -->
                    <div class="absolute inset-0 rounded-[24px] overflow-hidden">
                        <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_3697e0344b0f47e3831777d8c0bdfbc6_mv2.jpg"
                            alt="Consultation"
                            class="absolute inset-0 w-full h-full object-cover object-top scale-[1.03]">

                        <!-- Smoother gradient mapping to the image style -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#21576d]/95 via-[#0c242e]/60 to-transparent mix-blend-multiply">
                        </div>
                        <div
                            class="absolute inset-x-0 bottom-0 top-1/2 bg-gradient-to-t from-[#0e3b4d]/80 to-transparent mix-blend-multiply">
                        </div>
                        <div class="absolute inset-0 bg-[#071e26]/30"></div>

                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-center p-8 z-10 w-full h-full">
                            <h2
                                class="text-3xl md:text-[40px] font-semibold text-white mb-4 drop-shadow-[0_2px_4px_rgba(0,0,0,0.6)] tracking-wide">
                                Schedule A 15 Minute Consultation</h2>
                            <p
                                class="text-white/95 text-[15px] max-w-[850px] mx-auto font-light leading-relaxed drop-shadow-[0_1px_2px_rgba(0,0,0,0.6)]">
                                Call Today for more information on our competitive rates and packages and let us get you
                                started!<br>
                                You owe it to yourself, your organization, your staff and customers and our community as
                                a whole.
                            </p>
                        </div>
                    </div>

                    <!-- Downward Circle Arrow (Overlapping bottom edge exactly halfway) -->
                    <div
                        class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 w-14 h-14 bg-[#38b6ff] rounded-full flex items-center justify-center shadow-md cursor-pointer hover:bg-[#2596d9] transition-colors z-20 hover:scale-105 duration-200">
                        <svg class="w-6 h-6 text-white translate-y-[1px]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Contact & Form Section -->
                <div class="grid grid-cols-1 md:grid-cols-[1fr_1.1fr] gap-10 lg:gap-14 items-stretch pt-2">

                    <!-- LEFT COLUMN: Contact Info -->
                    <div class="flex flex-col">
                        <h2 class="text-[30px] font-semibold text-[#1a1a1a] tracking-tight mb-8">GlobeCoRe, Inc</h2>

                        <div class="space-y-5 text-[#147b85] text-[13px] font-medium max-w-sm">
                            <div class="flex items-start gap-4">
                                <svg class="w-5 h-5 shrink-0 mt-[1px]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="leading-relaxed text-[#147b85] tracking-wide">3355 Lenox Road NE. Suite 1000
                                    Atlanta, GA 30326.</span>
                            </div>

                            <div class="flex items-center gap-4">
                                <svg class="w-[18px] h-[18px] shrink-0 translate-x-[1px]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span>(770) 284-1044</span>
                            </div>

                            <div class="flex items-center gap-4">
                                <svg class="w-[19px] h-[19px] shrink-0 translate-x-[1px]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>help@globecoreinc.com</span>
                            </div>
                        </div>

                        <div class="mt-8">
                            <a href="#contact"
                                class="inline-flex items-center gap-1.5 text-[#147b85] text-[17px] font-semibold hover:text-[#0e5c66] transition-colors">
                                Request Appointment
                                <svg class="w-[14px] h-[14px] mt-[1px]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: The Form -->
                    <!-- Very thin teal border to match design -->
                    <div class="border-[1.5px] border-[#147b85] bg-white p-7">
                        <form class="flex flex-col gap-[14px]">
                            <input type="text" placeholder="Full Name"
                                class="w-full px-[14px] py-[10px] border border-gray-300 text-[12px] focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400 rounded-sm">

                            <input type="email" placeholder="Email*"
                                class="w-full px-[14px] py-[10px] border border-gray-300 text-[12px] focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400 rounded-sm"
                                required>

                            <div
                                class="relative flex border border-gray-300 focus-within:border-[#147b85] bg-white text-[12px] rounded-sm">
                                <div
                                    class="flex items-center px-3 bg-white border-r border-gray-300 text-gray-600 gap-1.5 cursor-pointer hover:bg-gray-50 h-[38px]">
                                    <span class="text-[14px] leading-none">🇮🇳</span>
                                    <svg class="w-2.5 h-2.5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="tel" placeholder="Phone*"
                                    class="w-full px-[14px] py-[10px] focus:outline-none text-gray-700 placeholder-gray-400 h-[38px] rounded-r-sm"
                                    required>
                            </div>

                            <input type="text" placeholder="Select Date"
                                class="w-full px-[14px] py-[10px] border border-gray-300 text-[12px] focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400 rounded-sm">

                            <input type="text" placeholder="Enter Time"
                                class="w-full px-[14px] py-[10px] border border-gray-300 text-[12px] focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400 rounded-sm">

                            <div class="relative w-full">
                                <textarea placeholder="How can we help you?" rows="3"
                                    class="w-full px-[14px] py-[10px] border border-gray-300 text-[12px] focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400 resize-none rounded-sm min-h-[70px]"></textarea>
                                <!-- Inner corner resize drag lines -->
                                <div class="absolute bottom-1 right-1 pointer-events-none text-gray-400 opacity-60">
                                    <svg class="w-2.5 h-2.5" viewBox="0 0 10 10" fill="currentColor">
                                        <path d="M10 0v10H0L10 0z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 mt-1.5 mb-2.5">
                                <input type="checkbox" id="terms"
                                    class="mt-[2px] w-[11px] h-[11px] border-gray-400 text-[#147b85] focus:ring-[#147b85] rounded-sm shrink-0"
                                    required>
                                <label for="terms"
                                    class="text-[8.5px] text-black font-semibold leading-[1.3] text-justify tracking-normal">
                                    I agree to terms & conditions provided by the company. By providing my phone number
                                    and email address, I agree to receive text messages or emails from the business. I
                                    consent to receive Account notifications text messages from GlobeCoRe, Inc. Reply
                                    STOP to opt-out; Reply HELP for support. Message and data rates apply. Messaging
                                    frequency may vary. Visit
                                    <a href="#"
                                        class="text-blue-600 hover:underline">https://globecoreinc.com/privacy-policy/</a>
                                    for privacy policy and
                                    <a href="#"
                                        class="text-blue-600 hover:underline">https://globecoreinc.com/privacy-policy/</a>
                                    for Terms of Service.
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full bg-[#147b85] text-white font-bold h-[42px] hover:bg-[#0e5c66] transition-colors uppercase tracking-[0.05em] text-[13px] shadow-sm rounded-sm">
                                GET IN TOUCH
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "partials/footer.php"; ?>
