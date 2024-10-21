<?php
$a = 10;
$b = 5;

echo "hasil dari pertambahan: ";
echo $hasilTambah = $a + $b;
echo"<br>";
echo "hasil dari pengurangan: ";
echo $hasilKurang = $a - $b;
echo"<br>";
echo "hasil dari perkalian: ";
echo $hasilKali = $a * $b;
echo"<br>";
echo "hasil dari pembagian: ";
echo $hasilBagi = $a / $b;
echo"<br>";
echo "hasil dari sisa bagi: ";
echo $sisaBagi = $a % $b;
echo"<br>";
echo "hasil dari perpangkatan: ";
echo $pangkat = $a ** $b;

echo "<br><br> apakah 10 == 5? ";
echo $hasilSama = $a == $b ? 'true' : 'false';
echo "<br> apakah 10 != 5? ";
echo $hasilTidakSama = $a != $b ? 'true' : 'false';
echo "<br> apakah 10 < 5? ";
echo $hasillebihKecil = $a < $b ? 'true' : 'false';
echo "<br> apakah 10 > 5? ";
echo $hasilLebihBesar = $a > $b ? 'true' : 'false';
echo "<br> apakah 10 <= 5? ";
echo $hasilLebihKecilSama = $a <= $b ? 'true' : 'false';
echo "<br> apakah 10 >= 5? ";
echo $hasilLebihBesarSama = $a >= $b ? 'true' : 'false';

echo "<br><br> hasil dari $a && $b adalah: ";
echo $hasilAnd = $a && $b ? '1' : '0';
echo "<br> hasil dari $a || $b adalah: ";
echo $hasilOr = $a || $b ? '1' : '0';
echo "<br> hasil dari !$a adalah: ";
echo $hasilNotA = !$a ? '1' : '0';
echo "<br> hasil dari !$b adalah: " ;
echo $hasilNotB = !$b ? '1' : '0';

echo "<br><br> hasil operator dari $a += $b = ";
echo $a += $b;
echo "<br> hasil operator dari $a -= $b = ";
echo $a -= $b;
echo "<br> hasil operator dari $a *= $b = ";
echo $a *= $b;
echo "<br> hasil operator dari $a /= $b = ";
echo $a /= $b;
echo "<br> hasil operator dari $a %= $b = ";
echo $a %= $b;

echo"<br><br> Hasil identik dari \$a === \$b adalah: ";
echo $hasilIdentik = $a === $b ? 'true' : 'false';
echo"<br>Hasil tidak identik dari \$a !== \$b adalah: ";
echo $hasilTidakIdentik = $a !== $b ? 'true' : 'false';
?>