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
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-br from-primary/5 to-secondary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
            <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-secondary/5 to-transparent rounded-full blur-3xl translate-y-1/3 -translate-x-1/3"></div>
        </div>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 transition-all duration-500">
            <!-- Back Button -->
            <div class="mb-10">
                <a href="meet-our-team.php" class="inline-flex items-center gap-2 text-secondary hover:text-primary font-bold transition-all bg-white px-5 py-2.5 rounded-full shadow-sm hover:shadow-md border border-gray-100 group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                    Back to Team Directory
                </a>
            </div>
            
            <!-- Two-column layout: left sticky card + right scrolling content -->
            
        
        <div class="flex flex-col lg:flex-row gap-12 xl:gap-16 w-full">
                        <!-- LEFT COLUMN: Sticky Info Card -->
            <div class="lg:w-1/3 xl:w-1/3 flex-shrink-0">
                <div class="sticky top-32 bg-white rounded-[32px] p-4 sm:p-5 shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-100 flex flex-col items-center">
                    <div class="w-full rounded-[24px] overflow-hidden mb-6 bg-gray-100">
                        <img src="https://globecoreinc.com/wp-content/uploads/2024/09/GlobeCoreUnderneathCenteredWhite.png" alt="Alana Cooper" class="w-full aspect-[4/5] object-cover object-top">
                    </div>
                    <div class="text-center w-full px-2">
                        <span class="inline-block bg-[#F1F6EC] text-[#7A9E3F] font-bold text-[11px] tracking-widest uppercase px-4 py-1.5 rounded-full mb-4">Clinician</span>
                        <h2 class="text-2xl font-bold text-[#071e26] mb-6">Alana Cooper</h2>
                        
                        <a href="../contact.php" class="flex items-center justify-center w-full gap-2 bg-[#071e26] text-white py-4 px-6 rounded-2xl font-semibold hover:bg-[#041116] transition-colors duration-300">
                            Book Consultation
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Bio Content -->
            <div class="lg:w-2/3 xl:w-3/4">
                <div class="bg-white rounded-[40px] p-8 md:p-12 lg:p-14 shadow-sm border border-gray-100">
                    <p class="text-secondary font-medium text-lg mb-8 uppercase tracking-widest pl-1 border-l-4 border-secondary">Clinician</p>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#071e26] leading-tight mb-12 tracking-tight drop-shadow-sm">Alana Cooper</h1>
                    
                    <div class="prose prose-lg max-w-none">
                        <h3 class="text-2xl font-bold text-deepTeal mt-8 mb-4">GlobeCoRe</h3>
                    </div>
                </div>
            </div>
        </div>
        
<!-- END OF TWO COLUMN LAYOUT --></div></section></main>

    <?php include "partials/footer.php"; ?>
