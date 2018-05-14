<?php

function contador($nada = 'esto es nada') {
 static $cuenta = 0;
var_dump($nada);
 return $cuenta++;
}


echo contador('algo');

echo contador();

echo contador();

 ?>
