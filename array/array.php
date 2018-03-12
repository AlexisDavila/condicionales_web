<?php
  //declarar un arreglo
  $empleado[0] = 4371;
  $empleado[1] = "Alexis Davila";
  $empleado[2] = "10092602";
  $empleado[3] = 14929.54;
  $empleado[4] = "Doctor";

  foreach ($empleado as $dato) {
    echo $dato."<br>";
  }

  echo "<br>";
  echo "Codigo: ".$empleado[0].'<br>';
  echo "Nombre: ".$empleado[1].'<br>';
  echo "DNI: ".$empleado[2].'<br>';
  echo "Sueldo: ".$empleado[3].'<br>';
  echo "Profesion: ".$empleado[4].'<br>';
  echo "<hr>";
  //arreglo de dos dimensiones
  $empleados[0][0] = 974530;
  $empleados[0][1] = "Alexis Davila";
  $empleados[0][2] = 75696857;

  $empleados[1][0] = 931428;
  $empleados[1][1] = "Robert Taboada";
  $empleados[1][2] = 74608108;

  $empleados[2][0] = 713262;
  $empleados[2][1] = "Jose Armas";
  $empleados[2][2] = 71431298;

  echo "<br>";
  echo "Codigo: ".$empleados[0][0].'<br>';
  echo "Nombre: ".$empleados[0][1].'<br>';
  echo "DNI: ".$empleados[0][2].'<br>';
  echo "<hr>";

  echo "<br>";
  echo "Codigo: ".$empleados[1][0].'<br>';
  echo "Nombre: ".$empleados[1][1].'<br>';
  echo "DNI: ".$empleados[1][2].'<br>';
  echo "<hr>";

  echo "<br>";
  echo "Codigo: ".$empleados[2][0].'<br>';
  echo "Nombre: ".$empleados[2][1].'<br>';
  echo "DNI: ".$empleados[2][2].'<br>';
  echo "<hr>";
?>
