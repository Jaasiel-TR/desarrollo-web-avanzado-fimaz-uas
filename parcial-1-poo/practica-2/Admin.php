<?php
// Se incluye el archivo donde está definida la clase Usuario
require_once "Usuario.php";

// Clase Admin que hereda los atributos y métodos de la clase Usuario
class Admin extends Usuario {

   // Método que devuelve el rol del usuario administrador
   public function getRol(){
    return "Administrador";
   }

}
?>