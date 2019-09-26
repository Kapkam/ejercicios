<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php

    $cadena = "Somos o no somos";

    $separar = explode(" ", strtolower($cadena));

    foreach($separar as $palabra)
    {
        trim($palabra);
        $nuevo .= $palabra;
    }

    if($nuevo == strrev($nuevo))
    {
        echo "La cadena (".$cadena.") es palíndroma";
    }
    else {
      echo "La cadena (".$cadena.") no es palíndroma";
    }

    ?>
  </body>
</html>
