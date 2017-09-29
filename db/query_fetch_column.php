<pre>
    <?php

    try {
        $db     = new PDO("mysql:host=127.0.0.1;dbname=employees", "root", "ksk()sk2312");
        $empNro = 10002;
        $query  = $db->query("SELECT * FROM departments");
    
        var_dump($query);
    
        while ($result = $query->fetchColumn(1)) {
        
            var_dump($result);
        }
    
    } catch (PDOException  $e) {
        echo "Error: " . $e;
    }

    ?>
</pre>