<?php

$username = "admin";
$password = "123";

$hashed_password = md5($password);

$sql = "INSERT INTO user (id, username, password) VALUES (1,'$username', '$hashed_password')";

if (mysqli_query($connect, $sql)) {
    echo "Data berhasil dimasukkan";
}else {
    echo "Gagal saat memasukkan data: " . $connect->$error;
}

$connect->close();
?>