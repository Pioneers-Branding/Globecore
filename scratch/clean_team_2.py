import re

with open('/home/veer/Ranveer/GlobeCore/teamdata.txt.clean', 'r') as f:
    lines = f.readlines()

out_lines = []
skip_next = False

for i in range(len(lines)):
    if skip_next:
        skip_next = False
        continue
    
    line = lines[i]
    stripped = line.strip()
    
    # Remove junk names that were randomly pasted
    junk_exact = {
        "Ciera Lewis, MA",
        "Ciera Lewis, MA Interning Clinician",
        "Ashley Martinez, LPC Clinician",
        "Dr. Kelly Lewis-Arthur CEO/Psychologist",
        "Victoria Taylor, LPC, NCC",
        "SueEllen Hollowell, LPC, NCC Clinician",
        "Yma Kabia-Williams, LCSW",
        "Yma Kabia William, LCSW Clinician",
        "Globe Core Inc Team Member",
        "Anna Hurlebaus, DNP, APRN, BC"
    }
    
    if stripped in junk_exact:
        continue
        
    # Terry Samuels' section has duplicated Education -> Clinical Interests. Let's fix that.
    # Lines 515 to 580 in teamdata.txt.clean is a duplicate block for Terry Samuels.
    # Actually, we can just deduplicate adjacent or nearby identical sections.
    # But it's easier to just strip the specific duplicate lines for Terry Samuels.
    # The duplicate block starts at "Education" on line 515 and ends at "Cultural Immersion Trips" on 579.
    
    out_lines.append(line)

# Let's fix the duplicate block for Terry Samuels
text = "".join(out_lines)

# Find the duplicate block and replace it
# The block is from "Education\n\nDoctorate Degree (Expected Graduation Date Nov 2023)"
import re

# We will just write a simple logic: if we see the same section heading twice within the same employee, we ignore the second one.
final_lines = []
current_employee = ""
seen_sections = set()

for line in out_lines:
    stripped = line.strip()
    
    # New employee
    if re.match(r'^\d+\.', stripped):
        current_employee = stripped
        seen_sections = set()
        final_lines.append(line)
        continue
        
    # Section header
    sections = {
        "Education",
        "Licenses",
        "Licenses & Certifications",
        "Licenses & Professional Designations",
        "Honors, Awards & Memberships",
        "Specialties",
        "Clinical & Consulting Interests",
        "Titles & Affiliations"
    }
    
    if stripped in sections:
        if stripped in seen_sections:
            # We are entering a duplicate section, so we need to skip lines until the next non-duplicate section or new employee.
            # Wait, it's easier to just drop everything from this duplicate section until the next valid section.
            pass
        seen_sections.add(stripped)
        
final_lines = []
skip_mode = False
seen_sections = set()

for line in out_lines:
    stripped = line.strip()
    
    if re.match(r'^\d+\.', stripped):
        skip_mode = False
        seen_sections = set()
        final_lines.append(line)
        continue
        
    sections = {
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
    
    if stripped in sections:
        if stripped in seen_sections:
            skip_mode = True
        else:
            skip_mode = False
            seen_sections.add(stripped)
            final_lines.append(line)
        continue
        
    if not skip_mode:
        final_lines.append(line)

# Clean up multiple blank lines
cleaned_final = []
prev_blank = False
for line in final_lines:
    is_blank = (line.strip() == "")
    if is_blank and prev_blank:
        continue
    cleaned_final.append(line)
    prev_blank = is_blank

with open('/home/veer/Ranveer/GlobeCore/teamdata.txt', 'w') as f:
    f.writelines(cleaned_final)

