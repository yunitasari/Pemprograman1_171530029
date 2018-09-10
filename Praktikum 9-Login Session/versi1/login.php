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
            if(isset($_POST['btnLogin'])){
                $id_user = $_POST['txtiduser'];
                $password = $_POST['txtpassword'];

                if($id_user=="" || $password==""){
                    echo "ID. User dan Password harus diisi...";
                }else{
                    session_start();

                    $_SESSION['user_id'] = $id_user;
                    header('location: menu.php');
                }

            }
        ?>

    </body>

</html>