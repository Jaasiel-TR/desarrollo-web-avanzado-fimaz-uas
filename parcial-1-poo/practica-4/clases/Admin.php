<?php

// Importa la clase Usuario
require_once "Usuario.php";

// Clase Admin que hereda de Usuario
class Admin extends Usuario {

    // Método que devuelve el rol
    public function getRol(){
        return "Administrador";
    }

}

?>