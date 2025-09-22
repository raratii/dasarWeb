<?php
echo "<h3>Perhitungan Skor Pemain:</h3>";

$poin = 550; // contoh jumlah poin pemain
echo "Total skor pemain adalah: " . $poin . "<br>";

// pakai ternary untuk menentukan apakah dapat hadiah
$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah . "<br>";
?>
