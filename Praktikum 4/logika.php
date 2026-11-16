<?php
$nilai_baik = true;
$hadir_baik = false;

echo "AND (dan): ";
var_dump($nilai_baik && $hadir_baik);
echo "<br>OR (atau): ";
var_dump($nilai_baik || $hadir_baik);
echo "<br>NOT (bukan) nilai_baik: ";
var_dump(!$nilai_baik);
?>