import re
import json
from collections import defaultdict

def extract_team():
    try:
        with open('/tmp/team_raw.html', 'r', encoding='utf-8') as f:
            html = f.read()
            
        # VERY basic regex logic focusing on elementor blocks
        # finding sections like class="elementor-image" and the text blocks below them
        # We can just extract all names and next to them their images.
        
        # A simple dump of all non-empty text and img srcs can help us map it easily
        import xml.etree.ElementTree as ET
        from bs4 import BeautifulSoup
        
        soup = BeautifulSoup(html, 'html.parser')
        
        results = []
        for team_member_widget in soup.find_all(class_='elementor-widget-container'):
            # see if it has an image
            img = team_member_widget.find('img')
            if img and 'wp-content/uploads' in img.get('src', ''):
                src = img['src']
                # find nearby text
                texts = [el.get_text(strip=True) for el in team_member_widget.find_all(['h2', 'h3', 'h4', 'span', 'p'])]
                texts = [t for t in texts if t]
                if texts:
                    results.append({'src': src, 'texts': texts})
                    
        with open('/tmp/team_data.json', 'w') as f:
            json.dump(results, f, indent=2)
            
        print(f"Extracted {len(results)} potential team members.")
    except Exception as e:
        print(f"Error: {e}")

if __name__ == '__main__':
    extract_team()
