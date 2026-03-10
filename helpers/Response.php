<?php 
 class Response {
    public static function success($data, $message) {
        http_response_code(200);
        echo json_encode([
            "success" => true,
            "message" => $message,
            "data" => $data
        ]);
        exit;
    }

    public static function error($data, $message) {
        http_response_code(422);
        echo json_encode([
            "success" => false,
            "message" => $message,
            "data" => $data
        ]);
        exit;
    }
}