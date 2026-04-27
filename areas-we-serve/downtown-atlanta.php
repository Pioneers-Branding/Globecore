<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Psychological Services in Downtown Atlanta, GA | GlobeCoRe Inc.";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    <!-- HERO -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 bg-[#071e26] text-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="../assets/Globe Core-50.jpg" alt="Downtown Atlanta" class="w-full h-full object-cover opacity-30 mix-blend-overlay blur-[2px]">
            <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-transparent to-transparent"></div>
        </div>
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <span class="inline-block bg-primary/20 border border-primary/30 text-white text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-8">Support for the Heart of the City</span>
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8">Therapy in Downtown Atlanta</h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10">Compassionate, culturally responsive mental health care for the Downtown community. From the Westside to Five Points, we are here for you.</p>
            <a href="../contact.php" class="bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-[#7a9e3f] transition-all text-lg shadow-lg">Start Your Journey</a>
        </div>
    </section>

    <!-- CONTENT -->
    <main class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2 space-y-6">
                    <h2 class="text-3xl lg:text-5xl font-extrabold text-[#071e26]">Excellence in Urban Mental Health</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">Downtown Atlanta is a hub of history, business, and community. We understand the specific challenges of city living and provide a sanctuary for healing and growth.</p>
                    <p class="text-lg text-gray-600 leading-relaxed">GlobeCoRe Inc offers a comprehensive suite of services including <a href="../services/medication-management.php" class="text-secondary underline">medication management</a> and <a href="../specialties/trauma.php" class="text-secondary underline">trauma-informed therapy</a>, with easy access from major Downtown routes.</p>
                </div>
                <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                    <img src="../assets/Globe Core-102.jpg" alt="Downtown Vibes" class="w-full h-64 object-cover rounded-3xl shadow-lg">
                    <img src="../assets/Globe Core-105.jpg" alt="Team Discussion" class="w-full h-48 object-cover rounded-3xl mt-8 shadow-lg">
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->

    <?php include "partials/footer.php"; ?>
