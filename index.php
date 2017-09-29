<?php
header('JAJA: Mucha risa');
header('JAJA: Poca risa', false, 305);
exit;


if(empty($_GET)) {

	header('Location: profiles/bye.php');
} else {
		header('USER-ESPERADO: '.$_GET['user']);
		header('Location: profiles/' . $_GET['user'] . '.php');
}
exit;

echo 'Hola';
?>
