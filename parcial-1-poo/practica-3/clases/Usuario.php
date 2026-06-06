<?php

class Usuario {

    // Atributos protegidos para que puedan heredarse
    protected $nombre;
    protected $correo;

    // Constructor de la clase
    function __construct($nombre, $correo) {

        $this->nombre = $nombre;

        // Validar que el correo tenga formato válido
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->correo = $correo;
        } else {
            throw new Exception("Correo invalido");
        }
    }

    // Obtener nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Obtener correo
    public function getCorreo() {
        return $this->correo;
    }

    // Cambiar nombre
    public function setNombre($Nombre) {
        $this->nombre = $Nombre;
    }

    // Cambiar correo con validación
    public function setCorreo($Correo) {

        if (filter_var($Correo, FILTER_VALIDATE_EMAIL)) {
            $this->correo = $Correo;
        } else {
            throw new Exception("Correo invalido");
        }

    }

}

?>