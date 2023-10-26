<?php
require_once("menu.php");
class Mesa {
    // Propiedades
    public $strPedido;
    public $fltCobrar;
    public $strCliente;
    function __construct(string $apedidos, float $Cobrar, string $aCliente) {
        $this->strPedido = $apedidos;
        $this->fltCobrar = $Cobrar;
        $this->strCliente = $aCliente;
    }
    // Métodos
    function setPedido($apedidos, $Cobrar, $aCliente) {
        $this->strPedido = $apedidos;
        $this->fltCobrar = $Cobrar;
        $this->strCliente = $aCliente;
    }   
    function getPedido() {
        return $this->strPedido;
        }
    function getCobrar() {
        return $this->fltCobrar;
        }
    function getCliente() {
        return $this -> strCliente;
        }
}
?>