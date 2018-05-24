<?php

abstract class Soldier implements Fightable {

  protected $nombre ;
  protected $apellido;
  protected $email;
  protected $codigo;

  public function __construct($nombre,  $apellido, $email) {
    // Soluciona el problema de $nombre = $nonmbre
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;

  }

  abstract public function bleeding();

  public function atacar() {
    echo 'reload->';
    echo 'calm down->';
    echo 'pum pum';
  }

  public function mover() {

  }

  public function obedecerOrden() {

  }

  public function whatSide()
  {
    return $this->codigo;
  }

}


 ?>
