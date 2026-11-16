<?php
require 'koneksi.php';

if (isset($_POST['kirim'])) {
    $nama_barang = trim($_POST['nama_barang']);
    $harga = trim($_POST['harga']);
    $stok = trim($_POST['stok']);

    if ($nama_barang === "" || $harga === "" || $stok === "") {
        echo "<p style='color: red;'>Semua field harus diisi!</p>";
    } else {
        $stmt = $koneksi->prepare(
            "INSERT INTO barang (nama_barang, harga, stok) VALUES (?, ?, ?)"
        );
        $stmt->bind_param("sii", $nama_barang, $harga, $stok);

        if ($stmt->execute()) {
            $nama_aman = htmlspecialchars($nama_barang);
            $harga_aman = htmlspecialchars($harga);
            $stok_aman = htmlspecialchars($stok);

            echo "<p style='color: green;'>Data barang berhasil disimpan!</p>";
            echo "<p><b>$nama_aman — Rp $harga_aman — stok $stok_aman</b></p>";
        } else {
            echo "<p style='color: red;'>Terjadi kesalahan: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }
}
?>

<h2>Form Tambah Barang</h2>
<form method="post">
    <label>Nama Barang: <input type="text" name="nama_barang"></label><br><br>
    <label>Harga: <input type="number" name="harga"></label><br><br>
    <label>Stok: <input type="number" name="stok"></label><br><br>
    <button type="submit" name="kirim">Simpan</button>
</form>