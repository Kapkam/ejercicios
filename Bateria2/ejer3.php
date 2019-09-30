<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [3]</h1>
      <table>
        <?php
        // Crea un array de 20 números aleatorios, ordénalos de menor a
        // mayor e indica:
        // - el menor de los números en color azul
        // - el mayor de los números en color verde
        // - la suma y la media (número con dos decimales) de todos los
        // números.
        //Ni idea de porque no me va (count($salida)-1) en la validación [según el tamaño del array]
        function arrayAleatorio(){
          $array = [];
          for ($i=0; $i < 20 ; $i++) {
            array_push($array, rand(1, 100));
          }
          return $array;
        }

        function imprimir($array){
          for ($i=0; $i < 1 ; $i++) {
            echo "<tr>";
            for ($j=0; $j < count($array) ; $j++) {
              if ($j === 0) {
                echo "<td align=center><div style='color:blue;'>".$array[$j]."</div></td>";
              } elseif ($j === 19) {
                echo "<td align=center><div style='color:green;'>".$array[$j]."</div></td>";
              }else {
                echo "<td align=center><div>".$array[$j]."</div></td>";
              }
            }
            echo "</tr>";
          }
        }
        $salida = arrayAleatorio();
        sort($salida, SORT_NUMERIC);
        imprimir($salida);
        ?>
    </table>
  </body>
</html>
