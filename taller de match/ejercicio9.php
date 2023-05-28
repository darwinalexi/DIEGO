<?php
$hora = '12:40';

$action = match ($hora){
      '12:40' => 'es  de noche',
       '12:00'=> 'es de dia',
      '5:29'=>  'es tarde',
     '1:39'=>  'es mañana',
    default => 'no existe esa hora'
};
echo $action;
