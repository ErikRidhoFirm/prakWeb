<?php
include 'koneksi.php';

$username = "admin45";
$password = "12345";

$hashed_password = md5($password);

$sql = "INSERT INTO user (id, username, password, level) VALUES (6, '$username', '$hashed_password', 6)";

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($connect, $sql)) {
    echo "Data berhasil dimasukkan";
} else {
    echo "Gagal saat memasukkan data: " . mysqli_error($connect);
}

$connect->close();
?>