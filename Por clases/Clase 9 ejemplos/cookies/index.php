
<!DOCTYPE HTML>
<html>
	<head>
	<title>Equipos</title>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>

		<div class="maindiv">
			<div class="form_div">
			<div class="title"><h2>Sesiones</h2></div>

			<form method="POST" action="colores.php">
				<h2>Ingrese nombre y equipo</h2>
				<br>
				<hr/>
				<br>
				Nombre:<br><input class="input" type="text" name="nombre" value="">
				<br>
				Color:<br>
				<select name="equipo" class="input">
				<?php
				 $equipos = ['RV' => 'River', 'BC'=> 'Boca','RC'=> 'Racing','ID'=> 'Independiente', 'YP'=>'Yupanqui', 'CC'=>'Colo Colo'];
				 foreach ($equipos as $codigo =>$nombre) {
				 	?>
					<option value="<?echo $nombre?>"><?echo $nombre?></option>
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
