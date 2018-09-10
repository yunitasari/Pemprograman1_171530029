<html>
    <head>
        <title>.: Login App</title>
    </head>

    <body>
        <center>
        <fieldset>
        <legend> Login : Masukkan ID. User dan Password Anda </legend>
            <form method="post">
                <input type="text" name="txtiduser" placeholder="ID. user"/><br>
                <input type="password" name="txtpassword" placeholder="Password"/><br><br>
                <input type="submit" name="btnLogin" value="Login"/>
                <input type="reset" name="btnBatal" value="Batal"/>
            </form>
        </fieldset>
        </center>
        <?php
            include "koneksidb.php";
            if(isset($_POST['btnLogin'])){
                $id_user = $_POST['txtiduser'];
                $password = $_POST['txtpassword'];

                if($id_user=="" || $password==""){
                    echo "ID. User dan Password harus diisi...";
                }else{
                    try{
                        $sql = "selext * from tbuser where 
                        id_user = :id_user and pass = :pass";
                        $stmt = $db->prepare($sql);
                        $stmt->bindParam(':id_user', $id_user);
                        $stmt->bindParam(':pass',$pass);
                        $stmt->execute();
                        
                        $count = $stmt->rowCount();
                        if($count == 1){
                            session_start();
                            $data = $stmt->fetch(PDO::FETCH_OBJ);
                            $_SESSION['userid'] = $data->id_user;
                            $_SESSION['username'] = $data->nama_user;
                            $_SESSION['level'] = $data->lev_user;

                            header("location: index.php");
                            return;
                        }else{
                            echo "ID. User dan Password tidak ditemukan";
                        }

                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                }

            }
        ?>

    </body>

</html>