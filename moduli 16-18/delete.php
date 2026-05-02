<?php
include_once('config.php');


$id = $_GET('id');
$sql = "DELETE FROM users WHERE id=:id";
$prep = $connection->perepare($sql);
$prep->bindParam(':id', $sql);
$prep->execute();


header("Location: list_movies.php");


?>