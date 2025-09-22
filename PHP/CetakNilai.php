<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
$totalNilai = 0;
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}
$rataRata = $totalNilai / count($daftarNilai);

$siswaDiAtasRata = [];
foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRata) {
        $siswaDiAtasRata[] = "{$nilai[0]} ({$nilai[1]})";
    }
}
echo "Rata-rata kelas: " . $rataRata . "<br>";
echo "Daftar siswa dengan nilai di atas rata-rata: " . implode(', ', $siswaDiAtasRata);
?>
