<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Penjumlahan: $a + $b = " . $hasilTambah . "<br>";
echo "Pengurangan: $a - $b = " . $hasilKurang . "<br>";
echo "Perkalian: $a * $b = " . $hasilKali . "<br>";
echo "Pembagian: $a / $b = " . $hasilBagi . "<br>";
echo "Sisa Bagi: $a % $b = " . $sisaBagi . "<br>";
echo "Pangkat: $a ** $b = " . $pangkat . "<br>";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
?>