<?php
$dia = '2';

$action = match ($dia){
    '1' => 'lunes',
    '2' => 'martes',
    '3' => 'miercoles',
    '4' => 'jueves',
    '5' => 'viernes',
    '6' => 'sabado',
    '7' => 'domingo',
};

echo $action;