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
        NIM yang akan diubah: <input type="text" name="nim" required><br>
        Nama: <input type="text" name="nama" required><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br>
        Jenis Kelamin (P/W): <input type="text" name="jenis_kelamin" maxlength="1" required><br>
        IP: <input type="text" name="ip" required><br>
        <input type="submit" value="Ubah">
    </form>
</body>
</html>
