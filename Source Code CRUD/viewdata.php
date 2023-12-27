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
            <th>IPK</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['nim']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['tanggal_lahir']}</td>
            <td>{$row['jenis_kelamin']}</td>
            <td>{$row['ipk']}</td>
            <td><a href='ubahdata.php?nim={$row['nim']}'>Ubah</a></td>
            <td><a href='hapusdata.php?nim={$row['nim']}'>Hapus</a></td>
        </tr>";
}

echo "</table>";

echo '<br><button onclick="location.href=\'inputdata.php\'">Input Data Lagi</button>';

mysqli_close($koneksi);
?>
