<?php

namespace Blog\Usuarios\Admin;

class Usuario
{
    private $nombre;
    private $pass;
    private $cuenta;

    public function __construct($nombre, $pass)
    {
        $this->nombre = $nombre;
        $this->pass   = $pass;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function crearCuenta(){
      $this->cuenta = new \OtroProyecto\Cuenta();
    }
}

?>
