<?php
$request_uri = $_SERVER['REQUEST_URI'];

$path = parse_url($request_uri, PHP_URL_PATH);

// Simple routing with a switch statement

switch ($path) {

    case 'Global_Logistic_Portal/Client/':
        require 'pages/index.html';
        break;
    default:
        // Handle 404 Not Found errors for all other paths
        http_response_code(404);
        echo "Page Not Found";
        break;
}
?>