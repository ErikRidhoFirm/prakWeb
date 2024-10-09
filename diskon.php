<?php
$hargaAwal = 120000; //harga sebelum bayar
$diskon = 20; //diskon 20%

$jumlahDiskon = ($diskon / 100) * $hargaAwal; //menghitung harga setelah mendapatkan diskon
$hargaSetelah = $hargaAwal - $jumlahDiskon; // harga yang harus dibayar

echo "Harga yang anda harus bayar adalah: $hargaSetelah terimakasih."
?>