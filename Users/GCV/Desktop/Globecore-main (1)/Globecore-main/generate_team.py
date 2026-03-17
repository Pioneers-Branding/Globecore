import os
import requests
from bs4 import BeautifulSoup

def generate():
    with open('about/meet-our-team.html', 'r', encoding='utf-8') as f:
        html = f.read()

    soup = BeautifulSoup(html, 'html.parser')
    
    parts = html.split('<main id="content"')
    header_html = parts[0] + '<main id="content" class="py-20 lg:py-28 bg-[#fafafa] relative overflow-hidden">'
    footer_html = '</main>' + html.split('</main>')[1]

    cards = soup.select('main .bg-white.rounded-2xl')
    
    for card in cards:
        a_tag = card.find('a', href=True)
        if not a_tag or 'globecoreinc.com' not in a_tag['href']:
            continue
        if a_tag['href'] == 'https://globecoreinc.com/':
            continue
            
        url = a_tag['href']
        img_tag = card.find('img')
        img_src = img_tag['src'] if img_tag else ''
        
        name_tag = card.find('h3')
        name = name_tag.text.strip() if name_tag else 'Team Member'
        
        role_tag = card.find('p')
        role = role_tag.text.strip() if role_tag else ''
        
        print(f"Processing: {name} - {url}")
        
        slug = url.strip('/').split('/')[-1]
        local_filename = f"{slug}.html"
        
        try:
            r = requests.get(url, headers={'User-Agent': 'Mozilla/5.0'})
            bs = BeautifulSoup(r.text, 'html.parser')
            main_content = bs.find('main') or bs.find('body')
            
            bio_paragraphs = []
            if main_content:
                for p in main_content.find_all('p'):
                    text = p.get_text(strip=True)
                    if len(text) > 40 and not text.lower().startswith('linkedin') and 'cookie' not in text.lower():
                        bio_paragraphs.append(f'<p class="text-gray-600 leading-relaxed mb-6">{text}</p>')
            
            bio_html = "".join(bio_paragraphs)
            if not bio_html:
                bio_html = '<p class="text-gray-600 leading-relaxed">Biography coming soon.</p>'
                
        except Exception as e:
            print(f"Error fetching {url}: {e}")
            bio_html = '<p class="text-gray-600 leading-relaxed">Biography coming soon.</p>'

        inner_html = f"""
            <section class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="mb-10">
                    <a href="meet-our-team.html" class="inline-flex items-center gap-2 text-primary hover:text-secondary font-bold transition-colors bg-white px-6 py-3 rounded-full shadow-sm border border-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                        Back to Team
                    </a>
                </div>
                
                <div class="bg-white rounded-[40px] p-8 md:p-14 shadow-[0_15px_60px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col md:flex-row gap-16">
                    <div class="w-full md:w-5/12 flex-shrink-0">
                        <div class="rounded-[32px] overflow-hidden shadow-2xl relative group">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10"></div>
                            <img src="{img_src}" alt="{name}" class="w-full h-auto object-cover aspect-[4/5] transform group-hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                    
                    <div class="w-full md:w-7/12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="text-secondary font-bold tracking-widest text-[13px] uppercase bg-secondary/10 px-5 py-2 rounded-full inline-block">{role}</span>
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-[#071e26] mb-8 leading-tight tracking-tight">{name}</h1>
                        <div class="w-20 h-2 bg-gradient-to-r from-primary to-secondary rounded-full mb-10"></div>
                        
                        <div class="prose prose-lg max-w-none text-gray-600 space-y-4">
                            {bio_html}
                        </div>
                        
                        <div class="mt-12 pt-10 border-t border-gray-100 flex flex-col sm:flex-row gap-4">
                            <a href="../contact.html" class="inline-flex items-center justify-center bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-secondary hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-lg">
                                Schedule an Appointment
                            </a>
                            <a href="tel:7702841044" class="inline-flex items-center justify-center border-2 border-primary text-primary font-bold py-4 px-10 rounded-full hover:bg-primary/5 hover:-translate-y-1 transition-all duration-300 text-lg">
                                (770) 284-1044
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        """
        
        full_html = header_html + inner_html + footer_html
        with open(f"about/{local_filename}", 'w', encoding='utf-8') as out:
            out.write(full_html)
            
        html = html.replace(url, f"{local_filename}")

    with open('about/meet-our-team.html', 'w', encoding='utf-8') as f:
        f.write(html)

    print("Successfully generated all team pages and updated relative links!")

if __name__ == '__main__':
    generate()
