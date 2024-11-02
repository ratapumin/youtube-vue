<?php
$uri = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : null;
$method = $_SERVER['REQUEST_METHOD'] ?? 'CLI';

if ($uri === '/api/users' && $method === 'GET') {
    require_once __DIR__ . '/users.php';
} elseif ($uri === '/api/login' && $method === 'POST') {
    require_once __DIR__ . '/users.php';

} else {
    echo json_encode(["message" => "ไม่พบเส้นทางที่ต้องการ"]);
}

?>