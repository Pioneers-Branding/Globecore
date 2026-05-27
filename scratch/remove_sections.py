import os
import re

directory = '/home/veer/Ranveer/GlobeCore/about/'

unwanted = [
    "What It's Like To Work With Me",
    "How Therapy Helps",
    "Personal Highlights",
    "Testimonials",
    "My Services Offered",
    "Treatment/Approach modality",
    "My credentials",
    "My Hobbies",
    "Hobbies",
    "What it is like being in session with me"
]

def remove_unwanted_blocks(html):
    # We will look for <h2...>Text</h2> where Text is in unwanted.
    # The structure is usually <div class="bg-... rounded-[32px] ..."> ... <h2>...</h2> ... </div>
    # A robust way without fully parsing HTML (which might break PHP tags) is to find the h2, 
    # then trace back to its parent <div> that has class="bg-..." and remove until its closing </div>.
    
    # Or since we know they are usually preceded by an HTML comment like <!-- Testimonials -->
    # Let's try matching the comment and the block.
    
    # Simpler: just match <!-- SectionName -->\n<div ...> ... </div>
    
    # Let's write a regex that matches:
    # <!-- .*? -->
    # \s*<div[^>]*> (allowing nested divs might be hard with regex)
    pass

import bs4
# Actually, BeautifulSoup with 'html.parser' preserves <?php ... ?> as ProcessingInstructions!
# Let's verify.
with open(os.path.join(directory, 'dr-kelly-lewis-arthur.php'), 'r') as f:
    content = f.read()

soup = bs4.BeautifulSoup(content, 'html.parser')
for h2 in soup.find_all(['h2', 'h3']):
    text = h2.get_text(strip=True).lower()
    for u in unwanted:
        if u.lower() in text:
            # find the parent div with class rounded-[32px] or similar
            parent_div = h2.find_parent('div', class_=lambda c: c and 'rounded-[32px]' in c)
            if parent_div:
                # also remove the previous comment if it exists
                prev = parent_div.previous_sibling
                while prev and isinstance(prev, bs4.NavigableString) and prev.strip() == '':
                    prev = prev.previous_sibling
                if prev and isinstance(prev, bs4.Comment):
                    prev.extract()
                parent_div.extract()

# Check if php tags are preserved
print(str(soup)[:200])

