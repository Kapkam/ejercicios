<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [4]</h1>
    <form action="ejer7.php" method="post">
      <p>Inserte el número para calcular la potencia.</p>
      <input type="text" name="numero" placeholder="Número:">
      <button type="submit" name="enviar">Enviar</button>
    </form>
        <?php
        // Escribe una función para calcular potencias. Recibe como
        // argumentos la base y el exponente, que es opcional y tiene por
        // defecto 2 (elevar al cuadrado).
        $numero = $_POST['numero'];
        $potencia = pow($numero,2);
        echo "<h3>".var_export($potencia,true)."</h3>";
        ?>
  </body>
</html>
