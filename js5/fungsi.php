<?php
function perkenalan ($nama, $salam = "Assalamualaikum") {
    echo $salam.",";
    echo"Perkenalkan, nama saya " .$nama. "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
perkenalan("rati","haii");

echo "<hr>";

$saya = "rati";
$ucapanSalam = "Selamat Pagi!";

perkenalan($saya);
?>