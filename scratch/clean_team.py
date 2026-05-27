import re

with open('/home/veer/Ranveer/GlobeCore/teamdata.txt', 'r') as f:
    lines = f.readlines()

sections_to_keep = {
    "Education",
    "Licenses",
    "Licenses & Certifications",
    "Licenses & Professional Designations",
    "Honors, Awards & Memberships",
    "Specialties",
    "Clinical & Consulting Interests",
    "Titles & Affiliations",
    "Parent Child Interaction Therapy (PCIT)"
}

sections_to_drop = {
    "My Services Offered",
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
    "What it’s Like to Work with Me",
    "What is Parent Child Interaction Therapy (PCIT)?",
    "Who is a good fit for PCIT?",
    "What to expect?"
}

out_lines = []
current_section = "Header"
drop_current = False

for line in lines:
    stripped = line.strip()
    
    # Check if this line is an employee header like "1.Dr. Kelly Lewis-Arthur, Ph.D."
    if re.match(r'^\d+\.', stripped):
        drop_current = False
        current_section = "Header"
        out_lines.append(line)
        continue
    
    # Check if this line is a section header
    if stripped in sections_to_keep:
        drop_current = False
        current_section = stripped
        out_lines.append(line)
        continue
    elif stripped in sections_to_drop:
        drop_current = True
        continue
    elif stripped == "GlobeCoRe":
        drop_current = True
        continue
        
    # If not a recognized section, check if it's a known junk line
    junk_lines = [
        "LinkedIn Good Therapy Network Therapy Psychology Today Being Seen Wellness",
        "Psychology Today  Being Seen  Wellness  LinkedIn",
        "Psychology Today  LinkedIn",
        "Psychology Today",
        "She/Her"
    ]
    is_junk = False
    for j in junk_lines:
        if j in stripped:
            is_junk = True
    if is_junk:
        continue
        
    if not drop_current:
        # Avoid duplicate names injecting randomly (like Ciera Lewis in Terry's section)
        # But wait, we can just keep the line if it's not empty and we are not dropping
        out_lines.append(line)

with open('/home/veer/Ranveer/GlobeCore/teamdata.txt.clean', 'w') as f:
    f.writelines(out_lines)

