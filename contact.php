<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Contact | GlobeCoRe Inc. Atlanta, GA";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="./assets/Globe Core-1.jpg" alt="Contact"
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
                Contact
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

    <!-- Main Booking Content -->
    <main id="content" class="py-20 lg:py-28 bg-bgOffWhite relative">

        <!-- Intro text -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center mb-20 relative z-10">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#071e26] mb-6 tracking-tight">BOOK AN APPOINTMENT</h2>
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-8">
                We are excited to have you as our potential new client with GlobeCoRe. For you to get started and
                request an appointment, or to obtain additional information about our services, please fill out our
                Appointment Request Form below. This form helps us determine if our services suit your needs and match
                you with an appropriate clinician.
            </p>
            <div
                class="bg-white/80 backdrop-blur-sm border-l-4 border-primary rounded-r-2xl p-6 md:p-8 shadow-sm text-left">
                <div class="flex items-start gap-4">
                    <div
                        class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 text-[15px] leading-relaxed">
                        To get started quickly, you can also schedule your appointment by calling our Client Support
                        Specialist at <a href="tel:7702841044"
                            class="text-[#071e26] font-bold hover:text-primary transition-colors">(770) 284-1044</a>.
                        Our business hours are M-F 9am-6pm and Saturdays by appointment. We are committed to your
                        privacy. Please do not include confidential or private information regarding your health
                        condition in this form. This form is for general questions or messages to the GlobeCoRe
                        practitioners.
                    </p>
                </div>
            </div>
        </div>

        <!-- 4-Steps Process -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 mb-24 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative">

                <!-- Step 1 -->
                <div
                    class="bg-[#2E3C41] rounded-[32px] p-8 md:p-10 text-center shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:shadow-[0_20px_40px_rgb(46,60,65,0.4)] hover:-translate-y-2 transition-all duration-300 relative group border border-[#2E3C41]/50 mt-8 lg:mt-0 flex flex-col h-full">
                    <div
                        class="absolute -top-6 left-1/2 -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white shadow-lg text-[#2E3C41] font-extrabold text-2xl border-[5px] border-[#2E3C41]">
                        1</div>
                    <h3 class="text-white font-bold text-xl md:text-2xl mt-6 mb-4 leading-tight">Fill Out<br>Appointment
                        Request Form</h3>
                    <p class="text-gray-300 text-[15px] leading-relaxed flex-grow">
                        To become a client at GlobeCoRe, start by completing the Appointment Request Form below and
                        schedule a time to meet with our team to get your enrollment started.
                    </p>
                    <div class="hidden lg:block absolute -right-6 top-1/2 -translate-y-1/2 z-20 text-[#3FA1A9]">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-[#3FA1A9] rounded-[32px] p-8 md:p-10 text-center shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:shadow-[0_20px_40px_rgb(63,161,169,0.4)] hover:-translate-y-2 transition-all duration-300 relative group border border-[#3FA1A9]/50 mt-10 md:mt-0 flex flex-col h-full">
                    <div
                        class="absolute -top-6 left-1/2 -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white shadow-lg text-[#3FA1A9] font-extrabold text-2xl border-[5px] border-[#3FA1A9]">
                        2</div>
                    <h3 class="text-white font-bold text-xl md:text-2xl mt-6 mb-4 leading-tight">Complete<br>Intake
                        Screening</h3>
                    <p class="text-white/90 text-[15px] leading-relaxed flex-grow">
                        After receiving your form, our team will promptly call you at your scheduled time to complete
                        your initial intake screening, collect your client details, and get you scheduled.
                    </p>
                    <div class="hidden lg:block absolute -right-6 top-1/2 -translate-y-1/2 z-20 text-[#8BAF4C]">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-primary rounded-[32px] p-8 md:p-10 text-center shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:shadow-[0_20px_40px_rgb(139,175,76,0.4)] hover:-translate-y-2 transition-all duration-300 relative group border border-primary/50 mt-10 lg:mt-0 flex flex-col h-full">
                    <div
                        class="absolute -top-6 left-1/2 -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white shadow-lg text-primary font-extrabold text-2xl border-[5px] border-primary">
                        3</div>
                    <h3 class="text-white font-bold text-xl md:text-2xl mt-6 mb-4 leading-tight">Schedule 1st Session or
                        Consultation</h3>
                    <p class="text-white/90 text-[15px] leading-relaxed flex-grow">
                        Once you and our team identify the most suitable clinician for you, you can either be (1)
                        scheduled for your first intake interview appointment or (2) schedule a free 10-minute phone
                        consultation.
                    </p>
                    <div class="hidden lg:block absolute -right-6 top-1/2 -translate-y-1/2 z-20 text-[#F4CA44]">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <!-- Step 4 -->
                <div
                    class="bg-[#F4CA44] rounded-[32px] p-8 md:p-10 text-center shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:shadow-[0_20px_40px_rgb(244,202,68,0.4)] hover:-translate-y-2 transition-all duration-300 relative group border border-[#F4CA44]/50 mt-10 lg:mt-0 flex flex-col h-full">
                    <div
                        class="absolute -top-6 left-1/2 -translate-x-1/2 flex items-center justify-center w-14 h-14 rounded-full bg-white shadow-lg text-[#D8B131] font-extrabold text-2xl border-[5px] border-[#F4CA44]">
                        4</div>
                    <h3 class="text-[#071e26] font-bold text-xl md:text-2xl mt-6 mb-4 leading-tight">Initial
                        Intake<br>Interview Appointment</h3>
                    <p class="text-[#071e26]/80 text-[15px] leading-relaxed font-medium flex-grow">
                        Your first appointment, an Initial Assessment session, will last approximately 50-60 minutes and
                        involves a thorough evaluation of your history, current symptoms, and goals for therapy.
                    </p>
                </div>

            </div>
        </div>

        <!-- Contact Form Section Custom Build -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 pb-12 relative z-10">
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
                            <img src="./assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Icon"
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
                    <h4 class="text-2xl md:text-3xl font-extrabold text-[#071e26] mb-8">Enter Details</h4>
                    <form class="space-y-8" action="#" method="POST"
                        onsubmit="event.preventDefault(); alert('Appointment requested successfully!');">

                        <div class="bg-gray-50/50 p-5 rounded-2xl border border-gray-100">
                            <label class="block text-sm font-bold text-gray-800 mb-4">Please select one: <span
                                    class="text-primary">*</span></label>
                            <div class="space-y-3">
                                <label
                                    class="flex items-center gap-3 cursor-pointer group p-2 hover:bg-white rounded-lg transition-colors">
                                    <input type="radio" name="person_type" value="self"
                                        class="w-5 h-5 text-primary border-gray-300 focus:ring-primary accent-primary"
                                        required>
                                    <span class="text-gray-700 font-medium group-hover:text-primary transition-colors">I
                                        am the person seeking services</span>
                                </label>
                                <label
                                    class="flex items-center gap-3 cursor-pointer group p-2 hover:bg-white rounded-lg transition-colors">
                                    <input type="radio" name="person_type" value="other"
                                        class="w-5 h-5 text-primary border-gray-300 focus:ring-primary accent-primary"
                                        required>
                                    <span class="text-gray-700 font-medium group-hover:text-primary transition-colors">I
                                        am filling out for someone else</span>
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-800 mb-2">Full Client(s) Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" placeholder="John Doe"
                                    class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 bg-gray-50 transition-all font-medium text-gray-800"
                                    required>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-800 mb-2">Client(s) Date of Birth <span
                                        class="text-primary">*</span></label>
                                <input type="date"
                                    class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 bg-gray-50 transition-all font-medium text-gray-800"
                                    required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-800 mb-2">Email Address <span
                                    class="text-primary">*</span></label>
                            <input type="email" placeholder="john@example.com"
                                class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 bg-gray-50 transition-all font-medium text-gray-800"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-800 mb-2">Phone Number <span
                                    class="text-primary">*</span></label>
                            <input type="tel" placeholder="(555) 555-5555"
                                class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 bg-gray-50 transition-all font-medium text-gray-800"
                                required>
                            <p class="text-xs text-gray-500 mt-2 font-medium">We will use the above number to send you
                                important text messages regarding your services and appointments.</p>
                        </div>

                        <div class="bg-gray-50/50 p-5 rounded-2xl border border-gray-100">
                            <label class="block text-sm font-bold text-gray-800 mb-4">Preferred method of being
                                contacted: <span class="text-primary">*</span></label>
                            <div class="flex flex-col sm:flex-row sm:space-x-8 space-y-3 sm:space-y-0">
                                <label
                                    class="flex items-center gap-3 cursor-pointer group p-2 hover:bg-white rounded-lg transition-colors">
                                    <input type="radio" name="contact_method" value="phone"
                                        class="w-5 h-5 text-primary border-gray-300 focus:ring-primary accent-primary"
                                        required>
                                    <span
                                        class="text-gray-700 font-medium group-hover:text-primary transition-colors">Phone
                                        Call</span>
                                </label>
                                <label
                                    class="flex items-center gap-3 cursor-pointer group p-2 hover:bg-white rounded-lg transition-colors">
                                    <input type="radio" name="contact_method" value="email"
                                        class="w-5 h-5 text-primary border-gray-300 focus:ring-primary accent-primary"
                                        required>
                                    <span
                                        class="text-gray-700 font-medium group-hover:text-primary transition-colors">Email</span>
                                </label>
                            </div>
                        </div>

                        <div class="pt-6 mt-4 flex justify-end">
                            <button type="submit"
                                class="w-full sm:w-auto bg-[#071e26] hover:bg-primary text-white font-bold py-4 px-10 rounded-full shadow-lg shadow-black/10 hover:shadow-primary/30 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-3">
                                Submit Request
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <?php include "partials/footer.php"; ?>
