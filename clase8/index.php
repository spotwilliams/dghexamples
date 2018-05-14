<?php




if(empty($_FILES) !== true) {


  var_dump($_FILES);
  if(false)
  {
  	//El archivo llego sin problema
    $nombreDesdeNavegador = $_FILES['archivo']['name'];
    $nombre = 'profiles/user01-profile.' . pathinfo($nombreDesdeNavegador, PATHINFO_EXTENSION);


    $archivo = $_FILES["archivo"]["tmp_name"];

    move_uploaded_file($archivo, $nombre );

    echo 'Se subio';

  } else {
    echo 'El archivo no llego o algo paso';
  }

}

 ?>



<form action="" method="post" enctype="multipart/form-data">

  <!-- opcional
  <input type="hidden" name="MAX_FILE_SIZE" value="30000">
-->
  Nombre: <input type="text" name="nombre">
  Apellido: <input type="text" name="apellido">
  Archivo: <input type="file" name="archivo[]" multiple>
  <br>

  <input type="file" name="archivo2">
  <input type="submit" value="Enviar">

</form>
