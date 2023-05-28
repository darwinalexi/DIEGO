<?php
$valor= '6';

$action = match (true){
    $valor <= '10' => 'malo',
    $valor >= '60' => 'bueno',
    $valor >= '90' => 'excelente',
    $valor  >= '100' => 'sin errores',
};
echo $action;