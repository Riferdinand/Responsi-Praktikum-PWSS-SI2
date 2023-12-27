<?php
include 'koneksi.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $ipk = $_POST['ipk'];

    // Update query
    $query = "UPDATE mahasiswa 
              SET nama='$nama', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', ipk='$ipk' 
              WHERE nim='$nim'";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil diubah. <br>";
        echo '<button onclick="location.href=\'viewdata.php\'">Lihat Data</button>';
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    // If the form is not submitted, get the NIM from the query parameter
    $nim = $_GET['nim'];

    // Fetch existing data for the specified NIM
    $query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    // Display the form with existing data
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Data Mahasiswa</title>
    </head>
    <body>
        <h2>Ubah Data Mahasiswa</h2>
        <form action="ubahdata.php" method="post">
            NIM yang akan diubah: <input type="text" name="nim" value="<?php echo $row['nim']; ?>" readonly><br>
            Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
            Tanggal Lahir: <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required><br>
            Jenis Kelamin (P/W): <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" maxlength="1" required><br>
            IPK: <input type="text" name="ipk" value="<?php echo $row['ipk']; ?>" required><br>
            <input type="submit" value="Ubah">
        </form>
    </body>
    </html>
    <?php
}

mysqli_close($koneksi);
?>
