<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "mahasiswa";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = "CREATE TABLE IF NOT EXISTS mahasiswa (
            nim char(10) PRIMARY KEY,
            nama char(40),
            tanggal_lahir date,
            jenis_kelamin varchar(1),
            ipk float
          )";

mysqli_query($koneksi, $query);
echo 'Tabel telah berhasil dibuat! <br>';
echo '<br><button onclick="location.href=\'inputdata.php\'">Input Data</button>';
?>
