<?php

$host = "sql213.infinityfree.com";
$user = "if0_41396589";
$pass = "JI2nhv3BKRK2";
$db   = "if0_41396589_nursery";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {

    echo json_encode([
        "status" => "error",
        "message" => "Koneksi database gagal"
    ]);

    exit;

}

$conn->set_charset("utf8");

?>