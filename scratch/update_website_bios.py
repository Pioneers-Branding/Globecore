import os
import bs4

directory = '/home/veer/Ranveer/GlobeCore/about/'

unwanted_lower = [
    "what it's like to work with me",
    "how therapy helps",
    "personal highlights",
    "testimonials",
    "my services offered",
    "treatment/approach modality",
    "my credentials",
    "my hobbies",
    "hobbies",
    "what it is like being in session with me"
]

skip_files = ['meet-our-team.php', 'index.php', 'philosophy-core-values.php']

for filename in os.listdir(directory):
    if filename.endswith('.php') and filename not in skip_files:
        filepath = os.path.join(directory, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
            
        soup = bs4.BeautifulSoup(content, 'html.parser')
        modified = False
        
        for h in soup.find_all(['h2', 'h3', 'h4']):
            text = h.get_text(strip=True).lower()
            
            # Check if this heading matches any unwanted section
            is_unwanted = False
            for u in unwanted_lower:
                if u in text:
                    is_unwanted = True
                    break
                    
            if is_unwanted:
                # Find the main container div (often has bg-white, rounded-..., p-...)
                parent_div = h.find_parent('div', class_=lambda c: c and ('rounded-[32px]' in c or 'rounded-3xl' in c or 'bg-white' in c or 'bg-[#071e26]' in c or 'bg-[#027289]' in c))
                if not parent_div:
                    # fallback to just direct parent if it's a div
                    parent_div = h.find_parent('div')
                
                if parent_div:
                    # Also try to remove preceding comment and whitespace
                    prev = parent_div.previous_sibling
                    while prev and isinstance(prev, bs4.NavigableString) and prev.strip() == '':
                        prev_next = prev.previous_sibling
                        prev.extract()
                        prev = prev_next
                        
                    if prev and isinstance(prev, bs4.Comment):
                        prev.extract()
                        
                    parent_div.extract()
                    modified = True
                    print(f"Removed '{text}' from {filename}")
                    
        if modified:
            # BeautifulSoup changes the PHP tags to <?php ... ?> properly but sometimes encodes things. 
            # We must output as string. HTML formatter for BeautifulSoup might change some formatting.
            with open(filepath, 'w', encoding='utf-8') as f:
                # Using str(soup) instead of prettify to avoid adding unnecessary whitespace
                # PHP tags might get converted to <?php ... ?> which is fine.
                f.write(str(soup))
                
print("Done.")

