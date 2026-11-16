<?php
// Praktikum: Percabangan gabungan menggunakan operator logika

$hasil = "";
$alasan = "";

if (isset($_POST['kirim'])) {
    $nilai = (int) $_POST['nilai'];
    $kehadiran = (int) $_POST['kehadiran'];

    // Periksa apakah nilai DAN kehadiran memenuhi ambang.
    $nilaiMemenuhi = ($nilai >= 70);
    $kehadiranMemenuhi = ($kehadiran >= 75);

    if ($nilaiMemenuhi && $kehadiranMemenuhi) {
        $hasil = "Lulus";
        $alasan = "Nilai dan kehadiran keduanya memenuhi ambang.";
    } elseif ($nilaiMemenuhi || $kehadiranMemenuhi) {
        $hasil = "Remedial";

        if ($nilaiMemenuhi) {
            $alasan = "Kehadiran belum memenuhi (minimal 75).";
        } else {
            $alasan = "Nilai belum memenuhi (minimal 70).";
        }
    } else {
        $hasil = "Tidak Lulus";
        $alasan = "Nilai dan kehadiran belum memenuhi ambang.";
    }
}
?>

<h2>Cek Kelulusan</h2>

<form method="post">
    <label>
        Nilai (0-100):
        <input type="number" name="nilai" min="0" max="100" required>
    </label>
    <br><br>

    <label>
        Kehadiran (0-100):
        <input type="number" name="kehadiran" min="0" max="100" required>
    </label>
    <br><br>

    <button type="submit" name="kirim">Periksa Kelulusan</button>
</form>

<?php if (isset($_POST['kirim'])): ?>
    <p>
        Nilai: <b><?= htmlspecialchars((string) $nilai) ?></b><br>
        Kehadiran: <b><?= htmlspecialchars((string) $kehadiran) ?></b><br>
        Hasil: <b><?= htmlspecialchars($hasil) ?></b><br>
        Alasan: <?= htmlspecialchars($alasan) ?>
    </p>
<?php endif; ?>
