
<?php
    session_start();
?>

<html>

        <head>
            <?php
                 include "./../../includes/funciones.php";
                 include "./../../includes/alta.php";
                 include "./../../includes/baja.php";
                 include "./../../includes/modi.php";
                 include "./../../includes/ver.php";
            ?>    
        </head>


        <?php
           verAlumnos();
        ?>
