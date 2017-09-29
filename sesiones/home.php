<?php
session_start();

if(!isset($_SESSION['usuario'])) {

	header('Location: index.php');

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pagina Principal</title>
	<meta charset="utf-8">
	<!--global styles-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<h1>Bienvenidos</h1>

<span class="texto">
	<p>Aprendiendo a programar con php</p>
</span>
</body>
</html>
