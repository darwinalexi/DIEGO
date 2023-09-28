<?php
/*para encriptar una clave*/
$clave="holaquetal1234";
echo hash("md5",$clave)."<br>";
foreach(hash_algos() as $algoritmos){
    echo $algoritmos." - ".hash($algoritmos.$clave)."<br>";
}
//desincreptar
    $clave="holaquetal1234";
    $clave_procesada=pasword_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);
    echo pasword_very($clave,$clave_procesada);
