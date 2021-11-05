
<?php
    session_start();
?>

<html>

        <head>
            <?php
                include "../includes/funciones.php";
            ?>    
        </head>



        <h3>NUEVO ALUMNO</h3>
        <form action="" method="POST" name="formAlum">
            Nombre: <input type="text" name="nombreA" id="nombreA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            Apellidos: <input type="text" name="apellidosA" id="apellidosA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            Dni: <input type="text" name="dni" id="dni" required><br> <br>
            Contraseña: <input type="password" name="clave" id="clave" required> <br> <br>

        <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
    </form>


        <?php
            $ver=altaAlumnos();
        ?>
