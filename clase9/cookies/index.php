
<?php
$errorNombre = '';
$todoOk = true;
if($_POST) {

	$nombre = trim($_POST['nombre']);
	$equipo = trim($_POST['equipo']);
		if($nombre === '') {
			$errorNombre = 'El nombre es obligatorio';
			$todoOk = false;

		}


if($todoOk) {
	$vencimiento = time() + 10;
	// Definir mis cookies
	setcookie('nombre', $nombre);
	setcookie('equipo', $equipo);

	header('Location: mi-equipo.php');
}

}



 ?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Equipos</title>

	</head>
	<body>

		<div class="maindiv">
			<div class="form_div">
			<div class="title"><h2>Sesiones</h2></div>

			<form method="POST">
				<h2>Ingrese nombre y equipo</h2>
				<br>
				<hr/>
				<br>
				Nombre:<br><input class="input" type="text" name="nombre" value="">
				<span><?php echo $errorNombre ?></span>
				<br>
				Equipo:<br>
				<select name="equipo" class="input">
				<?php
				 $equipos = ['RV' => 'River', 'BC'=> 'Boca','RC'=> 'Racing','ID'=> 'Independiente', 'YP'=>'Yupanqui', 'CC'=>'Colo Colo'];

				 foreach ($equipos as $codigo =>$nombre) {
				 	?>
					<option value="<?php echo $nombre?>"><?php echo $nombre?></option>
					<?php
				 }
				?>
			</select>
				<br>
				<input class="submit" type="submit" name="submit" value="Submit">
			</form>
			</div>

			</div>
		</div>
	</body>
</html>
<!--html ends here-->
