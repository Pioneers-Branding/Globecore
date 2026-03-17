import re

with open('pricing-insurance.html', 'r', encoding='utf-8') as f:
    content = f.read()

# The section to replace starts from <main id="content"> down to the start of the footer 
# <footer id="contact"
# Let's find these boundaries.

start_tag = '<main id="content"'
end_tag = '<footer id="contact"'

start_idx = content.find(start_tag)
end_idx = content.find(end_tag)

if start_idx == -1 or end_idx == -1:
    print("Could not find boundaries.")
    exit(1)

new_html = """<main id="content" class="py-20 lg:py-28 bg-[#f8fcfc] relative selection:bg-deepTeal/20">
    <!-- Decorative Background -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl translate-y-1/3 -translate-x-1/3"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-24">
        
        <!-- Standard Fees Header -->
        <div class="text-center max-w-3xl mx-auto">
            <span class="text-secondary font-bold tracking-widest text-xs uppercase bg-secondary/10 px-4 py-1.5 rounded-full mb-4 inline-block">Transparent Pricing</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#071e26] mt-4 tracking-tight">Standard Fees</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-secondary to-primary mx-auto mt-6 rounded-full"></div>
            <p class="mt-8 text-xl text-gray-600 font-medium leading-relaxed bg-white/60 backdrop-blur-sm border border-gray-100 p-6 rounded-2xl shadow-sm inline-block">
                Free Initial Phone Consultation – <span class="text-primary font-bold">15 to 20 minutes</span>
            </p>
        </div>

        <!-- Pricing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            
            <!-- Individual Sessions -->
            <div class="bg-white rounded-[2rem] p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 text-primary shadow-sm relative z-10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-6 relative z-10">Individual Sessions</h3>
                <ul class="space-y-5 text-gray-600 flex-grow relative z-10">
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$255</strong> per 60-minute Initial Psychiatric Consultation – Clinical Diagnostic Interview</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$175 – $210</strong> per 45-minute Therapy</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$200 – $265</strong> per 60-minute Therapy or Consultation Session</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$260</strong> per 60-minute for Psychological Evaluation</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$90 – $200</strong> per 30-to-60-minute for Individual Clinical Supervision</span></li>
                </ul>
            </div>

            <!-- Couples / Family -->
            <div class="bg-white rounded-[2rem] p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full transform hover:-translate-y-2 border border-blue-50 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/5 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center mb-8 text-secondary shadow-sm relative z-10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-6 relative z-10">Couples / Family</h3>
                <ul class="space-y-5 text-gray-600 flex-grow relative z-10">
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$255</strong> per 60-minute Initial Psychiatric Consultation – Clinical Diagnostic Interview</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$225 – $230</strong> per 50-minute Therapy</span></li>
                </ul>
            </div>

            <!-- Group Sessions -->
            <div class="bg-white rounded-[2rem] p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 text-primary shadow-sm relative z-10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-6 relative z-10">Group Sessions</h3>
                <ul class="space-y-5 text-gray-600 flex-grow relative z-10">
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$110</strong> per 30-minute Individual Intake for Group Therapy</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$95</strong> per 90-minute Group Therapy Session</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$95</strong> per 60-minute Group Clinical Supervision</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$100</strong> per 60-minute Group Consultation Session</span></li>
                </ul>
            </div>

            <!-- Naturopathy & Psychiatric -->
            <div class="bg-white rounded-[2rem] p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-teal-50 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-[#071e26]/5 rounded-2xl flex items-center justify-center mb-8 text-[#071e26] shadow-sm relative z-10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-6 relative z-10">Naturopathy & Psychiatric</h3>
                <ul class="space-y-5 text-gray-600 flex-grow relative z-10">
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-[#071e26]/40 mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$265</strong> per 60-minute Initial Naturopathy Consult</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-[#071e26]/40 mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$185</strong> per 30-minute Naturopathy Follow up</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-[#071e26]/40 mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$395</strong> per 60-minute Psychiatric Intake</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-[#071e26]/40 mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$265</strong> per 30-minute Psychiatric Follow up</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-[#071e26]/40 mt-2 shrink-0"></div><span class="leading-relaxed"><strong>$370</strong> per 60-minute Psychiatric Follow up (Extended)</span></li>
                </ul>
            </div>

            <!-- Corporate & Training -->
            <div class="bg-white rounded-[2rem] p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 text-primary shadow-sm relative z-10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-6 relative z-10">Corporate & Training</h3>
                <ul class="space-y-5 text-gray-600 flex-grow relative z-10">
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed">Diversity Courses: <strong>$300/person</strong> (3hrs) – <strong>$400/person</strong> (4hrs)</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed">Leadership Courses: <strong>$500/person</strong> (2hrs)</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed">Organizational Development: <strong>$400/person</strong> (3hrs)</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed">Communication Courses: <strong>$300/person</strong> (2hrs)</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-primary mt-2 shrink-0"></div><span class="leading-relaxed">Health & Wellness: <strong>$200-$400/person</strong> (2-4hrs)</span></li>
                    <li class="flex items-start gap-4 text-xs italic"><div class="w-2 h-2 rounded-full bg-primary/40 mt-1.5 shrink-0"></div><span class="leading-relaxed">Custom Workshops & Training Sessions negotiated case-by-case</span></li>
                </ul>
            </div>

            <!-- DEI & Immersion -->
            <div class="bg-white rounded-[2rem] p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full transform hover:-translate-y-2 border border-blue-50 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/5 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>
                <div class="w-14 h-14 bg-secondary/10 rounded-2xl flex items-center justify-center mb-8 text-secondary shadow-sm relative z-10">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-6 relative z-10">DEI & Cultural Immersion</h3>
                <ul class="space-y-5 text-gray-600 flex-grow relative z-10">
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div><span class="leading-relaxed">Diversity, Equity, & Inclusion (DEI) Sessions are negotiated on a case-by-case-basis</span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div><span class="leading-relaxed">Rates for Cultural Immersion Experiences start at <strong>$3,900/person</strong></span></li>
                    <li class="flex items-start gap-4"><div class="w-2 h-2 rounded-full bg-secondary mt-2 shrink-0"></div><span class="leading-relaxed hover:text-primary transition-colors cursor-pointer underline underline-offset-4">Details on our Cultural Immersion page</span></li>
                </ul>
            </div>

        </div>

        <!-- Divider -->
        <div class="max-w-3xl mx-auto h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>

        <!-- Package Fees Section -->
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-widest text-xs uppercase bg-primary/10 px-4 py-1.5 rounded-full mb-4 inline-block">Specialized Care</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#071e26] mt-4 tracking-tight">Marital Counseling Packages</h2>
            </div>

            <div class="space-y-12">
                <!-- Honeymoon Package -->
                <div class="relative bg-white rounded-3xl p-8 lg:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-primary/20 overflow-hidden group hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -mr-20 -mt-20"></div>
                    <div class="flex flex-col md:flex-row gap-8 items-start relative z-10">
                        <div class="bg-primary text-white p-6 rounded-2xl md:w-1/3 text-center shadow-lg shrink-0 w-full transform group-hover:scale-105 transition-transform">
                            <h3 class="text-2xl font-black uppercase tracking-wider mb-2">Honeymoon</h3>
                            <div class="text-4xl font-extrabold mb-1">$1,400</div>
                            <div class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full inline-block uppercase tracking-wider mb-4">Save $150</div>
                            <p class="text-primary-50 text-sm font-medium">7 Prepaid Sessions<br>(60 mins each)</p>
                        </div>
                        <div class="md:w-2/3 space-y-4">
                            <p class="text-gray-600 leading-relaxed">
                                Includes <strong>1 intake session</strong> plus <strong>6 one-hour educational counseling sessions</strong> to cover conflict management, communication skills, financial responsibility, child and parenting responsibilities, and extended family roles per the requirements outlined by Georgia for Qualifying Premarital Education. 
                            </p>
                            <p class="text-gray-600 leading-relaxed">
                                Couple will receive a notarized certificate of completion that can be taken to the probate court in your county to get a marriage license at no charge.
                            </p>
                            <div class="bg-gray-50 p-4 rounded-xl border border-gray-100 italic text-sm text-gray-500">
                                This package is ideal for pre-engaged couples [dating] and looking to explore the idea of marriage and engaged couples who are headed toward the aisle.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination Package -->
                <div class="relative bg-[#071e26] text-white rounded-3xl p-8 lg:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-[#071e26] overflow-hidden group hover:shadow-[0_20px_40px_rgb(0,0,0,0.15)] transition-all">
                    <div class="absolute bottom-0 right-0 w-64 h-64 bg-secondary/10 rounded-full blur-3xl -mr-20 -mb-20"></div>
                    <div class="absolute top-0 left-0 w-64 h-64 bg-primary/10 rounded-full blur-3xl -ml-20 -mt-20"></div>
                    <div class="flex flex-col md:flex-row gap-8 items-start relative z-10">
                        <div class="bg-white/5 border border-white/10 p-6 rounded-2xl md:w-1/3 text-center shadow-2xl shrink-0 w-full backdrop-blur-md transform group-hover:scale-105 transition-transform">
                            <h3 class="text-2xl font-black uppercase tracking-wider mb-2 text-white/90">Destination</h3>
                            <div class="text-4xl font-extrabold mb-1 text-white">$2,500</div>
                            <div class="bg-primary/20 text-primary border border-primary/30 text-xs font-bold px-3 py-1 rounded-full inline-block uppercase tracking-wider mb-4">Save $150</div>
                            <p class="text-gray-300 text-sm font-medium">13 Prepaid Sessions<br>(60 mins each)</p>
                        </div>
                        <div class="md:w-2/3 space-y-4">
                            <p class="text-gray-300 leading-relaxed">
                                This extensive pre-marital or post-marital counseling package includes <strong>1 intake session</strong> plus <strong>12 one-hour educational counseling sessions</strong> (6 of which meet the state of Georgia requirements for pre-marital therapy certification) and can include a vow exchange or renewal of vows for the couple upon completion.
                            </p>
                            <p class="text-gray-300 leading-relaxed">
                                Will explore core relationship areas included in the Honeymoon Package, as well as: marital expectations, relationship roles, health and wellness, spiritual beliefs/values, family of origin dynamics, sex and intimacy.
                            </p>
                            <div class="bg-white/5 backdrop-blur-md p-4 rounded-xl border border-white/10 italic text-sm text-gray-400">
                                This package is ideal for pre-engaged and engaged couples wanting to ensure their relationship has what it takes long-term, and for couples wanting to deepen their relational skills as they continue merging their lives.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Insurance & Payment -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 pt-12">
            <!-- Insurance -->
            <div class="bg-white rounded-3xl p-10 shadow-sm border border-gray-100 flex flex-col h-full">
                <h3 class="text-3xl font-extrabold text-[#071e26] mb-8 flex items-center gap-3">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Insurance Accepted
                </h3>
                <div class="flex flex-wrap gap-3">
                    <span class="bg-blue-50 text-blue-800 border border-blue-100 font-bold px-5 py-3 rounded-xl text-sm">Aetna</span>
                    <span class="bg-blue-50 text-blue-800 border border-blue-100 font-bold px-5 py-3 rounded-xl text-sm">Blue Cross Blue Shield</span>
                    <span class="bg-blue-50 text-blue-800 border border-blue-100 font-bold px-5 py-3 rounded-xl text-sm">Cigna</span>
                    <span class="bg-blue-50 text-blue-800 border border-blue-100 font-bold px-5 py-3 rounded-xl text-sm">Tricare</span>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-100">
                    <span class="inline-flex items-center gap-2 bg-gray-50 text-gray-600 border border-gray-200 font-semibold px-5 py-3 rounded-xl text-sm w-full"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Also accepting Out-of-Network Providers</span>
                </div>
            </div>

            <!-- Payment & CareCredit -->
            <div class="bg-white rounded-3xl p-10 shadow-sm border border-gray-100 flex flex-col h-full overflow-hidden relative">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full blur-2xl -mr-16 -mt-16"></div>
                
                <h3 class="text-3xl font-extrabold text-[#071e26] mb-6 flex items-center gap-3 relative z-10">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    Payment Options
                </h3>
                <img src="https://globecoreinc.com/wp-content/uploads/2020/12/payments.jpg" alt="Payment Methods Accepted" class="h-12 w-auto object-contain mb-10 object-left relative z-10">

                <div class="mt-auto">
                    <h4 class="text-xl font-bold text-[#071e26] mb-4">Flexible Financing with CareCredit</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        The CareCredit health, wellness, and personal care credit card gives you a convenient, flexible way to pay for care for the whole family! With everyday promotional financing for purchases of $200 or more, you can pay overtime with convenient monthly payments.
                    </p>
                    <div class="flex items-center gap-6">
                        <img src="https://globecoreinc.com/wp-content/uploads/2024/11/carecredit.png" alt="CareCredit" class="h-16 w-auto object-contain bg-white rounded-lg shadow-sm border border-gray-100 p-2">
                        <div class="text-sm">
                            <a href="https://www.carecredit.com/go/385MFR/" target="_blank" class="text-primary font-bold hover:underline inline-flex items-center gap-1">See if you prequalify <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></a>
                            <p class="text-gray-500 mt-1">no impact to your credit score.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Policies Section -->
        <div class="bg-white rounded-3xl p-10 lg:p-14 shadow-sm border border-gray-100 space-y-16">
            
            <!-- Cancellation Policy -->
            <div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-4 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </span>
                    24-Hour Cancellation Policy
                </h3>
                <p class="text-gray-600 leading-relaxed max-w-4xl ml-13">
                    If you are unable to attend a session, please make sure you cancel at least 24 hours beforehand. Otherwise, you may be charged for the full rate of the session.
                </p>
            </div>

            <div class="w-full h-px bg-gray-100"></div>

            <!-- Surprise Billing Policy -->
            <div>
                <h3 class="text-2xl font-bold text-[#071e26] mb-8 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </span>
                    Your Rights Against Surprise Medical Bills
                </h3>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed font-semibold bg-gray-50 p-6 rounded-2xl border border-gray-100">
                            When you get emergency care or get treated by an out-of-network provider at an in-network hospital or ambulatory surgical center, you are protected from surprise billing or balance billing.
                        </p>
                        
                        <div>
                            <h4 class="font-bold text-[#071e26] mb-3">What is "balance billing" or "surprise billing"?</h4>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                When you see a doctor or other health care provider, you may owe certain out-of-pocket costs, such as a copayment, coinsurance, and/or a deductible. You may have other costs or have to pay the entire bill if you see a provider or visit a health care facility that isn't in your health plan's network ("Out-of-network").
                            </p>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                Out-of-network providers may be permitted to bill you for the difference between what your plan agreed to pay and the full amount charged for a service. This is called "balance billing." This amount is likely more than in-network costs and might not count toward your out-of-pocket limit.
                            </p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                "Surprise billing" is an unexpected balance bill. This can happen when you can't control who is involved in your care – like when you have an emergency or when you schedule a visit at an in-network facility but are unexpectedly treated by an out-of-network provider.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-blue-50/50 p-8 rounded-2xl border border-blue-100">
                            <h4 class="font-bold text-[#071e26] mb-5">You are protected from balance billing for:</h4>
                            <ul class="space-y-5 text-sm">
                                <li class="flex items-start gap-4">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 mt-0.5"><span class="font-bold">1</span></div>
                                    <div class="text-gray-700 leading-relaxed">
                                        <strong class="block mb-1 text-[#071e26]">Emergency services</strong>
                                        If you have an emergency medical condition and get emergency services from an out-of-network provider or facility, the most they may bill you is your plan's in-network cost-sharing amount. You <strong>can't be balance billed</strong> for these emergency services.
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 mt-0.5"><span class="font-bold">2</span></div>
                                    <div class="text-gray-700 leading-relaxed">
                                        <strong class="block mb-1 text-[#071e26]">Certain services at an in-network hospital</strong>
                                        When you get services from an in-network hospital or surgical center, certain providers there may be out-of-network. In these cases, the most they may bill you is your plan's in-network cost-sharing amount.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="https://www.cms.gov/files/document/model-disclosure-notice-patient-protections-against-surprise-billing-providers-facilities-health.pdf" target="_blank" class="inline-flex items-center gap-2 text-primary font-bold text-sm bg-primary/10 hover:bg-primary hover:text-white px-6 py-3 rounded-xl transition-all w-full justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            View Full CMS Disclosure Notice
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
"""

new_content = content[:start_idx] + new_html + content[end_idx:]

with open('pricing-insurance.html', 'w', encoding='utf-8') as f:
    f.write(new_content)

print("Successfully replaced content.")
