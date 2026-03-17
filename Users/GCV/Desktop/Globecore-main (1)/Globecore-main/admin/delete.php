<?php
require_once 'config.php';
requireLogin();

$filename = $_GET['file'] ?? '';

if (empty($filename)) {
    header('Location: dashboard.php?message=' . urlencode('No blog specified') . '&type=error');
    exit;
}

if (deleteBlog($filename)) {
    $message = 'Blog deleted successfully!';
    $type = 'success';
} else {
    $message = 'Error deleting blog. Please try again.';
    $type = 'error';
}

header('Location: dashboard.php?message=' . urlencode($message) . '&type=' . $type);
exit;
