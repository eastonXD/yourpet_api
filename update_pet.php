<?php
include 'config.php';

// Menangkap data dari Postman Body (form-data)
$id_pet  = $_POST['id_pet'] ?? null;
$name    = $_POST['name'] ?? null;
$type    = $_POST['type'] ?? null;

if (!$id_pet || !$name || !$type) {
    echo json_encode([
        "status" => "error",
        "message" => "ID Pet, nama, dan tipe harus diisi untuk update!"
    ]);
    exit;
}

// Query Update
$query = "UPDATE pets SET name = '$name', type = '$type' WHERE id_pet = '$id_pet'";

if (mysqli_query($conn, $query)) {
    echo json_encode([
        "status" => "success",
        "message" => "Data pet berhasil diperbarui!"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Gagal update: " . mysqli_error($conn)
    ]);
}
?>