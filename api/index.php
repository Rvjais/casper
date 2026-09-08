<?php
// Enable error display for debugging
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
$path = ltrim($uri, '/');

// Root homepage
if ($path === '' || $path === 'index.php') {
    $file = __DIR__ . '/../index.php';
    if (file_exists($file)) {
        require $file;
        exit;
    }
    $file = __DIR__ . '/index.php';
    if (file_exists($file)) {
        require $file;
        exit;
    }
    die("Homepage file not found: index.php");
}

// Pages subfolder (/pages/xyz or /pages/xyz.php)
if (strpos($path, 'pages/') === 0) {
    $page = substr($path, 6);
    if (substr($page, -4) === '.php') {
        $page = substr($page, 0, -4);
    }
    $pageFile = __DIR__ . '/../pages/' . $page . '.php';
    if (file_exists($pageFile)) {
        require $pageFile;
        exit;
    }
    $pageFile = __DIR__ . '/pages/' . $page . '.php';
    if (file_exists($pageFile)) {
        require $pageFile;
        exit;
    }
    die("Page not found: " . htmlspecialchars($page));
}

// Direct php file
$rootFile = __DIR__ . '/../' . $path;
if (file_exists($rootFile) && substr($rootFile, -4) === '.php') {
    require $rootFile;
    exit;
}

// Fallback to homepage
$indexFile = __DIR__ . '/../index.php';
if (file_exists($indexFile)) {
    require $indexFile;
    exit;
}

die("File not found for: " . htmlspecialchars($path));
