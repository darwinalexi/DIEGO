<?php
require_once("conexion.php");
class Usuario extends Conexion{
    private $nombre;
    private $telefono;
    private $email;
    private $direccion;
    private $conexion;
$sql = "INSER INTO Usuario(nombre,telefono,email,direccion)";
$insert=$this->conexion->prepare($sql)
}
?>