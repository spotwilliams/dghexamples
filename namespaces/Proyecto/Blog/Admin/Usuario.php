<?php

namespace Proyecto\Blog\Admin;

class Usuario
{
    private $nombre;
    private $pass;
    
    public function __construct($nombre, $pass)
    {
        $this->nombre = $nombre;
        $this->pass   = $pass;
    }
    
    
    function getNombre()
    {
        return $this->nombre;
    }
}

?>