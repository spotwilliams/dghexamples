<pre>
    <?php

    try {
        $db     = new PDO("mysql:host=127.0.0.1;dbname=employees", "root", "ksk()sk2312");
        $empNro = 10002;
        /** @var PDOStatement $query */
        $query  = $db->query("SELECT * FROM employees WHERE emp_no=$empNro");
//        var_dump($query);

        /** @var PDOStatement $result */
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
//        var_dump($result->rowCount());
        
        var_dump($result);
    } catch (PDOException  $e) {
        var_dump($e);
        echo "Error: " . $e->getMessage();
    }
echo 'hola';
    ?>
</pre>