<?php
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$root = '/Darsh/Client';
// Simple routing with a switch statement

switch ($path) {

    case "$root/":
        require 'pages/index.html';
        break;
    case "$root/Authentication":
        require 'pages/login.html';
        break;
    case "$root/Service":
        require 'pages/Services.php';
        break;
    case "$root/Insert":
        require 'Services/Insert.php';
        break;
    default:
        // Handle 404 Not Found errors for all other paths
        http_response_code(404);
        echo "Page Not Found";
        break;
}
?>