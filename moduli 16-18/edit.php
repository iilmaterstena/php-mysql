<?php 

	 session_start();

   include_once('config.php');

   $id = $_GET['id'];

   $sql = "SELECT * FROM movies WHERE id=:id";
   $selectUser = $conn->prepare($sql);
   $selectUser->bindParam(':id', $id);
   $selectUser->execute();

   $user_data = $selectUser->fetch();
	

 ?>
