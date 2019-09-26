<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
      $num1 = 5;
      $num2 = 6;
      $num3 = 9;

      function mayor($num1,$num2 ,$num3){
        $mayor = 0;
        if ($num1 > $num2 && $num1 > $num3) {
          $mayor = $num1;
        }elseif ($num2 > $num1 && $num2 > $num3) {
          $mayor = $num1;
        }else{
          $mayor = $num3;
        }
        return $mayor;
      }
      $salida = mayor($num1,$num2,$num3);
      echo "El mayor de los números (".$num1.",".$num2.",".$num3.") es: ".$salida;
     ?>
  </body>
</html>
