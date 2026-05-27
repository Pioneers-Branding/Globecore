import re

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

for line in lines:
    line = line.strip()
    if not line:
        continue
        
    # Check if it's a new employee
    if re.match(r'^\d+\.', line):
        if current_emp:
            employees.append(current_emp)
        current_emp = {"name": line, "sections": {"Intro": []}}
        current_section = "Intro"
        continue
        
    if not current_emp:
        continue
        
    # Check if it's a known section
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
        
    # Otherwise add to current section
    current_emp["sections"][current_section].append(line)
    
if current_emp:
    employees.append(current_emp)
    
for i, emp in enumerate(employees):
    print(f"Employee {i+1}: {emp['name']}")
    for sec, content in emp['sections'].items():
        print(f"  - {sec} ({len(content)} lines)")

