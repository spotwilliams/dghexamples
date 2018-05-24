<?php
// PSR-4
include('Models/Rebel.php');
include('Models/StormTrooper.php');

$alumno1 = new Alumno('Han', 'Solo', 'no-te-debo-nada@amix.pha');

$alumno2 = new Alumno('Darth', 'Vader','yaNoSoyAni@dark-side.emp');

// Crea una copia del obj
// $alumno3 = clone $alumno1;

// Referencia al mismo objeto.
// $alumno3 =  $alumno1;


$alumno1->email = null;
var_dump($alumno1, $alumno2);
die;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>La resistencia tiene un mensaje secreto poco amigable para el señor Han Solo, de parte de su amix Darth</p>

    <p>Enviando mail desde <?php echo $alumno2->email  ?>, hacia <?php echo $alumno1->email ?></p>
  </body>
</html>
