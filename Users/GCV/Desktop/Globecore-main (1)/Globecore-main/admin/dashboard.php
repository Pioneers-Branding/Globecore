<?php
require_once 'config.php';
requireLogin();

$blogs = getBlogs();
$message = $_GET['message'] ?? '';
$type = $_GET['type'] ?? 'success';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | GlobeCoRe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8BAF4C',
                        secondary: '#0F7A8D',
                        deepTeal: '#027289',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-raleway min-h-screen">
    <nav class="bg-[#071e26] text-white px-6 py-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="text-xl font-bold">Blog Admin</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="editor.php" class="bg-primary hover:bg-[#7a9e3f] text-white px-4 py-2 rounded-lg font-semibold transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    New Blog
                </a>
                <a href="logout.php" class="text-gray-300 hover:text-white transition-colors">Logout</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-8">
        <?php if ($message): ?>
            <div class="<?= $type === 'success' ? 'bg-green-50 text-green-600' : 'bg-red-50 text-red-600' ?> px-6 py-4 rounded-xl mb-6 font-medium">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h2 class="text-xl font-bold text-[#071e26]">All Blogs (<?= count($blogs) ?>)</h2>
            </div>
            
            <?php if (empty($blogs)): ?>
                <div class="p-12 text-center">
                    <p class="text-gray-500">No blogs found. Create your first blog!</p>
                    <a href="editor.php" class="inline-block mt-4 bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#7a9e3f] transition-colors">
                        Create Blog
                    </a>
                </div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 text-left">
                            <tr>
                                <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Title</th>
                                <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Filename</th>
                                <th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php foreach ($blogs as $blog): ?>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <a href="../<?= htmlspecialchars($blog['filename']) ?>" target="_blank" class="font-semibold text-[#071e26] hover:text-primary transition-colors">
                                            <?= htmlspecialchars($blog['title']) ?>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500 text-sm"><?= htmlspecialchars($blog['date']) ?></td>
                                    <td class="px-6 py-4 text-gray-400 text-sm font-mono"><?= htmlspecialchars($blog['filename']) ?></td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <a href="editor.php?file=<?= urlencode($blog['filename']) ?>" 
                                                class="text-secondary hover:text-deepTeal p-2 rounded-lg hover:bg-secondary/10 transition-colors" title="Edit">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                            </a>
                                            <a href="delete.php?file=<?= urlencode($blog['filename']) ?>" 
                                                class="text-red-500 hover:text-red-700 p-2 rounded-lg hover:bg-red-50 transition-colors title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this blog? This action cannot be undone.')">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="../blog.html" target="_blank" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-[#071e26]">View Blog Page</h3>
                        <p class="text-sm text-gray-500">See all blogs on live site</p>
                    </div>
                </div>
            </a>
            
            <a href="editor.php" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-[#071e26]">Create New Blog</h3>
                        <p class="text-sm text-gray-500">Add a new blog post</p>
                    </div>
                </div>
            </a>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-[#071e26]">Quick Tips</h3>
                        <p class="text-sm text-gray-500">Filename will be auto-generated</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
