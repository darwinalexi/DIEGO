<?php
$fecha = '12 de mayo';

$action = match ($fecha){
    '12 de mayo' => 'enero',
    '11 de agosto' => 'junio',
    '8 de julio' => 'marzo',
    '2 de marzo' => 'octubre',
    '1 de noviembre' => 'dicioembre',
};
echo $action ;