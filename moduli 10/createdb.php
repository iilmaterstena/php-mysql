<?php
$host = "localhost";
$user = "root";
$db = "testIlma1";
$password = "";


try{
    $con = new PDO ("mysql:host=$host", $user, $password);

    $sql = "CREATE DATABASE  testIlma1";

    $con->exec($sql);

    echo("Database created");
    
    }catch(Exception $e){
        echo("Database not created ");
    }



?>