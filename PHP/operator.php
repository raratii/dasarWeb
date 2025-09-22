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

echo "Sama: $a == $b = " . ($hasilSama ? "true" : "false") . "<br>";
echo "Tidak sama: $a != $b = " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Lebih kecil: $a < $b = " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Lebih besar: $a > $b = " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Lebih kecil atau sama dengan: $a <= $b = " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Lebih besar atau sama dengan: $a >= $b = " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "AND: $a && $b = " . ($hasilAnd ? "true" : "false") . "<br>";
echo "OR:  $a || $b = " . ($hasilOr ? "true" : "false") . "<br>";
echo "NOT A: !$a = " . ($hasilNotA ? "true" : "false") . "<br>";
echo "NOT B: !$b = " . ($hasilNotB ? "true" : "false") . "<br>";
echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$a = 10; $b = 5;
$a += $b;
echo "a += b -> $a <br>";

$a = 10; $b = 5;
$a -= $b;
echo "a -= b -> $a <br>";

$a = 10; $b = 5;
$a *= $b;
echo "a *= b -> $a <br>";

$a = 10; $b = 5;
$a /= $b;
echo "a /= b -> $a <br>";

$a = 10; $b = 5;
$a %= $b;
echo "a %= b -> $a <br>";
echo"<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Identik (===): $a === $b = " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Tidak Identik (!==): $a !== $b = " . ($hasilTidakIdentik ? "true" : "false") . "<br>";
echo "<br>";
?>