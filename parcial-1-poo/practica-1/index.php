<?php
// Se incluye el archivo donde está la clase Usuario
require_once "Usuario.php";

// Se crea un objeto Usuario con nombre y correo
$objUsuario = new Usuario("Jaasiel Efrain Torrero Rojo", "jasieltorrero6@gmail.com");

// Se obtienen los datos del usuario
$nombre = $objUsuario->getNombre();
$correo = $objUsuario->getCorreo();

// Se muestran los datos en la página
echo "Nombre: $nombre<br>";
echo "Correo: $correo<br>";

?>
