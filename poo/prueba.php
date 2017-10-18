<?php

  include('Classes/Usuario.php');

  $usuario = new Usuario('Juan', '01-01-1990', 'juan@juan.com');

  //var_dump($usuario);


echo $usuario->getNombre();
