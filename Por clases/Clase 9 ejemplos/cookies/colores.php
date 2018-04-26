<?php

setcookie('nombre', $_POST['nombre']);
setcookie('equipo', $_POST['equipo']);

header('Location: home.php');
?>
