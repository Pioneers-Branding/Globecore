<?php
require_once 'config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';
    
    if ($password === $config['admin_password']) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid password. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | GlobeCoRe</title>
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
<body class="bg-gradient-to-br from-[#071e26] to-[#0a2e38] min-h-screen flex items-center justify-center font-raleway">
    <div class="w-full max-w-md px-6">
        <div class="bg-white rounded-3xl shadow-2xl p-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/10 rounded-full mb-4">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-[#071e26]">Admin Login</h1>
                <p class="text-gray-500 mt-2">Enter your password to manage blogs</p>
            </div>
            
            <?php if ($error): ?>
                <div class="bg-red-50 text-red-600 px-4 py-3 rounded-xl mb-6 text-sm font-medium">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                        placeholder="Enter admin password">
                </div>
                
                <button type="submit"
                    class="w-full bg-primary text-white font-bold py-3 px-6 rounded-xl hover:bg-[#7a9e3f] transition-all duration-300 shadow-lg shadow-primary/30">
                    Login
                </button>
            </form>
            
            <div class="mt-6 text-center">
                <a href="../index.html" class="text-sm text-gray-500 hover:text-primary transition-colors">
                    ← Back to Website
                </a>
            </div>
        </div>
    </div>
</body>
</html>
