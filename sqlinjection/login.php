<?php
// digital_house
$uname   = $_POST['user'];
$passwrd = $_POST['pass'];

$db = new PDO('mysql:host=127.0.0.1;dbname=digital_house', 'root', 'ksk()sk2312', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$stmt = $db->query("SELECT * FROM usuarios where email = '$uname' AND pass = '$passwrd'");

if ($stmt->rowCount() === 0) {
  echo 'No se puede iniciar sesion';
} else {
  echo 'Bienvenido ' . $stmt->fetchAll(PDO::FETCH_ASSOC)[0]['nickname'];
}



// bypass--> ' or ''='
