<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <!-- Disponemos de los siguientes datos:
- El importe de la cesta de la compra $total_compra, número
con dos decimales.
- La variable $tipo_compra puede contener 'mascotas' o 'ropa'.
Escribe el código necesario para implementar:
Si la compra del cliente es inferior a 19 euros:
❖ si los productos son de mascotas se mostrará un mensaje:
"No se puede realizar el envío".
❖ si los productos son de ropa se le mostrará el siguiente
mensaje: "Los gastos de envío son 9 euros".
Si la compra tiene un importe entre 19 y 40 euros se le
indicará el mensaje: "Los gastos de envío son 9 euros".
Si la compra supera los 80 euros deberemos indicar un mensaje
de que los portes de envío son gratis.
Mostrar el precio final de la compra teniendo en cuenta que
hay que añadir un 10% de iva si se trata de mascotas y un 21%
si se trata de ropa.-->
    <?php
    $productos = array (
      "producto1" => 8.88,
      "producto2" => 10.50,
    );
    $tipo_compra = "mascotas";

    foreach ($productos as $producto) {
      $total_compra += $producto;
    }
    if ($tipo_compra === "mascotas") {
      $productosIva = $total_compra * 1.1;
    } else {
      $productosIva = $total_compra * 1.21;
    }
    function cesta_compra($total_compra, $tipo_compra){
      if ($total_compra < 19) {
        if ($tipo_compra === "mascotas") {
          $salida = "No se puede realizar el envío";
          return $salida;
        } else {
          $salida = "Los gastos de envío son 9€ (1)";
          return $salida;
        }
      } elseif ($total_compra > 19 && $total_compra < 40) {
        $salida = "Los gastos de envío son 9€ (2)";
        return $salida;
      }elseif ($total_compra > 80) {
        $salida = "Los gastos de envío son gratis, ITS FREEEEEE!!";
        return $salida;
      }
    }

    $window = cesta_compra($total_compra, $tipo_compra);
    echo "El total de la compra es : " . round($productosIva,2) . "€ por lo tanto " . $window;
    ?>
  </body>
</html>
