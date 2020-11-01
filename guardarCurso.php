<?php 

include "cursosclass.php";

$Id_curso = $_POST["curso"];
$Id_usuario = $_POST["id_usuario"];

$nuevocurso = new Cursos();
$nuevocurso->agregarUsuarioCurso($Id_usuario,$Id_curso);

?>

<meta http-equiv="refresh" content="0; url=cursos.php?id_usuario=<?=$Id_usuario?>">



