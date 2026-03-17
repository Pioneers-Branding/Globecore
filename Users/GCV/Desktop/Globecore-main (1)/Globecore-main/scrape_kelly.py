import requests
from bs4 import BeautifulSoup
import json

headers = {
    'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
    'Accept-Language': 'en-US,en;q=0.9',
}

def go():
    res = requests.get('https://globecoreinc.com/meet-our-team-new/dr-kelly-lewis-arthur/', headers=headers)
    if res.status_code != 200:
        print("Error:", res.status_code)
        return
    
    soup = BeautifulSoup(res.text, 'html.parser')
    main_content = soup.find('main') or soup.find('body')
    texts = []
    for tag in main_content.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'li']):
        t = tag.get_text(strip=True)
        if t: texts.append(f"{tag.name}: {t}")
        
    with open('kelly_content.txt', 'w', encoding='utf-8') as f:
        f.write('\n'.join(texts))
    print("Done generating kelly_content.txt")

if __name__ == '__main__':
    go()
