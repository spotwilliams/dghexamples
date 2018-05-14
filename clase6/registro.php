<?php
$hobbies = [ 0=> 'pescar', 'nadar', 'futbol', 'videogamer'];
$errorUser = $errorMail = $errorPass = $usuario = $email = $pass = '';

if($_POST) {
  // Estoy recibiendo datos
  $usuario = trim($_POST['nickname']);

  $email = trim($_POST['mail']);
  $pass = trim($_POST['password']);

  // 1 - Validar los datos
  if($usuario == '') {
    $errorUser =  'El usuario es obligatorio';
  }
  if($email == '') {
    $errorMail =  'El email es obligatorio';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $errorMail = 'El mail no esta bien formado';
  }
  if($pass == '') {
    $errorPass = 'El pass es obligatorio';
  }

  // 2 - En caso de error, que no se borren los datos ingresados
}

  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Regitro de Usuario</h1>
    <form class="" action="" method="post">

      <div class="">
        <label for="">
          Usuario:
          <input type="text" name="nickname" value="<?php echo $usuario;?>">

        </label>
        <span><?php echo $errorUser; ?></span>
      </div>

      <br>
      <div class="">
        <label for="">
          Email:
          <input type="text" name="mail" value="<?php echo $email;?>">
        </label>
        <span><?php echo $errorMail; ?></span>
      </div>

      <div class="">
        <label for="">
          Password:
          <input type="password" name="password" value="<?php echo $pass;?>">
        </label>
      </div>

      <div class="">
        <button type="submit" >Enviar</button>
      </div>

    </form>

  </body>
</html>
