<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
} else {
    echo "Koneksi berhasil.";
}
?>