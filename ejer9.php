<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <!-- Queremos calcular la comisión de un vendedor. La comisión es
el importe de las ventas más un porcentaje que va en función
de la cantidad de ventas. Si ha vendido menos de 10.000 € es
un 5%, entre 10.000 y 20.000 un 8%, entre 20.000 y 40.000 un
10% y más de 40.000 un 13%. -->
    <?php
    $persona = array (
      "nombre" => Adrian,
      "num_entras" => 5,
    );
    $precio_entrada = 2;

    function comision($persona, $precio_entrada){
      $euros_re = $persona["num_entras"] * $precio_entrada;
      if ($euros_re < 10) {
        $comision = 5;
      } elseif ($euros_re > 10 && $euros_re < 20) {
        $comision = 8;
      } elseif ($euros_re > 20 && $euros_re < 40) {
        $comision = 10;
      } elseif ($euros_re > 40) {
        $comision = 13;
      }
      return $comision;
    }
    $salida = comision($persona, $precio_entrada);
    echo "La comision es :".$salida;
    ?>
  </body>
</html>
