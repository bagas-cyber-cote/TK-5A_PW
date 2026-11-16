<?php

define("PAJAK", 0.11);

$harga = 25000;
$jumlah = 2;

$subtotal = $harga * $jumlah;
$nilai_pajak = $subtotal * PAJAK;
$total = $subtotal = $nilai_pajak;

echo "<h2>Hitung Sederhana</h2>";
echo "Harga: Rp " . $harga . "<br>";
echo "Jumlah: " . $jumlah . "<br>";
echo "Subtotal: Rp " . $subtotal . "<br>";
echo "Pajak (11%): Rp " . $nilai_pajak . "<br>";
echo "Total bayar: Rp " . $total . "<br>";

?>