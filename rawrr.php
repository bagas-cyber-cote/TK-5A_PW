<?php
$nama = "Bagas Febrian";
$umur = 20;
$special = ["mancing","baca","gitar"];


echo "Nama saya adalah $nama", "dan saya berumur $umur";
echo "<br>";
echo "Memiliki special skill: " . implode(", ", $special);
?>