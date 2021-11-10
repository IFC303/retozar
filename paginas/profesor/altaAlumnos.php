
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
            Dni: <input type="text" name="dniA" id="dniA" required><br> <br>
            Contraseña: <input type="password" name="claveA" id="claveA" required><br><br>
            Curso: <input type="text" name="curso" id="curso"><br><br>
            <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">   
    </form>

    
       <a href="iniProfesor.php" > Volver al menú</a>


        <?php
            $ver=altaAlumnos();
        ?>

