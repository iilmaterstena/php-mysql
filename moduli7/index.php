<?php
$host = "localhost";
$user = "root";
$password = "";


try{
    $con = new PDO ("mysql:host=$host", $user, $password);

    echo("Connected");
    
    }catch(Exception $e){
        echo("Not connected");
    }



?>