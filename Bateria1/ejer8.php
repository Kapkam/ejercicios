<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <!-- Implementa el código que dada una variable ‘base’ que tiene
que ser impar, imprima la siguiente figura. -->
    <?php

    function crear_piramide ($filas) {
        $cadena = null;
        for ($i = 1; $i <= $filas; $i++) {
            for ($h = $i; $h <= $i; $h++) {
                $cadena .= "*";
            }
            echo $cadena."<br />";
        }
    }

    crear_piramide (9);
    ?>
  </body>
</html>
