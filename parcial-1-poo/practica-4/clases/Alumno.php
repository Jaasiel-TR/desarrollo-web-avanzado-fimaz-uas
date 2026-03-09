<?php

// Importar clase padre
require_once "Usuario.php";

class Alumno extends Usuario {

    // Atributo adicional
    private $matricula;

    // Constructor
    function __construct($nombre, $correo, $matricula){

        // Reutiliza constructor del padre
        parent::__construct($nombre, $correo);

        $this->matricula = $matricula;
    }

    // Getter de matrícula
    public function getMatricula(){
        return $this->matricula;
    }

    // Método rol
    public function getRol(){
        return "Alumno";
    }

}

?>