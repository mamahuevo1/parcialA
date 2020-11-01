<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>
        Login
    </title>
    </head>
        <body>

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="registrarUsuario.php">Registrarse Alumno</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="registrarUsuarioPadre.php">Registrarse Padre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Login Alumno</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="indexpadre.php">Login Padre</a>
                    </li>
                </ul>
            </nav>
            
            <h1 class="text-center">Login Alumno</h1>
            <div class="container">
                <form action="verificar.php" method="POST">
                    <div class="form-group">
                    <label for="usuario"><b>Usuario:</b></label>
                    <input type="text" name="usuario" class="form_control">
                    </div>
                    <div class="form-group">
                    <label for="password"><b>Contraseña:</b></label>
                    <input type="password" name="password" class="form_control">
                    </div>
                    <input type="submit" value="Aceptar" class="btn btn-primary">
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
