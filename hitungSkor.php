<?php
$poin = 523;

if ($poin > 500) {
    $hasil = $poin;
    echo "total skor pemain adalah: $poin";
    echo "<br>";
    echo "apakah mendapatkan hadiah? ". ($poin > 500 ? 'ya' : 'tidak');
}
?>