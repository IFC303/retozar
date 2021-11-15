
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
            ?>    
        </head>


        <?php
            verCurso();
        ?>


<br><br>
<a href="iniAdminCentro.php">Volver al menu</a>