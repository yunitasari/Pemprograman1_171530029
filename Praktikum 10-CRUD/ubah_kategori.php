<html>
    <head>
        <title>.: From : Ubah Kategori</title>
    </head>

    <body>
        <?php
            require "pdo/Kategori.php";
            $kategori = new Kategori();
            if(isset($_GET['id'])){
                $id_kategori = $_GET['id']
                $get = $kategori->read_id($id_kategori);
                $data = $get->fetch(PDO::FETCH_OBJ);
            }
        ?>

        <from method="POST">
            <label>ID. Kategori</label><br>
            <input type="text" size=10 name="id_kategori" value="<?= $data->id_kategori ?>" /><br>

            <label>Kategori</label><br>
            <input type="text" size=30 name="kategori" value="<?= $data->id_post ?>" /><br>

            <input type="submit" name="btnUbah" value="Ubah" /><br>
            <input type="reset" name="btnBatal" value="Batal" /><br>
        </from>

        <?php
            
            if(isset($_POST['btnUbah'])){
                $id_kategori = $_POST['id_kategori'];
                $kategori_post = $_POST['kategori'];
                $simpan = $kategori->update($id_kategori, $kategori_post);
                header('location: view_kategori.php');
            }
        ?>

    </body>
</html>