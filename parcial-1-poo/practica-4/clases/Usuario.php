<?php

// Clase base del sistema
class Usuario {

    // Atributos protegidos para permitir herencia
    protected $nombre;
    protected $correo;

    // Constructor con validación de correo
    function __construct($nombre, $correo) {

        $this->nombre = $nombre;

        // Validar que el correo tenga formato correcto
        if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $this->correo = $correo;
        }else{
            throw new Exception("Correo inválido: $correo");
        }

    }

    // Getter del nombre
    public function getNombre(){
        return $this->nombre;
    }

    // Getter del correo
    public function getCorreo(){
        return $this->correo;
    }

}

?>