
def check_tags(filename):
    with open(filename, 'r') as f:
        lines = f.readlines()
    
    stack = []
    import re
    for i, line in enumerate(lines):
        ln = i + 1
        all_tags = re.findall(r'<(div|/div|section|/section|main|/main|blockquote|/blockquote)', line)
        for tag in all_tags:
            if tag.startswith('/'):
                if not stack:
                    print(f"{ln}: Error: Found closing tag {tag} with no open tag")
                else:
                    top = stack.pop()
                    if top != tag[1:]:
                        print(f"{ln}: Error: Tag mismatch. Found {tag} but expected /{top}")
            else:
                stack.append(tag)
    
    if stack:
        print(f"Final: Unclosed tags: {stack}")
    else:
        print("Final: All tags are balanced!")

check_tags('dr-kelly-lewis-arthur.php')
