<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/Menu.css">
</head>
<body>
    <div class="for">
    <form method="post">
        <label>MENU QUE SE VA AVENDER</label>
        <br>
        <input type="text" name="nombre" placeholder="Nombre del plato">
        <br>
        <input type="number" name="precio" placeholder="Ingrese precio">
        <br>
        <input type="submit" name="" id="">
    </form>    
    </div>
</body>
</html>

<?php
require_once ("Conexion.php");
$precio=$_POST['precio'];
$producto=$_POST['nombre'];
class Menu extends Conexion{
    //PROPIEDADES

    private $strProducto;
    private $intPrecio;
    private $conexion;
    //METODOS
    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function setItem(string $producto, int $precio){
        try {
            $this->strProducto = $producto;
            $this->intPrecio = $precio;
            $sql = "INSERT INTO `pedido`(`producto`, `precio`) VALUES (:pro,:pre)";
            $arrayData = array(
                ':pro'=>$this->strProducto,
                ':pre'=>$this->intPrecio
            );
            $insert = $this->conexion->prepare($sql);
            $resInsert = $insert->execute($arrayData);
            $insert->closeCursor();
        }catch (Exception $e){
            echo "Error en su consulta: ".$e->getMessage();
        }
    }
    public function getProducto($producto){
        try {
            $this->strProducto = $producto;

            $sql = "SELECT * FROM pedido WHERE producto = :pro";
            $arrData = array(":pro" => $this->strProducto);

            $query = $this->conexion->prepare($sql);
            $query->execute($arrData);

            $request = $query->fetch(PDO::FETCH_ASSOC); //ARRAY
            $query->closeCursor();

            return $request;
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
        }
    }
    public function getProductos(){
        try {
            $sql = "SELECT * FROM pedido";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchAll();
            return $request;

        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
        }
    }
}
?>
