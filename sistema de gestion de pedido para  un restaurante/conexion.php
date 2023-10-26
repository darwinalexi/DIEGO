<?php
class Conexion{
    //SE DECLARA
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "restaurante";
    private $conect;
    //SE CONSTRUYE
    public function __construct(){
        //conexion es igual a esto
        $conexion= "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try {
            //SE USA CONEXION PARA RECIBIR EN CONNECT
            $this->conect= new PDO($conexion,$this->user,$this->password);
            //POR SI HAY ALGUN ERROR
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo ("conexion exitosa");
        } catch (\Throwable $e) {
            //me da el error que sufre si hay uno
            $this->conect='error de conexion';
            echo"ERROR:".$e->getMessage();
        }
    }
}
//se verifica si esta conectada o no
$conect= new Conexion();

?>