<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/api/b2nLNxUEZR' :
        require __DIR__ . '/sendEmail.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}

?>