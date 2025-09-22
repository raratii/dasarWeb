<?php
echo "<h3>Perhitungan Harga Setelah Diskon:</h3>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}
$hargaAkhir = $hargaProduk - $diskon;
echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>";
?>
