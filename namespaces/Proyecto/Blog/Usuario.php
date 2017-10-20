<?php

namespace Proyecto\Blog;

class Usuario
{
    private $nombre;
    private $pass;

    public function __construct($nombre, $pass)
    {
        $this->nombre = $nombre;
        $this->pass   = $pass;
    }


    public function getNombre()
    {
        return $this->nombre;
    }
}

?>
