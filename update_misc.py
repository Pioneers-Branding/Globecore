import os
import re

directory = "/home/veer/Ranveer/GlobeScore"

regex_specialty = re.compile(r'<a\s+href="[^"]*finding-the-love-you-deserve\.html"[^>]*>Finding The Love You Deserve</a>\s*', re.IGNORECASE)
regex_nav_loc = re.compile(r'(<button class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">\s*)Locations', re.IGNORECASE)

modified_files = 0

for root, dirs, files in os.walk(directory):
    for file in files:
        if file.endswith(".html"):
            filepath = os.path.join(root, file)
            with open(filepath, 'r', encoding='utf-8') as f:
                content = f.read()
            
            new_content = regex_specialty.sub('', content)
            new_content = regex_nav_loc.sub(r'\1Areas We Serve', new_content)
            
            if new_content != content:
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                print(f"Updated {filepath}")
                modified_files += 1

print(f"Update complete. Modified {modified_files} files.")
