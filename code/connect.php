<?php

    $dsn = 'mysql:host=localhost;dbname=cheating';
    $username="root";
    $pass="";

    try
    {
        $con = new PDO($dsn ,$username,$pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 

    }
    catch(PDOException $e)
    {
        echo"there is an error".$e->getMessage();
    }



?>