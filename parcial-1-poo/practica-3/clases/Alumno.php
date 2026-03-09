<?php

// Se incluye la clase Usuario
require_once "Usuario.php";

// Clase Alumno que hereda de Usuario
class Alumno extends Usuario {

    // Atributo adicional del alumno
    private $matricula;

    // Constructor que recibe nombre, correo y matrícula
    function __construct($nombre, $correo, $matricula) {

        // Se llama al constructor de la clase padre
        parent::__construct($nombre, $correo);

        // Se asigna la matrícula
        $this->matricula = $matricula;
    }

    // Método para obtener la matrícula
    public function getMatricula() {
        return $this->matricula;
    }

    // Método que devuelve el rol
    public function getRol() {
        return "Alumno";
    }

}

?>