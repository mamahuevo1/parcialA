<?php

include "usuarios.php";

session_start();
$autenticado= $_SESSION["autenticado"];

$Id_usuario = $_POST["opcion"];

$usuario = new Usuarios;
$resultado = $usuario->obtenerUsuarioPadre($Id_usuario);

$fila = $resultado->fetch_assoc();


if ($autenticado == "SI"){

?>

    <html>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <title>
                Actualizar Datos
            </title>
        </head>
        <body>

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                
                    <ul class="navbar-nav">                       
                    <li class="nav-item">
                    <a class="nav-link" href="formulariopadre.php">Formulario Padre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="mostrarusuariopadre.php">Mostrar Tabla Padre</a>
                    </li>
                            <li class="nav-item">
                            <?= $_SESSION["nombre_padre"]." ".$_SESSION["apellidos_padre"]; ?>
                            </li>
                        </ul>
            </nav>

            <br><br>

            


            <div class="container">
                <h1 class="text-center">Actualizar Datos de Padre</h1>
                <form action="actualizarUsuarioPadre.php"  method="post">  
                        <div class="container">

                            <input type="text" name="id"  hidden value="<?= $fila["Id_usuario"];?>">

                            <div class="form-group">
                                <label for="nombre" >Nombre del padre:</label><br>
                                <input type="text" value="<?php echo $fila["nombre_padre"];?>" class="form-control" name="nombre"><br>
                            </div>

                            <div class="form-group">
                                <label for="apellido" >Apellidos del padre:</label><br>
                                <input type="text" value="<?php echo $fila["apellidos_padre"];?>" class="form-control"  name="apellido"><br>
                            </div>

                            <div class="form-group">
                                <label for="fecha de nacimiento" >Fecha de nacimiento:</label><br>
                                <input type="date" value="<?php echo $fila["fecha_nacimiento"];?>" class="form-control"  name="fecha_de_nacimiento"><br>
                            </div>

                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" value ="<?=$fila["pass"];?>" class="form-control" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <label for="tipo de documento" >Tipo de documento:</label><br>
                                <select  name="tipo_documento">
                                    <option value="ti"> TI<?php if($fila["tipo_documento"]=="ti"){echo "selected";}?> </option>
                                    <option value="cc"> CC<?php if($fila["tipo_documento"]=="cc"){echo "selected";}?></option>
                                    <option value="nit">NIT<?php if($fila["tipo_documento"]=="nit"){echo "selected";}?></option>
                                </select><br>
                            </div>
                            

                            <div class="form-group">
                                <label for="numero de documento" >Numero de documento:</label><br>
                                <input type="number" value="<?php echo $fila["numero_documento"];?>"  class="form-control" name="numero_de_documento"><br><br>
                            </div>

                            <label for="Eliminar">Eliminar</label>
                            <input type="checkbox" name="eliminar" value="SI">
                            <input type="submit" value="Aceptar">

                        
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