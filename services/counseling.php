<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Counseling | GlobeCoRe Inc. Atlanta, GA";
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
                    <span itemprop="name">Counseling</span>
                    <meta itemprop="position" content="3">
                </li>
            </ol>
        </div>
    </nav>


    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-105.jpg" alt="Counseling Services"
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
                Counseling Services
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

    <!-- Main SEO Content -->

    <!-- Main Content Redesign -->

    <!-- Main Content Redesign to strictly match visual Elementor box cards -->
    <main id="content" class="py-16 lg:py-24 bg-white relative">

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <!-- Top Header section matching the source block -->
            <div class="mb-12">
                <h1 class="text-[#071e26] text-4xl lg:text-5xl font-extrabold mb-4 font-raleway">Our Consulting Services In Atlanta, GA</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Individual Therapist Card -->
                <div
                    class="bg-white p-8 md:p-10 rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col h-full hover:shadow-xl transition-shadow">
                    <h2 class="text-3xl font-extrabold text-[#071e26] mb-6 font-raleway">Individual Therapist in Atlanta
                    </h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed text-[15px] font-medium flex-grow">
                        <p>Individual therapy focuses on a variety of issues, including <a
                                href="../specialties/trauma.php"
                                class="text-secondary hover:text-primary transition-colors underline">trauma and
                                abuse</a>, <a href="../specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">PTSD</a>, <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">depression</a>, codependency, <a href="../specialties/grief-loss.php"
                                class="text-secondary hover:text-primary transition-colors underline">grief and
                                loss</a>, <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">anxiety</a>, women’s issues, <a href="../specialties/self-esteem.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">self-esteem</a> and identity issues, and relationship
                            issues.</p>
                        <p>Some social issues, such as struggles with being <a href="../specialties/lgbtqi.php"
                                class="text-secondary hover:text-primary transition-colors underline">LGBTQIA+</a>,
                            racial and ethnic matters, work-related and academic stressors, and religious and spiritual
                            concerns, can be addressed through individual therapy.</p>
                        <p>Parents and partners struggling with infertility, parenthood, abortion, and miscarriages can
                            receive relief and be helped to cope with these problems.</p>
                        <p>Individual therapist in Atlanta can benefit those living with <a
                                href="../specialties/chronic-illness.php"
                                class="text-secondary hover:text-primary transition-colors underline">chronic
                                illness</a>, including cancer survivors, bariatric surgical patients, individuals with
                            HIV/AIDS, <a href="../specialties/developmental-intellectual-disabilities.php"
                                class="text-secondary hover:text-primary transition-colors underline">developmental and
                                intellectual disabilities</a>, and seniors/geriatrics adjusting to aging.</p>
                    </div>
                    <div class="mt-8">
                        <a href="../contact.php"
                            class="inline-block bg-[#027289] text-white font-bold py-3 px-8 rounded-full hover:bg-[#071e26] transition-colors focus:ring-2 focus:ring-[#027289] focus:ring-offset-2">Get
                            in Touch</a>
                    </div>
                </div>

                <!-- Couples Therapist Card -->
                <div
                    class="bg-white p-8 md:p-10 rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col h-full hover:shadow-xl transition-shadow">
                    <h2 class="text-3xl font-extrabold text-[#071e26] mb-6 font-raleway">Couples Therapist in Atlanta
                    </h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed text-[15px] font-medium flex-grow">
                        <p>Couples therapy is available for people in relationships, including those currently dating,
                            engaged, pre-marital, married, remarried, or divorced.</p>
                        <p>The primary goal of Couples Therapist in Atlanta is to help couples <a
                                href="../specialties/finding-the-love-you-deserve.php"
                                class="text-secondary hover:text-primary transition-colors underline">build a strong
                                relationship</a> by exploring various areas of core relationships. Such core issues may
                            include conflict management, communication skills, financial responsibility, child and
                            parenting responsibilities, physical, sexual or emotional roles, and extended and blended
                            family roles.</p>
                        <p>Treatment is available for couples with other relationship challenges, including
                            extra-marital affairs, affairs, marriage disputes, divorce, betrayal, communication
                            problems, work-life balance, lack of time, <a href="../specialties/grief-loss.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">grief</a>/loss, intimacy struggles, spiritual and
                            religious struggles, racial and ethnic matters, <a
                                href="../specialties/fertility-pregnancy-parenting.php"
                                class="text-secondary hover:text-primary transition-colors underline">infertility,
                                delayed parenthood</a>, abortion, and miscarriages.<br>Pre-marital and post-marital
                            counseling is offered.</p>
                        <p>Our counseling meets the requirements outlined by Georgia for Qualifying Pre-marital
                            Education, thus allowing couples to receive their marriage license at no charge.</p>
                        <p>Checkout our discounted Marital <a href="../pricing-insurance.php"
                                class="text-secondary hover:text-primary transition-colors underline">Counseling
                                Packages</a></p>
                    </div>
                    <div class="mt-8">
                        <a href="../contact.php"
                            class="inline-block bg-[#027289] text-white font-bold py-3 px-8 rounded-full hover:bg-[#071e26] transition-colors focus:ring-2 focus:ring-[#027289] focus:ring-offset-2">Get
                            in Touch</a>
                    </div>
                </div>
            </div>

            <!-- Family Therapy Full Width Card -->
            <div class="mb-20">
                <div
                    class="bg-white p-8 md:p-10 rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col hover:shadow-xl transition-shadow">
                    <h2 class="text-3xl font-extrabold text-[#071e26] mb-6 font-raleway">Family Therapist in Atlanta
                    </h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed text-[15px] font-medium">
                        <p>Treatment for various forms of family conflict is available through our Family Therapist in
                            Atlanta.</p>
                        <p>We specialize in treating family conflict including: communication difficulties, lack of
                            time, grief/loss, LGBTQIA+ family issues, financial discord, troubled children, tweens,
                            teens, family planning, family transition (birth of child, child leaving home, inability to
                            have a child, separation, divorce), spiritual and religious struggles, parental issues, and
                            race and cultural challenges.</p>
                        <p>Support is available for families coping with <a href="../specialties/chronic-illness.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">chronic illness</a>, including cancer survivors,
                            bariatric surgical patients, families dealing with HIV/AIDS, families dealing with
                            developmental and intellectual disabilities, and <a href="../specialties/aging-issues.php"
                                class="text-secondary hover:text-primary transition-colors underline">seniors/geriatrics
                                adjusting to aging</a>.</p>
                    </div>
                    <div class="mt-8">
                        <a href="../contact.php"
                            class="inline-block bg-[#027289] text-white font-bold py-3 px-8 rounded-full hover:bg-[#071e26] transition-colors focus:ring-2 focus:ring-[#027289] focus:ring-offset-2">Get
                            in Touch</a>
                    </div>
                </div>
            </div>

            <!-- Group Therapy Area -->
            <div class="mb-12">
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#071e26] mb-6 font-raleway text-center">Group
                    Therapist in Atlanta</h2>
                <div class="text-gray-600 leading-relaxed text-center max-w-4xl mx-auto space-y-4 font-medium mb-16">
                    <p>A selection of group therapy offerings is available. These group therapy sessions in atlanta
                        pertain to a variety of topics, including grief, loss and depression, anxiety,
                        self-esteem/identity issues, work-life balance, women’s empowerment, body positivity, DBT,
                        deserving love, preoperative and post-operative bariatric support, codependency, and
                        relationship challenges.</p>
                    <p>Our current group therapist offerings include the following. Please ask a GlobeCoRe
                        representative for more information about how to join one of our awesome groups!</p>
                </div>

                <div class="space-y-16">
                    <!-- Group 1 -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 overflow-hidden flex flex-col md:flex-row hover:shadow-xl transition-shadow">
                        <div class="md:w-5/12">
                            <img src="https://globecoreinc.com/wp-content/uploads/2023/08/group-therapy-racial-healing-and-hope-2-1-724x1024.png"
                                alt="Racial Healing and Hope" class="w-full h-full object-cover min-h-[300px]">
                        </div>
                        <div class="md:w-7/12 p-8 md:p-10 flex flex-col justify-center">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#071e26] mb-4">Racial Healing and Hope</h3>
                            <div class="space-y-4 text-gray-600 leading-relaxed font-medium mb-6">
                                <p>This virtual therapy group is ideal for adults (18+) from communities of color who
                                    are seeking skills, social connection, and community while navigating racial
                                    discrimination in an intimate group environment built on trust and openness.</p>
                                <p>Feeling depleted and exhausted from the weight of navigating racism and inequities?
                                    Join our empowering racial healing and hope group to learn in a community space how
                                    to build resilience and support each other around experiences of racism and racial
                                    discrimination.</p>
                            </div>
                            <div>
                                <a href="../contact.php"
                                    class="inline-block bg-[#027289] text-white font-bold py-3 px-8 rounded-full hover:bg-[#071e26] transition-colors focus:ring-2 focus:ring-[#027289] focus:ring-offset-2">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Group 2 -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 overflow-hidden flex flex-col md:flex-row-reverse hover:shadow-xl transition-shadow">
                        <div class="md:w-5/12">
                            <img src="https://globecoreinc.com/wp-content/uploads/2023/07/Group-Therapy-The-Roaring-20s-1-791x1024.png"
                                alt="The Roaring 20s" class="w-full h-full object-cover min-h-[300px]">
                        </div>
                        <div class="md:w-7/12 p-8 md:p-10 flex flex-col justify-center">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#071e26] mb-4">The Roaring 20s</h3>
                            <div class="text-gray-600 leading-relaxed font-medium mb-4">
                                <p>A support/psychotherapy group for 20 somethings dealing with the adjustment to young
                                    adulthood.</p>
                                <p class="font-bold text-gray-800 mt-4 mb-2">Topics will include:</p>
                            </div>
                            <ul class="list-disc pl-5 space-y-2 text-gray-600 font-medium">
                                <li>Emerging from the family of origin</li>
                                <li>Adjusting to the world of work</li>
                                <li>Dating, relationships, and sexual identity issues</li>
                                <li>Coping with supervisors, peers and co-workers</li>
                                <li>Time, money and resource management</li>
                                <li>Assertiveness and effective communication skills</li>
                                <li>Impostor syndrome, managing your unreasonable expectations of yourself</li>
                                <li>Self-confidence and self-esteem issues</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Group 3 -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 overflow-hidden flex flex-col md:flex-row hover:shadow-xl transition-shadow">
                        <div class="md:w-5/12">
                            <img src="https://globecoreinc.com/wp-content/uploads/2023/07/Group-Therapy-Self-Esteem-Building-1-724x1024.png"
                                alt="Self Esteem Building for Women" class="w-full h-full object-cover min-h-[300px]">
                        </div>
                        <div class="md:w-7/12 p-8 md:p-10 flex flex-col justify-center">
                            <h3 class="text-2xl lg:text-3xl font-bold text-[#071e26] mb-4">Self Esteem Building for
                                Women</h3>
                            <div class="space-y-4 text-gray-600 leading-relaxed font-medium mb-6">
                                <p>This group therapy will focus on enhancing self-esteem, learn to give self love and
                                    not only accept but celebrate yourself and everything about you.</p>
                                <p>Feeling stuck and bad about yourself? Do you tend to blame yourself for things in
                                    others you give grace? This group will focus on enhancing self esteem in women,
                                    learn to give self love not only accept, but celebrate yourself for being you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Contact & Consultation Blocks from Source Page Bottom -->
        <div class="mt-20">

            <!-- SCHEDULE A 15 MINUTE CONSULTATION -->
            <div class="w-full">
                <!-- Teal Banner -->
                <div
                    class="bg-[#1C8193] relative text-white py-12 px-4 flex flex-col items-center justify-center text-center">
                    <h2 class="text-3xl font-normal mb-4">SCHEDULE A 15 MINUTE CONSULTATION</h2>
                    <p class="text-[17px] font-light max-w-4xl leading-relaxed">
                        Call Today for more information on our competitive rates and packages and let us get you
                        started!<br>
                        You owe it to yourself, your organization, your staff and customers and our community as a
                        whole.
                    </p>
                    <!-- Triangle Pointing Down -->
                    <div
                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-0 h-0 border-l-[30px] border-l-transparent border-r-[30px] border-r-transparent border-t-[25px] border-t-[#1C8193]">
                    </div>
                </div>

                <!-- Form and Contact Info -->
                <div class="max-w-6xl mx-auto px-4 sm:px-6 py-20 mt-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                        <!-- Left: Form -->
                        <div>
                            <h3 class="text-3xl font-medium text-[#1C8193] mb-8">Request Appointment Below</h3>
                            <div class="border border-[#b5c7ce] p-6 pt-8 bg-white"
                                style="box-shadow: 0 0 10px rgba(0,0,0,0.02)">
                                <form class="flex flex-col gap-5">
                                    <input type="text" placeholder="Full Name"
                                        class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:border-[#1C8193] text-gray-700">

                                    <input type="email" placeholder="Email*" required
                                        class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:border-[#1C8193] text-gray-700">

                                    <div
                                        class="relative flex items-center border border-gray-300 rounded-sm bg-white focus-within:border-[#1C8193]">
                                        <div
                                            class="pl-3 pr-2 border-r border-gray-300 flex items-center justify-center h-12">
                                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/20px-Flag_of_India.svg.png"
                                                alt="IN" class="w-5 h-auto opacity-80">
                                            <svg class="w-3 h-3 text-gray-400 ml-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                        <input type="tel" placeholder="Phone*" required
                                            class="w-full border-none px-3 py-3 h-12 text-sm focus:outline-none text-gray-700 bg-transparent">
                                    </div>

                                    <input type="text" placeholder="Select Date"
                                        class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:border-[#1C8193] text-gray-700">

                                    <input type="text" placeholder="Enter Time"
                                        class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:border-[#1C8193] text-gray-700">

                                    <textarea placeholder="How can we help you?" rows="3"
                                        class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm resize-none focus:outline-none focus:border-[#1C8193] text-gray-700"></textarea>

                                    <div class="flex items-start gap-3 mt-2">
                                        <input type="checkbox" id="terms"
                                            class="mt-1 flex-shrink-0 cursor-pointer w-4 h-4 border-gray-300 rounded text-[#1C8193] focus:ring-[#1C8193]">
                                        <label for="terms"
                                            class="text-xs text-gray-700 font-bold leading-relaxed text-justify">
                                            I agree to terms & conditions provided by the company. By providing my phone
                                            number and email address, I agree to receive text messages or emails from
                                            the business. I consent to receive Account notifications text messages from
                                            GlobeCoRe, Inc. Reply STOP to opt-out; Reply HELP for support. Message and
                                            data rates apply. Messaging frequency may vary. Visit <a
                                                href="https://globecoreinc.com/privacy-policy/"
                                                class="text-blue-500 hover:underline">https://globecoreinc.com/privacy-policy/</a>
                                            for privacy policy and <a href="https://globecoreinc.com/privacy-policy/"
                                                class="text-blue-500 hover:underline">https://globecoreinc.com/privacy-policy/</a>
                                            for Terms of Service.
                                        </label>
                                    </div>

                                    <button type="submit"
                                        class="w-full bg-[#1C8193] text-white font-bold py-3.5 mt-2 rounded-[3px] hover:bg-[#156270] transition-colors tracking-wide text-[15px] uppercase">
                                        GET IN TOUCH
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Right: Contact Info & Image -->
                        <div class="flex flex-col">
                            <h3 class="text-3xl font-medium text-[#1C8193] mb-8">GlobeCoRe, Inc</h3>

                            <div class="space-y-6 mb-10">
                                <!-- Address -->
                                <div class="flex items-start gap-4">
                                    <div class="mt-1">
                                        <svg class="w-7 h-7 text-[#1C8193]" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-900 font-bold text-[15px] leading-relaxed">
                                        3355 Lenox Road NE.<br>
                                        Suite 1000<br>
                                        Atlanta, GA 30326.
                                    </p>
                                </div>
                                <!-- Phone -->
                                <div class="flex items-center gap-4">
                                    <div>
                                        <svg class="w-7 h-7 text-[#1C8193]" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-900 font-bold text-[15px]">
                                        (770) 284-1044
                                    </p>
                                </div>
                                <!-- Email -->
                                <div class="flex items-center gap-4">
                                    <div>
                                        <svg class="w-7 h-7 text-[#1C8193]" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-900 font-bold text-[15px]">
                                        help@globecoreinc.com
                                    </p>
                                </div>
                            </div>

                            <!-- Plant Image -->
                            <div class="flex-grow">
                                <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2-1024x683.jpg"
                                    alt="Office Plant" class="w-full h-auto object-cover max-h-[400px]">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>

    </main>

    <?php include "partials/footer.php"; ?>
