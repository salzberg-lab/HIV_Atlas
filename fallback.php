<?php
// Fallback for SPA routing
// This file will be served when the .htaccess rules don't work

// Check if this is a genome URL pattern
if (preg_match('/^\/HIV_Atlas\/[0-9]+\/[A-Z0-9.]+$/', $_SERVER['REQUEST_URI'])) {
    // Serve the main index.html file
    readfile('index.html');
    exit;
}

// For other URLs, also serve index.html
readfile('index.html');
?>
