<?php
include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

echo "<h2>Data Mahasiswa</h2>";
echo "<table border='1'>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>IP</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['nim']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['tanggal_lahir']}</td>
            <td>{$row['jenis_kelamin']}</td>
            <td>{$row['ip']}</td>
        </tr>";
}

echo "</table>";

mysqli_close($koneksi);
?>
