<?php

$letra = 'k';

$action = match ($letra) {
    'A' => 'VOCAL ABIERTA',
    'B' =>  'LETRA EXPLOSIVA', 
    'O' => 'VOCAL CERRADA',
    default=>'Vocal Desconocida',
};
echo $action;