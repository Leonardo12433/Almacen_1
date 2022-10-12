<?php
$nombre=$_GET['nombre'];
$contraseña=$_GET['contraseña'];
$email=$_GET['email'];

echo "Hola $nombre"; 
echo "<br>";
echo "Tu contraseña es $contraseña";
echo "<br>";
echo "tu email es $email";
echo "<br>";
echo "<a href='../Html/Saludar.html'>regresar</a>"
?>