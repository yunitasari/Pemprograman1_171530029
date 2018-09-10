<?php
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBNAME','dbcompany_171530029');
    try{
        //create PDO connection
        $db = new PDO("mysql:host=".DBHOST.";port=80;dbname=".DBNAME, DBUSER, DBPASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }catch(PDOException $e) {
        //show error
        echo'<p class="bg-danger">'.$e->getMessage().'</p>';
        exit;
    }
?>