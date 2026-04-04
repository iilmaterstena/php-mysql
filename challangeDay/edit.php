<?php
include "db.php";

$id = $_GET['id'] ?? null;
if(!$id) die("ID mungon!");

$stmt = $connection->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$row) die("User nuk ekziston!");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">CRUD App</a>
    <a href="dashboard.php" class="btn btn-light">Dashboard</a>
  </div>
</nav>

<div class="container">
  <div class="card shadow p-4">
    <h3 class="mb-4">Edit User</h3>
    <form action="update.php" method="POST">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">

      <div class="mb-3">
        <label class="form-label">Emri</label>
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" class="form-control" required>
      </div>

      <button class="btn btn-success">Update</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>