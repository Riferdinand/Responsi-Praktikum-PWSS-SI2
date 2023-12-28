# Deskripsi
Repository ini merupakan repository yang digunakan untuk menyimpan dokumentasi soal Responsi Praktikum Pemrograman Web Server Side Universitas Teknologi Digital Indonesia pada GitHub

## Ketentuan
- Ujian bersifat open book tapi tidak boleh menggunakan AI seperti ChatGPT, Blackbox.ai, Bard dsb.
- Pengumpulan responsi dalam bentuk file PDF
- Penamaan file adalah <b>{nim}_{nama}_RESPONSI-PWSS-SI2</b>
- Durasi 100 menit

## Soal Responsi
1. Menghitung luas segitiga dan luas persegi panjang dengan ketentuan sebagai berikut:
    <ol>
    <li type="a">Buat file bernama <b>formluas.php</b>, yang berisi :</li>
        <ol>
        <li type="I">Dua (2) buah textbox isian (panjang/Alas dan Lebar/Tinggi)</li>
        <li type="I">Pilihan Geometri (select) berisi : Segitiga dan Persegi Panjang</li>
        <li type="I">Tombol Hitung</li>
        </ol>
    <li type="a">Saat di-klik tombol hitung maka akan menjalankan file hitungluas.php yang menampilkan hasil hitungan sesuai angka yang diisikan dan Geometri yang sudah dipilih dengan tampilan sebagai berikut:</li>
        <ol>
            <li type="I">Luas Segitiga = [hasil hitungan] → jika pilih segitiga</li>
            atau
            <li type="I">Luas Persegi Panjang = [hasil hitungan] → jika pilih persegipanjang</li>
        </ol>
    </ol>

2. Buat aplikasi sederhana CRUD untuk data mahasiswa, langkah:
    * <p>Buatlah sebuah database dengan nama <b>mahasiswa</b></p>
    * <p>Buatlah file bernama <b>koneksi.php</b> untuk membuat sebuah tabel bernama <b>kelas</b> dengan field berikut:</p>
        - <b>nim</b> char(10) <br>
        - <b>nama</b> char(40) <br>
        - <b>tanggal_lahir</b> date <br>
        - <b>jenis_kelamin</b> varhar(1). Jika user Pria maka <b>P</b>, jika Wanita maka <b>W</b><br>
        - <b>ip</b> float <br>
    * <p>Buatlah file bernama <b>inputdata.php</b> yang digunakan untuk user dapat melakukan input data mahasiswa.</p>
    * <p>Buatlah file bernama <b>simpandata.php</b> yang digunakan untuk menyimpan data ke dalam database <b>mahasiswa</b>.</p>
    * <p>Buatlah file bernama <b>viewdata.php</b> yang digunakan untuk menampilkan data. Data yang ditampilkan boleh dalam bentuk tabel maupun tanpa tabel.</p>
    * <p>Buatlah file bernama <b>ubahdata.php</b> yang digunakan untuk mengubah data.</p>
    * <p>Buatlah file bernama <b>hapusdata.php</b> yang digunakan untuk menghapus data mahasiswa yang diinginkan user.</p>

## Ketentuan yang Diperlukan pada File PDF
- Tuliskan <b>Nim, Nama, dan Kelas</b>. Soal tidak perlu dituliskan
- Screen Capture sourcecode <b>formluas.php</b> beserta output pada web
- Screen Capture sourcecode <b>hitungluas.php</b>
- Screen Capture sourcecode <b>hasil.php</b> beserta output pada web
- Screen Capture sourcecode <b>koneksi.php</b> beserta struktur tabel pada <b style="color: black;">http://localhost/phpmyadmin</b>
- Screen Capture sourcecode <b>inputdata.php</b> beserta tampilan pada web
- Screen Capture sourcecode <b>simpandata.php</b> beserta tampilan pada web
- Screen Capture sourcecode <b>viewdata.php</b> beserta tampilan pada web
- Screen Capture sourcecode <b>ubahdata.php</b> beserta tampilan pada web dan hasilnya setelah mengubah data
- Screen Capture sourcecode <b>hapusdata.php</b> beserta tampilan pada web dan hasil setelah data dihapus
