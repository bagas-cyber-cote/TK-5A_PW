<?php
echo "<h2>FOR: angka 1 sampai 5 beserta kuadratnya</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "Angka: $i, Kuadrat: " . ($i * $i) . "<br>";
}

echo "<h2>WHILE: hitung mundur dari 5</h2>";
$j = 5;
while ($j > 0) {
    echo "Hitung mundur: $j<br>";
    $j--;
}
echo "<h2>DO-WHILE: berjalan minimal satu kali</h2>";
$k = 10;
do {
    echo "Nilai k = $k <br>";
    $k++;
} while ($k < 5);
?>
