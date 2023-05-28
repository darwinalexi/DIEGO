<?php

$color = 'amarillo';
$action = match ($color) {
    'rojo' =>'pare',
    'amarillo' => 'preparese',
    'verde' => 'siga',

};

echo $action;