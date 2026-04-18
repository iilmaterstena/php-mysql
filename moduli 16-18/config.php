<?php  
$host = "localhost";
$db = "movie";
$username = "root";
$password = '';

try {
  $connection = new PDO("mysql:host=$host;dbname=$db", $username, $password);
   echo "Successful";

   
}
catch(Exception $e) {
  echo "Somthing went wrong";
}
?>