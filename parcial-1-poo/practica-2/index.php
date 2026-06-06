<?php
<<<<<<< HEAD

require_once "Admin.php";

$admin = new Admin("Jaasiel Efrain Torrero Rojo", "jasieltorrero6@gmail.com");
echo "Nombre: " . $admin->getNombre();
echo "<br>";

echo "Correo: " . $admin->getCorreo();
echo "<br>";

echo "Rol: " . $admin->getRol();

=======
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
>>>>>>> eab4bd8586ee2e5712b657b73946349d2145c3f7
?>
