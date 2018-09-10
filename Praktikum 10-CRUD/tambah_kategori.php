<html>
    <head>
        <title>.: From : Tambah Kategori</title>
    </head>

    <body>

        <form method="post" action="">
            <label>ID. Kategori</label><br>
            <input type="text" size=10 name="id_kategori" /><br>

            <label>Kategori</label><br>
            <input type="text" size=30 name="kategori" /><br>

            <input type="submit" value="Simpan" name="btnSimpan"><br>
            <input type="reset" name="btnBatal" value="Batal" /><br>
        </form>

        <?php
            require "pdo/Kategori.php";
            $kategori = new Kategori(); //membuat objek kategori, untuk bisa menggunakan fungsi
            if(isset($_POST['btnSimpan'])){

                $kategori_post = $_POST['kategori'];
                $simpan = $kategori->create($kategori_post);
                header('location: view_kategori.php');
            }
        ?>

    </body>
</html>