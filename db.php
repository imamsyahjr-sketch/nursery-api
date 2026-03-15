<?php

header("Content-Type: application/json");

// ambil environment variable dari Railway
$host = $_ENV["MYSQLHOST"] ?? "";
$user = $_ENV["MYSQLUSER"] ?? "";
$pass = $_ENV["MYSQLPASSWORD"] ?? "";
$db   = $_ENV["MYSQLDATABASE"] ?? "";
$port = $_ENV["MYSQLPORT"] ?? "3306";

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
