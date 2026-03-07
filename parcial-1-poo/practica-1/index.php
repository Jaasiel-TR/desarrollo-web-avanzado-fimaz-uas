<?php
require_once "Usuario.php";

$usuario = new Usuario("Jaasiel Efrain Torrero Rojo", "jasieltorrero6@gmail.com");

echo "Nombre: " .
$usuario->getNombre() . "<br>";
echo "Correo: " .
$usuario->getCorreo();

?>