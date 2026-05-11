<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Blog | GlobeCoRe Inc. Atlanta, GA";
include_once "../partials/head.php";
?>
<style>
    .filter-tab.active {
        background-color: #8BAF4C;
        color: white;
    }
    .blog-card-image-overlay {
        background: radial-gradient(circle at 70% 50%, rgba(139, 175, 76, 0.1) 0%, rgba(139, 175, 76, 0.4) 100%);
    }
</style>
</head>
<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>

    <!-- Karma-style Hero Section adapted to GlobeCore -->
    <section class="pt-24 pb-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-[#071e26] mb-6">
                Mental Health <span class="text-primary">Insights</span>
            </h1>
            <p class="text-gray-500 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Stay informed with the latest research, treatments, and expert insights in mental health care from our team of specialists.
            </p>
        </div>
    </section>

    <!-- Filter Tabs -->
    <section class="pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex flex-wrap justify-center gap-4 border-b border-gray-100 pb-8">
                <a href="#" class="filter-tab active px-8 py-2.5 rounded-lg font-bold text-sm transition-all shadow-sm">All Posts</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">TMS Therapy</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Mental Health</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Research</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Patient Stories</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Wellness Tips</a>
            </div>
        </div>
    </section>

    <main id="main" class="bg-white pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                {grid_html}
            </div>

            {pagination_html}
        </div>
    </main>

    <?php include "../partials/footer.php"; ?>
</body>
</html>
