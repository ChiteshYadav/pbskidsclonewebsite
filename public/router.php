<?php
// If the request is for a file that exists, serve it directly
if (file_exists(__DIR__ . $_SERVER['REQUEST_URI'])) {
    return false;
}

// Otherwise, serve index.php
require_once __DIR__ . '/index.php'; 