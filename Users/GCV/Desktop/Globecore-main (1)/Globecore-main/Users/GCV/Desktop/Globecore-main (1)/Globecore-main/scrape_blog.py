
import requests
from bs4 import BeautifulSoup
import json

url = "https://globecoreinc.com/blog/"
headers = {
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
}

response = requests.get(url, headers=headers)
if response.status_code != 200:
    print(f"Error: {response.status_code}")
    exit(1)

soup = BeautifulSoup(response.text, 'html.parser')

posts = []
for article in soup.find_all('article'):
    title_tag = article.find('h2')
    if not title_tag:
        continue
    
    title = title_tag.get_text(strip=True)
    link = title_tag.find('a')['href'] if title_tag.find('a') else ""
    
    excerpt_tag = article.find('div', class_='entry-content') or article.find('div', class_='post-excerpt')
    excerpt = excerpt_tag.get_text(strip=True) if excerpt_tag else ""
    
    date_tag = article.find('time') or article.find('span', class_='published')
    date = date_tag.get_text(strip=True) if date_tag else ""
    
    img_tag = article.find('img')
    img_url = img_tag['src'] if img_tag else ""
    
    author_tag = article.find('span', class_='author')
    author = author_tag.get_text(strip=True) if author_tag else ""
    
    posts.append({
        "title": title,
        "link": link,
        "date": date,
        "excerpt": excerpt,
        "img_url": img_url,
        "author": author
    })

print(json.dumps(posts, indent=2))
