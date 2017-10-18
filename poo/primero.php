<?php
   declare(strict_types = 1);
   function returnIntValue(int $value): float {
      $temp = $value + 1.5;
      echo 'Hasta aqui el valor es->'.$temp.'<br>';
      return $temp;
   }
   print('El retorno es->'.returnIntValue(5));
?>
