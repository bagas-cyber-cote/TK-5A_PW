<?php
require 'koneksi.php';
if (isset($_POST['kirim'])) {
    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nim']);
    $prodi = trim($_POST['prodi']);
    $email = trim($_POST['email']);
    if ($nama === "" || $nim === "" || $prodi === "" || $email === "") {
        echo "<p style='color: red;'>Semua field harus diisi!</p>";
    } else {
        $stmt = $koneksi->prepare (
            "INSERT INTO mahasiswa (nama, nim, prodi, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $nim, $prodi, $email);
        if ($stmt->execute()) {
            echo "<p style='color: green;'>Pendaftaran berhasil!</p>";
        } else {
            echo "<p style='color: red;'>Terjadi kesalahan: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }
}
?>
<h2>Form pendaftaran mahasiswa</h2>
<form method="post">
    <label>Nama: <input type="text" name="nama"></label><br>
    <label>NIM: <input type="text" name="nim"></label><br>
    <label>Prodi: <input type="text" name="prodi"></label><br>
    <label>Email: <input type="email" name="email"></label><br>
    <button type="submit" name="kirim">Simpan</button>
</form>