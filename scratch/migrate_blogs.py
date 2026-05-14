import json
import os
import re
from pathlib import Path

# Paths
base_path = Path("/home/veer/Ranveer/GlobeCore")
blogs_json_path = base_path / "blogshtml" / "blogs.json"
output_dir = base_path / "blog"
template_path = base_path / "blogshtml" / "blogs"

# Load blogs data
with open(blogs_json_path, 'r') as f:
    blogs_data = json.load(f)

# PHP Template for individual post
post_template = """<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "{title} | GlobeCoRe Inc.";
include_once "../partials/head.php";
?>
<style>
    .article-content p {{ margin-bottom: 1.5em; line-height: 1.8; color: #4b5563; }}
    .article-content h1, .article-content h2, .article-content h3, .article-content h4 {{ font-family: 'Raleway', sans-serif; color: #071e26; font-weight: 800; margin-top: 1.5em; margin-bottom: 0.75em; }}
    .article-content h2 {{ font-size: 2rem; margin-top: 2em; }}
    .article-content h3 {{ font-size: 1.5rem; }}
    .article-content ul, .article-content ol {{ margin-bottom: 1.5em; padding-left: 1.5em; color: #4b5563; }}
    .article-content ul {{ list-style-type: disc; }}
    .article-content ol {{ list-style-type: decimal; }}
    .article-content li {{ margin-bottom: 0.5em; }}
    .article-content a {{ color: #8BAF4C; text-decoration: none; font-weight: 600; border-bottom: 1px solid transparent; transition: border-color 0.3s; }}
    .article-content a:hover {{ border-color: #8BAF4C; }}
    .article-content blockquote {{ border-left: 4px solid #8BAF4C; padding-left: 1.5rem; font-style: italic; color: #6b7280; margin: 2rem 0; }}
    .article-content img {{ border-radius: 1rem; margin: 2rem auto; }}
</style>
</head>
<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>
    <main class="bg-[#f8fcfc] py-24 selection:bg-deepTeal/20 font-inter pt-32 lg:pt-40" id="main">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
            <a class="inline-flex items-center gap-2 text-primary hover:text-deepTeal font-bold mb-10 transition-colors" href="./index.php">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                Back to Blog
            </a>
            <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 p-8 md:p-14 mb-16 relative">
                <div class="mb-10 text-center pb-10 border-b border-gray-100">
                    <span class="bg-primary/10 text-primary text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] mb-6 inline-block">
                        {category}
                    </span>
                    <h1 class="text-[32px] md:text-[42px] lg:text-[48px] font-extrabold text-[#071e26] leading-tight font-raleway mb-8">
                        {title}
                    </h1>
                    <div class="flex items-center justify-center gap-6 text-xs text-gray-400 font-bold uppercase tracking-widest flex-wrap">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                            {date}
                        </span>
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-200"></span>
                        <span class="flex items-center gap-1.5">By {author}</span>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden mb-12 relative shadow-md">
                    <img alt="{title}" class="w-full h-auto object-cover max-h-[500px]" src="/blog/{image}"/>
                </div>
                <div class="article-content text-[17px] md:text-[18px]">
                    {content}
                </div>
            </article>
        </div>
    </main>
    <?php include "../partials/footer.php"; ?>
</body>
</html>
"""

def extract_content(html_file):
    with open(html_file, 'r') as f:
        content = f.read()
    # Find the content inside <div class="prose ...">
    match = re.search(r'<div class="prose[^>]*>(.*?)</div>\s*<div class="mt-12', content, re.DOTALL)
    if match:
        return match.group(1).strip()
    return "<p>Content not found.</p>"

# Generate individual posts
for post in blogs_data:
    filename = post['link'].replace('blogs/', '').replace('.html', '.php')
    html_file = base_path / "blogshtml" / post['link']
    content = extract_content(html_file)
    
    php_content = post_template.format(
        title=post['title'],
        category=post['category'],
        date=post['date'],
        author=post['author'],
        image=post['image'],
        content=content
    )
    
    with open(output_dir / filename, 'w') as f:
        f.write(php_content)

# Function to generate index pages (pagination)
def generate_index_pages(posts, posts_per_page=6):
    total_pages = (len(posts) + posts_per_page - 1) // posts_per_page
    
    for page_num in range(1, total_pages + 1):
        start = (page_num - 1) * posts_per_page
        end = page_num * posts_per_page
        page_posts = posts[start:end]
        
        filename = "index.php" if page_num == 1 else f"page-{page_num}.php"
        
        # Build the grid
        grid_html = ""
        for i, post in enumerate(page_posts):
            post_link = "./" + post['link'].replace('blogs/', '').replace('.html', '.php')
            image_src = "/blog/" + post['image']
            
            # Use different style for every first item on a page if it's not the first page? 
            # Or just use the grid. The current site uses a grid.
            
            # The current site has a mix of full-width and grid. 
            # On index.php, the first 4 are in a grid? No, looking at index.php:
            # It has a grid-cols-3.
            
            grid_html += f"""
                <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100">
                    <div class="relative overflow-hidden aspect-[4/3] w-full flex-shrink-0 h-64">
                        <a href="{post_link}" class="block w-full h-full">
                            <img src="{image_src}" alt="{post['title']}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out">
                        </a>
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#071e26]/50 md:from-[#071e26]/30 to-transparent pointer-events-none"></div>
                        <div class="absolute top-6 left-6 z-10">
                            <span class="bg-white/95 backdrop-blur-md text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block">{post['category'].upper()}</span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow relative bg-white w-full">
                        <div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                {post['date']}
                            </span>
                        </div>
                        <h2 class="text-[22px] md:text-[24px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
                            <a href="{post_link}" class="focus:outline-none before:absolute before:inset-0 cursor-pointer">{post['title']}</a>
                        </h2>
                        <div class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 flex-grow">
                            <p>{post['excerpt']}</p>
                        </div>
                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
                            <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest flex items-center gap-2">By {post['author']}</span>
                            <span class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform cursor-pointer">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </article>
            """

        # Pagination HTML
        pagination_html = '<div class="mt-16 flex justify-center items-center gap-2 md:gap-3 font-inter flex-wrap">'
        
        # Prev
        if page_num > 1:
            prev_link = "index.php" if page_num == 2 else f"page-{page_num-1}.php"
            pagination_html += f"""
                <a href="./{prev_link}" class="px-6 h-12 mr-2 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all group gap-2">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                    Prev
                </a>
            """
        else:
            pagination_html += """
                <span class="px-6 h-12 mr-2 flex items-center justify-center rounded-full bg-gray-50 border border-gray-100 text-gray-300 font-extrabold text-lg cursor-not-allowed gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                    Prev
                </span>
            """
            
        # Pages
        for p in range(1, total_pages + 1):
            p_link = "index.php" if p == 1 else f"page-{p}.php"
            if p == page_num:
                pagination_html += f'<span class="w-12 h-12 flex items-center justify-center rounded-full bg-[#071e26] text-white font-extrabold text-lg shadow-[0_8px_16px_rgb(7,30,38,0.2)]">{p}</span>'
            else:
                pagination_html += f'<a href="./{p_link}" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all">{p}</a>'
        
        # Next
        if page_num < total_pages:
            next_link = f"page-{page_num+1}.php"
            pagination_html += f"""
                <a href="./{next_link}" class="px-6 h-12 ml-2 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all group gap-2">
                    Next
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            """
        else:
            pagination_html += """
                <span class="px-6 h-12 ml-2 flex items-center justify-center rounded-full bg-gray-50 border border-gray-100 text-gray-300 font-extrabold text-lg cursor-not-allowed gap-2">
                    Next
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            """
            
        pagination_html += '</div>'
        
        index_template = f"""<!DOCTYPE html>
<html lang="en">
<head>
<?php
$pageTitle = "Blog | GlobeCoRe Inc. Atlanta, GA";
include_once "../partials/head.php";
?>
</head>
<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>

    <!-- Creative Hero Section -->
    <section class="relative pt-32 pb-40 lg:pt-40 lg:pb-48 overflow-hidden bg-[#071e26]">
        <div class="absolute inset-0">
            <img src="/assets/Globe Core-108.jpg" alt="Blog"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay filter blur-[2px]">
            <div class="absolute inset-0 bg-gradient-to-t from-[#071e26] via-[#071e26]/80 to-transparent"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center">
            <div
                class="inline-flex items-center gap-2 bg-primary/20 border border-primary/30 rounded-full px-5 py-2 mb-8 backdrop-blur-md">
                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                <span class="text-white text-xs font-bold tracking-[0.2em] uppercase">Help & Information</span>
            </div>
            <h1
                class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-8 tracking-tight drop-shadow-2xl">
                Blog
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-md">
                Empowering individuals and families in Atlanta, GA with evidence-based approaches, compassionate care,
                and profound expertise.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact.php"
                    class="bg-primary text-white font-bold py-4 px-10 rounded-full hover:bg-[#7a9e3f] hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 text-lg">Book
                    a Consultation</a>
            </div>
        </div>

        <!-- Custom Wave Divider -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none drop-shadow-lg text-white">
            <svg fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none"
                class="w-full h-[60px] md:h-[100px]">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C52.16,108.83,106.6,117.8,162,118.8,216.7,119.78,271.69,103.55,321.39,56.44Z">
                </path>
            </svg>
        </div>
    </section>

    <main id="main" class="bg-[#f8fcfc] py-24 selection:bg-deepTeal/20">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 md:px-8">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-primary font-bold tracking-[0.2em] uppercase text-sm mb-4 block">Our Journal</span>
                <h1
                    class="text-[40px] md:text-[54px] font-extrabold text-[#071e26] mb-6 font-raleway tracking-tight leading-tight">
                    Latest Insights & Updates
                </h1>
                <p class="text-gray-500 text-lg">Discover the latest news, research, and stories on <a href="/services/tms-therapy.php" class="text-[#1C8193] underline hover:text-[#071e26] transition-colors font-medium">TMS therapy</a> and
                    mental wellness.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {grid_html}
            </div>

            {pagination_html}
        </div>
    </main>

    <?php include "../partials/footer.php"; ?>
</body>
</html>
"""
        with open(output_dir / filename, 'w') as f:
            f.write(index_template)

generate_index_pages(blogs_data)
print("Blog migration complete.")
