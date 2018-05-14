<?php
  $hobbies = [ 'pescar', 'nadar', 'futbol', 'leer' ];
?>

<!DOCTYPE HTML>
<html>
<body>

<form action="imprimir.php" method="post">
  <div class="">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">
  </div>

  <div class="">
    <label for="email">E-mail:</label>
    <input type="text" name="email">
  </div>
  <div class="">
    Cuales hobbies tienes:
    <?php
      foreach ($hobbies as $value) {
        echo '<label>
          <input type="checkbox" name="hobbies[]" value="'.$value.'">
          '.ucfirst($value).'
        </label>';
      }
    ?>

  </div>

  <div class="">
    Genero:
    <label>
      <input type="radio" name="genero" value="m">Masculino
    </label>
    <label>
      <input type="radio" name="genero" value="f">Femenino
    </label>
  </div>

  <div class="">
    Como dormiste anoche:
    <select class="" name="comodormiste">
      <?php
        for ($i=1; $i <=10 ; $i++) {
          echo '<option value="'.$i.'">'.$i.'</option>';
        }
      ?>
    </select>
  </div>

  <div class="">
    <button type="submit" name="button">Enviar</button>
  </div>
</form>

</body>
</html>
