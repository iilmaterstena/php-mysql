<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">CRUD App</a>
    <a href="index.php" class="btn btn-light">+ Shto User</a>
  </div>
</nav>

<div class="container">
  <div class="card shadow p-4">
    <h3 class="mb-4">Lista e përdoruesve</h3>
    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-primary">
          <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Email</th>
            <th>Veprime</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $stmt = $connection->query("SELECT * FROM users");
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
              <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('A je i sigurt?')">Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>