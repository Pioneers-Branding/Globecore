<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Results - Globecore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MV2CGDMC');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="bg-gray-50 min-h-screen font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV2CGDMC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img src="/tms-quiz/logo.webp" alt="GlobeCoRe Inc." class="h-12 md:h-16 w-auto object-contain">
                </div>

                <!-- CTA Buttons -->
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <a href="tel:7702841044"
                        class="inline-flex items-center px-4 py-2 sm:px-6 sm:py-3 bg-teal-700 text-white font-semibold rounded-lg hover:bg-teal-800 transition-colors duration-200 shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <span class="hidden sm:inline">Call Now</span>
                        <span class="sm:hidden">Call</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Loading State -->
            <div id="loading" class="text-center py-20">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-teal-700 mx-auto"></div>
                <p class="mt-4 text-gray-600">Loading your results...</p>
            </div>

            <!-- Error State -->
            <div id="error-state" class="hidden min-h-[60vh] flex items-center justify-center">
                <div class="text-center max-w-md mx-auto">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">No Results Found</h2>
                    <p class="text-gray-600 mb-6">
                        We couldn't find your quiz results. Please take the quiz first to see your personalized recommendations.
                    </p>
                    <a href="/tms-quiz/"
                        class="inline-block px-6 py-3 bg-teal-700 text-white font-bold rounded-lg hover:bg-teal-800 transition-colors">
                        Take the TMS Quiz
                    </a>
                </div>
            </div>

            <!-- Results Content -->
            <div id="results-content" class="hidden">
                <div class="text-center mb-8">
                    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">
                        Your TMS Suitability Assessment Results
                    </h1>
                    <p class="text-lg text-gray-600">
                        Hello <span id="user-name">User</span>, here are your personalized results and next steps.
                    </p>
                </div>

                <!-- Results Summary -->
                <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 mb-8">
                    <div class="text-center mb-6">
                        <div id="score-container" class="inline-block px-8 py-6 rounded-xl border-2">
                            <p class="text-sm uppercase tracking-wide font-bold text-gray-500 mb-2">Your Total Score</p>
                            <p id="score-value" class="text-4xl font-bold">0 / 12</p>
                            <p id="risk-level" class="text-xl font-semibold mt-2">Low Suitability</p>
                        </div>
                    </div>

                    <!-- Analysis -->
                    <div id="analysis-container" class="p-6 rounded-xl border mb-6">
                        <h3 id="analysis-title" class="text-lg font-bold mb-3">Your Analysis</h3>
                        <p id="analysis-text" class="text-gray-800 mb-4 leading-relaxed"></p>
                        <h3 id="recommendation-title" class="text-lg font-bold mb-3">Our Recommendation</h3>
                        <p id="recommendation-text" class="text-gray-800 leading-relaxed font-medium"></p>
                    </div>
                </div>

                <!-- How Globecore Can Help -->
                <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">How Globecore Can Help</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                            If your score suggests you could benefit from professional care, Globecore specializes in treating various mental health conditions.
                        </p>
                    </div>

                    <div class="mb-8 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">We Specialize in Treating:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg border border-teal-100">
                                <svg class="w-5 h-5 text-teal-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-800 font-medium">Depression</span>
                            </div>
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg border border-teal-100">
                                <svg class="w-5 h-5 text-teal-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-800 font-medium">Anxiety Disorders</span>
                            </div>
                            <div class="flex items-center p-3 bg-teal-50 rounded-lg border border-teal-100">
                                <svg class="w-5 h-5 text-teal-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-800 font-medium">OCD & PTSD</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-teal-50 to-teal-100 rounded-xl p-8 text-center mb-8">
                        <h3 class="text-2xl font-bold text-teal-800 mb-4">Take Action Today</h3>
                        <p class="text-teal-700 mb-6 text-lg">Contact our team to schedule a discovery call.</p>
                        <a href="tel:7702841044"
                            class="inline-flex items-center px-8 py-4 bg-teal-700 text-white font-bold text-lg rounded-lg hover:bg-teal-800 transition-colors shadow-lg transform hover:scale-105">
                            Book Complementary Discovery Call
                        </a>
                    </div>

                    <!-- Provider -->
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Meet Our Expert Providers</h3>
                        <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-lg inline-block">
                            <img src="/tms-quiz/dr-kelly.webp" alt="Dr. Kelly Lewis-Arthur" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover shadow-lg border-4 border-white">
                            <h4 class="text-xl font-bold text-gray-900 mb-3">Dr. Kelly Lewis-Arthur</h4>
                            <div class="bg-teal-50 rounded-lg px-4 py-2 inline-block">
                                <p class="text-teal-700 font-semibold text-sm">Licensed Psychologist, CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="bg-white rounded-lg px-3 py-2 mb-4 md:mb-0">
                    <img src="/tms-quiz/logo.webp" alt="GlobeCoRe Inc." class="h-10 w-auto object-contain">
                </div>
                <div class="text-center md:text-right">
                    <p class="text-gray-300 mb-1">Committed to Diversity & Cultural Inclusion</p>
                    <p class="text-sm text-gray-400">© GlobeCoRe, Inc. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const getCookie = (name) => {
                const value = `; ${document.cookie}`;
                const parts = value.split(`; ${name}=`);
                if (parts.length === 2) return decodeURIComponent(parts.pop().split(';').shift());
                return '';
            };

            const score = getCookie('tmsScore');
            const name = getCookie('userName') || 'User';

            if (!score || score === '') {
                document.getElementById('loading').classList.add('hidden');
                document.getElementById('error-state').classList.remove('hidden');
                return;
            }

            const scoreNum = parseInt(score) || 0;
            const getResultsMessage = (score) => {
                if (score >= 8) {
                    return { level: "High Suitability", summary: "You may be a suitable candidate for TMS treatment.", recommendation: "Your responses suggest that standard treatments may not be fully effective for you.", color: "text-teal-700", bgColor: "bg-teal-50", borderColor: "border-teal-200" };
                } else if (score >= 4) {
                    return { level: "Moderate Suitability", summary: "TMS might be an option for you.", recommendation: "You show some signs that could benefit from TMS.", color: "text-blue-700", bgColor: "bg-blue-50", borderColor: "border-blue-200" };
                } else {
                    return { level: "Low Suitability", summary: "TMS may not be the primary recommendation.", recommendation: "Based on your responses, other treatments might be more appropriate.", color: "text-gray-700", bgColor: "bg-gray-50", borderColor: "border-gray-200" };
                }
            };

            const result = getResultsMessage(scoreNum);
            document.getElementById('user-name').textContent = name;
            document.getElementById('score-value').textContent = `${scoreNum} / 12`;
            document.getElementById('score-value').className = `text-4xl font-bold ${result.color}`;
            document.getElementById('risk-level').textContent = result.level;
            document.getElementById('risk-level').className = `text-xl font-semibold mt-2 ${result.color}`;
            document.getElementById('score-container').className = `inline-block px-8 py-6 rounded-xl border-2 ${result.bgColor} ${result.borderColor}`;
            document.getElementById('analysis-container').className = `p-6 rounded-xl border ${result.bgColor} ${result.borderColor} mb-6`;
            document.getElementById('analysis-title').className = `text-lg font-bold mb-3 ${result.color}`;
            document.getElementById('analysis-text').textContent = result.summary;
            document.getElementById('recommendation-title').className = `text-lg font-bold mb-3 ${result.color}`;
            document.getElementById('recommendation-text').textContent = result.recommendation;
            document.getElementById('loading').classList.add('hidden');
            document.getElementById('results-content').classList.remove('hidden');
        });
    </script>
</body>
</html>
