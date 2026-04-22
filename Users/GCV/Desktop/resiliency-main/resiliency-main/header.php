<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resiliency Mind + Body Medicine | Advanced Psychiatric Care</title>
    <meta name="description" content="Personalized treatments for depression, anxiety, OCD, and PTSD using evidence-based therapies and advanced neuromodulation technology including Deep TMS Therapy and SPRAVATO.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons (Lucide) -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B2035', /* Deep Blue / Navy */
                        secondary: '#23bfe2', /* Soft Sage Green */
                        accent: '#23bfe2', /* Light Blue */
                        lightblue: '#23bfe2', /* Light Blue Accent */
                        surface: '#FDFDFD',
                        neutral: '#F3F4F6'
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 10px 40px -10px rgba(11,32,53,0.08)',
                        'hover': '0 20px 40px -10px rgba(11,32,53,0.12)',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="font-sans text-gray-800 bg-surface antialiased selection:bg-accent selection:text-white">

    <!-- Sticky Navigation -->
    <header id="header" class="group fixed w-full top-0 z-50 transition-all duration-300 bg-transparent border-b border-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24 transition-all duration-300 group-[.scrolled]:h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="block">
                        <!-- We use a brightness filter for the white variant before scrolling, and invert/original on scroll depending on the logo's original color -->
                        <img src="assets/images/logo/Resiliency-MindBody-Medicine-Logo.png" alt="Resiliency Mind+Body Medicine" class="h-16 w-auto object-contain transition-all duration-300 brightness-0 invert group-[.scrolled]:filter-none">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex items-center space-x-8">
                    
                    <!-- Mental Health Dropdown -->
                    <div class="relative group/mh">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Mental Health <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/mh:rotate-180"></i>
                        </button>
                        <!-- Dropdown Content -->
                        <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-72 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/mh:opacity-100 group-hover/mh:visible transition-all duration-300 transform translate-y-4 group-hover/mh:translate-y-0 border border-gray-100 overflow-hidden max-h-[70vh] overflow-y-auto">
                            <div class="p-2 space-y-1">
                                <a href="tms-therapy.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS Therapy</a>
                                <a href="accelerated-tms.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Accelerated Deep TMS (SWIFT)</a>
                                <a href="spravato-therapy.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">SPRAVATO® Treatment</a>
                                <a href="medication-management.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Medication Management</a>
                                <a href="pharmacogenetic-testing.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Pharmacogenetic Testing</a>
                                <a href="integrative-psychiatry.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Integrative Psychiatry</a>
                                <a href="proliv-rx.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Proliv™ Rx</a>
                                <a href="telehealth.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Telehealth Visits</a>
                                <a href="vns-therapy.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">VNS Therapy</a>

                            </div>
                        </div>
                    </div>

                    <!-- Wellness Dropdown -->
                    <div class="relative group/well">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Wellness <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/well:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-72 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/well:opacity-100 group-hover/well:visible transition-all duration-300 transform translate-y-4 group-hover/well:translate-y-0 border border-gray-100 overflow-hidden max-h-[70vh] overflow-y-auto">
                            <div class="p-2 space-y-1">
                                <a href="iv-vitamin-therapy.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">IV Vitamin Therapy</a>
                                <a href="nad-therapy.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">NAD+ Therapy</a>
                                <a href="weight-loss.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Medical Weight Loss</a>
                                <a href="hormone-therapy.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Hormone Therapy</a>
                                <a href="supplements.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Supplements</a>
                            </div>
                        </div>
                    </div>

                    <!-- Conditions We Treat Dropdown -->
                    <div class="relative group/cond">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Conditions We Treat <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/cond:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] left-1/2 -translate-x-1/2 w-80 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/cond:opacity-100 group-hover/cond:visible transition-all duration-300 transform translate-y-4 group-hover/cond:translate-y-0 border border-gray-100 overflow-hidden">
                            <div class="p-2 grid grid-cols-2 gap-x-2 gap-y-1">
                                <a href="depression.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Depression</a>
                                <a href="anxiety.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Anxiety</a>
                                <a href="ocd.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">OCD</a>
                                <a href="ptsd.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">PTSD</a>
                                <a href="adhd.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">ADHD</a>
                                <a href="bipolar.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Bipolar Disorder</a>
                                <a href="substance-abuse.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Substance Abuse</a>
                                <a href="autism.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Autism</a>
                                <a href="suicidal-ideation.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Suicidal Ideation</a>
                                <a href="mental-clarity.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Mental Clarity</a>
                                <a href="cognitive-enhancement.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Cognitive Enhancement</a>
                                <a href="conditions.php" class="block px-4 py-3 text-sm text-[#23bfe2] hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">View All Conditions →</a>
                            </div>
                        </div>
                    </div>

                    <a href="team.php" class="text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">Meet The Team</a>

                    <!-- Resources Dropdown -->
                    <div class="relative group/res">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Resources <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/res:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] right-0 w-64 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/res:opacity-100 group-hover/res:visible transition-all duration-300 transform translate-y-4 group-hover/res:translate-y-0 border border-gray-100 overflow-hidden max-h-[70vh] overflow-y-auto">
                            <div class="p-2 space-y-1">
                                <a href="about.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">About Us</a>
                                <a href="reviews.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Patient Reviews</a>
                                <a href="metrics.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Our Outcomes</a>
                                <a href="faqs.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">FAQs</a>
                                <a href="tms-faq.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS FAQ</a>
                                <a href="tms-resources.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Deep TMS Resources</a>
                                <a href="insurance.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Insurance</a>
                                <a href="caloptima.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">CalOptima Coverage</a>
                                <a href="cherry-payment.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Payment Plans</a>
                                <a href="blog.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Blog</a>
                                <a href="press-media.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Press / Media</a>
                                <a href="new-patient-form.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Patient Forms</a>
                                <a href="compliance.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Compliance</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact / Locations Dropdown -->
                    <div class="relative group/loc">
                        <button class="flex items-center gap-1 text-sm font-medium text-white/90 hover:text-white group-[.scrolled]:text-gray-600 group-[.scrolled]:hover:text-primary transition-colors py-8">
                            Contact <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover/loc:rotate-180"></i>
                        </button>
                        <div class="absolute top-[80px] right-0 w-64 bg-white rounded-2xl shadow-[0_20px_40px_-15px_rgba(11,32,53,0.15)] opacity-0 invisible group-hover/loc:opacity-100 group-hover/loc:visible transition-all duration-300 transform translate-y-4 group-hover/loc:translate-y-0 border border-gray-100 overflow-hidden">
                            <div class="p-2 space-y-1">
                                <a href="contact.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Contact Us</a>
                                <a href="newport-beach.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Newport Beach Office</a>
                                <a href="san-juan-capistrano.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">San Juan Capistrano Office</a>
                                <a href="telehealth.php" class="block px-4 py-3 text-sm text-gray-600 hover:text-primary hover:bg-neutral rounded-xl transition-colors font-medium">Telehealth / Virtual Visits</a>
                            </div>
                        </div>
                    </div>

                </nav>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center space-x-4">
                    <p class="text-sm font-semibold flex items-center gap-2 text-white group-[.scrolled]:text-primary transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i> (949) 996-5355
                    </p>
                    <a href="contact.php" class="bg-white text-primary hover:bg-gray-100 group-[.scrolled]:bg-primary group-[.scrolled]:text-white group-[.scrolled]:hover:bg-primary/90 px-6 py-2.5 rounded-full text-sm font-medium transition-all shadow-[0_4px_14px_0_rgba(255,255,255,0.39)] group-[.scrolled]:shadow-[0_4px_14px_0_rgba(11,32,53,0.39)] hover:-translate-y-0.5 transform">
                        Book an Appointment
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="open-mobile-menu" class="focus:outline-none text-white group-[.scrolled]:text-gray-600">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-primary transform translate-x-full transition-transform duration-300 overflow-y-auto hidden">
        <div class="p-6">
            <!-- Header section of mobile menu -->
            <div class="flex items-center justify-between mb-8">
                <img src="assets/images/logo/Resiliency-MindBody-Medicine-Logo.png" alt="Resiliency Mind+Body Medicine" class="h-10 w-auto brightness-0 invert">
                <button id="close-mobile-menu" class="text-white p-2">
                    <i data-lucide="x" class="w-8 h-8"></i>
                </button>
            </div>

            <!-- Mobile Navigation Links -->
            <nav class="flex flex-col space-y-6">
                
                <!-- Mental Health Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Mental Health <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="tms-therapy.php" class="text-white/80 hover:text-white transition-colors">Deep TMS Therapy</a>
                        <a href="accelerated-tms.php" class="text-white/80 hover:text-white transition-colors">Accelerated Deep TMS (SWIFT)</a>
                        <a href="spravato-therapy.php" class="text-white/80 hover:text-white transition-colors">SPRAVATO® Treatment</a>
                        <a href="medication-management.php" class="text-white/80 hover:text-white transition-colors">Medication Management</a>
                        <a href="pharmacogenetic-testing.php" class="text-white/80 hover:text-white transition-colors">Pharmacogenetic Testing</a>
                        <a href="integrative-psychiatry.php" class="text-white/80 hover:text-white transition-colors">Integrative Psychiatry</a>
                        <a href="proliv-rx.php" class="text-white/80 hover:text-white transition-colors">Proliv™ Rx</a>
                        <a href="telehealth.php" class="text-white/80 hover:text-white transition-colors">Telehealth Visits</a>
                      <a href="vns-therapy.php" class="text-white/80 hover:text-white transition-colors">VNS Therapy</a>

                    </div>
                </div>

                <!-- Wellness Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Wellness <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="iv-vitamin-therapy.php" class="text-white/80 hover:text-white transition-colors">IV Vitamin Therapy</a>
                        <a href="nad-therapy.php" class="text-white/80 hover:text-white transition-colors">NAD+ Therapy</a>
                        <a href="weight-loss.php" class="text-white/80 hover:text-white transition-colors">Medical Weight Loss</a>
                        <a href="hormone-therapy.php" class="text-white/80 hover:text-white transition-colors">Hormone Therapy</a>
                        <a href="supplements.php" class="text-white/80 hover:text-white transition-colors">Supplements</a>
                    </div>
                </div>

                <!-- Conditions Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Conditions We Treat <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="depression.php" class="text-white/80 hover:text-white transition-colors">Depression</a>
                        <a href="anxiety.php" class="text-white/80 hover:text-white transition-colors">Anxiety</a>
                        <a href="ocd.php" class="text-white/80 hover:text-white transition-colors">OCD</a>
                        <a href="ptsd.php" class="text-white/80 hover:text-white transition-colors">PTSD</a>
                        <a href="adhd.php" class="text-white/80 hover:text-white transition-colors">ADHD</a>
                        <a href="bipolar.php" class="text-white/80 hover:text-white transition-colors">Bipolar Disorder</a>
                        <a href="substance-abuse.php" class="text-white/80 hover:text-white transition-colors">Substance Abuse</a>
                        <a href="autism.php" class="text-white/80 hover:text-white transition-colors">Autism</a>
                        <a href="suicidal-ideation.php" class="text-white/80 hover:text-white transition-colors">Suicidal Ideation</a>
                        <a href="mental-clarity.php" class="text-white/80 hover:text-white transition-colors">Mental Clarity</a>
                        <a href="cognitive-enhancement.php" class="text-white/80 hover:text-white transition-colors">Cognitive Enhancement</a>
                        <a href="conditions.php" class="text-[#23bfe2] hover:text-white transition-colors">View All Conditions →</a>
                    </div>
                </div>

                <a href="team.php" class="text-lg font-medium text-white pb-2 border-b border-white/10 block">Meet The Team</a>

                <!-- Resources Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Resources <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="about.php" class="text-white/80 hover:text-white transition-colors">About Us</a>
                        <a href="reviews.php" class="text-white/80 hover:text-white transition-colors">Patient Reviews</a>
                        <a href="metrics.php" class="text-white/80 hover:text-white transition-colors">Our Outcomes</a>
                        <a href="faqs.php" class="text-white/80 hover:text-white transition-colors">FAQs</a>
                        <a href="tms-faq.php" class="text-white/80 hover:text-white transition-colors">Deep TMS FAQ</a>
                        <a href="tms-resources.php" class="text-white/80 hover:text-white transition-colors">Deep TMS Resources</a>
                        <a href="insurance.php" class="text-white/80 hover:text-white transition-colors">Insurance</a>
                        <a href="caloptima.php" class="text-white/80 hover:text-white transition-colors">CalOptima Coverage</a>
                        <a href="cherry-payment.php" class="text-white/80 hover:text-white transition-colors">Payment Plans</a>
                        <a href="blog.php" class="text-white/80 hover:text-white transition-colors">Blog</a>
                        <a href="press-media.php" class="text-white/80 hover:text-white transition-colors">Press / Media</a>
                        <a href="new-patient-form.php" class="text-white/80 hover:text-white transition-colors">Patient Forms</a>
                        <a href="compliance.php" class="text-white/80 hover:text-white transition-colors">Compliance</a>
                    </div>
                </div>

                <!-- Contact / Locations Accordion -->
                <div>
                    <button class="mobile-accordion-toggle flex items-center justify-between w-full text-lg font-medium text-white pb-2 border-b border-white/10">
                        Contact & Locations <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-accordion-content hidden flex-col pl-4 pt-4 space-y-4">
                        <a href="contact.php" class="text-white/80 hover:text-white transition-colors">Contact Us</a>
                        <a href="newport-beach.php" class="text-white/80 hover:text-white transition-colors">Newport Beach Office</a>
                        <a href="san-juan-capistrano.php" class="text-white/80 hover:text-white transition-colors">San Juan Capistrano Office</a>
                        <a href="telehealth.php" class="text-white/80 hover:text-white transition-colors">Telehealth / Virtual Visits</a>
                    </div>
                </div>

            </nav>

            <div class="mt-10">
                <a href="contact.php" class="bg-lightblue text-primary font-bold px-8 py-4 rounded-full text-center block w-full hover:bg-[#1aadd0] transition-colors">
                    Book an Appointment
                </a>
            </div>
        </div>
    </div>

