<?php


class Auto {

  public $color;
  public $marca;
  public $modelo;

}

$auto = new Auto();
$auto->marca = 'Ford';

//echo "Tengo un {$auto->marca} {$auto->modelo}";

echo "Tengo un $auto->marca $auto->modelo";

?>
