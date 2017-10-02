<pre>
    <?php
    function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
    try {
    
        $db = new PDO("mysql:host=127.0.0.1;dbname=employees", "root", "ksk()sk2312");
    
        /** @var PDOStatement $query */
    
        $deptNro = 100;
        $start   = microtime_float();
        for ($new = 1; $new < 1000000; $new++) {
        
            $query = $db->query("INSERT INTO departments(dept_no, dept_name) VALUES('d$deptNro', 'dpto$deptNro')");
            $deptNro++;
        }
        $end = microtime_float();
    
        $time = $start - $end;
        var_dump($time);
    } catch (PDOException  $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</pre>