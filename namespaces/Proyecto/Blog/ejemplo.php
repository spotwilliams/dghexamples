<?php

namespace Blog\Usuarios;

include './Admin/Usuario.php';

$usuario = new Admin\Usuario('user', 'pass');

var_dump($usuario);
