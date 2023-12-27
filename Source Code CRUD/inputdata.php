<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form action="simpandata.php" method="post">
        NIM: <input type="text" name="nim" required><br>
        Nama: <input type="text" name="nama" required><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br>
        Jenis Kelamin (P/W): <input type="text" name="jenis_kelamin" maxlength="1" required><br>
        IPK: <input type="text" name="ipk" required><br><br>
        <input type="submit" value="Simpan">
        <button onclick="location.href='viewdata.php'">Lihat Data</button>
    </form>
</body>
</html>
