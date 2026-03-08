<?php

// Esta clase representa a un usuario con nombre y correo
class Usuario{

    // Atributos privados de la clase
    private $nombre;
    private $correo;

    // Constructor de la clase
    // Recibe el nombre y el correo 
    public function __construct($nombre, $correo){
        $this->nombre = $nombre;  
        $this->correo = $correo;   
    }

    // Método getter para obtener el nombre del usuario
    public function getNombre(){
        return $this->nombre;
    }

    // Método getter para obtener el correo del usuario
    public function getCorreo(){
        return $this->correo;
    }

    // Método setter para cambiar el nombre del usuario
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    // Método setter para cambiar el correo del usuario
    public function setCorreo($correo){
        $this->correo = $correo;
    }
}