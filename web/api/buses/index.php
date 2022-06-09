<?php


$request_method = $_SERVER['REQUEST_METHOD'];

switch ($request_method) {
    case 'GET':
        if ($isset($_GET['id'])) {
            $id = $_GET['id'];
            $bus = Bus::getBus($id);
            if ($bus) {
                echo json_encode($bus);
            } else {
                http_response_code(404);
            }
        } else {
        }
        break;
    default:
        http_response_code(405);
        break;
}
