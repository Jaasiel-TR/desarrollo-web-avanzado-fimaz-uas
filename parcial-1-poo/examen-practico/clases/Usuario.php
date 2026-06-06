<?php

class Usuario {

    // Atributos protegidos para permitir herencia
    protected $nombre;
    protected $correo;

    // Constructor de la clase
    // Se encarga de asignar los valores y validar el correo
    function __construct($nombre, $correo){

        $this->nombre = $nombre;

        // Validación del correo usando filter_var
        if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $this->correo = $correo;
        }else{
            // Si el correo es inválido se lanza una excepción
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