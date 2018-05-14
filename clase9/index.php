<?php
session_start();
$_SESSION['contador']++;
if(isset($_SESSION['logueado']) === false) {
  // Tambien se puede usar if(!isset($_SESSION['logueado'])
  header('Location: login.php');
}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sitio Web</title>
  </head>
  <body>

    <h1>Bienvenido <?php echo $_SESSION['nickname']; ?>
    </h1>

    <a href="logout.php">Salir</a>
  </body>
</html>
