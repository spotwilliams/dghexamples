<?php

class StormTrooper extends Soldier {

  public function __construct($nombre,  $apellido, $email) {

    parent::__construct($nombre, $apellido, $email);

    $this->codigo = Side::DARK;

  }


  public function atacar()
  {

    parent::atacar();

    echo '->run';
  }

  public function bleeding() {

 }

}
 ?>
