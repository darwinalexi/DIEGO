<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="post">
    <label for="">usuario</label>
    <input type="text"name="user">
    <br>
    <label for="">clave</label>
    <input type="text" name="paswword">
    <button value="btn"> enviar</button>
 </form>
</body>
</html>
<?php
$usuario=$_POST['user'];
$clave=$_POST['pasword'];
$usu="jose";
$clave="holaquetal1234";
$claves="3fb79b6a8448d400e9405cf65d45d93a";
if ($user="jose" && $clave="3fb79b6a8448d400e9405cf65d45d93a") {
 echo "Bienvenido";
}else{
    echo "no eres la presona indicada"; 
}

?>