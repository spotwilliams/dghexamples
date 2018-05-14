<?php

$paises = [
  'Argentina' => 54,
  'Brasil' => 55,
  'Venezuela' => 58,
  'EEUU' => 1,
  'CentroAmerica' => [
    'Nicaragua' => 23,
    'Honduras' => 45,
  ]
];
//var_dump($paises); die();

foreach($paises as  $pais => $codigo) {
  // echo 'voy por aqui';
  // var_dump($codigo); continue;
  // echo 'segundo-'; exit;
  if( is_array($codigo) ){
    echo '<br>Los paises de :'.$pais;
    foreach ($codigo as $key => $value) {
      echo '<br>->'.$key.' codigo:'.$value;
    }
  }else{
    echo '<br>El pais '.$pais . ' tiene clave ' . $codigo . '<br>';
  }
}

 ?>
