<?php
$koneksi = new mysqli("localhost", "root", "", "db_kuliah");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
