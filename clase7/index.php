<?php

 $json = file_get_contents('ceu.txt');
var_dump($json);
// die;
 $salida =  json_decode($json, true);

var_dump($salida);
?>
