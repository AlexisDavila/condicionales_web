<?php
  $anio = $_POST['anio'];
  if (17 < (2018 - $anio) and (2018 - $anio) < 30) {
    echo "Debe inscribirse al Servicio Militar o Lo Obligaremos :>";
  }else {
    echo "Usted se ha salvado!! Aun!! No puede inscibirse al Servicio Militar Obligatorio";
  }
?>
