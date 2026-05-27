import os
import re
import bs4
from bs4 import BeautifulSoup, Comment

with open('/home/veer/Ranveer/GlobeCore/teamdata.txt.clean', 'r') as f:
    lines = f.readlines()

employees = []
current_emp = None
current_section = None

KNOWN_SECTIONS = [
    "Education",
    "Licenses",
    "Licenses & Certifications",
    "Licenses & Professional Designations",
    "Honors, Awards & Memberships",
    "Specialties",
    "Clinical & Consulting Interests",
    "Titles & Affiliations",
    "Parent Child Interaction Therapy (PCIT)",
    "What it’s Like to Work with Me",
    "What it is like being in session with me",
    "Treatment/Approach modality",
    "My specialties",
    "How therapy helps",
    "My credentials",
    "My hobbies",
    "My Hobbies",
    "Hobbies",
    "Testimonials",
    "Personal Highlights",
    "My Services Offered",
    "What is Parent Child Interaction Therapy (PCIT)?",
    "Who is a good fit for PCIT?",
    "What to expect?"
]

LIST_SECTIONS = [
    "Licenses", "Licenses & Certifications", "Licenses & Professional Designations",
    "Honors, Awards & Memberships", "Specialties", "Clinical & Consulting Interests",
    "Titles & Affiliations", "My specialties"
]

for line in lines:
    line = line.strip()
    if not line:
        continue
        
    if re.match(r'^\d+\.', line):
        if current_emp:
            employees.append(current_emp)
        current_emp = {"name": line, "sections": {}}
        current_section = "Intro"
        current_emp["sections"][current_section] = []
        continue
        
    if not current_emp:
        continue
        
    is_section = False
    for sec in KNOWN_SECTIONS:
        if line.lower() == sec.lower():
            current_section = sec
            if current_section not in current_emp["sections"]:
                current_emp["sections"][current_section] = []
            is_section = True
            break
            
    if is_section:
        continue
        
    current_emp["sections"][current_section].append(line)
    
if current_emp:
    employees.append(current_emp)

FILE_MAP = {
    0: 'dr-kelly-lewis-arthur.php',
    1: 'dr-danniella-jones.php',
    2: 'dr-sharon.php',
    3: 'brad-johns.php',
    4: 'anna-hurlebaus.php',
    5: 'victoria-taylor.php',
    6: 'sueellen-hollowell.php',
    7: 'yma-kabia-williams.php',
    8: 'gail.php',
    9: 'dr-terry-samuels.php',
    10: 'gabrielle-talley.php',
    11: 'claudia-delbasso.php',
    12: 'dr-ciera-lewis.php'
}

directory = '/home/veer/Ranveer/GlobeCore/about/'

def generate_text_html(title, lines):
    html = f'''
<!-- {title} -->
<div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
    <div class="flex items-center mb-6">
        <h2 class="text-3xl font-extrabold text-[#071e26]">{title}</h2>
        <div class="h-px bg-gray-200 flex-grow ml-6 hidden sm:block"></div>
    </div>
    <div class="prose prose-lg max-w-none text-gray-600 space-y-5">
'''
    for line in lines:
        html += f'        <p class="leading-relaxed">{line}</p>\n'
    html += '''    </div>
</div>
'''
    return html

def generate_list_html(title, lines):
    html = f'''
<!-- {title} -->
<div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
    <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">{title}</h2>
    <ul class="space-y-4">
'''
    for line in lines:
        html += f'''
        <li class="flex items-start gap-4 bg-[#f4f8f9] p-4 rounded-2xl">
            <span class="w-2.5 h-2.5 rounded-full bg-[#027289] flex-shrink-0 mt-1.5 ring-4 ring-[#027289]/10"></span>
            <span class="font-medium text-[#071e26]">{line}</span>
        </li>
'''
    html += '''    </ul>
</div>
'''
    return html

def generate_education_html(title, lines):
    # Education usually comes in 3 line chunks, or arbitrary chunks.
    # To be safe, let's just make it a nice list.
    html = f'''
<!-- {title} -->
<div class="bg-white rounded-[32px] p-8 md:p-10 shadow-sm border border-gray-100">
    <h2 class="text-3xl font-extrabold text-[#071e26] mb-6">{title}</h2>
    <div class="grid grid-cols-1 gap-4">
'''
    current_block = []
    blocks = []
    
    # Simple heuristic to split blocks:
    for line in lines:
        current_block.append(line)
        if len(current_block) == 3: # Or maybe just output each line?
            blocks.append(current_block)
            current_block = []
    if current_block:
        blocks.append(current_block)

    for block in blocks:
        html += f'''
        <div class="bg-[#f4f8f9] rounded-2xl p-6 border border-[#027289]/10 hover:shadow-md transition-shadow">
'''
        if len(block) > 0:
            html += f'            <h3 class="font-bold text-[#027289] text-base mb-2">{block[0]}</h3>\n'
        if len(block) > 1:
            html += f'            <p class="text-[#071e26] font-semibold mb-1 leading-snug text-sm">{block[1]}</p>\n'
        if len(block) > 2:
            html += f'            <p class="text-sm text-gray-500">{"<br>".join(block[2:])}</p>\n'
        html += '        </div>\n'
        
    html += '''    </div>
</div>
'''
    return html

for i, emp in enumerate(employees):
    if i not in FILE_MAP:
        continue
        
    filename = FILE_MAP[i]
    filepath = os.path.join(directory, filename)
    
    if not os.path.exists(filepath):
        print(f"File not found: {filepath}")
        continue
        
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
        
    soup = BeautifulSoup(content, 'html.parser')
    
    # Find the comment <!-- RIGHT COLUMN: Bio Content -->
    comments = soup.find_all(string=lambda text: isinstance(text, Comment))
    bio_content_comment = None
    for c in comments:
        if "RIGHT COLUMN: Bio Content" in c:
            bio_content_comment = c
            break
            
    if bio_content_comment:
        # Find the next div
        right_column = bio_content_comment.find_next('div')
        if right_column:
            # Clear it
            right_column.clear()
            
            # Generate the new HTML
            new_html = ""
            for sec, lines in emp['sections'].items():
                if sec == "Intro":
                    continue
                if not lines:
                    continue
                    
                if sec == "Education":
                    new_html += generate_education_html(sec, lines)
                elif any(s.lower() == sec.lower() for s in LIST_SECTIONS):
                    new_html += generate_list_html(sec, lines)
                else:
                    new_html += generate_text_html(sec, lines)
                    
            # Insert the new HTML string. Using BeautifulSoup to parse it first.
            new_soup = BeautifulSoup(new_html, 'html.parser')
            right_column.append(new_soup)
            
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(str(soup))
            print(f"Updated {filename}")
        else:
            print(f"Could not find div after comment in {filename}")
    else:
        print(f"Could not find RIGHT COLUMN comment in {filename}")

