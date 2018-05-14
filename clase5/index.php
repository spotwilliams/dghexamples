<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php
    include 'parts/css.php';
    sleep(10);

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
            <form method="post" action="backend.php">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nombre del curso</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Cupo</label>
                    <div class="col-10">
                        <input class="form-control" type="number" id="cupo" name="cupo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Contenidos</label>
                    <div class="col-10">
                        <textarea class="form-control" id="contenidos" name="contenidos" rows="3"></textarea>
                    </div>
                </div>

                <div class="col-md-12">

                    <button type="submit" class="btn btn-primary float-sm-right">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>

<?php
include 'parts/js.php';
?>
</body>
</html>
