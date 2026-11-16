<?php
if(isset($_POST['kata'])) {
    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nama']);
    if ($nama === "" || $nim === "") {
        echo "<p style='color: green;'>Nama dan NIM tidak boleh kosong.</p>";
    } else {
        $nama_aman = htmlspecialchars($nama);
        $nim_aman = htmlspecialchars($nim);
        echo "<p>Nama: <b>$nama_aman</b><br>NIM: <br>$nim_aman</b></p>";
    }
}
?>
<h2>Biodata (POST)</h2>
<form method="post">
    <label>Nama: <input type="text" name="nama"></label><br><br>
    <label>NIM: <input type="text" name="nim"></label><br><br>
    <button type="submit" name="kirim">Kirim</button>
</form>