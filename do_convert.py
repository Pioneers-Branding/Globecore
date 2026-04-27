#!/usr/bin/env python3
"""
Properly convert HTML files to PHP with full document structure.
Each file gets: DOCTYPE + head from partials + body content + footer partial
"""

import os
import re
from pathlib import Path

def process_file(html_path):
    with open(html_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Extract title
    title_match = re.search(r'<title>(.*?)</title>', content)
    page_title = title_match.group(1) if title_match else ""

    # Find header end (skip past it)
    header_end = content.find('</header>')
    if header_end == -1:
        header_end = content.find('</header ')
    if header_end == -1:
        print(f"  Warning: no header end found in {html_path}")
        return False

    # Start content AFTER the closing header tag
    content_start = header_end + len('</header>')

    # Find footer or script start
    footer_idx = content.find('<footer')
    script_idx = content.find('<script>')
    end_idx = len(content)

    # Prefer footer over script
    if footer_idx != -1:
        end_idx = footer_idx
    elif script_idx != -1:
        end_idx = script_idx

    # Extract content after header ends
    body_content = content[content_start:end_idx].strip()

    # Also skip any leading whitespace/newlines from body content
    body_content = body_content.lstrip('\n\r\t ')

    # Build PHP file
    php_content = f'''<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "{page_title.replace('"', '\\"')}";
include_once "partials/head.php";
?>
</head>

<body class="font-raleway text-textMain bg-white">
    <?php include "partials/header.php"; ?>

    {body_content}

    <?php include "partials/footer.php"; ?>
'''

    php_path = html_path.with_suffix('.php')
    with open(php_path, 'w', encoding='utf-8') as f:
        f.write(php_content)

    # Delete original
    html_path.unlink()

    return True

def fix_links(php_path):
    with open(php_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Fix .html hrefs to .php
    content = re.sub(r'(\.html)(?=["\'\s#])', '.php', content)

    with open(php_path, 'w', encoding='utf-8') as f:
        f.write(content)

def main():
    base = Path('.')

    # Find HTML files to convert
    html_files = [f for f in base.rglob('*.html')
                 if 'partials' not in f.parts
                 and 'assets' not in f.parts
                 and 'update_' not in f.name]

    print(f"Converting {len(html_files)} files...")

    converted = 0
    errors = 0
    for html_file in html_files:
        try:
            if process_file(html_file):
                fix_links(html_file.with_suffix('.php'))
                print(f"✓ {html_file}")
                converted += 1
            else:
                errors += 1
        except Exception as e:
            print(f"✗ Error: {html_file}: {e}")
            errors += 1

    print(f"\nDone! {converted} converted, {errors} errors")

if __name__ == '__main__':
    main()
