<?php

if($_POST){

  //1) me conecto
  $host = 'mysql:host=localhost;dbname=movies_db;charset=utf8mb4;port:3306';
  	$db_user = 'root';	$db_pass = 'root';
  $db = new PDO($host, $db_user, $db_pass,  [PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION] ) ;
  //2)busco la pelicula
  $sql = 'SELECT * FROM movies WHERE title = ?;';
  $stmt = $db->prepare($sql);
  $stmt->execute( [ $_POST['titulo']  ]);
  //3) si no exite inserto
  if( $stmt->rowCount()==0 ){
      $sql = 'INSERT INTO movies ( created_at, title, rating, awards, release_date, length) VALUES ( :creacion, :titulo, :rating, :premios, :lanzamiento, :duracion);';
    $stmt = $db->prepare($sql);
      $creacion = date('Y-m-d h:i:s');
      $titulo = $_POST['titulo'];
      $rating = $_POST['rating'];
      $premios = $_POST['awards'];
      $lanzamiento = $_POST['anio'].'-'.$_POST['mes'].'-'.$_POST['dia'];
      $duracion = $_POST['length'];
        $stmt->bindValue(':titulo', $titulo, PDO::PARAM_STR);
        $stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindValue(':premios', $premios, PDO::PARAM_INT);
        $stmt->bindValue(':lanzamiento', $lanzamiento, PDO::PARAM_STR);
        $stmt->bindValue(':duracion', $duracion, PDO::PARAM_INT);
        $stmt->bindValue(':creacion', $creacion, PDO::PARAM_STR);
    $stmt->execute();
    $movie_id = $db->lastInsertId();
    echo 'El id de la pelicula insertada es: '.$movie_id;
  }
  else{
    //4) si existe actualizo la pelicula
    $pelicula = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = 'UPDATE movies
     SET updated_at = :actualiza,
      rating= :rating,
      awards= :premios,
      release_date = :lanzamiento,
      length = :duracion
    WHERE id = :id;';
    $stmt = $db->prepare($sql);

    $actualiza = date('Y-m-d h:i:s');
    $rating = $_POST['rating'];
    $premios = $_POST['awards'];
    $lanzamiento = $_POST['anio'].'-'.$_POST['mes'].'-'.$_POST['dia'];
    $duracion = $_POST['length'];
      $stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
      $stmt->bindValue(':premios', $premios, PDO::PARAM_INT);
      $stmt->bindValue(':lanzamiento', $lanzamiento, PDO::PARAM_STR);
      $stmt->bindValue(':duracion', $duracion, PDO::PARAM_INT);
      $stmt->bindValue(':actualiza', $actualiza, PDO::PARAM_STR);
      $stmt->bindValue(':id', $pelicula['id'], PDO::PARAM_INT );
    $stmt->execute();
  }

}

 ?>
<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="awards"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="length" id="length"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
