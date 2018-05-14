<?php

session_start();


if(isset($_SESSION['logueado']) === true) {
  // Tambien se puede usar if(!isset($_SESSION['logueado'])
  header('Location: index.php');
}


$listaUsuarios = [
  0 => [
    'user'     => 'admin',
    'nickname' => 'Administrador',
    'pass'     => '$2y$10$/1f4VXmd9LHXsqqbYY2wtedCJbrR6oYjYcX9bi4b/SaI/CtWeb.Gq'
  ],
  1 => [
    'user'     => 'han',
    'nickname' => "Chubaka's friend",
    'pass'     =>  '$2y$10$JAawTzXnTxsma9.qiPFVa.Q2Dp2.rxgcjdBl.MZ/9uydtvbZkELSC'
  ]
];

$mensaje = '';

if($_POST) {

  $user = trim($_POST['user']);
  $pass = trim($_POST['pass']);
// TODO: Validar primero el tipo de dato ingresado

  foreach($listaUsuarios as $userDb) {
    if(($user === $userDb['user']) && (password_verify($pass, $userDb['pass']))) {

      $_SESSION['logueado'] = true;
      $_SESSION['nickname'] = $userDb['nickname'];

      header('Location: index.php');
    }

  }
$mensaje = 'Las credenciales no coinciden con las registradas en el sistema';

}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login en Sitio Web</title>
  </head>
  <body>

    <h1>Iniciar sesi&oacute;n</h1>
    <h3 style="color: red"><?php echo $mensaje ?></h3>
    <form method="post" action="login.php">
      <div>
        <label>Ingrese usuario
          <input type="text" name="user">
        </label>
      </div>
      <br>
      <div>
        <label>Ingrese password
          <input type="password" name="pass">
        </label>
      </div>
      <div>
        <input type="submit" value="Iniciar sesion">
      </div>
    </form>

  </body>
</html>
