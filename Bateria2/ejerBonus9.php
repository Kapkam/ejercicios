<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [9.5]</h1>
        <?php
        // Crea una función que dado un lado calcule el área de un
        // cuadrado. Deberá lanzar una excepción en caso de que el lado
        // sea un número negativo.
        // Crea un array con cinco números aleatorios (asegurate de que
        // el array contiene un número negativo) y ejecuta la función
        // sobre cada uno de los elementos del array.
        function arrayAleatorio(){
          $array = [];
          for ($i=0; $i < 4 ; $i++) {
            array_push($array, rand(1, 100));
          }
          array_push($array,-1);
          return $array;
        }

        function areaC($a){
          for ($i=0; $i < count($a) ; $i++) {
            if ($a[$i] >= 1) {
              $b *= $a[$i];
              echo "<h3> El área del cuadrado es: ".$b ."</h3>";
            }elseif ($a[$i] == 0) {
              echo "<h3> El área del cuadrado es: 0 </h3>";
            }else {
              echo "<h3 style='color:red;'> El lado del cuadrado no puede ser negativo </h3>";
            }
          }
        }
        $arrayNum = arrayAleatorio();
        areaC($arrayNum);
        ?>
  </body>
</html>
