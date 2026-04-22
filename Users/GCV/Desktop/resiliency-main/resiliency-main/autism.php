<?php include 'header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:min-h-[70vh] flex items-center justify-center overflow-hidden pt-32 pb-20 md:pt-32 md:pb-20">
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="assets/images/autism_hero.png" alt="Autism Spectrum Support" class="w-full h-full object-cover object-[50%_30%]">
            <div class="absolute inset-0 bg-[#0B2035]/85 md:bg-gradient-to-r md:from-[#0B2035]/95 md:via-[#0B2035]/80 md:to-[#0B2035]/50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Mental Health Treatment</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Autism Spectrum <span class="text-[#23bfe2] font-light">Treatment in Newport Beach & San Juan Capistrano, CA</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Specialized psychiatric support for individuals on the autism spectrum—addressing co-occurring mental health conditions, sensory challenges, and quality of life with compassionate, individualized care.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="contact.php" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Schedule Your Consultation <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="tel:9499965355" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center gap-2">
                        <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Understanding the Condition -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#23bfe2]/5 -skew-x-12 transform translate-x-32 hidden lg:block pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-20">
                <div class="w-full lg:w-1/2 text-[#0B2035] reveal">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                        <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase">Understanding Autism Spectrum</h2>
                    </div>
                    <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Neurodivergent-Affirming Care</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed font-light">
                        Autism spectrum conditions often co-occur with anxiety, depression, ADHD, and sensory processing challenges. Understanding these intersections is key to effective treatment.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">
                        Our providers have specialized training in the neurodivergent spectrum, offering medication management tailored to the unique neurological profiles of autistic individuals, along with integrative strategies for emotional regulation and daily functioning.
                    </p>
                </div>

                <div class="w-full lg:w-1/2 relative reveal reveal-delay-1">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 ring-1 ring-[#0B2035]/5">
                        <img src="assets/images/autism_support.png" alt="Autism Spectrum Support at Resiliency" class="w-full h-[450px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#0B2035]/20 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Treatment Approach -->
    <section class="py-16 bg-[#0B2035] relative overflow-hidden text-white border-t border-white/10">
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#0B2035] via-[#0B2035]/95 to-[#0B2035]"></div>
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Our Treatment Approach</h2>
                <h3 class="text-4xl md:text-5xl font-bold">How We Support Autism Spectrum Care</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="pill" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Specialized Medication</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Carefully tailored pharmacotherapy respecting unique neurodivergent neurobiology.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="brain" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Co-occurring Conditions</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Expert management of anxiety, depression, ADHD, and mood dysregulation.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Sensory & Emotional Support</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Strategies for sensory processing challenges and emotional regulation.</p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-[2rem] p-8 hover:-translate-y-2 transition-all duration-300 reveal reveal-delay-3 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="user-check" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Family Guidance</h4>
                    <p class="text-gray-300 font-light leading-relaxed">Education and guidance for families navigating autism spectrum care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Resiliency -->
    <section class="py-16 bg-neutral relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">The Resiliency Difference</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-[#0B2035] mb-6">Why Choose Resiliency</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="user-check" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Board-Certified Expertise</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Led by Dr. LaFrenierre, double board-certified in Psychiatry and Addiction Medicine, with a multidisciplinary team.</p>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-1 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="layers" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Integrated Treatment</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Medication, Deep TMS, SPRAVATO, IV therapy, and lifestyle medicine all under one roof.</p>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-2 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="laptop" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">In-Person & Telehealth</h4>
                    <p class="text-gray-500 font-light leading-relaxed">Flexible appointment options at our Newport Beach and San Juan Capistrano offices or via secure video.</p>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-soft border border-gray-100 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 reveal reveal-delay-3 group flex flex-col items-center text-center">
                    <div class="w-14 h-14 bg-[#23bfe2]/10 rounded-2xl flex items-center justify-center text-[#23bfe2] mb-6 group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                        <i data-lucide="file-check-2" class="w-7 h-7"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#0B2035] mb-3">Insurance Accepted</h4>
                    <p class="text-gray-500 font-light leading-relaxed">In-network with most major insurances including Aetna, Anthem, Cigna, United, Medicare, TriCare.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-[#0B2035] text-white relative border-t-[8px] border-[#23bfe2]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-sm font-bold tracking-widest text-[#23bfe2] uppercase mb-4">Common Questions</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Frequently Asked Questions</h3>
            </div>

            <div class="space-y-4">
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Do you diagnose autism?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            We provide psychiatric evaluations that may identify autism spectrum features. For formal diagnostic assessments, we can refer to specialized neuropsychological testing.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>How is medication different for autistic individuals?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Autistic individuals often have different sensitivities to psychiatric medications. We start at very low doses and adjust carefully, respecting the unique neurological profile.
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden reveal">
                    <button class="faq-toggle w-full px-8 py-6 text-left font-bold text-xl flex items-center justify-between focus:outline-none hover:bg-white/5 transition-colors group">
                        <span>Do you work with adults on the spectrum?</span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[#23bfe2] group-hover:bg-[#23bfe2] group-hover:text-[#0B2035] transition-colors">
                            <i data-lucide="plus" class="w-5 h-5 transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="px-8 pb-8 text-gray-300 font-light leading-relaxed text-lg hidden faq-content">
                        <div class="pt-2 border-t border-white/10 mt-2">
                            Yes. Many adults receive late diagnoses. Our providers are experienced in supporting autistic adults with mental health management and quality of life optimization.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-400 font-light">Have more questions? <a href="#contact" class="text-[#23bfe2] font-semibold hover:text-white transition-colors underline underline-offset-4 decoration-[#23bfe2]/30 hover:decoration-white">Contact our clinical team.</a></p>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0">
            <img src="assets/images/autism_relief.png" alt="Path to Support" class="w-full h-full object-cover opacity-10">
            <div class="absolute inset-0 bg-gradient-to-b from-white via-white/80 to-white"></div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Take the First Step Toward <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Healing</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Schedule a consultation with our team and discover a personalized treatment plan designed for your unique needs.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 items-center">
                <a href="contact.php" class="group relative inline-flex items-center justify-center bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-10 py-5 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl w-full sm:w-auto text-lg">
                    <span class="relative z-10 flex items-center gap-2">
                        Schedule Your Consultation
                        <i data-lucide="arrow-up-right" class="w-6 h-6 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                    </span>
                </a>
                <a href="tel:9499965355" class="text-[#0B2035] font-bold text-lg hover:text-[#23bfe2] transition-colors flex items-center gap-2">
                    <i data-lucide="phone" class="w-5 h-5"></i> (949) 996-5355
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const triggers = document.querySelectorAll('.faq-toggle');
        triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                const icon = trigger.querySelector('[data-lucide="plus"]');
                const content = trigger.nextElementSibling;

                if (content.classList.contains('hidden')) {
                    triggers.forEach(other => {
                        if (other !== trigger) {
                            other.nextElementSibling.classList.add('hidden');
                            other.querySelector('[data-lucide="plus"]').style.transform = 'rotate(0deg)';
                        }
                    });

                    content.classList.remove('hidden');
                    if (icon) icon.style.transform = 'rotate(45deg)';
                } else {
                    content.classList.add('hidden');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>

<?php include 'footer.php'; ?>

