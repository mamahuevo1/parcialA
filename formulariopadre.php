<?php


include ("usuarios.php");

session_start();
$autenticado= $_SESSION["autenticado"];




if ($autenticado == "SI"){

?>

    <html>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <title>
                Formulario
            </title>
        </head>
            <body>

            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">   
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="formulariopadre.php">Formulario Padre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="mostrarusuariopadre.php">Mostrar Tabla Padre</a>
                    </li>
                    <?= $_SESSION["nombre_padre"]." ".$_SESSION["apellidos_padre"]; ?>
                    </li>
                </ul>
            </nav>
               <br>
                <div class="container">
                    <h1 class="text-center">FORMULARIO PADRE</h1>
                    <form action="agregarusuariopadre.php"  method="POST">  
                            <div class="container">

                                <div class="form-group">
                                    <label for="nombre" >Nombre de Padre:</label><br>
                                    <input type="text"  class="form-control" name="nombre"><br>
                                </div>

                                <div class="form-group">
                                    <label for="apellido" >Apellidos de Padre:</label><br>
                                    <input type="text" class="form-control"  name="apellido"><br>
                                </div>

                                <div class="form-group">
                                    <label for="fecha de nacimiento" >Fecha de nacimiento:</label><br>
                                    <input type="date" class="form-control"  name="fecha_de_nacimiento"><br>
                                </div>

                                <div class="form-group">
                                    <label for="tipo de documento" >Tipo de documento:</label><br>
                                    <select  name="tipo_documento">
                                        <option value="ti"> TI</option>
                                        <option value="cc"> CC</option>
                                        <option value="nit">NIT</option>
                                    </select><br>
                                </div>

                                <div class="form-group">
                                    <label for="numero de documento" >Numero de documento:</label><br>
                                    <input type="number" class="form-control"  name="numero_de_documento"><br><br>
                                </div>

                                <div class="form-group">
                                    <label for="password" >Contraseña:</label><br>
                                    <input type="text" class="form-control"  name="password"><br>
                                </div>

                                
                                <input type="submit" class="btn btn-info">

                        
                            </div>
                    </form>
                </div>
                <?php
			        if(isset($body) || $body == true)
                    {
                    echo '<body style="background-color:white">';
                    } else {
                    echo '<body style="background-color:red">';
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
    <script>alert("");</script>
    <meta http-equiv="refresh" content="0; url=index.php">
    <?php
}
?>