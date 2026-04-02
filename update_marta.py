import os
import glob

count = 0
target_string = '<span>3355 Lenox Road NE.<br>Suite 700<br>Atlanta, GA 30326</span>'
target_string2 = '<span>3355 Lenox Road NE.\n<br>Suite 700\n<br>Atlanta, GA 30326</span>' # Just in case

replacement_string = '<span>3355 Lenox Road NE.<br>Suite 700<br>Atlanta, GA 30326<br><span class="text-primary font-semibold mt-1 block">✓ 2 min. walk from Marta Lenox station</span></span>'


for filepath in glob.glob('/home/veer/Ranveer/GlobeScore/**/*.html', recursive=True):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    orig = content
    if target_string in content:
        content = content.replace(target_string, replacement_string)
    
    # regex for any whitespace variations
    import re
    content = re.sub(
        r'<span>3355\s+Lenox\s+Road\s+NE\.\s*<br>\s*Suite\s+700\s*<br>\s*Atlanta,\s+GA\s+30326</span>',
        replacement_string,
        content
    )
    
    if content != orig:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        count += 1

print(f"Updated {count} files.")
