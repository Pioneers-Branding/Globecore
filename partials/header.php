<?php
/**
 * GlobeCoRe Website - Header Section
 */

if (!isset($P)) {
    $scriptPath = dirname($_SERVER['PHP_SELF']);
    $depth = max(0, substr_count($scriptPath, '/') - 1);
    $P = str_repeat('../', $depth);
}

include_once __DIR__ . '/nav-data.php';
?>
    <!-- ===================== TOP UTILITY BAR ===================== -->
    <div class="bg-[#071e26] text-gray-300 text-xs shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex justify-between items-center">
            <div class="hidden md:flex items-center gap-1">
                <a href="<?php echo $P; ?>client-portal.php"
                    class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Client Portal</a>
                <a href="<?php echo $P; ?>staff-portal.php"
                    class="px-3 py-1 rounded-full hover:bg-white/10 hover:text-primary transition-all duration-300">Staff Portal</a>
            </div>
            <div class="flex items-center gap-2 font-semibold ml-auto text-white">
                <a href="tel:7702841044" class="hover:text-primary transition-all duration-300 flex items-center gap-2">
                    <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    (770) 284-1044
                </a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVIGATION HEADER -->
    <header class="bg-white/80 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 flex justify-between items-center">
            <a href="<?php echo $P; ?>index.php">
                <img src="<?php echo $P; ?>assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Logo" class="h-11 w-auto">
            </a>
            <nav class="hidden xl:flex items-center gap-2 text-[13px] font-semibold relative">
                <a href="<?php echo $P; ?>index.php" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Home</a>

                <!-- About Dropdown -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">About
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
                            <?php foreach ($aboutLinks as $link): ?>
                            <a href="<?php echo $link['href']; ?>" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors"><?php echo $link['label']; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-72 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="p-2 flex flex-col gap-1 border border-gray-100 rounded-xl">
                            <?php foreach ($servicesLinks as $link): ?>
                            <a href="<?php echo $link['href']; ?>" class="px-4 py-2 rounded-lg hover:bg-primary/10 hover:text-primary transition-colors flex items-center gap-2">
                                <div class="w-1.5 h-1.5 rounded-full bg-primary/40"></div><?php echo $link['label']; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Specialties Dropdown -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Specialties
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-1/2 -ml-[350px] mt-0 w-[700px] bg-white shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="grid grid-cols-3 gap-2 p-4 border border-gray-100 rounded-2xl">
                            <?php foreach ($specialtiesLinks as $link): ?>
                            <a href="<?php echo $link['href']; ?>" class="px-3 py-2 rounded-lg hover:bg-primary/10 hover:text-primary text-[13px] font-medium transition-colors border border-transparent hover:border-primary/20"><?php echo $link['label']; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Areas We Serve Dropdown -->
                <div class="group relative">
                    <button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">Areas We Serve
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-96 bg-white shadow-xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 top-full pt-2 z-50">
                        <div class="grid grid-cols-2 gap-2 p-3 border border-gray-100 rounded-xl bg-gray-50/50">
                            <?php foreach ($areasLinks as $link): ?>
                            <a href="<?php echo $link['href']; ?>" class="px-3 py-2 rounded-lg hover:bg-white hover:shadow-sm hover:text-primary text-[13px] font-medium transition-all flex items-center gap-2">
                                <svg class="w-3 h-3 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg><?php echo $link['label']; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <a href="<?php echo $P; ?>blog/" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Blog</a>
                <a href="<?php echo $P; ?>pricing-insurance.php" class="px-3 py-2 text-textMain hover:text-primary transition-colors">Rates</a>
                <a href="<?php echo $P; ?>contact.php" class="bg-primary text-white border border-primary/20 px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-primary/30 hover:bg-[#7a9e3f] transition-all duration-300 ml-3 font-bold tracking-wide">Book Now</a>
            </nav>
            <button id="mobileMenuBtn" class="xl:hidden w-10 h-10 rounded-xl bg-bgOffWhite flex items-center justify-center hover:bg-gray-200 transition-all duration-300" aria-label="Open Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden xl:hidden bg-white/95 backdrop-blur-xl border-t border-gray-100 px-6 pb-5 shadow-2xl absolute w-full">
            <nav class="flex flex-col gap-2 text-sm font-semibold pt-4">
                <a href="<?php echo $P; ?>index.php" class="bg-primary/10 text-primary px-4 py-3 rounded-xl">Home</a>
                <a href="<?php echo $P; ?>about/" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">About</a>
                <a href="<?php echo $P; ?>services/counseling.php" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Services</a>
                <a href="<?php echo $P; ?>specialties/adhd.php" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Specialties</a>
                <a href="<?php echo $P; ?>blog/" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Blog</a>
                <a href="<?php echo $P; ?>pricing-insurance.html" class="px-4 py-3 rounded-xl hover:bg-bgOffWhite hover:text-primary transition-all duration-300">Rates</a>
                <a href="<?php echo $P; ?>contact.html" class="px-4 py-3 rounded-xl bg-primary text-white text-center mt-2 hover:bg-[#7a9e3f] transition-all duration-300">Contact</a>
            </nav>
        </div>
    </header>