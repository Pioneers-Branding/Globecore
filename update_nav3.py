import os
import re

directory = "/home/veer/Ranveer/GlobeScore"

paths_to_remove = [
    "psychological-evaluations",
    "personal-development",
    "professional-development"
]

modified_files = 0

for root, dirs, files in os.walk(directory):
    for file in files:
        if file.endswith(".html"):
            filepath = os.path.join(root, file)
            with open(filepath, 'r', encoding='utf-8') as f:
                content = f.read()
            
            new_content = content
            for p in paths_to_remove:
                pattern = re.compile(r'<a\b[^>]*?href=["\'][^"\']*?(?:/)?services/' + p + r'\.html["\'][^>]*>[\s\S]*?</a>\s*', re.IGNORECASE)
                new_content = pattern.sub('', new_content)
                
            if new_content != content:
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                modified_files += 1

print(f"Update script 3 done. Modified {modified_files} files.")
