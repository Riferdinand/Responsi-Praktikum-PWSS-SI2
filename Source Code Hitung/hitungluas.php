<?php

// Mengambil data dari form
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$geometri = $_POST['geometri'];

// Menghitung luas
if ($geometri == "segitiga") {
    $luas = ($panjang * $lebar) / 2;
} else {
    $luas = $panjang * $lebar;
}

// Menampilkan hasil hitungan
echo "<h1>Hasil Hitungan</h1>";
echo "<p>Luas $geometri = $luas</p>";

?>