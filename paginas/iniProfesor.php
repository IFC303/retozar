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
            
            <br><br>
            <input type="submit" value="Gestion Alumnos">
            <br><br>
            <input type="submit" value="Gestion Grupos">

            <input type="submit" value="ver alumnos" onclick="document.write('<?php ver() ?>')">
            <br><br>
            

        <?php
            function ver(){
            
                    

            }

        ?>


        </body>


</html>