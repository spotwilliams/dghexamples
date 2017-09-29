<pre>
    <?php

    try {
        $sql
                = 'SELECT first_name, last_name
                   FROM fruit
                   WHERE emp_no > :minor AND emp_no <:mayor';
        $db     = new PDO("mysql:host=127.0.0.1;dbname=employees", "root", "ksk()sk2312");
        $minor = 10002;
        $mayor = 10010;
        $query  = $db->prepare($sql, array(':minor' => $minor, ':mayor' => $mayor));
    
        var_dump($query);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException  $e) {
        echo "Error: " . $e;
    }

    ?>
</pre>

<?php
/* Ejecuta una sentencia preparada pasando un array de valores */
$sql
     = 'SELECT name, colour, calories
    FROM fruit
    WHERE calories < :calories AND colour = :colour';
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array(':calories' => 150, ':colour' => 'red'));
$red = $sth->fetchAll();
$sth->execute(array(':calories' => 175, ':colour' => 'yellow'));
$yellow = $sth->fetchAll();
?>