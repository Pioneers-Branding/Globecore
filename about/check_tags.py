
def check_tags(filename):
    with open(filename, 'r') as f:
        content = f.read()
    
    tags = []
    import re
    all_tags = re.findall(r'<(div|/div|section|/section|main|/main|blockquote|/blockquote)', content)
    
    stack = []
    for tag in all_tags:
        if tag.startswith('/'):
            if not stack:
                print(f"Error: Found closing tag {tag} with no open tag")
            else:
                top = stack.pop()
                if top != tag[1:]:
                    print(f"Error: Tag mismatch. Found {tag} but expected /{top}")
        else:
            stack.append(tag)
    
    if stack:
        print(f"Error: Unclosed tags: {stack}")
    else:
        print("All tags are balanced!")

check_tags('dr-kelly-lewis-arthur.php')
check_tags('dr-sharon.php')
