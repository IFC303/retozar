
<?php
    session_start();
?>

<html>

        <head>
            <?php
                include "../includes/funciones.php";
            ?>    
        </head>



        <h3>BAJA ALUMNO</h3>
        <H2>Introduce el DNI del alumno a borrar</h2>
        <form action="" method="POST" name="formAlum">
            Dni: <input type="text" name="dni" id="dni" required><br> <br>
        <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
    </form>


        <?php
            $ver=bajaAlumnos();
        ?>
