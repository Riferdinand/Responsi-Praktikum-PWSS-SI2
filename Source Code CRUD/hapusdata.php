<?php
include 'koneksi.php';

$nim = $_GET['nim'];

$query = "DELETE FROM mahasiswa WHERE nim = '$nim'";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

echo '<br/> <button onclick="location.href=\'inputdata.php\'">Input Data Lagi</button>';
echo '<br/> <button onclick="location.href=\'viewdata.php\'">Lihat Data</button>';
mysqli_close($koneksi);
?>
