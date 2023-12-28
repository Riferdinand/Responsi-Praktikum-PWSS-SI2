<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Menghitung Luas</title>
</head>
<body>
    <form action="hitungluas.php" method="post">
        <label for="panjang">Panjang/Alas</label>
        <input type="text" name="panjang" id="panjang" required>
        <br>
        <label for="lebar">Lebar/Tinggi</label>
        <input type="text" name="lebar" id="lebar" required>
        <br>
        <label for="geometri">Geometri</label>
        <select name="geometri" id="geometri">
            <option value="segitiga">Segitiga</option>
            <option value="persegipanjang">Persegi Panjang</option>
        </select>
        <br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>