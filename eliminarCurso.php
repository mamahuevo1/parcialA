<?php 

include "cursosclass.php";

$Id_usuario_clase = $_GET["Id_clase_usuario"];
$Id_usuario = $_GET["Id_usuario"];
$eliminar = new Cursos();

$eliminar->eliminarCursosUsuario($Id_usuario_clase);



 ?>

<meta http-equiv="refresh" content="0; url=cursos.php?id_usuario=<?=$Id_usuario;?>">