<?php

include "usuarios.php";

if (isset($_POST["eliminar"])) {

    $check= $_POST["eliminar"];
    
} else {
    $check= "NO";
    
}


$Id_usuario= $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
$tipo_documento = $_POST["tipo_documento"];
$numero_de_documento = $_POST["numero_de_documento"];
$password= sha1($_POST["password"]);
$nombre_hijo= $_POST ["nombre_hijo"];
$actualizarUsuario = new usuarios();



if ($check == "SI"){

    $actualizarUsuario -> eliminarUsuarioPadre($Id_usuario);


}

else{


    $actualizarUsuario -> actualizarUsuarioPadre($Id_usuario ,$nombre, $apellido, $fecha_de_nacimiento, $tipo_documento, $numero_de_documento, $password, $nombre_hijo);

}




?>
<meta http-equiv="refresh" content="0; url=mostrar.php">