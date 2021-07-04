<?php

$productName="LG TV";
$productPrice=1200000;
echo "<p>Product:$productName</p>";
$connection =mysqli_connect('localhost', 'root', '', 'ecart');
$query="SELECT * FROM products";
$row_query=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($row_query)) {
    echo $row['name'] ."<br>";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECART</title>
</head>
<body>
    


</body>
</html>