<?php
require "koneksi.php";

$pesan = "";
$error = "";
$nama = "";
$nim = "";
$prodi = "";
$email = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $status = trim($_POST["status"] ?? "");

    if ($nama === "" || $nim === "" || $prodi === "" || $email === "" || $status === "") {
        $error = "Semua kolom wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid.";
    } else {
        $stmt = $koneksi->prepare(
            "INSERT INTO mahasiswa (nama, nim, prodi, email, status) VALUES (?, ?, ?, ?, ?)"
        );
        if (!$stmt) {
            $error = "Gagal menyiapkan penyimpanan data: " . htmlspecialchars($koneksi->error);
        } else {
            $stmt->bind_param("sssss", $nama, $nim, $prodi, $email, $status);
            if ($stmt->execute()) {
                $pesan = "Data mahasiswa berhasil ditambahkan.";
                $nama = "";
                $nim = "";
                $prodi = "";
                $email = "";
                $status = "";
            } else {
                $error = "Gagal menambahkan data mahasiswa: " . htmlspecialchars($stmt->error);
            }
            $stmt->close();
        }
    }
}
?>
<h2>Tambah Mahasiswa</h2>

<?php if ($pesan !== "") { ?>
    <p style="color: green;"><?php echo htmlspecialchars($pesan); ?></p>
<?php } ?>
<?php if ($error !== "") { ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php } ?>

<form method="post">
    <p>
        <label for="nama">Nama</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>
    </p>
    <p>
        <label for="nim">NIM</label><br>
        <input type="text" id="nim" name="nim" value="<?php echo htmlspecialchars($nim); ?>" required>
    </p>
    <p>
        <label for="prodi">Program Studi</label><br>
        <input type="text" id="prodi" name="prodi" value="<?php echo htmlspecialchars($prodi); ?>" required>
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
    </p>
    <p>
        <label for="status">Status</label><br>
        <input type="text" id="status" name="status" value="<?php echo htmlspecialchars($status); ?>" required>
    </p>
    <button type="submit">Simpan</button>
</form>

<p><a href="daftar-mahasiswa.php">Kembali ke daftar mahasiswa</a></p>
