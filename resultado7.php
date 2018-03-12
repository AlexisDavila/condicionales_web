<?php
  $area = $_POST['narea'];
  $dias = $_POST['ndias'];
  $costo  = 0;
  if ($dias > 0 and $dias <= 30) {
    $area = '0';
  }elseif ($area == '1' and $dias <= '30') {
    $costo = 150 * $dias;
    print($costo);
  }elseif ($area == '2' and $dias <=30) {
    $costo = 120 * $dias;
    print($costo);
  }elseif ($area == '3' and $dias <=30) {
    $costo = 100 * $dias;
    print($costo);
  }elseif ($area == '0') {
    print('Error, cantidad de dia exedido!');
  }else {
    print('Error, numero de area inexistente');
  }
?>
