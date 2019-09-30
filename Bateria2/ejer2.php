<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bateria2</title>
  </head>
  <body>
    <h1>Bateria2 ejer1</h1>
    <form action="ejer2.php" method="post">
      <p>Nº columnas: <input type="text" name="columnas" /></p>
      <p>Nº filas: <input type="text" name="filas" /></p>
      <p><input type="submit" /></p>
    </form>
    <table>
    <?php
    // Crea una función que reciba como parámetros dos números y cree
    // una tabla HTML que tenga tantas filas como indique el primer
    // número y tantas columnas como indique el segundo parámetro.
    $columnas = (int)$_POST['columnas'];
    $celdas = (int)$_POST['filas'];
    celdasCol($columnas,$celdas)
    function celdasCol($a,$b){
      for ($i=0; $i < $b; $i++) {
        echo "<tr>";
        for ($j=0; $j < $a; $j++) {
          echo "<td> aaa </td>";
        }
        echo "</tr>";
      }
    }
     ?>
   </table>
  </body>
</html>
