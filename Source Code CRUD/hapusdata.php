<?php
include 'koneksi.php';

$nim = $_GET['nim'];

$query = "DELETE FROM mahasiswa WHERE nim = '$nim'";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
