<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Counseling | GlobeCoRe Inc. Atlanta, GA";
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
                    <span itemprop="name">Counseling</span>
                    <meta itemprop="position" content="3">
                </li>
            </ol>
        </div>
    </nav>


    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="/assets/Globe Core-105.jpg" alt="Counseling Services"
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
                                href="/specialties/trauma.php"
                                class="text-secondary hover:text-primary transition-colors underline">trauma and
                                abuse</a>, <a href="/specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">PTSD</a>, <a href="/specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">depression</a>, codependency, <a href="/specialties/grief-loss.php"
                                class="text-secondary hover:text-primary transition-colors underline">grief and
                                loss</a>, <a href="/specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">anxiety</a>, women’s issues, <a href="/specialties/self-esteem.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">self-esteem</a> and identity issues, and relationship
                            issues.</p>
                        <p>Some social issues, such as struggles with being <a href="/specialties/lgbtqi.php"
                                class="text-secondary hover:text-primary transition-colors underline">LGBTQIA+</a>,
                            racial and ethnic matters, work-related and academic stressors, and religious and spiritual
                            concerns, can be addressed through individual therapy.</p>
                        <p>Parents and partners struggling with infertility, parenthood, abortion, and miscarriages can
                            receive relief and be helped to cope with these problems.</p>
                        <p>Individual therapist in Atlanta can benefit those living with <a
                                href="/specialties/chronic-illness.php"
                                class="text-secondary hover:text-primary transition-colors underline">chronic
                                illness</a>, including cancer survivors, bariatric surgical patients, individuals with
                            HIV/AIDS, <a href="/specialties/developmental-intellectual-disabilities.php"
                                class="text-secondary hover:text-primary transition-colors underline">developmental and
                                intellectual disabilities</a>, and seniors/geriatrics adjusting to aging.</p>
                    </div>
                    <div class="mt-8">
                        <a href="/contact.php"
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
                                href="/specialties/finding-the-love-you-deserve.php"
                                class="text-secondary hover:text-primary transition-colors underline">build a strong
                                relationship</a> by exploring various areas of core relationships. Such core issues may
                            include conflict management, communication skills, financial responsibility, child and
                            parenting responsibilities, physical, sexual or emotional roles, and extended and blended
                            family roles.</p>
                        <p>Treatment is available for couples with other relationship challenges, including
                            extra-marital affairs, affairs, marriage disputes, divorce, betrayal, communication
                            problems, work-life balance, lack of time, <a href="/specialties/grief-loss.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">grief</a>/loss, intimacy struggles, spiritual and
                            religious struggles, racial and ethnic matters, <a
                                href="/specialties/fertility-pregnancy-parenting.php"
                                class="text-secondary hover:text-primary transition-colors underline">infertility,
                                delayed parenthood</a>, abortion, and miscarriages.<br>Pre-marital and post-marital
                            counseling is offered.</p>
                        <p>Our counseling meets the requirements outlined by Georgia for Qualifying Pre-marital
                            Education, thus allowing couples to receive their marriage license at no charge.</p>
                        <p>Checkout our discounted Marital <a href="/pricing-insurance.php"
                                class="text-secondary hover:text-primary transition-colors underline">Counseling
                                Packages</a></p>
                    </div>
                    <div class="mt-8">
                        <a href="/contact.php"
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
                        <p>Support is available for families coping with <a href="/specialties/chronic-illness.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">chronic illness</a>, including cancer survivors,
                            bariatric surgical patients, families dealing with HIV/AIDS, families dealing with
                            developmental and intellectual disabilities, and <a href="/specialties/aging-issues.php"
                                class="text-secondary hover:text-primary transition-colors underline">seniors/geriatrics
                                adjusting to aging</a>.</p>
                    </div>
                    <div class="mt-8">
                        <a href="/contact.php"
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
                            <img src="/wp-content/uploads/2023/08/group-therapy-racial-healing-and-hope-2-1-724x1024.png"
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
                                <a href="/contact.php"
                                    class="inline-block bg-[#027289] text-white font-bold py-3 px-8 rounded-full hover:bg-[#071e26] transition-colors focus:ring-2 focus:ring-[#027289] focus:ring-offset-2">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Group 2 -->
                    <div
                        class="bg-white rounded-2xl shadow-[0_5px_20px_rgba(0,0,0,0.08)] border border-gray-100 overflow-hidden flex flex-col md:flex-row-reverse hover:shadow-xl transition-shadow">
                        <div class="md:w-5/12">
                            <img src="/wp-content/uploads/2023/07/Group-Therapy-The-Roaring-20s-1-791x1024.png"
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
                            <img src="/wp-content/uploads/2023/07/Group-Therapy-Self-Esteem-Building-1-724x1024.png"
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

        <!-- Contact Form Section Custom Build -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 pb-24 relative z-10">
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
            </div>



        </div>

    </main>

    <?php include "../partials/footer.php"; ?>
