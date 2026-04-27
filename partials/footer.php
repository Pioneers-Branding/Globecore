<?php
/**
 * GlobeCoRe Website - Footer Section
 */

if (!isset($P)) {
    $scriptPath = dirname($_SERVER['PHP_SELF']);
    $depth = max(0, substr_count($scriptPath, '/') - 1);
    $P = str_repeat('../', $depth);
}
?>
    <footer id="contact" class="relative bg-gradient-to-b from-deepTeal to-[#024d5e] text-gray-200 overflow-hidden">

        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-primary/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary/5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>

        <!-- Top CTA Banner -->
        <div class="relative border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Ready to Start Your Healing Journey?</h3>
                        <p class="text-gray-400 text-sm max-w-lg">Take the first step toward better mental health. Our compassionate team is here to support you every step of the way.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                        <a href="tel:7702841044" class="inline-flex items-center justify-center gap-2 bg-primary text-white font-bold py-3.5 px-8 rounded-xl hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            (770) 284-1044
                        </a>
                        <a href="<?php echo $P; ?>services/counseling.php" class="inline-flex items-center justify-center gap-2 border border-white/20 text-white font-bold py-3.5 px-8 rounded-xl hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300">
                            View Services
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Grid -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 pt-14 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

                <!-- Col 1: About -->
                <div>
                    <a href="#" class="inline-block mb-5">
                        <img src="<?php echo $P; ?>assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe Logo" class="h-10 w-auto brightness-0 invert">
                    </a>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Providing expert psychological services, testing, and consulting in the Atlanta area, tailored for multicultural and diverse communities. Empowering you toward lasting well-being.
                    </p>
                    <div class="flex gap-2.5 mt-6">
                        <a href="https://www.facebook.com/globecoreinc/" target="_blank" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-primary hover:scale-110 transition-all duration-300 group" aria-label="Facebook">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/Globecoreinc" target="_blank" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-primary hover:scale-110 transition-all duration-300 group" aria-label="Twitter">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/global-consulting-&-research-globecore-inc/about/" target="_blank" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-primary hover:scale-110 transition-all duration-300 group" aria-label="LinkedIn">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/globecoreinc/" target="_blank" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-primary hover:scale-110 transition-all duration-300 group" aria-label="Instagram">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 4H8a4 4 0 00-4 4v8a4 4 0 004 4h8a4 4 0 004-4V8a4 4 0 00-4-4zm2 12a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2h8a2 2 0 012 2v8zm-6-7a3 3 0 100 6 3 3 0 000-6zm4.5-1.5a1 1 0 100 2 1 1 0 000-2z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-sm font-bold text-white tracking-wider uppercase mb-6 flex items-center gap-2"><span class="w-6 h-px bg-primary"></span>Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="<?php echo $P; ?>about/" class="flex items-center gap-2 hover:text-primary hover:translate-x-1 transition-all duration-300"><span class="w-1 h-1 bg-primary/50 rounded-full"></span>About Us</a></li>
                        <li><a href="<?php echo $P; ?>about/meet-our-team.php" class="flex items-center gap-2 hover:text-primary hover:translate-x-1 transition-all duration-300"><span class="w-1 h-1 bg-primary/50 rounded-full"></span>Meet Our Team</a></li>
                        <li><a href="<?php echo $P; ?>services/counseling.php" class="flex items-center gap-2 hover:text-primary hover:translate-x-1 transition-all duration-300"><span class="w-1 h-1 bg-primary/50 rounded-full"></span>Services</a></li>
                        <li><a href="<?php echo $P; ?>specialties/adhd.php" class="flex items-center gap-2 hover:text-primary hover:translate-x-1 transition-all duration-300"><span class="w-1 h-1 bg-primary/50 rounded-full"></span>Specialties</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact Info -->
                <div>
                    <h4 class="text-sm font-bold text-white tracking-wider uppercase mb-6 flex items-center gap-2"><span class="w-6 h-px bg-primary"></span>Contact Us</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <span>3355 Lenox Road NE.<br>Suite 1000<br>Atlanta, GA 30326<br><span class="text-primary font-semibold mt-1 block">✓ 2 min. walk from Marta Lenox station</span></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <a href="mailto:help@globecoreinc.com" class="hover:text-primary transition-all duration-300">help@globecoreinc.com</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <a href="tel:7702841044" class="hover:text-primary transition-all duration-300">(770) 284-1044</a>
                        </li>
                    </ul>
                    <div class="mt-5 pt-4 border-t border-white/10">
                        <p class="text-sm text-gray-400 leading-relaxed italic">Clinicians and Consultants are available to see clients M-F from 9 am – 7 pm and Saturdays by appointment only.</p>
                    </div>
                </div>

                <!-- Col 4: Areas We Serve -->
                <div>
                    <h4 class="text-sm font-bold text-white tracking-wider uppercase mb-6 flex items-center gap-2"><span class="w-6 h-px bg-primary"></span>Areas We Serve</h4>
                    <ul class="grid grid-cols-2 gap-x-4 gap-y-2 text-sm text-gray-400">
                        <li><a href="<?php echo $P; ?>areas-we-serve/marietta.php" class="hover:text-primary transition-colors duration-300">Marietta</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/alpharetta.php" class="hover:text-primary transition-colors duration-300">Alpharetta</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/sandy-springs.php" class="hover:text-primary transition-colors duration-300">Sandy Springs</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/brookhaven.php" class="hover:text-primary transition-colors duration-300">Brookhaven</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/decatur.php" class="hover:text-primary transition-colors duration-300">Decatur</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/smyrna.php" class="hover:text-primary transition-colors duration-300">Smyrna</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/johns-creek.php" class="hover:text-primary transition-colors duration-300">Johns Creek</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/dunwoody.php" class="hover:text-primary transition-colors duration-300">Dunwoody</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/peachtree-corners.php" class="hover:text-primary transition-colors duration-300">Peachtree Corners</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/lawrenceville.php" class="hover:text-primary transition-colors duration-300">Lawrenceville</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/duluth.php" class="hover:text-primary transition-colors duration-300">Duluth</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/woodstock.php" class="hover:text-primary transition-colors duration-300">Woodstock</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/canton.php" class="hover:text-primary transition-colors duration-300">Canton</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/newnan.php" class="hover:text-primary transition-colors duration-300">Newnan</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/peachtree-city.php" class="hover:text-primary transition-colors duration-300">Peachtree City</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/buckhead.php" class="hover:text-primary transition-colors duration-300">Buckhead</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/midtown.php" class="hover:text-primary transition-colors duration-300">Midtown</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/lenox.php" class="hover:text-primary transition-colors duration-300">Lenox</a></li>
                        <li><a href="<?php echo $P; ?>areas-we-serve/downtown-atlanta.php" class="hover:text-primary transition-colors duration-300">Downtown Atlanta</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Gradient Separator -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>
        </div>

        <!-- Copyright Bar -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p>&copy; <?php echo date('Y'); ?> GlobeCoRe Inc. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="<?php echo $P; ?>privacy-policy.php" class="hover:text-primary transition-colors duration-300">Privacy Policy</a>
                    <a href="<?php echo $P; ?>terms-of-service.php" class="hover:text-primary transition-colors duration-300">Terms of Service</a>
                    <a href="<?php echo $P; ?>sitemap.html" class="hover:text-primary transition-colors duration-300">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>