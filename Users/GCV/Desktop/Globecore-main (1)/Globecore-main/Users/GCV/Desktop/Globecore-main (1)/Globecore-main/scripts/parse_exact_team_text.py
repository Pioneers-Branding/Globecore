import re
from bs4 import BeautifulSoup

def extract():
    with open('/tmp/team_raw.html', 'r', encoding='utf-8') as f:
        soup = BeautifulSoup(f.read(), 'html.parser')

    teams = soup.find_all(class_='elementor-element-populated')
    
    for team in teams:
        img = team.find('img')
        headings = team.find_all(['h2', 'h3', 'h4'])
        paras = team.find_all('p')
        
        if img and 'wp-content/uploads' in img.get('src', ''):
            src = img['src'].split('/')[-1]
            n = headings[0].get_text(strip=True) if headings else ''
            t = paras[0].get_text(strip=True) if paras else ''
            
            if n or t:
                print(f"IMAGE: {src[:20]}... | NAME: '{n}' | TITLE: '{t}'")

if __name__ == '__main__':
    extract()
