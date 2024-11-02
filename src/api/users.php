<?php
require_once(dirname(__DIR__) . '/db/db.php'); // Corrected path to db.php
header('Content-type: application/json');

switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        $sql = "SELECT * FROM users";
        $stmt = sqlsrv_query($conn, $sql);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true)); // Error handling if the query fails
        }

        $data = [];
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
        break;

    case 'POST':
        $server_response_success = array(
            "code" => http_response_code(200),
            "status" => true,
            "message" => "Request Accepted"
        );
        echo json_encode($server_response_success);
        break;

    case 'PUT':
        $server_response_success = array(
            "code" => http_response_code(200),
            "status" => true,
            "message" => "Request Accepted"
        );
        echo json_encode($server_response_success);
        break;

    default:
        http_response_code(404);
        $server_response_success = array(
            "code" => http_response_code(404),
            "status" => false,
            "message" => "Bad Request"
        );
        echo json_encode($server_response_success);
        break;
}
?>
