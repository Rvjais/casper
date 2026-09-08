<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
$path = ltrim($uri, '/');

// Root homepage
if ($path === '' || $path === 'index.php') {
    require __DIR__ . '/../index.php';
    exit;
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
}

// Direct php file in root
$rootFile = __DIR__ . '/../' . $path;
if (file_exists($rootFile) && substr($rootFile, -4) === '.php') {
    require $rootFile;
    exit;
}

// Fallback to homepage
require __DIR__ . '/../index.php';