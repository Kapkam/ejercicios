<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [4]</h1>
    <form action="ejer4.php" method="post">
      <p>Inserte 5 palabras separadas por espacios.</p>
      <input type="text" name="frase" placeholder="Inserte la frsa:">
      <button type="submit" name="enviar">Enviar</button>
    </form>
        <?php
        // Dado un string formado por 5 palabras cualesquiera (por
        // ejemplo $str = "manzana pera limón sandía melón"),
        // transformala en un array asociativo que tenga como índice la
        // palabra y como valor la longitud de la misma.
        $array = explode(" ", $_POST['frase']);
        $array2 = array(
          $array[0] => strlen($array[0]),
          $array[1] => strlen($array[1]),
          $array[2] => strlen($array[2]),
          $array[3] => strlen($array[3]),
          $array[4] => strlen($array[4]),
        );
        echo var_export($array2,true);
        ?>
  </body>
</html>
