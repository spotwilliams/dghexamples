<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pagina Principal</title>
	<meta charset="utf-8">
	<!--global styles-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<h1>Bienvenido <?php echo $_COOKIE['nombre'] ?></h1>

<span class="texto">
	<p>Tu equipo favorito es <?php echo $_COOKIE['equipo'] ?> </p>
</span>
</body>
</html>
