<?php

$host = "localhost";
$db = "testIlma";
$user = "root";
$password = "";


try{
    $con = new PDO ("mysql:host=$host; dbname=$db", $user, $password);

   
   $sql = " ALTER TABLE users ADD tel INT(12)";


    $con->exec($sql);

    echo("COLUMN ADDED");
    
    }catch(Exception $e){
        echo("COLUMN NOT ADDED ");
    }



?>  