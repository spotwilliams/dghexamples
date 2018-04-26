<?php

require 'validador.php';
require 'file-handler.php';


if ($_POST) {
  if (validarForm()) {
    guardarImagen();
  }
  
}

?>
