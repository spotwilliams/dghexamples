<pre>
    <?php

    try {
        
        $db     = new PDO("mysql:host=127.0.0.1;dbname=employees", "root", "ksk()sk2312");
        
        /** @var PDOStatement $query */
        
        $deptNro = 100;
        
        $query = $db->query("INSERT INTO departments VALUES()");
    
        // Row Count
        var_dump($query->rowCount());
        // Last Id: 0 si no se hizo una insercion
        var_dump($db->lastInsertId());
        die;
    } catch (PDOException  $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</pre>