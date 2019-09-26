<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
      $pisos = 10;
      $puertas = 5;
      for ($i=0; $i < $pisos ; $i++) {
        for ($j=0; $j < $puertas ; $j++) {
          echo "Piso". $i. "Puerta". $j."\n";
        }
      }
     ?>
  </body>
</html>
