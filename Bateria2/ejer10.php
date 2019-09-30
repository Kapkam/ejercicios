<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Batería 2</title>
  </head>
  <body>
    <h1>Batería de ejrecicios 2 [9.5]</h1>
        <?php
        // Crea una clase persona con los atributos dni, nombre y
        // apellido. Crea los correspondientes métodos de lectura y
        // escritura para los atributos. Crea un método que devuelve el
        // nombre completo de la persona “Persona: nombre apellido”. Crea
        // también un método constructor que reciba como argumentos los
        // tres atributos.
        // Crea una clase User que herede de persona y añade un atributo
        // puntos. Incluye los métodos getPuntos y setPuntos y
        // sobreescribe el método que devuelve el nombre completo de la
        // persona: “User: nombre apellido”.
        // Añade un método que indique un mensaje si el usuario tiene
        // menos de 100 puntos.
        class Persona{
          public $dni = "";
          public $nombre = "";
          public $apellido = "";

          function __construct($dniA,$nombreA,$apellidoA){
            $this->dni = $dniA;
            $this->nombre = $nombreA;
            $this->apellido = $apellidoA;
          }
          public function mostrarInfo(){
            $fullname = "Persona: ".$this->nombre." ".$this->apellido;
            return $fullname;
          }
          public function setDNI($valor){
            $this->dni = $valor;
          }
          public function setNombre($valor){
            $this->nombre = $valor;
          }
          public function setApellido($valor){
            $this->apellido = $valor;
          }
          public function getDNI(){
            return $this->dni;
          }
          public function getNombre(){
            return $this->nombre;
          }
          public function getApellido(){
            return $this->apellido;
          }
        }
        class User extends persona{
          public $nombre = "";
          public $apellido = "";
          public $puntos = "";

          public function __construct($nombreA,$apellidoA,$puntosA){
            $this->nombre = $nombreA;
            $this->apellido = $apellidoA;
            $this->puntos = $puntosA;
          }
          public function setPuntos($valor){
            $this->puntos = $valor;
          }
          public function getPuntos(){
           return $this->puntos;
          }
          public function mostrarInfo(){
            $fullname = "User: ".$this->nombre." ".$this->apellido;
            return $fullname;
          }
          public function comprobarPuntos($nombre, $puntos){
            if ($puntos > 100) {
              return true;
            }else {
              return false;
            }
          }
        }
        $persona1 = new Persona('9876543210G', 'Manolo', 'Gutierrez');
        $user1 = new user('Adrián', 'Rodríguez','150');

        echo '<p>Mostrando nombre: ' . $persona1->getNombre() . '</p>';
        echo '<p>Mostrando DNI: ' . $persona1->getDNI() . '</p>';
        echo '<p>Mostrando Info: ' . $persona1->mostrarInfo() . '</p>';

        echo '<p>Mostrando Puntos: ' . $user1->getPuntos() . '</p>';
        echo '<p>Cambiar valor de Puntos a 800' . $user1->setPuntos(800) . '</p>';
        echo '<p>Mostrando Puntos: ' . $user1->getPuntos() . '</p>';
        echo '<p>Mostrando Info: ' . $user1->mostrarInfo() . '</p>';
        echo '<p>Comprobar puntos: ' . $user1->comprobarPuntos("Alfredo",500) . '</p>';

        ?>
  </body>
</html>
