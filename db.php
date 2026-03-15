<?php

$host = $_ENV["mysql.railway.internal"];
$user = $_ENV["root"];
$pass = $_ENV["hXTrZTSfAHojjCrZWoxJeTMmVuUSSNkH"];
$db   = $_ENV["railway"];

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo json_encode([
        "status"=>"error",
        "message"=>"Koneksi database gagal"
    ]);
    exit;
}

?>
