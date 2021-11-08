
<?php
    session_start();
?>

<html>

        <head>
            <?php
                include "../includes/funciones.php";
            ?>    
        </head>



        <h3>EDITAR ALUMNO</h3>
        <H2>Introduce el DNI del alumno a editar</h2>
        <form action="" method="POST" name="formAlum">
            Dni: <input type="text" name="dni" id="dni" required><br> <br>
            Nombre: <input type="text" name="nombreA" id="nombreA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            Apellidos: <input type="text" name="apellidosA" id="apellidosA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            Contraseña: <input type="password" name="clave" id="clave" required> <br> <br>

            <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
    </form>


        <?php
            $ver=modiAlumnos();
        ?>