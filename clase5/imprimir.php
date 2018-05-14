<?php

foreach ($_POST as $key => $value) {
  if($key=='hobbies'){
    echo 'Los Hobbies son:';
    foreach ($value as $hobby) {
      echo $hobby.',';
    }
    echo '<br>';
  }
  echo 'El '.$key.' es:'.$value.'<br>';
}
?>
