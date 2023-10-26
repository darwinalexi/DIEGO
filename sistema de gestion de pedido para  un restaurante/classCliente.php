<?php
require_once("mesa.php");
class Cliente extends Mesa{
    //prpiedades
public $stritems;
public $fltprecio;
//metodos
public function __construct(string $items, float $precio){
    $this->stritems=$items;
    $this->fltprecio=$precio;
}
public function pedir(){

}
}
?>