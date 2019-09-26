<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <!-- Queremos controlar la entrada a una atracción del parque. Se
pueden subir los mayores de 10 años o los que midan más de 120
cm. Si el menor está ‘acompañado’ se le permite subir a la
atracción si la edad es mayor de 6 años, no importa la altura. -->
    <?php

    $persona = array (
      "edad" => 7,
      "acompañado" => false,
      "altura" => 130,
    );
    $edad = 10;
    $acomEdad = 6;
    $acompañado = false;
    $altura = 120;
    $aceptable = false; //variable decide si accede o no a la atracción

    if ($persona["edad"] > $edad || $persona["altura"] > $altura) {
      $aceptable = true;
    }elseif (($persona["edad"] < $edad && $persona["edad"] > $acomEdad) && $persona["acompañado"] == true) {
      $aceptable = true;
    }else {
      $aceptable = false;
    }
    if ($aceptable) {
      echo "Se le permite la entrada";
    }else{
      echo "No se le permite la entrada";

    }
    ?>
  </body>
</html>
