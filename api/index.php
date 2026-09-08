<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
$path = ltrim($uri, '/');

// Root homepage
if ($path === '' || $path === 'index.php') {
    $file = dirname(__DIR__) . '/index.php';
    if (file_exists($file)) {
        require $file;
        exit;
    }
}

// Pages subfolder (/pages/xyz or /pages/xyz.php)
if (strpos($path, 'pages/') === 0) {
    $page = substr($path, 6);
    if (substr($page, -4) === '.php') {
        $page = substr($page, 0, -4);
    }
    $pageFile = dirname(__DIR__) . '/pages/' . $page . '.php';
    if (file_exists($pageFile)) {
        require $pageFile;
        exit;
    }
}

// Direct php file in root
$rootFile = dirname(__DIR__) . '/' . $path;
if (file_exists($rootFile) && substr($rootFile, -4) === '.php') {
    require $rootFile;
    exit;
}

// Fallback to homepage
$indexFile = dirname(__DIR__) . '/index.php';
if (file_exists($indexFile)) {
    require $indexFile;
    exit;
}

http_response_code(404);
echo "404 Not Found: " . htmlspecialchars($path);
