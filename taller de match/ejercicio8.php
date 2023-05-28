<?php

$cadena = 'darwin';
/*captura el numero de caracteres de la palalabra que contiene la variable*/
$numLetras =strlen ($cadena); 
/* se usan indicadores de que se quiere mostrar */ 
$contar = match (true){
    $numLetras <= 10 => 'pocos caracteres',
    $numLetras > 10 => "una grancantidad de caracteres",
};

echo $contar;