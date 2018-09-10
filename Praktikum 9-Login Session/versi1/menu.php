<?php
    session_start();
    if(empty($_SESSION['user_id'])){
        header('location: login.php');
    }

?>
<html>
    <head>
        <title>Menu Utama</title>
    </head>

    <body>
        <h3>Selamat datang ... ! <?php echo $_SESSION['user_id'] ?> </h3>

        <br><br>
        <a href="user.php">User</a><br>
        <a href="kategori-informasi.php">kategori Informasi</a>

        <br><br>
        <a href="logout.php">Logout</a>

        
    </body>
</html>