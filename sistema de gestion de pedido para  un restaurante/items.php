<?php
class Items {
    // Propiedades
    private $strItems1 = array();
    private $strItems2 = array();
    private $strItems3 = array();
    private $strItems4 = array();
    private $strItems5 = array();
    private $strItems6 = array();
    
    // Método para definir opciones de menú
    public function opciones() {
        $menu = array(
            array("Arroz con leche 20.000$"),
            array("Frijol 60.000$"),
            array("Arroz con pollo 40.000$"),
            array("Sopa de verduras 12.000$"),
            array("ajiaco 13.000")
        );

        // Asignar elementos del menú a las propiedades
        $this->strItems1 = $menu[0];
        $this->strItems2 = $menu[1];
        $this->strItems3 = $menu[2];
        $this->strItems4 = $menu[3];
        $this->strItems5 = $menu[4];
        // $strItems6 = ... (si es necesario)

        // Imprimir las opciones de menú
        echo "Opciones de strItems1: " . implode(", ", $this->strItems1) . "<br>";
        echo "Opciones de strItems2: " . implode(", ", $this->strItems2) . "<br>";
        echo "Opciones de strItems3: " . implode(", ", $this->strItems3) . "<br>";
        echo "Opciones de strItems4: " . implode(", ", $this->strItems4) . "<br>";
        echo "Opciones de strItems5: " . implode(", ", $this->strItems5) . "<br>";
        // Imprimir otras propiedades si es necesario
    }
}

// Crear una instancia de la clase Items
$items = new Items();

// Llamar al método opciones para definir y mostrar las opciones de menú
$items->opciones();
?>

