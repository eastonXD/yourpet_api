<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "yourpet_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die(json_encode(["status" => "error", "message" => "Koneksi gagal"]));
}
header('Content-Type: application/json');
?>