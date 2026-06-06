<?php

// Importar la clase Usuario
require_once "Usuario.php";

// Clase Admin que hereda de Usuario
class Admin extends Usuario {

    // Método que retorna el rol del usuario
    public function getRol(){
        return "Administrador";
    }

}

?>