<?php
if (isset($_POST['kirim'])) {
    $nilai = (int) $_POST['nilai'];
    if ($nilai >= 85) {
        $predikat = "A";
    } elseif ($nilai >= 70) {
        $predikat = "B";
    } elseif ($nilai >= 55) {
        $predikat = "C";
    } elseif ($nilai >= 40) {
        $predikat = "D";
    } else {
        $predikat = "E";
    }
    echo "<p>Nilai: $nilai<br>Predikat: <b>$predikat</b></p>";
}
?>
<h2>Predikat Nilai</h2>
<form method="post">
    <label>Nilai (0-100): <input type="number" name="nilai" min="0" max="100"></label>
    <button type="submit" name="kirim">Lihat Predikat</button>
</form>