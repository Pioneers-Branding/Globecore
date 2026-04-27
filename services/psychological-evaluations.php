<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Psychological Evaluations | GlobeCoRe Inc. Atlanta, GA";
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
                    <span itemprop="name">Psychological Evaluations</span>
                    <meta itemprop="position" content="3">
                </li>
            </ol>
        </div>
    </nav>


    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-88.jpg" alt="Psychological Evaluations Services"
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
                Psychological Evaluations Services
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
    <!-- Main Content -->
    <main id="content" class="bg-white overflow-hidden">
        <!-- Section 1: What we offer & What's involved -->
        <section class="py-20 lg:py-28">
            <div class="max-w-5xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col gap-16">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-[#071e26] mb-8 relative inline-block">
                            What we offer
                            <span class="absolute -bottom-2 left-0 w-20 h-1 bg-primary rounded-full"></span>
                        </h2>
                        <div class="prose prose-lg text-gray-700 space-y-6 leading-relaxed max-w-none">
                            <p>
                                We offer psychological evaluation and verification of diagnosis to individuals dealing
                                with cognitive, academic, behavioral, social-emotional, substance abuse, domestic
                                violence, <a href="../specialties/trauma.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">trauma</a>, psycho-sexual, bariatric, veteran, or parental fitness deficits.
                            </p>
                            <p>
                                We also offer psychological evaluation to candidates for bariatric surgery to determine
                                their psychological readiness for the procedure. Our aim is to connect diverse clients
                                across the lifespan to needed psychological, social, and medical services using
                                culturally relevant psychological evaluation approaches. We service children,
                                adolescents, and adults from diverse cultural backgrounds.
                            </p>
                        </div>

                        <h2 class="text-3xl lg:text-4xl font-bold text-[#071e26] mt-16 mb-8 relative inline-block">
                            What’s involved
                            <span class="absolute -bottom-2 left-0 w-20 h-1 bg-primary rounded-full"></span>
                        </h2>
                        <div class="prose prose-lg text-gray-700 space-y-6 leading-relaxed max-w-none">
                            <p>
                                Our evaluations generally involve an initial <strong>Psychiatric Intake (Phase I:
                                    Clinical Interview)</strong> session in which we simply ask questions about the
                                background of you and your family (usually 1 hr.), followed by a <strong>Testing session
                                    (Phase II)</strong> to examine the educational, psychological, cognitive,
                                behaviorally, and personality factors and skills in question (usually 3-4 hrs.).
                            </p>
                            <p>
                                Based on the results of the evaluation, we provide a report with recommendations through
                                our final <strong>Feedback session (Phase III)</strong> to help you understand the
                                outcome of your testing diagnosis, so you can become the best you that you can be.
                            </p>
                            <p>
                                Our flexible hours and convenient scheduling — including evenings and weekends by
                                appointment — support us in this mission. Payment is due in full before each phase of
                                the psychological evaluation can begin.
                            </p>
                            <p class="text-[17px] font-bold text-secondary">
                                Please Note: We do charge for additional time it takes to analyze data and write up the
                                report. (Approx. 4 to 5 hours)
                            </p>
                        </div>
                    </div>

                    <!-- Process Timeline Graphic -->
                    <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100 flex items-center justify-center">
                        <img src="https://globecoreinc.com/wp-content/uploads/2023/12/frame-134-1024x178.png"
                            alt="Evaluation Process Timeline" class="w-full max-w-4xl h-auto">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Types of Evaluations Offered -->
        <section class="py-24 bg-white relative overflow-hidden">
            <!-- Decorative background elements -->
            <div
                class="absolute top-0 right-0 w-[800px] h-[800px] bg-[#f0f4f8] rounded-full blur-3xl opacity-50 -translate-y-1/2 translate-x-1/3">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-[#8bb174]/10 rounded-full blur-3xl opacity-50 translate-y-1/3 -translate-x-1/3">
            </div>
            <div
                class="absolute top-1/2 left-1/2 w-[800px] h-[800px] bg-[#5f8fa4]/5 rounded-full blur-[100px] opacity-70 -translate-y-1/2 -translate-x-1/2 pointer-events-none">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="text-center mb-24">
                    <span
                        class="text-[#8bb174] font-bold tracking-[0.2em] text-sm uppercase bg-[#8bb174]/10 px-5 py-2.5 rounded-full mb-6 inline-block">Comprehensive
                        Services</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#071e26] mt-6 tracking-tight">Types
                        of Evaluations</h2>
                    <div class="w-24 h-1.5 bg-gradient-to-r from-[#5f8fa4] to-[#8bb174] mx-auto mt-8 rounded-full">
                    </div>
                    <p class="mt-8 text-xl text-gray-500 max-w-3xl mx-auto font-light leading-relaxed">Expert
                        assessments tailored to provide clarity and guide your path forward. Review our specialized
                        evaluation services below.</p>
                </div>

                <div class="space-y-32">
                    <!-- Row 1: Psycho-Educational -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="relative group">
                            <div
                                class="absolute -inset-4 bg-[#5f8fa4]/10 rounded-[40px] transform group-hover:-rotate-2 transition-all duration-700">
                            </div>
                            <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2.jpg"
                                alt="Psycho-Educational Evaluation"
                                class="relative rounded-[32px] shadow-2xl w-full aspect-[4/3] object-cover">
                        </div>
                        <div class="space-y-8">
                            <div
                                class="bg-white p-10 lg:p-12 rounded-[32px] shadow-[0_20px_50px_-12px_rgba(0,0,0,0.08)] border border-gray-50 hover:shadow-[0_20px_50px_-12px_rgba(95,143,164,0.2)] transition-all duration-500 relative overflow-hidden group">
                                <div
                                    class="absolute top-0 left-0 w-2 h-full bg-[#5f8fa4] transform origin-bottom scale-y-50 group-hover:scale-y-100 transition-transform duration-500">
                                </div>
                                <h3 class="text-3xl font-bold text-[#071e26] mb-6">Psycho-Educational Evaluation</h3>
                                <p class="text-gray-600 leading-relaxed text-lg">
                                    Our psycho-educational evaluations help clients gain an understanding of child,
                                    adolescent, and/or adult cognitive, academic, social-emotional, and behavioral
                                    functioning.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-lg mt-4">
                                    In particular, we assess cognitive/intellectual ability, academic
                                    achievement/processing, and a number of specific skills related to the learning
                                    process including gifted and talented evaluation and assessment of potential
                                    learning disabilities and behavioral challenges.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Substance Abuse & Parental Fitness -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="order-2 lg:order-1 space-y-8">
                            <div
                                class="bg-white p-10 lg:p-12 rounded-[32px] shadow-[0_20px_50px_-12px_rgba(0,0,0,0.08)] border border-gray-50 hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden group">
                                <div
                                    class="absolute top-0 left-0 w-full h-2 bg-[#8bb174] transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                                </div>
                                <h3 class="text-2xl font-bold text-[#071e26] mb-4">Substance Abuse Evaluation</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    Our substance abuse evaluations assess the extent of a person's drug or alcohol use.
                                    The evaluation consists of testing reviewing the participants' history and current
                                    relationship with the substance.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    We assess the current risk and effects of the substance in order to tailor a plan
                                    that provides the best chance at recovery. We aim to help create a clear path for
                                    the next steps, whether that means outpatient treatment, inpatient care, substance
                                    abuse programs, or treatment meetings. To support long-term stability, we also offer
                                    <strong>Medical Management in Atlanta</strong> as part of a comprehensive recovery
                                    plan.
                                </p>
                            </div>
                            <div
                                class="bg-[#f8fafc] p-10 lg:p-12 rounded-[32px] border border-gray-100 hover:bg-white hover:shadow-[0_20px_50px_-12px_rgba(139,177,116,0.15)] transition-all duration-500 group">
                                <h3
                                    class="text-2xl font-bold text-[#071e26] mb-4 group-hover:text-[#8bb174] transition-colors">
                                    Parental Fitness Evaluation</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    Our Parental Fitness Evaluation offers a comprehensive assessment aimed at providing
                                    insights into an individual's capacity to fulfill the responsibilities of
                                    parenthood. Tailored to address the unique needs of each case, we delve into various
                                    facets including emotional stability, interpersonal relationships, communication
                                    skills, parenting practices, and the ability to provide a safe and nurturing
                                    environment for children. Through a combination of standardized assessments,
                                    interviews, and observations, we strive to offer a balanced and insightful
                                    perspective to aid in informed decision-making concerning custody, visitation, or
                                    other family-related matters. Our goal is to support the well-being of both the
                                    parent and the child by providing evaluations that examine a caregiver's ability to
                                    raise their child(ren) effectively and provide recommendations to strengthen these
                                    skills.
                                </p>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2 relative group">
                            <div
                                class="absolute -inset-4 bg-[#8bb174]/10 rounded-[40px] transform group-hover:rotate-2 transition-all duration-700">
                            </div>
                            <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_102ab257514d49c1a0d08fedd429d8f6_mv2.jpg"
                                alt="Substance Abuse & Parental Fitness"
                                class="relative rounded-[32px] shadow-2xl w-full aspect-[4/3] object-cover">
                        </div>
                    </div>

                    <!-- Row 3: Domestic Violence & Psycho-Emotional -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="relative group">
                            <div
                                class="absolute -inset-4 bg-[#5f8fa4]/10 rounded-[40px] transform group-hover:-rotate-2 transition-all duration-700">
                            </div>
                            <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_fd7a0a427cc94dd8afdd39f5f3eab78a_mv2.jpg"
                                alt="Domestic Violence & Psycho-Emotional"
                                class="relative rounded-[32px] shadow-2xl w-full aspect-[4/3] object-cover">
                        </div>
                        <div class="space-y-8">
                            <div
                                class="bg-white p-10 lg:p-12 rounded-[32px] shadow-[0_20px_50px_-12px_rgba(0,0,0,0.08)] border border-gray-50 hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden group">
                                <div
                                    class="absolute top-0 left-0 w-2 h-full bg-[#5f8fa4] transform origin-top scale-y-0 group-hover:scale-y-100 transition-transform duration-500">
                                </div>
                                <h3 class="text-2xl font-bold text-[#071e26] mb-4">Domestic Violence Evaluation</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    Our domestic violence evaluations consist of an in-depth looks at the person's
                                    overall effects from the violence in order to understand the impact and severity of
                                    symptoms. We provide testing that analyze the extent of the maltreatment and
                                    circumstances that may surrounds it. We aim to help the survivors better understand
                                    the effects of the abuse and create a treatment plan that is tailor to the
                                    individual's specific symptoms and experiences.
                                </p>
                            </div>
                            <div
                                class="bg-[#f8fafc] p-10 lg:p-12 rounded-[32px] border border-gray-100 hover:bg-white hover:shadow-[0_20px_50px_-12px_rgba(95,143,164,0.15)] transition-all duration-500 group">
                                <h3
                                    class="text-2xl font-bold text-[#071e26] mb-4 group-hover:text-[#5f8fa4] transition-colors">
                                    Psycho-Emotional Evaluation</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    Our psycho-emotional evaluations assess clients emotional functioning and
                                    well-being, including their levels of <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">depression</a> and <a href="../specialties/depression-anxiety.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">anxiety</a>, personality styles,
                                    and specific psychological disturbances and their severity.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    We also offer brief and long-term treatment options to address the identified
                                    concerns. Our evaluations can help individuals gain a better understanding of their
                                    emotional functioning and develop effective coping strategies.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 4: Psycho-Sexual & Trauma Assessment -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="order-2 lg:order-1 space-y-8">
                            <div
                                class="bg-white p-10 lg:p-12 rounded-[32px] shadow-[0_20px_50px_-12px_rgba(0,0,0,0.08)] border border-gray-50 hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden group">
                                <div
                                    class="absolute top-0 right-0 w-full h-2 bg-[#8bb174] transform origin-right scale-x-0 group-hover:scale-x-100 transition-transform duration-500">
                                </div>
                                <h3 class="text-2xl font-bold text-[#071e26] mb-4">Psycho-Sexual Evaluation</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    We offer psycho-sexual evaluations that examine the context of a person involved in
                                    sexual misconduct. The participant will be evaluated for their risk of repeating the
                                    behaviors, identifying behavioral patterns, and analyzing risk factors that may
                                    contribute to the offence.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    Applying the information analyzed, we create treatment and recommendations that will
                                    be the most beneficial to the participant.
                                </p>
                            </div>
                            <div
                                class="bg-[#f8fafc] p-10 lg:p-12 rounded-[32px] border border-gray-100 hover:bg-white hover:shadow-[0_20px_50px_-12px_rgba(139,177,116,0.15)] transition-all duration-500 group">
                                <h3
                                    class="text-2xl font-bold text-[#071e26] mb-4 group-hover:text-[#8bb174] transition-colors">
                                    Trauma Assessment</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    Our trauma assessments consist of determining the extent in which a person has
                                    experienced a traumatic event/events. This involves analyzing the event/events,
                                    their mental health, their behavioral health, and the proceeding impacts of the
                                    event/events.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    We aim to create a better understanding of the trauma and the impact it may have
                                    carried in order to create a treatment plan that is tailor to benefit the
                                    individual's specific symptoms.
                                </p>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2 relative group">
                            <div
                                class="absolute -inset-4 bg-[#8bb174]/10 rounded-[40px] transform group-hover:rotate-2 transition-all duration-700">
                            </div>
                            <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_7e684deb260f45d3b330ad8a99a5c_mv2.jpg"
                                alt="Psycho-Sexual & Trauma Assessment"
                                class="relative rounded-[32px] shadow-2xl w-full aspect-[4/3] object-cover">
                        </div>
                    </div>

                    <!-- Row 5: Veteran Evaluations & Bariatric Pre-Operative -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="relative group">
                            <div
                                class="absolute -inset-4 bg-[#5f8fa4]/10 rounded-[40px] transform group-hover:-rotate-2 transition-all duration-700">
                            </div>
                            <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_2de6f56071a642d7b6e651e20ab9ea50_mv2.jpg"
                                alt="Veteran & Bariatric Evaluations"
                                class="relative rounded-[32px] shadow-2xl w-full aspect-[4/3] object-cover">
                        </div>
                        <div class="space-y-8">
                            <div
                                class="bg-white p-10 lg:p-12 rounded-[32px] shadow-[0_20px_50px_-12px_rgba(0,0,0,0.08)] border border-gray-50 hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden group">
                                <div
                                    class="absolute top-0 right-0 w-2 h-full bg-[#5f8fa4] transform origin-bottom scale-y-0 group-hover:scale-y-100 transition-transform duration-500">
                                </div>
                                <h3 class="text-2xl font-bold text-[#071e26] mb-4">Veteran Evaluations</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    We provide Evaluation Assessments for Veterans and Active Service Duty Members to
                                    better evaluate their eligibility for Compensation and Pension (C&P) Benefits
                                    Claims.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    Our exams are one-time, non-treatment exams for individual Veterans in the Georgia
                                    area.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    We also provide these evaluation services to organization on a contract basis.
                                    Please ask your GlobeCoRe Representative about getting started with an Evaluation
                                    Contract for your organization.
                                </p>
                            </div>
                            <div
                                class="bg-[#f8fafc] p-10 lg:p-12 rounded-[32px] border border-gray-100 hover:bg-white hover:shadow-[0_20px_50px_-12px_rgba(95,143,164,0.15)] transition-all duration-500 group">
                                <h3
                                    class="text-2xl font-bold text-[#071e26] mb-4 group-hover:text-[#5f8fa4] transition-colors">
                                    Bariatric Pre-Operative Evaluation</h3>
                                <p class="text-gray-600 leading-relaxed text-md">
                                    We offer pre-surgical psychological assessment to bariatric programs and weight loss
                                    surgery patients seeking approval for surgery.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    Psychological evaluations are usually required prior to bariatric surgery with a
                                    focus on ensuring that the client's mental health is sufficient for the surgery and
                                    its outcomes.
                                </p>
                                <p class="text-gray-600 leading-relaxed text-md mt-4">
                                    We aim to help prepare patients mentally for the challenges ahead and identify
                                    potential psychological barriers to a successful procedure; however, we do offer
                                    special recommendations to assist clients with developing more effective coping
                                    skills, emotional support, and realistic expectations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Schedule 15 Min Consultation CTA -->
        <section class="py-20 bg-[#5f8fa4] text-white text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-[#5f8fa4] to-[#4a7a8d]"></div>
            <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold tracking-wide mb-6">SCHEDULE A 15 MINUTE CONSULTATION</h2>
                <p class="text-white/90 text-lg leading-relaxed max-w-3xl mx-auto">
                    Call Today for more information on our competitive rates and packages and let us get you started!
                    You owe it to yourself, your organization, your staff and customers and our community as a whole.
                </p>
            </div>
            <!-- Downward arrow -->
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 z-20">
                <div class="w-12 h-12 bg-[#5f8fa4] rotate-45"></div>
            </div>
        </section>

        <!-- Appointment & Contact Section -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 lg:gap-24">
                    <!-- Left: Form -->
                    <div class="bg-white flex flex-col">
                        <h2 class="text-[28px] md:text-3xl font-bold text-[#147b85] mb-6">Request Appointment Below</h2>
                        <form class="p-6 md:p-8 border border-[#147b85] flex flex-col grow">
                            <div class="space-y-4">
                                <input type="text" placeholder="Full Name"
                                    class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400">
                                <input type="email" placeholder="Email*"
                                    class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400"
                                    required>

                                <div class="relative flex border border-gray-300 focus-within:border-[#147b85]">
                                    <div
                                        class="flex items-center px-4 bg-gray-50 border-r border-gray-300 text-gray-500">
                                        <span>🇮🇳 ▾</span>
                                    </div>
                                    <input type="tel" placeholder="Phone*"
                                        class="w-full px-4 py-3 focus:outline-none text-gray-700 placeholder-gray-400"
                                        required>
                                </div>

                                <input type="text" placeholder="Select Date"
                                    class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400">
                                <input type="text" placeholder="Enter Time"
                                    class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400">
                                <textarea placeholder="How can we help you?" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 focus:outline-none focus:border-[#147b85] text-gray-700 placeholder-gray-400"></textarea>
                            </div>

                            <div class="flex items-start gap-3 mt-6">
                                <input type="checkbox" id="terms" class="mt-1 shrink-0" required>
                                <label for="terms" class="text-[11px] text-gray-600 leading-relaxed font-sans mt-0.5">
                                    I agree to terms & conditions provided by the company. By providing my phone number
                                    and email address, I agree to receive text messages or emails from the business. I
                                    consent to receive Account notifications text messages from GlobeCoRe, Inc. Reply
                                    STOP to opt-out; Reply HELP for support. Message and data rates apply. Messaging
                                    frequency may vary. Visit <a href="#"
                                        class="text-blue-600 underline">https://globecoreinc.com/privacy-policy/</a> for
                                    privacy policy and <a href="#"
                                        class="text-blue-600 underline">https://globecoreinc.com/privacy-policy/</a> for
                                    Terms of Service.
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full bg-[#147b85] text-white font-bold py-4 px-6 hover:bg-[#0e5c66] transition-colors uppercase tracking-widest text-sm mt-8">
                                GET IN TOUCH
                            </button>
                        </form>
                    </div>

                    <!-- Right: Contact Info & Image -->
                    <div class="flex flex-col">
                        <h2 class="text-[28px] md:text-3xl font-bold text-[#147b85] mb-6">GlobeCoRe, Inc</h2>
                        <div class="space-y-6 mb-8">
                            <div class="flex items-start gap-4">
                                <svg class="w-8 h-8 text-[#147b85] shrink-0 fill-current mt-0.5" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                                <div class="text-[15px] font-medium text-gray-800 leading-snug">
                                    <p>3355 Lenox Road NE,</p>
                                    <p>Suite 1000</p>
                                    <p>Atlanta, GA 30326</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <svg class="w-8 h-8 text-[#147b85] shrink-0 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                </svg>
                                <p class="text-[15px] font-medium text-gray-800">(770) 284-1044</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <svg class="w-8 h-8 text-[#147b85] shrink-0 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                </svg>
                                <p class="text-[15px] font-medium text-gray-800">help@globecoreinc.com</p>
                            </div>
                        </div>
                        <div class="mt-auto relative w-full h-[350px]">
                            <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_2f107277ba88444f8f8a96d2b0af056e_mv2.jpg"
                                alt="Plant and green wall" class="absolute inset-0 w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "partials/footer.php"; ?>
