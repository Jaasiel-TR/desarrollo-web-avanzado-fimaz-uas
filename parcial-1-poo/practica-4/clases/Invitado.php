<?php

// Importar clase padre
require_once "Usuario.php";

class Invitado extends Usuario {

    // Atributo adicional
    private $empresa;

    // Constructor
    function __construct($nombre, $correo, $empresa){

        parent::__construct($nombre, $correo);

        $this->empresa = $empresa;
    }

    // Getter empresa
    public function getEmpresa(){
        return $this->empresa;
    }

    // Rol
    public function getRol(){
        return "Invitado";
    }

}

?>