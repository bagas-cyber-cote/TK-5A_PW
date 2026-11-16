<?php
require 'koneksi.php';

$pesan = "";
if (isset($_POST['update'])) {
    $nim = trim($_POST['nim']);
    $status_baru = trim($_POST['status_baru']);

    if ($nim === "" || $status_baru === "") {
        $pesan = "<p style='color: red;'>NIM dan Status baru harus diisi!</p>";
    } else {
        $stmt = $koneksi->prepare("UPDATE mahasiswa SET status = ? WHERE nim = ?");
        $stmt->bind_param("ss", $status_baru, $nim);
        
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $pesan = "<p style='color: green;'>Status mahasiswa dengan NIM $nim berhasil diubah menjadi '$status_baru'!</p>";
            } else {
                $pesan = "<p style='color: orange;'>Gagal: NIM '$nim' tidak ditemukan di database, atau status baru sama persis dengan yang sekarang.</p>";
            }
        } else {
            $pesan = "<p style='color: red;'>Terjadi kesalahan SQL: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }
}
?>

<h2>Form Ubah Status Mahasiswa</h2>
<?php echo $pesan; ?>

<form method="post">
    <label>NIM Mahasiswa: <input type="text" name="nim" required></label><br><br>
    
    <label>Status Baru: 
        <select name="status_baru" required>
            <option value="">-- Pilih Status --</option>
            <option value="Aktif">Aktif</option>
            <option value="Cuti">Cuti</option>
            <option value="Lulus">Lulus</option>
        </select>
    </label><br><br>
    
    <button type="submit" name="update">Ubah Status</button>
</form>

<br>
<a href="status-mahasiswa.php">Cek Status Mahasiswa</a>