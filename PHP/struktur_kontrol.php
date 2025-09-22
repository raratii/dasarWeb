<?php
$nilaiNumerik = 92;
echo "<h3>Penilaian Berdasarkan Nilai Numerik:</h3>";
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<h3>Perhitungan Perulangan:</h3>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan " . $hari . " hari untuk mencapai jarak 500 kilometer.";
echo "<br>";

echo "<h3>Perhitungan Panen Buah:</h3>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: " . $jumlahBuah;
echo "<br>";

echo "<h3>Perhitungan Skor Ujian:</h3>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: " . $totalSkor;
echo "<br>";

echo "<h3>Penilaian Kelulusan Siswa:</h3>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: " . $nilai . " (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: " . $nilai . " (Lulus) <br>";
}
?>