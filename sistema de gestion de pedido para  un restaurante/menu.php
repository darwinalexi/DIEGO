<?php
require_once("conexion.php");



class Menu extends Conexion {
    private $strnombre;
    private $intprecio;

    public function __construct() {
        parent::__construct();
    }

    public function setItems(string $producto, int $precio) {
        try {
            $this->strnombre = $producto;
            $this->intprecio = $precio;

            $sql = "INSERT INTO menu (nombre, valor) VALUES (:nombre, :precio)";
            $menu = array(
                ':nombre' => $this->strnombre,
                ':precio' => $this->intprecio,
            );

            $realizar = $this->conexion->prepare($sql);
            $rerealizar = $realizar->execute($menu);
        } catch (Exception $e) {
            echo "Error en su consulta: " . $e->getMessage();
        }
    }
}
?>
