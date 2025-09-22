<?php
echo "<h3>Perhitungan Skor Pemain:</h3>";

$poin = 550;
echo "Total skor pemain adalah: " . $poin . "<br>";
$hadiah = ($poin > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah . "<br>";
?>
