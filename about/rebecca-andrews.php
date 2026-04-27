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
    <main id="content" class="py-20 lg:py-28 bg-[#fafafa] relative">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="mb-10">
                <a href="meet-our-team.php"
                    class="inline-flex items-center gap-2 text-primary hover:text-secondary font-bold transition-colors bg-white px-6 py-3 rounded-full shadow-sm border border-gray-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Team
                </a>
            </div>

            <div
                class="bg-white rounded-[40px] p-8 md:p-14 shadow-[0_15px_60px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col md:flex-row gap-16">
                <div class="w-full md:w-5/12 flex-shrink-0">
                    <div class="rounded-[32px] overflow-hidden shadow-2xl relative group">
                        <div
                            class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
                        </div>
                        <img src="https://globecoreinc.com/wp-content/uploads/2022/11/brick-background-18.png"
                            alt="Rebecca Andrews"
                            class="w-full h-auto object-cover aspect-[4/5] transform group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                <div class="w-full md:w-7/12 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-6">
                        <span
                            class="text-secondary font-bold tracking-widest text-[13px] uppercase bg-secondary/10 px-5 py-2 rounded-full inline-block">Director
                            of Admin</span>
                    </div>
                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-black text-[#071e26] mb-8 leading-tight tracking-tight">
                        Rebecca Andrews</h1>
                    <div class="w-20 h-2 bg-gradient-to-r from-primary to-secondary rounded-full mb-10"></div>

                    <div class="prose prose-lg max-w-none text-gray-600 space-y-4">
                        <p class="text-gray-600 leading-relaxed mb-6">I am the Director of the full Admin team and have
                            been in the Medical–Mental health field for over 35 years. I oversee our administrative
                            processes and help to make sure things are running smoothly. I love helping those who help
                            the hurting.</p>

                        <h3 class="text-2xl font-bold text-[#071e26] mt-8 mb-4">My Hobbies</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">My favorite job is Grammie to my 7 grandchildren.
                            I enjoy spending time with my family, serving at my church, reading, being a beach-bum and
                            sunsets.</p>
                    </div>

                    <div class="mt-12 pt-10 border-t border-gray-100 flex flex-col sm:flex-row gap-4">
                        <a href="../contact.php"
                            class="inline-flex items-center justify-center bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-secondary hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-lg">
                            Schedule an Appointment
                        </a>
                        <a href="tel:7702841044"
                            class="inline-flex items-center justify-center border-2 border-primary text-primary font-bold py-4 px-10 rounded-full hover:bg-primary/5 hover:-translate-y-1 transition-all duration-300 text-lg">
                            (770) 284-1044
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "partials/footer.php"; ?>
