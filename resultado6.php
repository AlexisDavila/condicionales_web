<?php
  $first = $_POST['first'];
  $second = $_POST['second'];
  if ($first > $second) {
    echo $first." es mayor que ".$second;
  }elseif ($first == $second) {
    echo "Son iguales";
  }else {
    echo $first." es menor que ".$second;
  }
?>
