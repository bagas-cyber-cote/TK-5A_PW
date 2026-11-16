<?php

echo "<h1 style='color: green; font-weight: bold; font-style: italic;'>Perhitungan Sederhana</h1><br>";

if (isset($_POST['hitung'])) {
    $tugas = $_POST['tugas'];
    $uas = $_POST['uas'];
    $uts = $_POST['uts'];
    $partisipasi = $_POST['partisipasi'];
    $kehadiran = $_POST['kehadiran'];
    $nilai_akhir = ($tugas * 0.20) + ($uas * 0.25) + ($uts * 0.25) + ($partisipsi * 0.15) + ($kehadiran * 0.15);
}

if ($nilai_akhir >= 85) {
    $predikat = "<span='color: green; font-weight; bold;'>A</span><br>";
} elseif ($nilai_akhir >= 75) {
    $predikat = "<span='color: green; font-weight; bold;'>B</span><br>";
} elseif ($nilai_akhir >= 65) {
    $predikat = "<span='color: yellow; font-weight: bold;'>C</span><br>";
} elseif ($nilai_akhir >= 55) {
    $predikat = "<span='color: orange; font-weight: bold;'>D</span><br>";
}