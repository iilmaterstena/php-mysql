<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shto User</title>
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
    <h3 class="mb-4">Shto Përdorues</h3>

    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Emri</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <button name="submit" class="btn btn-primary">Ruaj</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $stmt = $connection->prepare("INSERT INTO users (name,email) VALUES (?,?)");
        $stmt->execute([$_POST['name'], $_POST['email']]);
        echo "<div class='alert alert-success mt-3'>U ruajt me sukses!</div>";
    }
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>