<?php

 class Cursos {


	 public function __construct(){
         $this-> conectar();
    }   
    

    public function conectar(){
        $this->conn = new mysqli("localhost", "root","andres123","programacion");
       
    }


    public function mostrarCursos(){

        $consulta = "SELECT * FROM clases";
        return $this->conn->query($consulta);

    }


    public function mostrarCursosID($Id_curso){

        $consulta = "SELECT * FROM `clases` WHERE `Id_clase`='$Id_curso'";
        $res=$this->conn->query($consulta);
        return $res->fetch_assoc();

    }

    


    public function eliminarCursosUsuario($Id_clase_usuario){
        $consulta = "DELETE FROM  `usuario-clase` WHERE `Id_usuario_clase` = '$Id_clase_usuario'";

        return $this->conn->query($consulta);

    }


    public function agregarUsuarioCurso($Id_usuario, $Id_curso){

        $consulta = "INSERT INTO `usuario-clase` VALUES(NULL,'$Id_usuario','$Id_curso')";
        $this->conn->query($consulta);

    }


    public function mostrarCursoUsuario($Id_usuario){

        $consulta = "SELECT * FROM `usuario-clase` WHERE `Id_usaurio` = '$Id_usuario'";
        return $this->conn->query($consulta);

    }

    


    
 }

?>