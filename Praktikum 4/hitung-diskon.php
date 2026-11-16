<?php
// Praktikum 4 - Hitung Diskon dan Uji Logika
// Nama : Bagas Febrian
// NIM  : 240604005

// Data uji yang ditentukan
$harga_awal = 250000;
$persen_diskon = 20; // dalam persen (20%)

// Perhitungan besar potongan dan harga akhir
$potongan = $harga_awal * ($persen_diskon / 100);
$harga_akhir = $harga_awal - $potongan;

// Uji logika apakah harga akhir di atas Rp 100.000
$di_atas_100rb = ($harga_akhir > 100000);

// Menampilkan hasil perhitungan
echo "<h2>Perhitungan Diskon</h2>";
echo "Harga Awal: Rp " . $harga_awal . "<br>";
echo "Persen Diskon: " . $persen_diskon . "%<br>";
echo "Potongan: Rp " . $potongan . "<br>";
echo "Harga Akhir: Rp " . $harga_akhir . "<br><br>";

// Menampilkan hasil uji logika ("benar" atau "salah" tanpa percabangan)
echo "Uji logika (harga akhir di atas Rp 100000): " . ($di_atas_100rb ? "benar" : "salah") . "<br>";
echo "Detail tipe data logika: ";
var_dump($di_atas_100rb);
?>