<?php
$daftarSiswa = [
    ['nama' => 'Alice', 'nilai' => 85],
    ['nama' => 'Bob', 'nilai' => 92],
    ['nama' => 'Charlie', 'nilai' => 78],
    ['nama' => 'David', 'nilai' => 64],
    ['nama' => 'Eva', 'nilai' => 90],
];

$totalNilai = 0;
foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa['nilai'];
}

$rataRata = $totalNilai / count($daftarSiswa);

echo "<h3>Daftar Siswa yang Mendapat Nilai di Atas Rata-Rata ($rataRata):</h3>";
echo "<ul>";

foreach ($daftarSiswa as $siswa) {
    if ($siswa['nilai'] > $rataRata) {
        echo "<li>" . $siswa['nama'] . " - " . $siswa['nilai'] . "</li>";
    }
}

echo "</ul>";
?>
