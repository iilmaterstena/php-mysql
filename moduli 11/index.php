<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Desserts</th>
            <th>Sold</th>
        </tr>

    <?php
    $animals = [
        array("Dog", 20),
        array("Cat", 15),
        array("Bear", 10),
        array("Bird", 5),
        array("Snake", 2),
        array("Eagle", 1),
        array("Frog", 5)
    ];


        echo $animals[0][0]. " Sold: ".  $animals[0][1]. "<hr>";
        echo $animals[1][0]. " Sold: ".  $animals[1][1]. "<hr>";
        echo $animals[2][0]. " Sold: ".  $animals[2][1]. "<hr>";
        echo $animals[3][0]. " Sold: ".  $animals[3][1]. "<hr>";
        echo $animals[4][0]. " Sold: ".  $animals[4][1]. "<hr>";
        echo $animals[5][0]. " Sold: ".  $animals[5][1]. "<hr>";
        echo $animals[6][0]. " Sold: ".  $animals[6][1]. "<hr>";

        for($x = 0; $x<7; $x++){
            echo "<ul>";
            for($y = 0; $y<2; $y++){
                echo "<li>".$animals[$x][$y]."</li>";
            }
            echo "</ul>";
        }


        $desserts = [
            ["Tiramisu", 20],
            ["Ice cream", 65],
            ["Cheesecake", 30],
            ["Lava Cake", 5],
            ["Donuts", 50],
            ["Muffins", 10]
    ];

    for($row = 0; $row<6; $row++){
        echo "<tr>";
        for($col = 0; $col<2; $col++){
            echo "<td>". $desserts[$row][$col]. "</td>";
        }
        echo "</tr>";
    }
        
    
    
    ?>
</body>
</html>