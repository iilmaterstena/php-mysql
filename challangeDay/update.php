<?php
include "db.php";

$stmt = $connection->prepare("UPDATE users SET name=?, email=? WHERE id=?");
$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['id']
]);

header("Location: dashboard.php");
?>