<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [5]</h1>
        <?php
        // Crea un un array con los meses del año y para cada mes el
        // número de días que tendrá éste año.
        function imprimir($arrayM,$arrayD){
          echo "<table>";
          for ($i=0; $i < 1 ; $i++) {
            echo "<tr>";
            for ($j=0; $j < count($arrayM) ; $j++) {
              echo "<td align=center style='border:1px solid black; padding: 3px;'><div>".$arrayM[$j]."</div></td>";
            }
            echo "</tr>";
            echo "<tr>";
            for ($z=0; $z < count($arrayD) ; $z++) {
              echo "<td align=center style='border:1px solid black;'><div>".$arrayD[$z]."</div></td>";
            }
            echo "</tr>";
          }
          echo "</table>";
        }
        $arrayM = ["Índice", "Enero", "Febrero", "Marzo", "Abríl", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        $arrayD = ["Valor", "31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];
        imprimir($arrayM,$arrayD);
        ?>
  </body>
</html>
