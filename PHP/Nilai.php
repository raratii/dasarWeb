<?php
echo "<h3>Perhitungan Nilai Setelah Abaikan 2 Tertinggi & 2 Terendah:</h3>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

for ($i = 0; $i < count($nilaiSiswa) - 1; $i++) {
    for ($j = $i + 1; $j < count($nilaiSiswa); $j++) {
        if ($nilaiSiswa[$i] > $nilaiSiswa[$j]) {
            $temp = $nilaiSiswa[$i];
            $nilaiSiswa[$i] = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $temp;
        }
    }
}
$totalNilai = 0;
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
    echo "Nilai: " . $nilaiSiswa[$i] . "<br>";
}

echo "<br>Total nilai: " . $totalNilai . "<br>";
$rataRata = $totalNilai / (count($nilaiSiswa) - 4);
echo "Rata-rata: " . number_format($rataRata, 2);
?>
