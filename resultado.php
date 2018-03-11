<?php
  $numero = $_POST['num1'];
  if($numero > 0) {
    echo "El numero es positivo";
  }elseif($numero == 0) {
    echo "El numero es cero";
  }else {
    echo "El numero es negativo";
  }
?>
