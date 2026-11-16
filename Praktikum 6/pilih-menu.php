<?php

if (isset($_POST['kirim'])) {
    $pilihan= (int) $_POST['pilihan'];
    switch ($pilihan) {
        case 1: $nama_pilihan = "Paket Regular"; break;
        case 2: $nama_pilihan = "Paket Premium"; break;
        case 3: $nama_pilihan = "Paket Pelajar"; break;
        default: $nama_pilihan = "Pilihan tidak tersedia";
    }
    echo "<p>Pilihan Anda: <b>$nama_pilihan</b></p>";
}
?>
<h2 style="display: block; color: aqua; font-weight: bold; font-style: italic;">Pilih Paket</h2>
<form method="post">
    <label>Pilihan (1-3): <input type="number" name="pilihan" min="1" max="5"></label>
    <button type="subbmit" name="kirim">kirim</button>
</form>