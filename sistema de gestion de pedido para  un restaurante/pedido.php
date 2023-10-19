<?php
require_once('items.php');

class Pedido extends Items {
    public $strItems;
    public $apedidos;
    public function __construct(string $apedidos, string $items) {
        parent::__construct($apedidos, 0.0, ''); // Llama al constructor de la clase base (Mesa)
        $this->strItems = $items;
    }

    public function setItems(string $items) {

        $menu=$items->getmenu();
        foreach ($menu as $opcion) {
            echo $opcion[0] . "<br>";
        }




    }
}
?>