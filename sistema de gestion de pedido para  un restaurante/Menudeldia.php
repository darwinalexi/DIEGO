<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <form method="post">
        <label>MENU QUE SE VA AVENDER</label>
        <br>
        <input type="text" name="nombre" placeholder="Nombre del plato">
        <br>
        <input type="number" name="precio" placeholder="Ingrese precio">
        <br>
        <input type="submit" name="" id="">
    </form>    
</body>
</html>
<?php
require_once('menu.php');
$producto=$_POST['nombre'];
$precio=$_POST['precio'];

$precio=$precio;
$producto=$producto;


?>