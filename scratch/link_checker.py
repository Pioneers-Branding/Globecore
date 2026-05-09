import os
import re
from urllib.parse import urlparse

# Config
BASE_DIR = '/home/veer/Ranveer/GlobeCore'
EXCLUDE_DIRS = ['assets/extracted-globecore', 'scratch', '.git']

# Regex for links
# Trying to be more specific to avoid picking up code variables
LINK_REGEX = re.compile(r'href=["\'](.[^"\']+)["\']|src=["\'](.[^"\']+)["\']')

def get_all_files(directory):
    for root, dirs, files in os.walk(directory):
        # Skip excluded directories
        dirs[:] = [d for d in dirs if os.path.join(root, d).replace(BASE_DIR + '/', '') not in EXCLUDE_DIRS]
        
        for file in files:
            if file.endswith(('.php', '.html')):
                yield os.path.join(root, file)

def extract_links(file_path):
    links = set()
    try:
        with open(file_path, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()
            # Remove PHP tags for analysis if needed, or just skip links with <?php
            matches = LINK_REGEX.findall(content)
            for m in matches:
                link = m[0] or m[1]
                if not link: continue
                
                # Skip anchors, protocols, and PHP/JS variables
                if link.startswith(('#', 'mailto:', 'tel:', 'javascript:', 'http://', 'https://', '<?php', '{{', '${')):
                    continue
                
                # Skip purely relative links that look like JS code
                if ' ' in link or '\n' in link or '\\' in link:
                    continue
                    
                links.add(link)
    except Exception as e:
        print(f"Error reading {file_path}: {e}")
    return links

def check_local_link(link, current_file):
    # Normalize link (remove query params or hashes)
    link = link.split('?')[0].split('#')[0]
    if not link: return True # Just a hash or query
    
    if link.startswith('/'):
        # Root-relative
        path = link.lstrip('/')
        full_path = os.path.join(BASE_DIR, path)
    else:
        # Relative
        dir_name = os.path.dirname(current_file)
        full_path = os.path.join(dir_name, link)
    
    # Check if file exists
    if os.path.exists(full_path):
        return True
    
    # Try adding .php
    if not full_path.endswith('.php') and os.path.exists(full_path + '.php'):
        return True
    
    # Try index.php if it's a directory
    if os.path.isdir(full_path) and os.path.exists(os.path.join(full_path, 'index.php')):
        return True
        
    return False

def main():
    all_files = list(get_all_files(BASE_DIR))
    broken_links = []
    
    print(f"Scanning {len(all_files)} files...")
    
    for file in all_files:
        links = extract_links(file)
        rel_file = os.path.relpath(file, BASE_DIR)
        
        for link in links:
            if not check_local_link(link, file):
                broken_links.append((rel_file, link))
    
    if broken_links:
        # Deduplicate
        unique_broken = sorted(list(set(broken_links)))
        print(f"\nBroken Internal Links Found ({len(unique_broken)}):")
        for file, link in unique_broken:
            print(f"- In {file}: {link}")
    else:
        print("\nNo broken internal links found.")

if __name__ == "__main__":
    main()
