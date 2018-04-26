
<?php
function ejecutar()
{
  $array = array('uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez');
  $item = 0;
  while($item < count($array)) {
     echo "{$array[$item++]}<br>\n";
    if(rand(0,3) === 3) {
      echo 'Salio el 3, terminamos<br>\n';
      exit;
    }elseif(rand(4,6) === 6) {
      echo 'Salio el 6, que siga lo que viene<br>\n';
      return 1;
    }
    continue;
  }

}

ejecutar();

echo 'Por favor, mostar este mensaje<br>\n';





?>
