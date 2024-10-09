<?php 
$kursi = 45;
$kursiDitempatiPelanggan = 28;

$hasil = $kursi - $kursiDitempatiPelanggan;
$PersentaseKursiKosong = ($hasil / $kursi) * 100;

echo "jumlah kursi yang kosong adalah $hasil<br>";
echo "kursi yang masih kosong dalam persen adalah: " . number_format($PersentaseKursiKosong, 2) . "%";
?>