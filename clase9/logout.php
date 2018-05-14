<?php
session_start(); //si no se ejecutó aún

session_destroy();

header('Location: index.php');
?>
