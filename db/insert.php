<pre>
    <?php

    try {
        $db     = new PDO("mysql:host=127.0.0.1;dbname=movies_db", "root", "root");

        $query  = $db->query("SELECT title, id as nombre FROM movies LIMIT 2");


        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);


    } catch (PDOException  $e) {
      var_dump($e);
        echo "Error en catch: " . $e->getMessage();

    }catch (Exception  $e) {
        echo "Error desconocido: " . $e->getMessage();

    }


    ?>
</pre>
