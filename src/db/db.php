<?php
$serverName = "OBI_WHXN";

$connectionInfo = array("Database" => "youtubeDB");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "Connection established.<br />";
} else {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}