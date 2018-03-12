<?php
  $cliente = $_POST['cliente'];
  $monto = $_POST['monto'];
  $categoria = $_POST['categoria'];
  $descuento = 0;
  $mpagar = 0;

  switch ($categoria) {
    case A:
      $descuento = $monto * 0.2;
      break;

    case B:
      $descuento = $monto * 0.1;
      break;

    case C:
      $descuento = $monto * 0.05;
      break;

    default:
      $descuento = 0;
      break;
  }
  $mpagar = $monto - $descuento;
  echo "DESCUENTO: ".$descuento;
  echo "<br>MONTO A PAGAR : ".$mpagar;
?>
