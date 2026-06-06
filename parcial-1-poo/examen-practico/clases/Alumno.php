<?php

// Importar la clase Usuario
require_once "Usuario.php";

// Clase Alumno que hereda de Usuario
class Alumno extends Usuario {

    // Atributo adicional de la clase Alumno
    private $matricula;

    // Constructor de la clase
    function __construct($nombre, $correo, $matricula){

        // Se reutiliza el constructor del padre
        parent::__construct($nombre, $correo);

        $this->matricula = $matricula;

    }

    // Getter de la matrícula
    public function getMatricula(){
        return $this->matricula;
    }

    // Método que retorna el rol
    public function getRol(){
        return "Alumno";
    }

}

?>