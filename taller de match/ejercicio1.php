<?php
$valido = '2';
/* se llama al mach */
$action = match  ($valido){
    /* con estas condicionales*/
   '1' => 'gano',
    '2' =>'perdio',
    '3' => 'descalificado',
};
echo $action;
