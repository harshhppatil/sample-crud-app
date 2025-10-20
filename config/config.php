<?php
// Detect environment and set URL Root dynamically
if (isset($_SERVER['HTTP_HOST'])) {
    // Detect protocol (http or https)
    $protocol = 'https'; // Force HTTPS for Heroku
    if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
        $protocol = $_SERVER['HTTP_X_FORWARDED_PROTO'];
    } elseif (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        $protocol = 'https';
    }
    
    define('URLROOT', $protocol . '://' . $_SERVER['HTTP_HOST']);
} else {
    // Fallback for CLI
    define('URLROOT', 'http://localhost/sample-crud-app/public');
}

// Database params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sample_crud_db');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// Site Name
define('SITENAME', 'Sample CRUD App');
