<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <!-- <h1>Batería de ejrecicios 2 [5]</h1> -->
    <form action="ejer6.php" method="post">
      <p>Inserte un nombre y elije el mes para añadirlo.</p>
      <input type="text" name="nombre" placeholder="Inserte el nombre:">
      <select name="mes">
        <option value=0>Enero</option>
        <option value=1>Febrero</option>
        <option value=2>Marzo</option>
        <option value=3>Abril</option>
        <option value=4>Mayo</option>
        <option value=5>Junio</option>
        <option value=6>Julio</option>
        <option value=7>Agosto</option>
        <option value=8>Septiembre</option>
        <option value=9>Octubre</option>
        <option value=10>Noviembre</option>
        <option value=11>Diciembre</option>
      </select>
      <button type="submit" name="enviar">Enviar</button>
    </form>
        <?php
        // Almacena en un array los nombres de las personas que cumplen
        // los años en un mes determinado (para cada mes del año). Crea
        // una función para añadir un nombre a un mes. Ésta función
        // deberá además devolver en un parámetro el número de personas
        // que están registradas.
        function imprimir($arrayM,$array){
          echo "<table>";
          for ($i=0; $i < 1 ; $i++) {
            echo "<tr>";
            echo "<td align=center style='border:1px solid black;color:blue; padding: 3px;'><div>".$arrayM."</div></td>";
            echo "</tr>";
            echo "<tr>";
            for ($z=0; $z < count($array) ; $z++) {
              echo "<td align=center style='border:1px solid black;'><div>".$array[$z]."</div></td>";
              echo "</tr>";
            }
          }
          echo "</table>";
        }
        function añadir(){
          $arrayM = ["Enero", "Febrero", "Marzo", "Abríl", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
          switch ($_POST["mes"]) {
            case 0:
              $arrayE = ['Pepe','Manolo'];
              array_push($arrayE,$_POST["nombre"]);
              imprimir($arrayM[0],$arrayE);
              break;
            case 1:
              $arrayF = ['Franciso','Ander'];
              array_push($arrayF,$_POST["nombre"]);
              echo var_export($arrayF,true);
              imprimir($arrayM[1],$arrayF);
              break;
            case 2:
              $arrayMZ = ['Oscar','Juanma'];
              array_push($arrayM,$_POST["nombre"]);
              imprimir($arrayM[2],$arrayMZ);
              break;
            case 3:
              $arrayA = ['Lisa','Ignacio'];
              array_push($arrayA,$_POST["nombre"]);
              imprimir($arrayM[3],$arrayA);
              break;
            case 4:
              $arrayX = ['Alicia','Alejandro'];
              array_push($arrayX,$_POST["nombre"]);
              imprimir($arrayM[4],$arrayX);
              break;
            case 5:
              $arrayJ = ['Lucia','Maria'];
              array_push($arrayJ,$_POST["nombre"]);
              imprimir($arrayM[5],$arrayJ);
              break;
            case 6:
              $arrayJL = ['Nestor','Daniel'];
              array_push($arrayJL,$_POST["nombre"]);
              imprimir($arrayM[6],$arrayJL);
              break;
            case 7:
              $arrayA = ['Bruno','Federico'];
              array_push($arrayA,$_POST["nombre"]);
              imprimir($arrayM[7],$arrayA);
              break;
            case 8:
              $arrayS = ['Adrian','Fernando'];
              array_push($arrayS,$_POST["nombre"]);
              imprimir($arrayM[8],$arrayS);
              break;
            case 9:
              $arrayO = ['Francisco','ErColetas'];
              array_push($arrayO,$_POST["nombre"]);
              imprimir($arrayM[9],$arrayO);
              break;
            case 10:
              $arrayN = ['Diego','Jorge'];
              array_push($arrayN,$_POST["nombre"]);
              imprimir($arrayM[10],$arrayN);
              break;
            case 11:
              $arrayD = ['Jesus','Alfredo'];
              array_push($arrayD,$_POST["nombre"]);
              $arrayM["Diciembre"] = $_POST["nombre"];
              $salida = "En el mes ".$arrayM["Diciembre"]." hay ".count($arrayM["Diciembre"]);
              imprimir($arrayM[11],$arrayD);
              break;
            default:
            echo "Error inesperado.";
              break;
          }
        }
//----------------------------------------------------------------------------------
        añadir();
        ?>
  </body>
</html>
