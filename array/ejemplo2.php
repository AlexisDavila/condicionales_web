<?php
  $cadena = "Senati Eti";
  echo strtolower($cadena);
  echo "<br>".strtoupper($cadena);
  echo "<br>".trim($cadena);
  echo "<br>".str_repeat($cadena,2);
  echo "<br>".strlen($cadena);
  echo "<br>".strstr($cadena,'Eti');
  echo "<br>".str_replace("Eti", "E.T.I", $cadena);
  echo "<br>".substr($cadena,2,4);
  echo "<br>".strpos($cadena,"n");
  echo "<br>".strrpos($cadena,"t");
  echo "<br>".strchr($cadena,"e");

  $nombre[0] = "Gabriel Saenz, Ascona";
  $nombre[1] = "Marcos Arana, Vasquez";
  echo "<hr>";
  foreach ($nombre as $palabra) {
    echo substr($palabra,0,(strpos($palabra," ")))."<br>";
  }
  foreach ($nombre as $palabra) {
    echo substr($palabra,strrpos($palabra," "))."<br>";
  }
?>
