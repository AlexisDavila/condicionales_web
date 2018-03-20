<?php
  $num1 = 20;
  $num2 = 5;

  echo "<br>".suma($num1,$num2);
  echo "<br>".resta($num1,$num2);
  echo "<br>".multiplicacion($num1,$num2);
  echo "<br>".division($num1,$num2);

  function suma($n1,$n2){
    return $n1 + $n2;
  }
  function resta($n1,$n2){
    return $n1 - $n2;
  }
  function multiplicacion($n1,$n2){
    return $n1 * $n2;
  }
  function division($n1,$n2){
    return $n1 / $n2;
  }
?>
