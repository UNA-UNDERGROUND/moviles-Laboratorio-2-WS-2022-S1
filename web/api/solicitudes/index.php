<?php

$request_method = $_SERVER['REQUEST_METHOD'];

switch ($request_method) {
    case 'GET':
        
        break;
    default:
        http_response_code(405);
        break;
}
