<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <?php
    include 'parts/css.php';
    ?>
    <title>Forms & HTTP Methods</title>
</head>
<body>

<?php
include 'parts/header.php'
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <?php
            
            require 'validar.php';
            
            echo "<h2>Datos ingresados:</h2>";
            
            var_dump($_POST);
            var_dump($_GET);
            
            ?>

        </div>
    </div>
</div>

<?php
include 'parts/js.php';
?>
</body>
</html>

