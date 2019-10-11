<?php
echo "<p>El nombre es ". $_POST["nombre"]."</p>";
echo "<p>El apellido es ". $_POST["apellidos"]."</p>";
echo "<p>El email es ". $_POST["email"]."</p>";
echo "<p>El cumpleaños es ". $_POST["bdaytime"]."</p>";
echo "<p>La contraseña es ". $_POST["contras"]."</p>";
echo "<p>La imagen seleccionada es ". $_POST["myFile"]."</p>";
echo "<p>El ciclo seleccionado es ". $_POST["ciclo"]."</p>";
echo "<p>Lenguajes seleccionados son :". $_POST["java"]. $_POST["phyton"]. $_POST["php"]. $_POST["js"]. $_POST["ruby"]. $_POST["c"]."</p>";
echo "<p>El día de la semana es ". $_POST["dia"]."</p>";
echo "<p>El color seleccionado es ".$_POST["color"]."</p>";
echo "<p>El comentario enviado es ".$_POST["comentario"]."</p>";
