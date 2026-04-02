import os
import glob

count = 0

for filepath in glob.glob('/home/veer/Ranveer/GlobeScore/**/*.html', recursive=True):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    orig = content
    
    # Update Suite 700 to Suite 1000
    content = content.replace('Suite 700', 'Suite 1000')
    
    if content != orig:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        count += 1

print(f"Updated {count} files with Suite 1000.")
