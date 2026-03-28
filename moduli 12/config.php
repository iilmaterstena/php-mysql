<?php  
$host = "localhost";
$db = "mod13";
$username = "root";
$password = '';

try {
  $connection = new PDO("mysql:host=$host;dbname=$db", $username, $password);
   echo "Connected successful";

   
}
catch(Exception $e) {
  echo "Somthing went wrong";
}
?>