<?php
include "db.php";

$stmt = $connection->prepare("DELETE FROM users WHERE id=?");
$stmt->execute([$_GET['id']]);

header("Location: dashboard.php");
?>