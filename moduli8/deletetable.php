<?php

$host = "localhost";
$db = "testIlma";
$user = "root";
$password = "";


try{
    $con = new PDO ("mysql:host=$host; dbname=$db", $user, $password);

   
   $sql = "DROP TABLE products";


    $con->exec($sql);

    echo("COLUMN Droped");
    
    }catch(Exception $e){
        echo("COLUMN NOT Droped ");
    }



?>  