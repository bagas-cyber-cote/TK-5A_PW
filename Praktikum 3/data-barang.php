<?php

// Mendefinisikan konstanta pajak 11%
define("PAJAK", 0.11);

// Data barang 1: Buku tulis
$barang1 = "Buku tulis";
$harga1 = 25000;
$jumlah1 = 2;

// Data barang 2: Pulpen
$barang2 = "Pulpen";
$harga2 = 5000;
$jumlah2 = 5;

// Data barang 3: Penghapus
$barang3 = "Penghapus";
$harga3 = 3000;
$jumlah3 = 4;

// Perhitungan subtotal tiap barang
$subtotal1 = $harga1 * $jumlah1;
$subtotal2 = $harga2 * $jumlah2;
$subtotal3 = $harga3 * $jumlah3;

// Perhitungan total seluruhnya, nilai pajak, dan total akhir
$total_seluruhnya = $subtotal1 + $subtotal2 + $subtotal3;
$nilai_pajak = $total_seluruhnya * PAJAK;
$total_akhir = $total_seluruhnya + $nilai_pajak;

// Menampilkan daftar barang dan rincian perhitungan
echo "<h2>Daftar Data Barang</h2>";

echo "<b>1. " . $barang1 . "</b><br>";
echo "Harga: Rp " . $harga1 . "<br>";
echo "Jumlah: " . $jumlah1 . "<br>";
echo "Subtotal: Rp " . $subtotal1 . "<br><br>";

echo "<b>2. " . $barang2 . "</b><br>";
echo "Harga: Rp " . $harga2 . "<br>";
echo "Jumlah: " . $jumlah2 . "<br>";
echo "Subtotal: Rp " . $subtotal2 . "<br><br>";

echo "<b>3. " . $barang3 . "</b><br>";
echo "Harga: Rp " . $harga3 . "<br>";
echo "Jumlah: " . $jumlah3 . "<br>";
echo "Subtotal: Rp " . $subtotal3 . "<br><br>";

echo "<hr>";
echo "<h3>Ringkasan Pembayaran</h3>";
echo "Total Seluruhnya: Rp " . $total_seluruhnya . "<br>";
echo "Pajak (11%): Rp " . $nilai_pajak . "<br>";
echo "<b>Total Akhir: Rp " . $total_akhir . "</b><br>";

?>