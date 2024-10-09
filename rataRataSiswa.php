<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96]; // array dari nilai siswa
sort($nilaiSiswa); // mengurutkan nilai  siswa
$nilaiYangDigunakan = array_slice($nilaiSiswa, 2, -2); // mengabaikan dua nilai tertinggi dan dua nilai terendah
$totalNilai = array_sum($nilaiYangDigunakan); //meng-total semua nilai siswa yang ada di array kecuali dua nilia tertinggi
                                                // dan terendah
$rataRataNilai = $totalNilai / count($nilaiYangDigunakan); // rata rata nilai yang dihitung berdasarkan $totalnilai dan
                                                            // $nilaiYangDigunakan

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRataNilai";
?>