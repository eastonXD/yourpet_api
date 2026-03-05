<?php
include 'config.php';

// Query untuk mengambil semua data dari tabel pets
$query = "SELECT * FROM pets";
$result = mysqli_query($conn, $query);

$pets = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pets[] = $row;
    }

    // Memberikan respon sukses dan data pets
    echo json_encode([
        "status" => "success",
        "message" => "Data berhasil diambil",
        "data" => $pets
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Data tidak ditemukan",
        "data" => []
    ]);
}
?>