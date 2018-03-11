<?php
  $first = 2018 - $_POST['first'];
  $second = 2018 - $_POST['second'];

  if($first > $second){
    echo "El primer hermano es mayor";
  }else {
    echo "El segundo hermano es mayor";
  }
?>
