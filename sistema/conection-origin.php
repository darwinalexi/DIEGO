<?php
/*try {
    $base=new PDO(dsn:'mysql=localhost; sena_empresa','root','');
} catch (Execption $e) {
    echo "Error en la solicitud";
}*/

class Conexion {
 private $host='localhost';
 private $user='root';
 private $password="";
 private $database='diego';
 private $connect; 

 public function __construct(){
    try {
        //$string="mysql:host:localhost; dbname=db_sistema; charset=utf8"
      $conect="mysql:host=".$this->host.";dbname=".$this->database.";charset=utf8";
      $this->conect = new PDO($conect,$this-> $user, this->$password);
    $this->conect-> setAtribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXEPTION);
    } catch (PDOException $e) {
        $this->conect="error de conexion";
        echo "ERROR".$e->getMenssage();
    }
 }
public function connect(){
    return $this ->conect;
}
}
