<?php

class Fruta
{
    static $hoja = 'Verde';
    
    public function comer()
    {
    }
}

$fr = new Fruta();

var_dump(Fruta::$hoja = 'Roja');

