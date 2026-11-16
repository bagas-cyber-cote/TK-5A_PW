<?php
require "koneksi.php";
$hasil = $koneksi->query("SELECT id, nama, nim, prodi, email, status FROM mahasiswa ORDER BY id");
$jumlah = $hasil->num_rows;
?>
<h2>Daftar Mahasiswa</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <tr><th>No</th><th>Nama</th><th>NIM</th><th>Prodi</th><th>Email</th><th>Status</th><th>Aksi</th></tr>
    <?php $no = 1; while ($row = $hasil->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo htmlspecialchars($row['nama']); ?></td>
        <td><?php echo htmlspecialchars($row['nim']); ?></td>
        <td><?php echo htmlspecialchars($row['prodi']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['status']); ?></td>
        <td>
            <a href="ubah-status.php?id=<?php echo $row['id']; ?>">Ubah Status</a> |
            <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
<p>Total Mahasiswa: <?php echo $jumlah; ?>Mahasiswa</p>
