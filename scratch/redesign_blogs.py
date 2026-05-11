import json
import os
import re
from pathlib import Path

# Paths
base_path = Path("/home/veer/Ranveer/GlobeCore")
blogs_json_path = base_path / "scratch" / "blogs.json"
blog_dir = base_path / "blog"

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
    
    .toc-item.active {{ color: #8BAF4C; font-weight: 700; border-left-color: #8BAF4C; }}
</style>
</head>
<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>

    <!-- Breadcrumbs -->
    <div class="bg-gray-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center gap-2 text-sm font-medium text-gray-500">
            <a href="/" class="hover:text-primary transition-colors">Home</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <a href="/blog/" class="hover:text-primary transition-colors">Blog</a>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 line-clamp-1">{title}</span>
        </div>
    </div>

    <!-- Article Hero Section -->
    <section class="bg-[#071e26] py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        </div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 relative z-10 text-center">
            <div class="flex items-center justify-center gap-4 text-gray-400 text-xs font-bold uppercase tracking-widest mb-8">
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> {date}</span>
                <span class="w-1.5 h-1.5 rounded-full bg-gray-600"></span>
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {readTime}</span>
                <span class="w-1.5 h-1.5 rounded-full bg-gray-600"></span>
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> {author}</span>
            </div>
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-10 font-raleway">
                {title}
            </h1>
            <p class="text-gray-300 text-lg md:text-xl max-w-3xl mx-auto mb-10 leading-relaxed italic">
                {excerpt}
            </p>
            <div class="flex justify-center">
                <a href="/contact.php" class="bg-white text-[#071e26] font-bold py-4 px-10 rounded-full hover:bg-primary hover:text-white transition-all duration-300 shadow-xl">Get Mental Health Support</a>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <main class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Sidebar: Table of Contents -->
                <aside class="lg:w-1/4 hidden lg:block sticky top-32 h-fit">
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100">
                        <h4 class="text-sm font-bold text-[#071e26] uppercase tracking-widest mb-6 border-b border-gray-200 pb-4">Table of Contents</h4>
                        <nav class="flex flex-col gap-4">
                            <a href="#introduction" class="toc-item active pl-4 border-l-2 border-gray-200 py-1 text-sm transition-all hover:text-primary">Introduction</a>
                            <a href="#key-points" class="toc-item pl-4 border-l-2 border-gray-200 py-1 text-sm transition-all hover:text-primary">Key Points</a>
                            <a href="#treatment-options" class="toc-item pl-4 border-l-2 border-gray-200 py-1 text-sm transition-all hover:text-primary">Treatment Options</a>
                            <a href="#conclusion" class="toc-item pl-4 border-l-2 border-gray-200 py-1 text-sm transition-all hover:text-primary">Conclusion</a>
                        </nav>
                        
                        <div class="mt-10 pt-10 border-t border-gray-200">
                            <h5 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Share This Article</h5>
                            <div class="flex gap-3">
                                <a href="#" class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-400"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition-all text-gray-400"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></a>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Content Area -->
                <div class="lg:w-3/4">
                    <div class="rounded-[2.5rem] overflow-hidden mb-16 shadow-2xl relative group">
                        <img src="/assets/blog/{image_filename}" alt="{title}" class="w-full h-auto object-cover max-h-[600px] group-hover:scale-105 transition-transform duration-700">
                    </div>

                    <div id="introduction" class="article-content text-[17px] md:text-[18px]">
                        {content}
                    </div>

                    <div class="mt-20 p-10 bg-gray-50 rounded-[2.5rem] border border-gray-100 flex flex-col md:flex-row items-center gap-10">
                        <div class="md:w-1/3">
                            <img src="/assets/globecore_logo-removebg-preview.png" alt="GlobeCoRe" class="w-full h-auto brightness-0 opacity-20">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-bold text-[#071e26] mb-4">Need help with your mental wellness?</h3>
                            <p class="text-gray-500 mb-8">Our board-certified experts are here to provide personalized, compassionate care tailored to your unique needs.</p>
                            <a href="/contact.php" class="inline-flex items-center gap-2 bg-[#071e26] text-white font-bold py-4 px-8 rounded-xl hover:bg-primary transition-all duration-300">
                                Book a Consultation
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "../partials/footer.php"; ?>
</body>
</html>
"""

def extract_content(php_file):
    with open(php_file, 'r') as f:
        content = f.read()
    # Find the content inside <div class="article-content ...">
    match = re.search(r'<div class="article-content[^>]*>(.*?)</div>\s*</article>', content, re.DOTALL)
    if match:
        return match.group(1).strip()
    return "<p>Content not found.</p>"

# Generate individual posts
for post in blogs_data:
    filename = post['link'].replace('blogs/', '').replace('.html', '.php')
    current_php_file = blog_dir / filename
    
    # Extract content from existing PHP file (since I deleted blogshtml)
    content = extract_content(current_php_file)
    
    # Get image filename from path (e.g., images/blog/filename.png -> filename.png)
    image_filename = post['image'].replace('images/blog/', '')
    
    php_content = post_template.format(
        title=post['title'],
        category=post['category'],
        date=post['date'],
        author=post['author'],
        readTime=post['readTime'],
        excerpt=post['excerpt'],
        image_filename=image_filename,
        content=content
    )
    
    with open(blog_dir / filename, 'w') as f:
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
            image_filename = post['image'].replace('images/blog/', '')
            image_src = "/assets/blog/" + image_filename
            
            grid_html += f"""
                <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100 relative">
                    <div class="relative overflow-hidden aspect-[16/10] w-full flex-shrink-0 bg-primary/5">
                        <!-- Colored Overlay Pattern like reference -->
                        <div class="absolute inset-0 z-0 opacity-20 pointer-events-none">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-primary rounded-full blur-xl translate-x-1/2 -translate-y-1/2"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-secondary rounded-full blur-xl -translate-x-1/2 translate-y-1/2"></div>
                        </div>
                        
                        <a href="{post_link}" class="block w-full h-full relative z-10 p-4">
                            <img src="{image_src}" alt="{post['title']}" class="w-full h-full object-cover rounded-xl shadow-md group-hover:scale-105 transition-transform duration-700 ease-out">
                        </a>
                        
                        <div class="absolute top-6 left-6 z-20">
                            <span class="bg-white text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block border border-gray-100">{post['category'].upper()}</span>
                        </div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-grow relative bg-white w-full z-10">
                        <div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 font-inter uppercase tracking-widest">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                {post['date']}
                            </span>
                        </div>
                        
                        <h2 class="text-[20px] md:text-[22px] font-extrabold text-[#071e26] leading-snug font-raleway mb-4 group-hover:text-primary transition-colors duration-300">
                            <a href="{post_link}" class="focus:outline-none">{post['title']}</a>
                        </h2>
                        
                        <div class="text-gray-500 text-[15px] leading-relaxed mb-8 flex-grow line-clamp-3">
                            <p>{post['excerpt']}</p>
                        </div>
                        
                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
                            <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest flex items-center gap-2">By {post['author']}</span>
                            <a href="{post_link}" class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                            </a>
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
<style>
    .filter-tab.active {{
        background-color: #8BAF4C;
        color: white;
    }}
</style>
</head>
<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>

    <!-- Karma-style Hero Section adapted to GlobeCore -->
    <section class="pt-24 pb-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-[#071e26] mb-6">
                Mental Health <span class="text-primary">Insights</span>
            </h1>
            <p class="text-gray-500 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Stay informed with the latest research, treatments, and expert insights in mental health care from our team of specialists.
            </p>
        </div>
    </section>

    <!-- Filter Tabs -->
    <section class="pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex flex-wrap justify-center gap-4 border-b border-gray-100 pb-8">
                <a href="#" class="filter-tab active px-8 py-2.5 rounded-lg font-bold text-sm transition-all shadow-sm">All Posts</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">TMS Therapy</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Mental Health</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Research</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Patient Stories</a>
                <a href="#" class="filter-tab bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all">Wellness Tips</a>
            </div>
        </div>
    </section>

    <main id="main" class="bg-white pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                {grid_html}
            </div>

            {pagination_html}
        </div>
    </main>

    <?php include "../partials/footer.php"; ?>
</body>
</html>
"""
        with open(blog_dir / filename, 'w') as f:
            f.write(index_template)

generate_index_pages(blogs_data)
print("Blog redesign complete.")
