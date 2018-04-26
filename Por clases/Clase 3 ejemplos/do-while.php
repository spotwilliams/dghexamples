<?php

// La condicion se ejecuta despues de pasar por todo el bloque de instrucciones
  $i = 1;

  do {
    echo "Primero muestro que i tiene $i<br>";
    echo $i++ ."<br>";
    echo "Ahora muestro que i tiene $i<br>";
  } while ($i <= 10); // <-- look!

  $i = 1;
  do {
    echo "Primero muestro que i tiene $i<br>";
    echo ++$i ."<br>";
    echo "Ahora muestro que i tiene $i<br>";
  } while ($i <= 10);


  $i = 10;
  // Puedo ejecutar algunas intrucciones dentro del while
  // siempre php va a interpretar el resultado de esa instruccion como true / false
  while ($i--) {
    echo $i ."<br>";
  }
?>
