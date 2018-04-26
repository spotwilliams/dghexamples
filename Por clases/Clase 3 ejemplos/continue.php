<?php

/**
* Es similar a saltar hacia arriba para que continue la iteracion
*/
$i = 0;

echo "Quien tiene mas poder? <br />\n";

while ($i++ < 5) {
    echo "Padre<br />\n";
    while (true) {
        echo "Hijo<br />\n";
        while (true) {
            echo "Nieto<br />\n";
            continue 3;
        }
        echo "Nunca se va a imprimir.<br />\n";
    }
    echo "Tampoco se va a imprimir.<br />\n";
}

?>
