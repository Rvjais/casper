<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($uri, PHP_URL_PATH);
    $path = ltrim($path, '/');

    $rootDir = dirname(__DIR__);

    if ($path === '' || $path === 'index.php') {
        $target = $rootDir . '/index.php';
    } elseif (strpos($path, 'pages/') === 0) {
        $slug = substr($path, 6);
        if (substr($slug, -4) === '.php') {
            $slug = substr($slug, 0, -4);
        }
        $target = $rootDir . '/pages/' . $slug . '.php';
    } else {
        $target = $rootDir . '/' . $path;
        if (!file_exists($target)) {
            $target = $rootDir . '/' . $path . '.php';
        }
    }

    if (file_exists($target) && is_file($target)) {
        chdir(dirname($target));
        require $target;
        exit;
    }

    if (file_exists($rootDir . '/index.php')) {
        chdir($rootDir);
        require $rootDir . '/index.php';
        exit;
    }

    http_response_code(404);
    echo "<h1>404 Not Found</h1><p>Path: " . htmlspecialchars($path) . "</p>";

} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>PHP Error</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " on line " . $e->getLine() . "</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
