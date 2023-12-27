<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$ipk = $_POST['ipk'];

$query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$tanggal_lahir', '$jenis_kelamin', '$ipk')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan. <br>";
    echo '<button onclick="location.href=\'viewdata.php\'">Lihat Data</button>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
