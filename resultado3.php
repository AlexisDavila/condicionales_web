<?php
  $nota = $_POST['nota'];
  if ($nota < 11) {
    echo "Reprobado";
  }elseif ($nota < 13) {
    echo "Aprobado";
  }elseif ($nota < 18) {
    echo "Notable";
  }elseif ($nota <= 20) {
    echo "Sobresaliente";
  }else {
    echo "Porfavor ingrese un valor entre 0 y 20.";
    echo "<br> Gracias por usar nuestro programa * no se olvide de pagar la menbresia";
  }
?>
