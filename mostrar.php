<?php 
include "usuarios.php";


session_start();

$autenticado= $_SESSION["autenticado"];


if ($autenticado == "SI"){

?>

    <html>
            <head>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <title>
                    Mostrar_datos
                </title>
            </head>
                <body>

                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                
                        <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="formulario.php">Formulario Alumno</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="mostrar.php">Mostrar Tabla Alumno</a>
                        </li>
                            <?= $_SESSION["nombre_usuario"]." ".$_SESSION["apellidos_usuario"]; ?>
                            </li>
                        </ul>
                    </nav>

                    <br>
                    
                    <div class="container">

                        <h1 class="text-center">DATOS ALUMNO</h1><br>


                        <form action="actualizar.php" method="POST">
                            <table class="table table-bordered">
                                <tr>
                                <th></th>
                                <th>Id</th>
                                <th>Nombre(Alumno)</th>
                                <th>Apellido(Alumno)</th>
                                <th>Fecha de Nacimiento(Alumno)</th>
                                <th>Tipo de Documento(Alumno)</th>
                                <th>Numero de Documento(Alumno)</th>
                                <th>...</th>
                                </tr>
                                
                            <?php 

                            $usuario = new Usuarios();
                            $resultado = $usuario->mostrarUsuario();

                            
                            while($fila = $resultado->fetch_assoc()){
                            ?>
                                
                                    <tr>
                                        <td><input type="radio" name="opcion" value="<?php echo $fila ["Id_usuario"]?>"/></td>
                                        <td><?php echo $fila ["Id_usuario"];?></td>
                                        <td><?php echo $fila ["nombre_usuario"];?></td>
                                        <td><?php echo $fila ["apellidos_usuario"];?></td>
                                        <td><?php echo $fila ["fecha_nacimiento"];?></td>
                                        <td><?php echo $fila ["tipo_documento"];?></td>
                                        <td><?php echo $fila ["numero_documento"];?></td>                                      
                                        <td><a href="cursos.php?id_usuario=<?= $fila["Id_usuario"];?>" class="btn btn-info">Cursos</a></td>
                                    </tr>
                            <?php
                            }
                            ?>
                            </table>
                            
                            <input type="submit" value="Aceptar" class="btn btn-primary">
                            <a href="formulario.php" class="btn btn-light">Atras</a>
                            
                            
                        </form>

                    </div>    
					<?php
			        if(isset($body) || $body == true)
                    {
                    echo '<body style="background-color:white">';
                    } else {
                    echo '<body style="background-color:brown">';
                    }

                    ?>

                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                </body>
    </html>

<?php

}

else

{
    ?>
    <script>alert("Noks");</script>
    <meta http-equiv="refresh" content="0; url=index.php">
    <?php
}

?>  