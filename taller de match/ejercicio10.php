<?php
$valor = '1';
$action = match ($valor){
    '1' => 'juega',
    '2' => 'corra',
    '3' => 'peguele',
    '4' => 'coma',
    '5' => 'exstudia',
};
echo $action;