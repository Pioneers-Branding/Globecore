import os
import re

directory = "/home/veer/Ranveer/GlobeScore"
modified_files = 0

for root, dirs, files in os.walk(directory):
    for file in files:
        if file.endswith(".html"):
            filepath = os.path.join(root, file)
            with open(filepath, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Simple string replacement since the class is exact
            # In case there's newline between `>` and `Locations`
            pattern = re.compile(r'(class="px-3 py-2 text-textMain hover:text-primary flex items-center gap-1 transition-colors">\s*)Locations', re.IGNORECASE)
            new_content = pattern.sub(r'\1Areas We Serve', content)
            
            if new_content != content:
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                modified_files += 1

print(f"Update locations script done. Modified {modified_files} files.")
