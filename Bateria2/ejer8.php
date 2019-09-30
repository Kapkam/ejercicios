<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [4]</h1>
    <form action="ejer8.php" method="post">
      <h2>Inserte el nombre de un fichero(config.php/hola.php/adios.php/existe.php).</h2>
      <input type="text" name="fichero" placeholder="Nombre del fichero:">
      <button type="submit" name="enviar">Enviar</button>
    </form>
        <?php
        // Crea una función que comprueba la existencia de un archivo
        // config.php. Debes lanzar una excepción en caso de que no
        // exista.
        function existe($file){
          if (file_exists($file)) {
            echo "<h3 style='color:green;'> El fichero existe</h3>";
          }else {
            echo "<h3 style='color:red;'>ERROR, El fichero no existe</h3>";
          }
        }
        $file = $_POST['fichero'];
        $file = "comprobar/".$file;
        existe($file)
        $potencia = pow($numero,2);
        ?>
  </body>
</html>
