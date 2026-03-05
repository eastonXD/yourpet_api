<?php
include 'config.php';

// Menangkap ID yang mau dihapus
$id_pet = $_POST['id_pet'] ?? null;

if (!$id_pet) {
    echo json_encode([
        "status" => "error",
        "message" => "ID Pet tidak ditemukan!"
    ]);
    exit;
}

// Query Delete
$query = "DELETE FROM pets WHERE id_pet = '$id_pet'";

if (mysqli_query($conn, $query)) {
    echo json_encode([
        "status" => "success",
        "message" => "Data pet berhasil dihapus!"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Gagal hapus data!"
    ]);
}
?>