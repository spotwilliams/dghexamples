<?php


/**
 *
 */
class Usuario
{
  private $nombre;
  private $fecha_nacimiento;
  private $email;

  function __construct(string $nombre, string $fecha, string $email)
  {
    $this->setNombre($nombre);
    $this->fecha_nacimiento = $fecha;
    $this->email = $email;
  }

  public function saludar()
  {
    echo 'hola '.$this->nombre;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function getMail(){}
  public function getEdad(){}

  public function setNombre($nombre){
    if (strlen($nombre) > 25) {
      echo 'Nombre muy largo';
    }
    $this->nombre = $nombre;

  }
  public function setMail(){}
  public function setEdad(){}

}



 ?>
