<pre>
<?php

$file = "productos.txt";

$productosDesdeArchivo =  file_get_contents($file);

$productosEnJson = json_decode($productosDesdeArchivo, true);

var_dump($productosEnJson);

$productosEnJson['productos'][] = [
  'nombre' => 'Nueva camiseta',
  'precio' => 100
];

file_put_contents($file, json_encode($productosEnJson));

//$json[$user] = array("first" => $first, "last" => $last);

//file_put_contents($file, json_encode($json));
