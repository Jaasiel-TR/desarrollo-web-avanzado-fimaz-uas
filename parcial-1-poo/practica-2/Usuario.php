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
<<<<<<< HEAD
    public function setCorreo($correo){
        return $this->correo = $correo;
=======

    // Método setter para cambiar el correo del usuario
    public function setCorreo($correo){
        $this->correo = $correo;
>>>>>>> eab4bd8586ee2e5712b657b73946349d2145c3f7
    }
}