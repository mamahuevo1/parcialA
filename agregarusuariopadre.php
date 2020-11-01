<?php 
include "usuarios.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
$tipo_documento = $_POST["tipo_documento"];
$numero_de_documento = $_POST["numero_de_documento"];
$password= sha1($_POST["password"]);






$nuevoUsuario = new usuarios();
$nuevoUsuario -> agregarRegistroPadre($nombre, $apellido, $fecha_de_nacimiento, $tipo_documento, $numero_de_documento, $password);

?>

<meta http-equiv="refresh" content="0; url=mostrarusuariopadre.php">
