<?php


function validarCampo($nombreDelCampoParaValidar) {
  if($_POST) {
    if($_POST[$nombreDelCampoParaValidar] ==='') {
      return 'El campo es obligatorio';
    } else {
      return true;
    }
  } else {
    return false;
  }

}

function validarFormatoMail($nombreDelCampoMail) {
  if($_POST) {
    if(filter_var($_POST[$nombreDelCampoMail], FILTER_VALIDATE_EMAIL ) === false) {
      return 'El campo debe ser un mail valido';
    }
  }
}

function valorViejo($nombreDelCampoParaConservar) {
  if($_POST) {
    if(isset($_POST[$nombreDelCampoParaConservar])) {
      return $_POST[$nombreDelCampoParaConservar];
    }
  }
}

function ocultarDiv() {
  if(isset($_GET['versionCorta'])) {
    return false;
  } else {
    return true;
  }
}
 ?>
