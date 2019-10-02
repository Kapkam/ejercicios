<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ampliación</title>
  </head>
  <body>
    <h1>Ejercicio Ampliación(Adrián R. y Aimar)</h1>
    <form action="ampliacion.php" method="post">
      <h2>Inserte el nombre de un fichero(config.php/hola.php/existe.php).</h2>
      <input type="text" name="fichero" placeholder="Nombre del fichero:">
      <button type="submit" name="enviar">Enviar</button>
    </form>
      <?php
      // Crea dos ficheros php que muestren por pantalla un Hola Mundo
      // o algo que los diferencie entre sí. Le mostrareis las distintas
      // opciónes al usuario y este escribirá en un input su elección.
      // Crea una función que comprueba la existencia de los archivos
      // Debes lanzar un mensaje de ERROR en caso de que no exista dicho fichero.
      // Importante debeís mostrarle al usuario una opción que no exista.
      function existe($file){
        if (file_exists($file)) {
          include $file;
          echo "<h3 style='color:green;'> El fichero existe</h3>";
        }else {
          echo "<h3 style='color:red;'>ERROR, El fichero no existe</h3>";
        }
      }
      $file = $_POST['fichero'];
      if (isset($file)) {
        $file = "comprobar/".$file;
        existe($file);
      }else {
        echo "<h3 style='color:red;'>No se ha introducido ningún nombre de fichero</h3>";
      }
      ?>
  </body>
</html>
