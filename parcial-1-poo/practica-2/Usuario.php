<?php
class Usuario{
    private $nombre;
    private $correo;

    public function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function setNorreo($correo){
        return $this->correo = $correo;
    }
}
?>