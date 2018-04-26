
<?php

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');

for ($i = 0; $i< count($arr); $i++) {
    if ($arr[$i] == 'stop') {
        break;
    }
    echo "$arr[$i]<br />\n";
}


$i = 0;
while ($i++) {
    switch ($i) {
    case 5:
        echo "Estoy en 5<br />\n";
        break 1;
    case 10:
        echo "Estoy en 10; saliendo<br />\n";
        break 2;  /* Exit the switch and the while. */
    default:
        break;
    }
}

echo 'sali!';

?>
