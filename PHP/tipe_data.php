<?php
$a = 10;
$b = 5;
$c =$a +5;
$d =$b + (10*5);
$e =$d - $c;

echo "Variable a: {$a} <br>";
echo "Variable a: {$b} <br>";
echo "Variable a: {$c} <br>";
echo "Variable a: {$d} <br>";
echo "Variable a: {$e} <br>";

var_dump($e);
$nilaiMatematika = 5.1;
$nilaiIPA= 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) /3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);
?>
