<?php
include 'config.php';

// Menangkap data dari Postman
$name    = $_POST['name'] ?? null;
$type    = $_POST['type'] ?? null; // Ini yang tadi kosong di Postman kamu
$id_user = $_POST['id_user'] ?? null; 

// Validasi: Pastikan semua data wajib diisi
if (!$name || !$type || !$id_user) {
    echo json_encode([
        "status" => "error", 
        "message" => "Data tidak lengkap! Kamu harus mengisi: name, type, dan id_user di Postman."
    ]);
    exit;
}

// Tambahkan data ke database
$query = "INSERT INTO pets (name, type, id_user) VALUES ('$name', '$type', '$id_user')";

if (mysqli_query($conn, $query)) {
    echo json_encode([
        "status" => "success", 
        "message" => "Berhasil! Hewan $name sudah terdaftar."
    ]);
} else {
    // Jika error foreign key, pesan ini akan muncul
    echo json_encode([
        "status" => "error", 
        "message" => "Gagal: id_user nomor $id_user tidak ditemukan di tabel users. Buat user dulu di phpMyAdmin!"
    ]);
}
?>