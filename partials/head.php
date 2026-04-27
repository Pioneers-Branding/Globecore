<?php
/**
 * GlobeCoRe Website - Shared Head Section
 * Include in all pages before the body tag closes
 */

// Detect base path from current file location
$scriptPath = dirname($_SERVER['PHP_SELF']);
$depth = max(0, substr_count($scriptPath, '/') - 1);
$P = str_repeat('../', $depth);
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'GlobeCoRe Inc. Atlanta, GA'; ?></title>
    <meta name="description" content="GlobeCoRe offers comprehensive psychological services, TMS therapy, counseling, psychological evaluations & telehealth in Atlanta, GA. Culturally sensitive, inclusive care for individuals, couples & families. Call (770) 284-1044.">
    <meta name="keywords" content="psychologist Atlanta, therapy Atlanta GA, TMS therapy Atlanta, psychological evaluation Atlanta, counseling services Atlanta, telehealth therapy Georgia, medication management Atlanta, couples therapy Atlanta, family therapy Atlanta, ADHD evaluation Atlanta, GlobeCoRe">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="GlobeCoRe Inc.">
    <link rel="canonical" href="https://globecoreinc.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://globecoreinc.com/">
    <meta property="og:title" content="Psychological & Consulting Services in Atlanta, GA | GlobeCoRe Inc.">
    <meta property="og:description" content="GlobeCoRe offers comprehensive psychological services, TMS therapy, counseling, evaluations & telehealth in Atlanta. Culturally sensitive, inclusive care. Call (770) 284-1044.">
    <meta property="og:image" content="https://globecoreinc.com/assets/globecore-og-image.jpg">
    <meta property="og:site_name" content="GlobeCoRe Inc.">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Globecoreinc">
    <meta name="twitter:title" content="Psychological & Consulting Services in Atlanta | GlobeCoRe">
    <meta name="twitter:description" content="Comprehensive psychological services, TMS therapy, counseling & telehealth in Atlanta, GA. Inclusive, compassionate care.">
    <meta name="twitter:image" content="https://globecoreinc.com/assets/globecore-og-image.jpg">

    <!-- Local SEO Geo Tags -->
    <meta name="geo.region" content="US-GA">
    <meta name="geo.placename" content="Atlanta">
    <meta name="geo.position" content="33.846;-84.362">
    <meta name="ICBM" content="33.846, -84.362">

    <!-- JSON-LD Structured Data: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What types of therapy do you offer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer individual therapy, couples counseling, family therapy, TMS therapy, psychological evaluations, and medication management. All services are available in-person and via telehealth."
                }
            },
            {
                "@type": "Question",
                "name": "Do you accept insurance?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we accept most major insurance plans. We also offer competitive self-pay rates and superbills for out-of-network reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How do I schedule an appointment?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can call us at (770) 284-1044, use our online Client Portal, or fill out our New Appointment Request form. New patients are typically seen within one to two weeks."
                }
            },
            {
                "@type": "Question",
                "name": "What does a psychological consultant do?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A psychological consultant provides expert guidance on mental health, behavioral, and emotional matters to individuals, organizations, and groups, focusing on assessment, strategic recommendations, and program development."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between a therapist and a consultant?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A therapist provides ongoing treatment through regular sessions focused on healing. A consultant offers specialized expertise for a defined period, such as evaluations and organizational assessments."
                }
            },
            {
                "@type": "Question",
                "name": "What are the 5 C's of mental health?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The 5 C's of mental health are Connection, Competence, Coping, Contribution, and Control — principles that guide a balanced approach to well-being."
                }
            }
        ]
    }
    </script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8BAF4C',
                        secondary: '#0F7A8D',
                        deepTeal: '#027289',
                        textMain: '#424242',
                        bgOffWhite: '#F3F3F3',
                    },
                    fontFamily: {
                        raleway: ['Raleway', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* FAQ Accordion Styling */
        details summary::-webkit-details-marker {
            display: none;
        }

        details summary {
            list-style: none;
        }

        details[open] summary .faq-chevron {
            transform: rotate(180deg);
        }

        .faq-chevron {
            transition: transform 0.3s ease;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Line clamp utilities */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>