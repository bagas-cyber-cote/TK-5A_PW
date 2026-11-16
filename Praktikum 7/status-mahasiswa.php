<?php

require "koneksi.php";
if (isset($_POST['kirim'])) {
    $nim = trim($_POST['nim']);
    $stmt = $koneksi->prepare("SELECT nama, nim, prodi, status FROM mahasiswa WHERE nim = ?");
    $stmt->bind_param("s", $nim);
    $stmt->execute();
    $hasil = $stmt->get_result();
    if ($row = $hasil->fetch_assoc()) {
        echo "<p>Nama: " . htmlspecialchars($row['nama']) . "<br>";
        echo "NIM: " . htmlspecialchars($row['nim']) . "<br>";
        echo "Prodi: " . htmlspecialchars($row['prodi']) . "<br>";
        echo "Status: " . htmlspecialchars($row['status']) . "<br>";
    } else {
        echo "<p>Data dengan NIM tersebut tidak ditemukan.</p>";
    }
}
?>
<h2>Cari Mahasiswa</h2>
<form method="post">
    <label>NIM: <input type="text" name="nim"></label>
    <button type="submit" name="kirim">Cari</button>
</form>