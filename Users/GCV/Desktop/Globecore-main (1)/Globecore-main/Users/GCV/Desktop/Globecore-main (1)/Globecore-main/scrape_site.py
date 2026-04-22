import urllib.request
from bs4 import BeautifulSoup
import json
import re

urls = [
    "https://globecoreinc.com/",
    "https://globecoreinc.com/about-practice/",
    "https://globecoreinc.com/tms-therapy/",
    "https://globecoreinc.com/psychological-evaluation/",
    "https://globecoreinc.com/medication-management/",
    "https://globecoreinc.com/workshops-training/",
    "https://globecoreinc.com/contact/"
]

headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'}

scraped_data = {}

for url in urls:
    try:
        req = urllib.request.Request(url, headers=headers)
        with urllib.request.urlopen(req) as response:
            html = response.read()
            soup = BeautifulSoup(html, "html.parser")
            
            # Remove nav, header, footer
            for tag in soup(['nav', 'header', 'footer', 'script', 'style']):
                tag.decompose()
                
            text = soup.get_text(separator=' ', strip=True)
            # basic clean
            text = re.sub(r'\s+', ' ', text)
            scraped_data[url] = text[:2000] # get first 2000 chars of actual content
    except Exception as e:
        scraped_data[url] = str(e)

print(json.dumps(scraped_data, indent=2))
