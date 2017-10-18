<?php

namespace Prueba;

include './Proyecto/Blog/Admin/Usuario.php';


$usuario = new \Proyecto\Blog\Admin\Usuario('user', 'pass');

var_dump($usuario);

