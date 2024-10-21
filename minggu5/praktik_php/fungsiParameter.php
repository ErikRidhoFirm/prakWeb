<?php
function Perkenalan($nama, $salam){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya " . $nama ."<br/>";
    echo "Senang berkenalan dengan anda<br/";
}
Perkenalan("Hamdan", "Hallo");
echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

Perkenalan($saya, $ucapanSalam);
?>