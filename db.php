<?php

header("Content-Type: application/json");

// konfigurasi database Railway
$host = "mysql.railway.internal";
$user = "root";
$pass = "LyegTKdPZCZoPDJUDJApSbHGHatrZJmh";
$db   = "railway";
$port = 3306;

// koneksi database
$conn = new mysqli($host, $user, $pass, $db, $port);

// cek koneksi
if ($conn->connect_error) {

    echo json_encode([
        "status" => "error",
        "message" => "Koneksi database gagal"
    ]);

    exit;
}

$conn->set_charset("utf8");

?>
