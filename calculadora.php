<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = (float)$_POST["num1"];
  $num2 = (float)$_POST["num2"];
  $operacion = $_POST["operacion"];
  $resultado = "";

  if ($operacion == "suma") {
    $resultado = $num1 + $num2;
  } elseif ($operacion == "resta") {
    $resultado = $num1 - $num2;
  } elseif ($operacion == "multiplicacion") {
    $resultado = $num1 * $num2;
  } elseif ($operacion == "division") {
    if ($num2 == 0) {
      $resultado = "Error: no se puede dividir entre 0.";
    } else {
      $resultado = $num1 / $num2;
    }
  }
}

?>