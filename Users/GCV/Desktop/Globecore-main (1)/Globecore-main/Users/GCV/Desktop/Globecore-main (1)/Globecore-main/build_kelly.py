import os

def build_dr_kelly_page():
    
    with open('about/meet-our-team.html', 'r', encoding='utf-8') as f:
        html = f.read()

    parts = html.split('<main id="content"')
    header_html = parts[0] + '<main id="content" class="py-12 lg:py-20 bg-[#fafafa] relative">'
    footer_html = '</main>' + html.split('</main>')[1]

    inner_html = """
        <!-- Large Background Abstract Shapes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-br from-primary/5 to-secondary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
            <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-secondary/5 to-transparent rounded-full blur-3xl translate-y-1/3 -translate-x-1/3"></div>
        </div>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 transition-all duration-500">
            <!-- Back Button -->
            <div class="mb-10">
                <a href="meet-our-team.html" class="inline-flex items-center gap-2 text-secondary hover:text-primary font-bold transition-all bg-white px-5 py-2.5 rounded-full shadow-sm hover:shadow-md border border-gray-100 group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                    Back to Team Directory
                </a>
            </div>
            
            <!-- Two-column layout: left sticky card + right scrolling content -->
            <div class="flex flex-col lg:flex-row gap-12 xl:gap-16">
                
                <!-- LEFT COLUMN: stretches to match right column height via flex-stretch -->
                <div class="w-full lg:w-[360px] flex-shrink-0 relative">
                    <!-- Sticky card positioned inside the tall left column -->
                    <div class="sticky top-28">
                        <!-- Glass Profile Card -->
                        <div class="bg-white/80 backdrop-blur-xl rounded-[40px] p-8 shadow-[0_20px_80px_rgba(0,0,0,0.06)] border border-white relative overflow-hidden group">
                            <!-- Card Accent Top -->
                            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary to-secondary"></div>
                            
                            <!-- Image -->
                            <div class="rounded-[30px] overflow-hidden shadow-2xl relative mb-8 aspect-[4/5] bg-gray-100">
                                <img src="https://globecoreinc.com/wp-content/uploads/2020/12/df4262_4a53cd2ea04e461a918f86977aa33e81_mv2.jpg" alt="Dr. Kelly Lewis-Arthur" class="w-full h-full object-cover object-[75%_top] transform group-hover:scale-105 transition-transform duration-700 ease-in-out">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#071e26]/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            
                            <!-- Title & Info -->
                            <div class="text-center">
                                <span class="bg-primary/10 text-primary font-black tracking-[0.2em] text-[11px] uppercase px-4 py-1.5 rounded-full inline-block mb-4">President</span>
                                <h1 class="text-3xl xl:text-4xl font-black text-[#071e26] mb-2 leading-tight">Dr. Kelly <br/>Lewis-Arthur</h1>
                                <p class="text-secondary font-bold text-sm mb-6">She/Her</p>
                                
                                <div class="h-px w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent mb-6"></div>
                                
                                <!-- Contact Buttons -->
                                <div class="flex flex-col gap-3">
                                    <a href="../contact.html" class="w-full bg-primary text-white font-bold py-3.5 px-6 rounded-2xl hover:bg-secondary hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        Schedule Consultation
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- RIGHT COLUMN: Detailed Information -->
                <div class="flex flex-col gap-10 xl:gap-14">
                    
                    <!-- What It's Like To Work With Me -->
                    <div class="bg-white rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full blur-2xl -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-6 flex items-center gap-4">
                            What It's Like To Work With Me
                            <span class="h-px bg-gray-200 flex-grow"></span>
                        </h2>
                        <p class="text-gray-600 leading-relaxed text-lg mb-6">
                            I utilize a family system and interpersonal approach. These methods allow me to look beyond the presenting issues you may be facing and see how the world around you, and the context around your situation, has impacted you. I also focus on empowerment and solution-focused sessions. Whether you are looking for therapy, guidance, or a cultural experience, I can help you by creating an environment that is focused on your future, your strengths, and the goals that you have set for yourself.
                        </p>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            I am passionate about working with diverse populations around multicultural mental health issues and have spent my entire career building expertise in this area. Diversity stretches across numerous dimensions including race & ethnicity, nationality, gender, sexual orientation, age, religion, ability, personality, socioeconomic status. I bring that relatability into my sessions to help you understand your own strengths and power in a way this is sensitive to your diverse identity areas and needs. I work with clients to overcome clinical adversity in the workplace/school, relationships, with self, and in communities. I do this by employing solution-focused, culturally sensitive, and empowering therapy that facilitates positive growth in a safe, collaborative, and nurturing way.
                        </p>
                    </div>

                    <!-- Personal Highlights -->
                    <div class="bg-gradient-to-br from-[#071e26] to-[#024d5e] rounded-[40px] p-8 md:p-12 text-white shadow-xl relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4NiIgaGVpZ2h0PSI4NiI+PHBhdGggZD0iTTQzIDg2Yy0yMy43NDggMC00My0xOS4yNTItNDMtNDNTMTkuMjUyIDAgNDMgMCA4NiAxOS4yNTIgODYgNDMgNjYuNzQ4IDg2IDQzIDg2em0wLTg0QzIwLjMzNyAyIDIgMjAuMzM3IDIgNDNzMTguMzM3IDQx NDEgNDEgNDEtMTguMzM3 NDEtNDFTNjUuNjYzIDIgNDMgMnoiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=')] bg-[length:60px_60px] opacity-20"></div>
                        <h2 class="text-3xl font-extrabold mb-6 relative z-10 text-white flex items-center gap-4">
                            Personal Highlights
                        </h2>
                        <div class="relative z-10 text-gray-100 leading-relaxed text-lg space-y-6 max-w-3xl font-light">
                            <p>My mission is to grow GlobeCoRe to be a nationally recognized leader in multicultural mental health and empowerment. I aspire to grow GlobeCoRe to a place where we are making significant contributions to the science and practice of multicultural mental health. I want to continue to effect change and lead programs that promote mental, social, emotional, and inter-personal wellbeing of the diverse individuals and communities we serve across the globe. I also look forward to continuing to work collaboratively in consultation with businesses, community members, government agencies, and community-based organizations to provide effective psychological and educational interventions that address psychosocial problems in the broader global community.</p>
                        </div>
                    </div>

                    <!-- 2-Column Grid for Specialties & Interests -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Specialties -->
                        <div class="bg-white rounded-[32px] p-8 lg:p-10 shadow-sm border border-gray-100 hover:border-primary/30 transition-colors">
                            <h3 class="text-2xl font-bold text-[#071e26] mb-6">Specialties</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Depression and Anxiety</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Racial, Ethnic, And Religious Stressors</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Grief and Loss</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Finding Purpose & Deserving Love</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Relationship, Identity, And Marriage Issues</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Issues Tied to Self-Esteem/Identity</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Trauma</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Work-Related Or Academic Stressors</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Women’s Issues</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-gray-700 font-medium">Fertility, Pregnancy, And Parenting Issues</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Clinical Interests -->
                        <div class="bg-white rounded-[32px] p-8 lg:p-10 shadow-sm border border-gray-100 hover:border-secondary/30 transition-colors">
                            <h3 class="text-2xl font-bold text-[#071e26] mb-6">Clinical & Consulting Interests</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 rounded-full bg-secondary mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-700 font-medium">Individual, Couples, Family, and Group Therapy</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 rounded-full bg-secondary mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-700 font-medium">Workshops, Trainings, and Retreats: Healing from Racial Inequality, Women’s Wellness Weekend, Cultivating Equality in the Workplace, Achieving Work-Life Balance, Empowerment and Self-Esteem Building, Effective Communication Professionally, Cultural Sensitivity in the Treatment</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 rounded-full bg-secondary mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-700 font-medium">Psychological Evaluations</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 rounded-full bg-secondary mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-700 font-medium">Cultural Immersion Trips</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Education Block -->
                    <div class="bg-white rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100 relative overflow-hidden">
                        <div class="absolute -right-10 top-1/2 -translate-y-1/2 w-40 h-40 bg-secondary/5 rounded-full blur-3xl mix-blend-multiply"></div>
                        <h2 class="text-3xl font-extrabold text-[#071e26] mb-8">Education</h2>
                        
                        <div class="space-y-8 relative z-10">
                            <!-- Ed Block -->
                            <div class="flex gap-4 group">
                                <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center flex-shrink-0 mt-1 shadow-inner group-hover:bg-secondary/20 transition-colors">
                                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#071e26] mb-1">Post Doctoral Fellowship (2004-2006)</h4>
                                    <p class="text-gray-600 font-medium">Clinical-Community Psychology & African Studies, Emory University</p>
                                </div>
                            </div>
                            <!-- Ed Block -->
                            <div class="flex gap-4 group">
                                <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center flex-shrink-0 mt-1 shadow-inner group-hover:bg-secondary/20 transition-colors">
                                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#071e26] mb-1">Doctoral Degree (PhD, 2004)</h4>
                                    <p class="text-gray-600 font-medium">Clinical-Community Psychology & African Studies, Michigan State University</p>
                                </div>
                            </div>
                            <!-- Ed Block -->
                            <div class="flex gap-4 group">
                                <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center flex-shrink-0 mt-1 shadow-inner group-hover:bg-secondary/20 transition-colors">
                                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#071e26] mb-1">Pre-Doctoral Psychology Fellowship (2003-2004)</h4>
                                    <p class="text-gray-600 font-medium">Clinical-Community Psychology Internship, Yale University, Department of Psychiatry, School of Medicine</p>
                                </div>
                            </div>
                            <!-- Ed Block -->
                            <div class="flex gap-4 group">
                                <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center flex-shrink-0 mt-1 shadow-inner group-hover:bg-secondary/20 transition-colors">
                                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#071e26] mb-1">Master’s Degree (MA, 2001)</h4>
                                    <p class="text-gray-600 font-medium">Clinical-Community Psychology & African Studies, Michigan State University</p>
                                </div>
                            </div>
                            <!-- Ed Block -->
                            <div class="flex gap-4 group">
                                <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center flex-shrink-0 mt-1 shadow-inner group-hover:bg-secondary/20 transition-colors">
                                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#071e26] mb-1">Bachelor’s Degree (BA, 1997)</h4>
                                    <p class="text-gray-600 font-medium">Psychology & African/African-American Studies, DePaul University</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Honors List -->
                    <div class="bg-white rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100 relative overflow-hidden">
                        <h3 class="text-3xl font-extrabold text-[#071e26] mb-8">Honors, Awards & Memberships</h3>
                        <ul class="grid grid-cols-1 gap-4 text-gray-700 text-lg">
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Best & Brightest Companies to Work for in Atlanta</span></li>
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Patients’ Choice Award</span></li>
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Best of Atlanta Award</span></li>
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Outstanding Diversity Teaching Award</span></li>
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Phi Beta Delta Honor Society for International Faculty</span></li>
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Nominated for Study Abroad Program Director of the Year</span></li>
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Diversity Committee, Georgia State University</span></li>
                            <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 bg-primary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-tight">Clinical Community Psychology (CLC) Program Committee</span></li>
                        </ul>
                    </div>

                    <!-- Licenses List -->
                    <div class="bg-white rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100 relative overflow-hidden">
                        <h3 class="text-3xl font-extrabold text-[#071e26] mb-8">Licenses</h3>
                        <ul class="space-y-4 text-gray-700 text-lg">
                            <li class="flex items-start gap-3 bg-gray-50 p-5 rounded-3xl"><div class="w-2 h-2 bg-secondary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-snug">Licensed Psychologist – Georgia</span></li>
                            <li class="flex items-start gap-3 bg-gray-50 p-5 rounded-3xl"><div class="w-2 h-2 bg-secondary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-snug">Licensed Psychologist – District of Columbia</span></li>
                            <li class="flex items-start gap-3 bg-gray-50 p-5 rounded-3xl"><div class="w-2 h-2 bg-secondary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-snug">Licensed Psychologist – Florida (Telepsychology Provider)</span></li>
                            <li class="flex items-start gap-3 bg-gray-50 p-5 rounded-3xl"><div class="w-2 h-2 bg-secondary rounded-full mt-2.5 flex-shrink-0"></div> <span class="leading-snug">PSYPACT Certificate – Authorized to Practice Interjurisdictional Telepsychology (APIT) in Alabama, Arizona, Arkansas, Colorado, Commonwealth of the Northern Mariana Islands, Connecticut, Delaware, District of Columbia, Florida, Georgia, Idaho, Illinois, Indiana, Kansas, Kentucky, Maine, Maryland, Michigan, Minnesota, Mississippi, Missouri, Nebraska, Nevada, New Hampshire, New Jersey, North Carolina, North Dakota, Ohio, Oklahoma, Pennsylvania, Rhode Island, South Carolina, South Dakota, Tennessee, Texas, Utah, Virginia, Washington, West Virginia, Wisconsin, and Wyoming</span></li>
                        </ul>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="bg-primary/10 rounded-[32px] p-8 md:p-12 border border-primary/20 relative">
                        <svg class="absolute top-6 left-6 w-16 h-16 text-primary/20" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path></svg>
                        <div class="relative z-10 md:ml-12 md:mr-6">
                            <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">Testimonials</h2>
                            <p class="text-[#071e26] text-xl font-medium leading-relaxed mb-6 italic">
                                Dr. Lewis-Arthur was life-changing… the best therapist I ever encountered! I was really feeling down and couldn’t think straight. Once I saw Dr. Lewis-Arthur, she opened a window of life in my dark word. She helped me to understand that I didn’t have to close myself off from the world, nor would I be able to change things just being still. Dr. Lewis-Arthur has a saying about moving the squeaky wheels in order to make changes and see the results. I didn’t have a great relationship with my mother, and now I do thanks to Dr. Lewis-Arthur. I was dealing with a lot of hurt with the loss of my children and I was able to get on the ball and get my children back!
                            </p>
                            <p class="text-secondary font-bold text-lg">~Anonymous</p>
                        </div>
                    </div>

                    <!-- Hobbies -->
                    <div class="bg-[#f0f5f6] rounded-[32px] p-8 border border-secondary/10 flex flex-col sm:flex-row items-center gap-6 shadow-sm">
                        <div class="w-16 h-16 rounded-2xl bg-white shadow flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#071e26] mb-2">My Hobbies</h3>
                            <p class="text-gray-600 leading-relaxed text-lg">
                                In my spare time, I enjoy traveling, exploring new cultures, cooking, spending time with family/friends, enjoying the outdoors and adventure activities, and being near the water.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="bg-white rounded-[32px] p-8 border border-gray-100 shadow-sm">
                        <div class="flex flex-wrap gap-4 items-center justify-center">
                            <a href="https://www.psychologytoday.com/us/therapists/30329/206364" target="_blank" class="px-6 py-3 rounded-xl bg-gray-50 text-secondary border border-gray-200 hover:border-primary hover:text-primary transition-colors font-semibold">Psychology Today</a>
                            <a href="https://www.goodtherapy.org/therapists/profile/kelly-lewis-20150823" target="_blank" class="px-6 py-3 rounded-xl bg-gray-50 text-secondary border border-gray-200 hover:border-primary hover:text-primary transition-colors font-semibold">Good Therapy</a>
                            <a href="https://www.networktherapy.com/Kelly-M-Lewis/" target="_blank" class="px-6 py-3 rounded-xl bg-gray-50 text-secondary border border-gray-200 hover:border-primary hover:text-primary transition-colors font-semibold">Network Therapy</a>
                            <a href="https://beingseen.org/therapist/kellylewis-arthuryou/" target="_blank" class="px-6 py-3 rounded-xl bg-gray-50 text-secondary border border-gray-200 hover:border-primary hover:text-primary transition-colors font-semibold">Being Seen</a>
                            <a href="https://www.wellness.com/dir/6547064/psychologist/ga/atlanta/dr-kelly-lewis-arthur-globecore-inc-licensed-psychologist#referrer" target="_blank" class="px-6 py-3 rounded-xl bg-gray-50 text-secondary border border-gray-200 hover:border-primary hover:text-primary transition-colors font-semibold">Wellness.com</a>
                            <a href="https://www.linkedin.com/in/kelly-m-lewis-arthur-ph-d-25376528/" target="_blank" class="px-6 py-3 rounded-xl bg-gray-50 text-secondary border border-gray-200 hover:border-primary hover:text-primary transition-colors font-semibold">LinkedIn</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
"""
    
    full_html = header_html + inner_html + footer_html
    with open('about/dr-kelly-lewis-arthur.html', 'w', encoding='utf-8') as f:
        f.write(full_html)
        
    print("Done generating Kelly's specific page.")

if __name__ == '__main__':
    build_dr_kelly_page()
