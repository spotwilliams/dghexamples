<?php

abstract class Servicio {


  private  function verificarHora() {
    echo 'La hora es ....';
  }

//  private abstract function cargarCombustible(int $cantidad) ;

  protected static function encender()
  {
      echo 'Maquina ON';
  }

}







class Automovil extends Servicio
{
    public static   $precios = [6.00, 6.25, 6.50];
    const ALGO = 'Lindo';
    protected $color = ' Black';
    private $marca = 'Chevy';
    protected $modelo = 'Fiesta';


    public static function encender()
    {

      //parent::encender();
      echo 'run run wahhht'   ;
    }
}

 $at = new Automovil();

 $at->encender();

  //var_dump(Automovil::encender());

exit;
class Camioneta extends Automovil {

  public function __construct(string $color, string $marca, string $modelo) {
      $this->color = $color;

      $this->modelo = $modelo;
  }

}

$ca = new Camioneta('Rojo', 'Ford', 'Ka');
$ca->owner = 'Pepito';
var_dump($ca);


?>
