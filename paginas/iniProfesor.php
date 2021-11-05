<?php
    session_start();
?>

<html>

        <head>
            <?php
                include "../includes/funciones.php";
            ?>    
        </head>


        <body>

            <h2>Area de profesores</h2>
            <br>

            <?php
                echo "Bienvenido ".$_SESSION['nombreL'];
            ?>
         
            <ul></ul>
                <li><a href="altaAlumnos.php">Alta alumnos</a></li>
                <li><a href="modiAlumnos.php">Modificar alumnos</a></li>
                <li><a href="bajaAlumnos.php">Baja alumnos</a></li>
                <li><a href="verAlumnos.php">Ver alumnos</a></li>
            <br><br>
            



        </body>


</html>