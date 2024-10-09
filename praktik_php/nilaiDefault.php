<?php
function Perkenalan($nama, $salam = "Assalamualaikum"){
echo $salam. ", ";
echo "Perkenalkan, nama saya " . $nama . "<br/>";
echo "Senang berkenalan dengan Anda<br/>";
}
Perkenalan("Hamdan", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

Perkenalan($saya);
?>