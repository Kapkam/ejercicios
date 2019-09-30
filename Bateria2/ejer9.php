<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [4]</h1>
    <form action="ejer9.php" method="post">
      <h2>Inserta el valor del lado del cuadrado para calcular el área.</h2>
      <input type="text" name="area" placeholder="valor:">
      <button type="submit" name="enviar">Enviar</button>
    </form>
        <?php
        // Crea una función que dado un lado calcule el área de un
        // cuadrado. Deberá lanzar una excepción en caso de que el lado
        // sea un número negativo.
        function areaC($area){
          if ($area >= 1) {
            $area *= $area;
            echo "<h3> El área del cuadrado es: ".$area ."</h3>";
          }elseif ($area == 0) {
            echo "<h3> El área del cuadrado es: 0 </h3>";
          }else {
            echo "<h3 style='color:red;'> El lado del cuadrado no puede ser negativo </h3>";
          }
        }
        $area = $_POST['area'];
        areaC($area);
        ?>
  </body>
</html>
