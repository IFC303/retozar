<?php
    session_start();
?>

<html>

        <head></head>

        <body>
            <?php
                echo "Bienvenido ".$_SESSION['usuario'];
            ?>

        </body>


</html>