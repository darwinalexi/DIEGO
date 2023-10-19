<?php
require_once("items.php");
class Menu extends Items{   
    protected $strmenu;
    public function setItems(){
        $this->strmenu=opciones();
    }
     
}