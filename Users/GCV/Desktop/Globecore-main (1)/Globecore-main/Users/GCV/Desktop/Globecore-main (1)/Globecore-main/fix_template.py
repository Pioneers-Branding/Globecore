import re

with open("about/dr-kelly-lewis-arthur.html", "r", encoding="utf-8") as f:
    html = f.read()

# The original content ends at the first <!-- END OF TWO COLUMN LAYOUT -->
parts = html.split('<!-- END OF TWO COLUMN LAYOUT -->')
clean_html = parts[0] + '<!-- END OF TWO COLUMN LAYOUT -->' + parts[1]

# But we want to just split the clean html into top and bottom for scrape_exact.py
top, bottom = clean_html.split('<div class="flex flex-col lg:flex-row gap-12 xl:gap-16 w-full">', 1)

# Now we rewrite the scrape exact to use these constants or we can save a template file
with open("template.html", "w", encoding="utf-8") as f:
    f.write(clean_html)

print("Saved template.html")
