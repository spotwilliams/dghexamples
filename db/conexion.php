
<?php



try {
    $db     = new PDO("mysql:host=localhost;dbname=employees", "root", "");

} catch (PDOException  $e) {
    echo "Sucedio un error de DB: " . $e->getMessage();

} catch (Exception  $e) {
    echo "No se que paso: " . $e->getMessage();
}
echo 'hola';
?>
