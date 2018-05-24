<?php
include('autoload.php');



$soldadoRebelde = new Rebel('Finn', 'Finn', 'finn@reb.rep');

$soldadoRebelde->atacar();



die;
// $soldadoStorm = new StormTrooper('FN199', 'Storm', 'fn199@empire.dark');

var_dump( $soldadoRebelde, $soldadoStorm);


die;


if($soldado->getCodigo() === Side::DARK) {
  echo 'Escondete';
}
 ?>
