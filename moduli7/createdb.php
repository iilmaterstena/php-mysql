<?php
$host = "localhost";
$user = "root";
$password = "";


try{
    $con = new PDO ("mysql:host=$host", $user, $password);

    $sql = "CREATE DATABASE  testIlma";

    $con->exec($sql);

    echo("Database created");
    
    }catch(Exception $e){
        echo("Database not created ");
    }



?>