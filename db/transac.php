<pre>
    <?php

    try {
      $empleadoDelete = 110039;
        $db     = new PDO("mysql:host=127.0.0.1;dbname=employees", "root", "root");

        $query  = $db->prepare("DELETE FROM employess WHERE emp_no = :id");
        $result = $query->execute([':id' => $empleadoDelete]);

        $query  = $db->prepare("DELETE FROM dept_manager WHERE emp_no = :id");
        $result = $query->execute([':id' => $empleadoDelete]);

        $query  = $db->prepare("DELETE FROM dept_emp WHERE emp_no = :id");
        $result = $query->execute([':id' => $empleadoDelete]);

        $query  = $db->prepare("DELETE FROM salaries WHERE emp_no = :id");
        $result = $query->execute([':id' => $empleadoDelete]);

        $query  = $db->prepare("DELETE FROM titles WHERE emp_no = :id");
        $result = $query->execute([':id' => $empleadoDelete]);

    } catch (PDOException  $e) {
        echo "Error en catch: " . $e->getMessage();

    }catch (Exception  $e) {
        echo "Error desconocido: " . $e->getMessage();
    }


    ?>
</pre>
