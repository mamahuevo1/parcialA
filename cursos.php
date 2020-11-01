<?php

include "usuarios.php";
include "cursosclass.php";

$id_usuario = $_GET["id_usuario"];
$usuario= new Usuarios();
$resultado = $usuario->obtenerUsuario($id_usuario);
$f = $resultado->fetch_assoc();


?>
    <html>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>
        <body>
            <div class="container">
                
                <form action="guardarCurso.php" method="POST">

                    <input hiddentype="text" name="id_usuario" value="<?= $id_usuario;?>" readonly="readonly" hidden="hidden">
                    <h4>Agregar Cursos al Usuario <?php echo $f["nombre_usuario"]." ".$f["apellidos_usuario"];?></h4>
                    
                    <table class="table table-bordered">

                        <tr>
                            <th>Nombre Curso</th>
                            <th>...</th> 
                        </tr>
                        
                        <?php
                        $miVector = [];
                        $curso = new Cursos();
                        $curso_usuario = $curso->mostrarCursoUsuario($id_usuario);
                
                        while($cursos = $curso_usuario->fetch_assoc()){

                            $miVector[] = $cursos["Id_clase"];
                            $id_usuario_clase = $cursos["Id_usuario_clase"];
                            $nombreclase = $curso->mostrarCursosID($cursos["Id_clase"]);

                            ?>
                                <tr>
                                    <td><?= $nombreclase["nombre_clase"];?></td>
                                    <td>
                                    <a href="" data-href="eliminarCurso.php?Id_clase_usuario=<?=$id_usuario_clase; ?>&Id_usuario=<?=$id_usuario;?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger">Eliminar</a></tr>
                            <?php
                            }
							
                            ?>
                    </table>


                    <div class="card">
                        <div class="card-header bg-primary">Cursos disponibles</div>
                            <div class="card-body">
                                <div class="">
                                    <label for="curso">Curso</label>
                                    <select name="curso" id="selectcurso">

                                        <option value="">--Seleccione una Opcion--</option>


                                        <?php
                                            $cursos = new Cursos;                
                                            $todos_cursos= $cursos->mostrarCursos();
                                        
                                        while( $nombrecurso = $todos_cursos->fetch_assoc()){
                                            $otrocursos= in_array($nombrecurso["Id_clase"], $miVector);
                                            
                                            if ($otrocursos==FALSE){
                                            ?>
                                                <option value="<?= $nombrecurso["Id_clase"];?>"><?= $nombrecurso["nombre_clase"];?> </option>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" value="Guardar" class="btn btn-dark">
                                <a href="mostrar.php" class="btn btn-light">Atras</a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="modal fade" id="confirm-delete"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Eliminar Curso de <?= $fila["nombre_usuario"]; ?></h4>
                        </div>
                        <div class="modal-body">
                            ¿Estas seguro de eliminar el curso?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <a class="btn btn-success btn-ok">Aceptar</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
	<?php
			if(isset($body) || $body == true)
            {
            echo '<body style="background-color:white">';
            } else {
            echo '<body style="background-color:orange">';
            }

            ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </body>
    </html>



    <script>  
        $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
