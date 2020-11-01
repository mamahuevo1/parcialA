
<?php


include ("usuarios.php");

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
                    <a class="nav-link" href="registrarUsuario.php">Registro Alumno</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="registrarUsuarioPadre.php">Registro Padre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Login Alumno</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="indexpadre.php">Login Padre</a>
                    </li>
                </ul>
            </nav>
               <br>
                <div class="container">
                    <h1 class="text-center">FORMULARIO DE REGISTRO PARA ALUMNO</h1>
                    <form action="agregarusuario.php"  method="POST">  
                            <div class="container">

                                <div class="form-group">
                                    <label for="nombre" >Nombre:</label><br>
                                    <input type="text"  class="form-control" name="nombre"><br>
                                </div>

                                <div class="form-group">
                                    <label for="apellido" >Apellidos:</label><br>
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
                echo '<body style="background-color:pink">';
                }
                ?>
                
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </body>
    </html>
