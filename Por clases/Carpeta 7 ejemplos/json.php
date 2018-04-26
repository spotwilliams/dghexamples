<pre>
<?php

$productos['productos'] = [
  [
    'nombre' => 'camiseta roja',
    'precio' => 15,
  ],
  [
    'nombre' => 'camiseta azul',
    'precio' => 10,
  ],
  [
    'nombre' => 'camiseta blanca',
    'precio' => 5,
  ],
  [
    'nombre' => 'camiseta negra',
    'precio' => 5,
  ],
];


$file = "productos.txt";


$todoElArchivo = file_put_contents($file, json_encode($productos));
