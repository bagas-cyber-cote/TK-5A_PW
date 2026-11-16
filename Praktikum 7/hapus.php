<?php
// Praktikum 7 - Hapus dengan konfirmasi
require "koneksi.php";

// Cek apakah parameter id ada di URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<p style='color: red;'>ID mahasiswa tidak valid atau tidak ditemukan.</p>";
    echo "<p><a href='daftar-mahasiswa.php'>Kembali ke daftar</a></p>";
    exit;
}

$id = (int) $_GET['id'];
if (isset($_POST['konfirmasi'])) {
    $stmt = $koneksi->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    echo "<p>Data berhasil dihapus.</p>";
    echo "<p><a href='daftar-mahasiswa.php'>Kembali ke daftar</a></p>";
} else {
    $stmt = $koneksi->prepare("SELECT nama FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        echo "<p>Anda yakin menghapus data atas nama <b>"
            . htmlspecialchars($row['nama']) . "</b>?</p>";
        echo "<form method='post'><button type='submit' name='konfirmasi'>Ya, Hapus</button></form>";
        echo "<p><a href='daftar-mahasiswa.php'>Batal</a></p>";
    } else {
        echo "<p>Data tidak ditemukan di database.</p>";
        echo "<p><a href='daftar-mahasiswa.php'>Kembali ke daftar</a></p>";
    }
}
?>