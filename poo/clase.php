<?php

class Cliente {

  protected $cuenta;
  protected $nombre;



  public function __construct($nombre, Cuenta $cuenta)
  {
    $this->cuenta =  $cuenta;
  }


  public function getCuenta()
  {
    return $this->cuenta;
  }

}


$cliente = new Cliente('Jhon',  new Cuenta('197231827112', new Banco('Comafi')));

$cliente->getCuenta()
        ->getBanco()
        ->getDireccion();


 class Cuenta {

  public function __construct($cbu, Banco $banco)
  {
    $this->cuenta =  $cuenta;
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
