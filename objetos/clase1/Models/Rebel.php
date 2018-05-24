<?php

class Rebel extends Soldier implements Helpable {

  public function __construct($nombre,  $apellido, $email) {

    parent::__construct($nombre, $apellido, $email);

    $this->codigo = Side::LIGHT;


  }

  public function atacar()
  {

    parent::atacar();

    echo '->hide';
  }

  public function helpPeople()
  {

  }

 public function bleeding() {

}

}
 ?>
