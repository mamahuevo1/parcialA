<?php

include ("usuarios.php");

session_start();
$usuario= $_POST["usuario"];
$password= sha1($_POST["password"]);
$sesionUsuario = new usuarios();
$resultado= $sesionUsuario->verificarUsuario($usuario,$password);


$fila = $resultado->fetch_assoc();

if ($fila["Id_usuario"]>0){
    $_SESSION["autenticado"] = "SI";
    $_SESSION["nombre_usuario"]=$fila["nombre_usuario"];
    $_SESSION["apellidos_usuario"]=$fila["apellidos_usuario"];
    ?><meta http-equiv="refresh" content="0; url=formulario.php"> <?php

}

else{
    ?>
    <script>alert("Error de usuario o contraseña");</script>
    <meta http-equiv="refresh" content="0; url=index.php"> 
<?php

}

?>