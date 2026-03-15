<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit();
}

include "db.php";

if(!isset($_POST['username']) || !isset($_POST['password'])){
    echo json_encode([
        "status"=>"error",
        "message"=>"Data tidak lengkap"
    ]);
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){

    $user = $result->fetch_assoc();

    if($password == $user['password']){

        echo json_encode([
            "status"=>"success",
            "message"=>"Login berhasil"
        ]);

    }else{

        echo json_encode([
            "status"=>"error",
            "message"=>"Password salah"
        ]);

    }

}else{

    echo json_encode([
        "status"=>"error",
        "message"=>"User tidak ditemukan"
    ]);

}

$conn->close();

?>