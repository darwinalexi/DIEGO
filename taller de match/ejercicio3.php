<?php

$letra = 'O';

$action = match ($letra) {
    'A' => 'VOCAL ABIERTA',
    'B' =>  'LETRA EXPLOSIVA', 
    'O' => 'VOCAL CERRADA',
};
echo $action ;