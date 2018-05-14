<?php

  $pais = [
    'pais' => 'Venezuela',
    'ciudades' => [ 'Caracas', 'Margarita' ]
  ];

  $json = json_encode($pais).PHP_EOL;

  file_put_contents('ceu.txt', $json, FILE_APPEND);


?>
