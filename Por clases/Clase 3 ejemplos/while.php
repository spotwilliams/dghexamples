<?php

// La condicion se ejecuta siempre antes de comenzar con la ejecucion
  $i = 1;

  while ($i <= 10) {
    echo "Primero muestro que i tiene $i<br>";
    echo $i++ "<br>";
    echo "Ahora muestro que i tiene $i<br>";
  }

  $i = 1;
  while ($i <= 10) {
    echo "Primero muestro que i tiene $i<br>";
    echo ++$i "<br>";
    echo "Ahora muestro que i tiene $i<br>";
  }


  $i = 10;
  // Puedo ejecutar algunas intrucciones dentro del while
  // siempre php va a interpretar el resultado de esa instruccion como true / false
  while ($i--) {
    echo $i "<br>";
  }
?>
