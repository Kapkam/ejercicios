<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bateria2</title>
  </head>
  <body>
    <h1>Bateria2 ejer1</h1>
    <?php
// Escribe el código necesario para que se creen dos arrays: en
// el primero se almacenan los 10 primeros números naturales
// (empezando por el 0). En el segundo se almacena el valor del
// factorial del número incluido en la misma posición del primer
// array.
      for ($i=1; $i <=10 ; $i++) {
        $array [] = $i;
      }
      for ($i=0; $i <count($array) ; $i++) {
        $salida = factorial($array[$i]);
        echo "El factorial de ". ($i+1) . " es " . $salida;
      }
      function factorial($number){
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++){
          $factorial = $factorial * $i;
        }
        return $factorial;
      }
     ?>
  </body>
</html>
