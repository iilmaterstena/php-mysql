<?php

$host = "localhost";
$db = "testIlma";
$user = "root";
$password = "";


try{
    $con = new PDO ("mysql:host=$host; dbname=$db", $user, $password);

   
    $username = "Ilma";

    $password = "1234";

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";




    $con->exec($sql);

    echo("ROW ADDED");
    
    }catch(Exception $e){
        echo("ROW NOT ADDED ");
    }



?>  