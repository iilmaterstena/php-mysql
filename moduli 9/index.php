<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form</title>
</head>
<body>
    <form action ="add.php" method="POST">
        <lable for="username">Username</lable><br>
        <input type="text" id="username" name="username" placeholder="Username"><br>

        <label for="email">Email</label><br>
        <input type="taxt" id="email" name="email" placeholder="Email"><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Password"><br>

        <button type="submit" name="submit">ADD</button>
    </form>
    
</body>
</html>