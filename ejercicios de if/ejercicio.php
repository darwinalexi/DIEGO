<?php

$edad= "23";
$genero= "f";   


if($genero == "m"){
   if( $edad >= 60){
    echo "se puede pensionar hombre";
}
else{
    echo "no se puede pensinar hombre";
}
}
elseif ( $genero == "f"){
    if ($edad >= 54){
    echo "se puede pensionar";
}
else{
    echo "no se puede pensinar";
}
}