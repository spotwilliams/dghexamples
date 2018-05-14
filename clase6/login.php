<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
require 'tools.php';


$errorMail = validarCampo('email') ;
$errorPassword = validarCampo('password');

if($errorMail === true && $errorPassword === true) {
  $todoOK = true;
} else {
  $todoOK = false;
}

if($todoOK === true) {
  header('Location: bienvenido.php');
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <h1>Login</h1>
    <form method="post" action="login.php">


  <div>
        <label>Email
        <input type="text" name="email" value="<?php echo valorViejo('email')?>">
        </label>


    </div>
  <br>
  <div>
    <label>Password

      <input type="password" name="password">

    </div>
  <br>
  <?php if(!isset($_GET['versionCorta']))  :?>
    <div>
      <label>Password Confirmation

        <input type="password" name="password_conf">

      </div>

    <?php endif; ?>
  </label>
  </div>
  <input type="submit" value="Enviar">
    </form>
  </body>
</html>
