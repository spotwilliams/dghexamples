<?php

session_start();
//variables precargadas
$usuario	= "admin";
$clave		= "admin";

//recibiendo valores de index.phh
$login		= $_POST["login"];
$passwd		= $_POST["passwd"];

if (($usuario==$login) && ($clave==$passwd)) {
	$_SESSION["usuario"]=$usuario;

	header('Location: home.php');
}
else{
		header('Location: index.php');

}

?>
