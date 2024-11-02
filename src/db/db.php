<?php
$serverName = "OBI_WHXN";


$connectionInfo = array("Database" => "youtubeDB");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . print_r(sqlsrv_errors(), true));
}
?>