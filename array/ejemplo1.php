<?php
  $alumno[0] = "Alexis";
  $alumno[2] = "Jhon";
  $alumno[1] = "Davila";
  $alumno[3] = "Manuel";
  $alumno[4] = "Dociloncio";
  $alumno[5] = "miguel";
  $alumno[6] = "Dedoncio";

  foreach ($alumno as $palabra) {
    if ($palabra[0] == 'm' or $palabra[0] == 'M') {
      echo "<br>".$palabra;
    }
  }

  array_splice($alumno,6,2);
  echo "<br>".implode($alumno);

?>
