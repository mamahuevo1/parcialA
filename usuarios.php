
<?php

 class Usuarios {


	 public function __construct(){
         $this-> conectar();
    }   
    

    public function conectar(){
        $this->conn = new mysqli("localhost", "root","andres123","programacion");
       
    }


    //getter: Funciones acceder atributos privados

    public function agregarRegistro($nombre, $apellido, $fecha_de_nacimiento, $tipo_documento, $numero_de_documento, $password){

        $consulta="INSERT INTO usuarios VALUES(NULL,'$nombre', '$apellido', '$password',' $fecha_de_nacimiento', '$tipo_documento', '$numero_de_documento')";

        $this->conn->query($consulta);
        
    }


    public function mostrarUsuario(){

        $consulta = "SELECT * FROM usuarios";
        return $this->conn->query($consulta);
       
    }


   public function obtenerUsuario($Id_usuario){

        $consulta = "SELECT * FROM usuarios WHERE Id_usuario = '$Id_usuario'";

        return $this->conn->query($consulta);

    }


    public function actualizarUsuario($Id_usuario ,$nombre, $apellido, $fecha_de_nacimiento, $tipo_documento, $numero_de_documento, $password){

        $consulta= "UPDATE usuarios SET nombre_usuario='$nombre', apellidos_usuario= '$apellido', pass = '$password',fecha_nacimiento= '$fecha_de_nacimiento', tipo_documento= '$tipo_documento', numero_documento= '$numero_de_documento', WHERE Id_usuario='$Id_usuario' ";

        $this->conn->query($consulta);
    }


    public function eliminarUsuario($Id_usuario){

        
        $consulta= "DELETE FROM usuarios WHERE Id_usuario='$Id_usuario'";
     
        
        $this->conn->query($consulta);

    }


    public function verificarUsuario($usuario,$password){

        
        $consulta= "SELECT * FROM usuarios WHERE numero_documento= '$usuario' and pass= '$password'";
      
        return $this->conn->query($consulta);

    }


    public function agregarRegistroPadre($nombre, $apellido, $fecha_de_nacimiento, $tipo_documento, $numero_de_documento, $password){

        $consulta="INSERT INTO usuario_padre VALUES(NULL,'$nombre', '$apellido', '$password',' $fecha_de_nacimiento', '$tipo_documento', '$numero_de_documento')";

        $this->conn->query($consulta);
        
    }

    public function mostrarUsuarioPadre(){

        $consulta = "SELECT * FROM usuario_padre";
        return $this->conn->query($consulta);
       
    }

    public function obtenerUsuarioPadre($Id_usuario){

        $consulta = "SELECT * FROM usuario_padre WHERE Id_usuario = '$Id_usuario'";

        return $this->conn->query($consulta);

    }

    public function actualizarUsuarioPadre($Id_usuario ,$nombre, $apellido, $fecha_de_nacimiento, $tipo_documento, $numero_de_documento, $password){

        $consulta= "UPDATE usuario_padre SET nombre_padre='$nombre', apellidos_padre= '$apellido', pass = '$password',fecha_nacimiento= '$fecha_de_nacimiento', tipo_documento= '$tipo_documento', numero_documento= '$numero_de_documento' WHERE Id_usuario='$Id_usuario' ";

        $this->conn->query($consulta);
    }

    public function eliminarUsuarioPadre($Id_usuario){

        
        $consulta= "DELETE FROM usuario_padre WHERE Id_usuario='$Id_usuario'";
     
        
        $this->conn->query($consulta);

    }

    public function verificarUsuarioPadre($usuario,$password){

        
        $consulta= "SELECT * FROM usuario_padre WHERE numero_documento= '$usuario' and pass= '$password'";
      
        return $this->conn->query($consulta);

    }



}	

?>
