<?php
if (isset($_GET['kata'])) {
    $kata = htmlspecialchars($_GET['kata']);
    echo "<p>Anda mencari: <b>$kata</br></p>";
}
?>
<h2>Pencarian (GET)</h2>
<form method="get">
    <label>Kata kunci: <input type="text" nama="kata"></label>
    <button type="submit">Cari</button>
</form>
<p>Coba juga link ini: <a href="cari-get.php?kata=php">Cari Kata php</a></p>