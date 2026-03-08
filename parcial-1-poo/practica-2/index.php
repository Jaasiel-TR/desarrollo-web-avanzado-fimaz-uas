<?php
// Se incluye el archivo donde está definida la clase Admin
require_once "Admin.php";

// Se crea un objeto de la clase Admin con nombre y correo
$objAdmin = new Admin("Jaasiel Efrain Torrero Rojo", "jasieltorrero6@gmail.com");

// Se obtienen los datos del administrador usando los métodos heredados
$nombreAdmin = $objAdmin->getNombre();
$correoAdmin = $objAdmin->getCorreo();
$rolAdmin = $objAdmin->getRol();

// Se muestran los datos del administrador en la página
echo "Nombre: $nombreAdmin<br>";
echo "Correo: $correoAdmin<br>";
echo "Rol: $rolAdmin";
?>
