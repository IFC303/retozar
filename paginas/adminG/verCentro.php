
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
            verCentro();
        ?>


<br><br>
<a href="iniAdminGeneral.php">Volver al menu</a>
