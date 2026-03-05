<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost", "root", "", "yourpet_db");
if (!$conn) {
    echo json_encode(["status" => "error", "message" => "Koneksi Gagal"]);
    exit();
}
?>
