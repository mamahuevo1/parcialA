<?php

include ("usuarios.php");

session_start();
$usuario= $_POST["usuario"];
$password= sha1($_POST["password"]);
$sesionUsuario = new usuarios();
$resultado= $sesionUsuario->verificarUsuarioPadre($usuario,$password);


$fila = $resultado->fetch_assoc();

if ($fila["Id_usuario"]>0){
    $_SESSION["autenticado"] = "SI";
    $_SESSION["nombre_padre"]=$fila["nombre_padre"];
    $_SESSION["apellidos_padre"]=$fila["apellidos_padre"];
    ?><meta http-equiv="refresh" content="0; url=formulariopadre.php"> <?php

}

else{
    ?>
    <script>alert("Error de usuario o contraseña");</script>
    <meta http-equiv="refresh" content="0; url=indexpadre.php"> 
<?php

}

?>