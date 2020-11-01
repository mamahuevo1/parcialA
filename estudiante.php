<?php

include "usuarios.php";

class estudiante extends Usuarios{

    private $codigoEstudiante;

    function estudiante($nombres, $apellidos, $codigoEstudiante){
        parent::__construct($nombres, $apellidos);
        $this->codigoEstudiante = $codigoEstudiante;
    }

    public function obtenerCodigo(){
        return $this->codigoEstudiante;
    }
    
}

?>