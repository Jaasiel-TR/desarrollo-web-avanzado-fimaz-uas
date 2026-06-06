<?php

require_once "Admin.php";

$admin = new Admin("Jaasiel Efrain Torrero Rojo", "jasieltorrero6@gmail.com");
echo "Nombre: " . $admin->getNombre();
echo "<br>";

echo "Correo: " . $admin->getCorreo();
echo "<br>";

echo "Rol: " . $admin->getRol();

?>
