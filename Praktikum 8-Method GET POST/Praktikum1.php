<html>
    <head><title>Pengolahan From 1</title></head>
    <body>
        <FROM ACTION="" METHOD="POST" NAME="input">
            Nama Anda : <input type="text" name="nama"><br>
            <input type="submit" name="Input" value="Input">
        </FROM>
    </body>
</html>
<?php
if (isset($_POST['Input'])) {  //jika tombol submit dengan atribut name input dklik atau ditekan enter
    $nama = $_POST['nama'];     //deklarasi variabel $nama dan diberi nilai atau diinisialisasi variabel post
    echo "Nama Anda : <b>$nama</b>";   //menampilkan nilai variabel $nama
} //penutup dari printah if

?> 
