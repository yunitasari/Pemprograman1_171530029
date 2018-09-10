<html>
    <head>
        <title>Data Kategori</title>
    </head>

    <body>

        <h3>Data Kategori</h3>
        <a href="tambah_kategori.php">[ + ]</a>
        <br>
        <table border=1>
            <tr>
                <th>No</th>
                <th>ID. Kategori</th>
                <th>Kategori Post</th>
                <th>-{ Aksi }-</th>
            </tr>
            <?php
                require 'pdo/Kategori.php';
                $kat = new Kategori(); // Membuat objek Kategori
                $tampil = $kat->read();
                $no = 1 ;
                while($data = $tampil->fetch(PDO::FETCH_OBJ)){
            ?>
            <tr>
                <td> <?= $no++ ?> </td>
                <td> <?= $data->id_kategori ?> </td>
                <td> <?= $data->kategori_post ?></td>
                <td>
                    <a href="ubah_kategori.php?id= <?= $data->id_kategori ?>">Ubah</a> &nbsp;
                    <a href="view_kategori.php?delete= <?= $data->id_kategori ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>

            <?php 
                if(isset($_GET['delete'])){
                    $id_kategori =$_GET['delete'];
                    $hapus = $kat->delete();
                    header('location: view_kategori.php');
                }
            ?>
        </table>

    </body>
</html>