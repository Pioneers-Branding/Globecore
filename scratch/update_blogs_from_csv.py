import csv
import json
import os
import re
from pathlib import Path
from datetime import datetime

# Paths
base_path = Path("/home/veer/Ranveer/GlobeCore")
blogs_json_path = base_path / "scratch" / "blogs.json"
csv_path = base_path / "globecore-posts-export-2026-may-12-1026.csv"
blog_dir = base_path / "blog"

# Ensure blog directory exists
blog_dir.mkdir(parents=True, exist_ok=True)

# Load existing blogs metadata
if blogs_json_path.exists():
    with open(blogs_json_path, 'r') as f:
        blogs_metadata = json.load(f)
else:
    blogs_metadata = []

# Create a mapping for quick lookup
metadata_map = {m['title'].strip().lower(): m for m in blogs_metadata}

def slugify(text):
    text = text.lower()
    text = re.sub(r'[^\w\s-]', '', text)
    text = re.sub(r'[\s_-]+', '-', text)
    text = text.strip('-')
    return text

def clean_html(html):
    # Some cleaning if needed
    return html.strip()

def get_excerpt(html, length=200):
    # Remove HTML tags to get plain text for excerpt
    text = re.sub(r'<[^>]+>', '', html)
    text = ' '.join(text.split())
    if len(text) <= length:
        return text
    return text[:length].rsplit(' ', 1)[0] + "..."

def get_image_for_title(title):
    title = title.lower()
    mapping = {
        "tms": "images/blog/tms_therapy_in_atlanta.jpg",
        "depression": "images/blog/Depression_Treatment_in_Atlanta.png",
        "anxiety": "images/blog/how_to_calm_anxiety.png",
        "disability": "images/blog/can_you_get_disability_for_depression.png",
        "cost": "images/blog/how_much_does_TMS_therapy_cost.jpg",
        "insurance": "images/blog/how_much_does_TMS_therapy_cost.jpg",
        "medicaid": "images/blog/Psychiatrist_in_Atlanta_That_Accept_Medicaid.png",
        "tricare": "images/blog/can_veterens_get_tricare_for_tms_therapy.jpg",
        "schizophrenia": "images/blog/psychiatric_evaluation.png",
        "ocd": "images/blog/is_adhd_a_disability.png",
        "burnout": "images/blog/Depression_Treatment_in_Atlanta.png",
        "stress": "images/blog/how_to_calm_anxiety.png",
        "tech": "images/blog/dopamine_trap.png",
        "couples": "images/blog/couples_therapy.jpg",
        "relationship": "images/blog/couples_therapy.jpg",
        "marriage": "images/blog/marriage_counseling_in_atlanta_ga.jpg",
        "schizophrenia": "images/blog/psychiatric_evaluation.png",
        "personality": "images/blog/psychiatric_evaluation.png",
    }
    for key, img in mapping.items():
        if key in title:
            return img
    return "images/blog/counseling_in_mental_health_recovery.png"

# Template for PHP
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

updated_blogs = []

with open(csv_path, 'r', encoding='utf-8-sig') as f:
    reader = csv.DictReader(f)
    for row in reader:
        title = row['Title'].strip()
        if title.startswith("Elementor"):
            continue
        content = clean_html(row['Content'])
        title_lower = title.lower()
        
        if title_lower in metadata_map:
            meta = metadata_map[title_lower]
            meta['title'] = title
            meta['excerpt'] = get_excerpt(content)
            # Use existing image if possible, otherwise map it
            if "counseling_in_mental_health_recovery.png" in meta['image']:
                meta['image'] = get_image_for_title(title)
        else:
            # Create new metadata
            slug = slugify(title)
            meta = {
                "title": title,
                "link": f"blogs/{slug}.html",
                "image": get_image_for_title(title),
                "category": "Mental Health",
                "excerpt": get_excerpt(content),
                "author": "Dr. Keerthy Sunder",
                "readTime": f"{max(5, len(content.split()) // 200)} min read",
                "date": datetime.now().strftime("%B %d, %Y")
            }
            # Update category based on title keywords too
            if "tms" in title.lower():
                meta['category'] = "TMS Therapy"
            elif "depression" in title.lower():
                meta['category'] = "Depression"
            elif "anxiety" in title.lower():
                meta['category'] = "Mental Health"
            elif "stress" in title.lower() or "wellness" in title.lower():
                meta['category'] = "Wellness Tips"
                
            metadata_map[title_lower] = meta
        
        updated_blogs.append(meta)
        
        # Generate PHP file
        filename = meta['link'].replace('blogs/', '').replace('.html', '.php')
        image_filename = meta['image'].replace('images/blog/', '')
        
        php_content = post_template.format(
            title=meta['title'],
            category=meta['category'],
            date=meta['date'],
            author=meta['author'],
            readTime=meta['readTime'],
            excerpt=meta['excerpt'],
            image_filename=image_filename,
            content=content
        )
        
        with open(blog_dir / filename, 'w') as out_f:
            out_f.write(php_content)

# Update blogs.json
with open(blogs_json_path, 'w') as f:
    json.dump(updated_blogs, f, indent=2)

# Now regenerate index.php
blogs_json_string = json.dumps(updated_blogs)

index_template = f"""<?php
$blogs_json = <<<'JSON'
{blogs_json_string}
JSON;
$blogs = json_decode($blogs_json, true);

$currentCategory = $_GET['category'] ?? 'All';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 6;

// Filter blogs by category
$filteredBlogs = array_filter($blogs, function($b) use ($currentCategory) {{
    if ($currentCategory === 'All') return true;
    
    // Exact match or contains
    return strtolower($b['category']) === strtolower($currentCategory) || 
           strpos(strtolower($b['category']), strtolower($currentCategory)) !== false;
}});

// Reset keys for array_slice
$filteredBlogs = array_values($filteredBlogs);

$totalPosts = count($filteredBlogs);
$totalPages = ceil($totalPosts / $perPage);
if ($totalPages > 0 && $page > $totalPages) $page = $totalPages;
if ($page < 1) $page = 1;

$startIndex = ($page - 1) * $perPage;
$displayBlogs = array_slice($filteredBlogs, $startIndex, $perPage);

$pageTitle = "Blog | GlobeCoRe Inc. Atlanta, GA";
include_once "../partials/head.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .filter-tab.active {{
        background-color: #8BAF4C !important;
        color: white !important;
        box-shadow: 0 4px 14px 0 rgba(139, 175, 76, 0.39);
    }}
</style>
</head>
<body class="font-raleway text-textMain bg-white">
    <?php include "../partials/header.php"; ?>

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

    <section class="pb-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex flex-wrap justify-center gap-4 border-b border-gray-100 pb-8">
                <?php
                $categories = ['All', 'TMS Therapy', 'Mental Health', 'Depression', 'Wellness Tips'];
                foreach ($categories as $cat):
                    $isActive = ($currentCategory === $cat) ? 'active' : '';
                    $url = "?category=" . urlencode($cat);
                ?>
                <a href="<?php echo $url; ?>" class="filter-tab <?php echo $isActive; ?> bg-gray-50 text-gray-500 hover:bg-gray-100 px-8 py-2.5 rounded-lg font-bold text-sm transition-all shadow-sm"><?php echo $cat; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <main id="main" class="bg-white pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php if (empty($displayBlogs)): ?>
                <div class="text-center py-20">
                    <h3 class="text-2xl font-bold text-gray-400">No posts found in this category.</h3>
                    <a href="?category=All" class="text-primary font-bold mt-4 inline-block">View All Posts</a>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <?php foreach ($displayBlogs as $post): 
                        $link = "./" . str_replace(['blogs/', '.html'], ['', '.php'], $post['link']);
                        $img = "/assets/blog/" . str_replace('images/blog/', '', $post['image']);
                    ?>
                    <article class="bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 group flex flex-col h-full border border-gray-100 relative">
                        <div class="relative overflow-hidden aspect-[16/10] w-full flex-shrink-0 bg-primary/5">
                            <div class="absolute inset-0 z-0 opacity-20 pointer-events-none">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-primary rounded-full blur-xl translate-x-1/2 -translate-y-1/2"></div>
                                <div class="absolute bottom-0 left-0 w-32 h-32 bg-secondary rounded-full blur-xl -translate-x-1/2 translate-y-1/2"></div>
                            </div>
                            <a href="<?php echo $link; ?>" class="block w-full h-full relative z-10 p-4">
                                <img src="<?php echo $img; ?>" alt="<?php echo $post['title']; ?>" class="w-full h-full object-cover rounded-xl shadow-md group-hover:scale-105 transition-transform duration-700 ease-out">
                            </a>
                            <div class="absolute top-6 left-6 z-20">
                                <span class="bg-white text-[#071e26] text-[10px] font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-[0.15em] block border border-gray-100"><?php echo strtoupper($post['category']); ?></span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow relative bg-white w-full z-10">
                            <div class="flex items-center gap-3 text-xs text-gray-400 font-bold mb-4 uppercase tracking-widest">
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                    <?php echo $post['date']; ?>
                                </span>
                            </div>
                            <h2 class="text-[20px] md:text-[22px] font-extrabold text-[#071e26] leading-snug mb-4 group-hover:text-primary transition-colors duration-300">
                                <a href="<?php echo $link; ?>"><?php echo $post['title']; ?></a>
                            </h2>
                            <div class="text-gray-500 text-[15px] leading-relaxed mb-8 flex-grow line-clamp-3">
                                <p><?php echo $post['excerpt']; ?></p>
                            </div>
                            <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between z-20 relative">
                                <span class="text-[10px] font-extrabold text-gray-400 uppercase tracking-widest">By <?php echo $post['author']; ?></span>
                                <a href="<?php echo $link; ?>" class="inline-flex items-center gap-1.5 text-primary text-sm font-bold group-hover:translate-x-1 transition-transform">Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg></a>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center items-center gap-2 md:gap-3 flex-wrap">
                    <?php if ($page > 1): ?>
                        <a href="?category=<?php echo urlencode($currentCategory); ?>&page=<?php echo $page-1; ?>" class="px-6 h-12 mr-2 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all group gap-2">
                            <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg> Prev
                        </a>
                    <?php endif; ?>

                    <?php for ($p = 1; $p <= $totalPages; $p++): ?>
                        <?php if ($p == $page): ?>
                            <span class="w-12 h-12 flex items-center justify-center rounded-full bg-[#071e26] text-white font-extrabold text-lg shadow-[0_8px_16px_rgb(7,30,38,0.2)]"><?php echo $p; ?></span>
                        <?php else: ?>
                            <a href="?category=<?php echo urlencode($currentCategory); ?>&page=<?php echo $p; ?>" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all"><?php echo $p; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <a href="?category=<?php echo urlencode($currentCategory); ?>&page=<?php echo $page+1; ?>" class="px-6 h-12 ml-2 flex items-center justify-center rounded-full bg-white border border-gray-100 text-[#071e26] font-extrabold text-lg shadow-sm hover:border-[#071e26] transition-all group gap-2">
                            Next <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php include "../partials/footer.php"; ?>
</body>
</html>
"""

with open(blog_dir / "index.php", 'w') as f:
    f.write(index_template)

print(f"Successfully processed {len(updated_blogs)} blogs.")
