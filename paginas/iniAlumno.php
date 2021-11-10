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

            <h2>Area Alumnos</h2>
            <br>

            <?php
                echo "Bienvenido ".$_SESSION['nombreL'];
            ?>

            <br><br>
            <a href="iniTest.php" name="test" id="test">Iniciar test</a>
            <br><br>
            <a name="verTest" id="verTest">Ver test</a>
         


        </body>

        <script src="iniProfesor.js"></script>  


</html>