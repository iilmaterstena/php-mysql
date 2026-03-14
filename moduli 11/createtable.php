<?php
$host = "localhost";
$db = "testIlma";
$user = "root";
$password = "";


try{
    $con = new PDO ("mysql:host=$host; dbname=$db", $user, $password);

    $sql = "CREATE TABLE users (
    id INT(20)NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
 );


    CREATE TABLE category(
    id INT PRIMARY KEY,
    NAME VARCHAR(255) NOT NULL
 );
    
    CREATE TABLE products(
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES category(id)
    );

 
    INSERT INTO category (id, name) VALUES
    (1, 'Desserts'),
    (2, 'Fast Food');


    INSERT INTO products (id, name, category_id) VALUES
    (1, 'Pizza', 2),
    (2, 'Tiramisu', 1),
    (3, 'Burger', 2),
    (4, 'Ice cream', 1),
    (5, 'Hamburger', 2);
    (6, 'Pancakes', 1);
    (7, 'Fries', 2);
    (8, 'Chocolate', 1);
    (9, 'Hot Dog', 2);
    (10, 'Cheesecake', 1);
    (11, 'Lava Cake', 1);
    (12, 'Donuts', 1);
   


 
  ";

    $con->exec($sql);

    echo("Table created");
    
    }catch(Exception $e){
        echo("Table not created ");
    }



?>