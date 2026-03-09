<?php

// Se incluye la clase Usuario para poder heredar de ella
require_once "Usuario.php";

// Clase Admin que hereda de Usuario
class Admin extends Usuario {

    // Método que devuelve el rol del usuario
    public function getRol() {
        return "Administrador";
    }

}

?>