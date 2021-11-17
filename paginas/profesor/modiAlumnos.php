
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

          
        <form action="" method="POST" name="formAlum">
           <label for="dni">Dni: </label><input type="text" name="dniA" id="dniA" required value="<?php echo $_POST['dniA'];?>" readonly><br> <br>
           <label for="nombreA">Nombre: </label><input type="text" name="nombreA" id="nombreA" value="<?php echo $_POST['nombreA'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
           <label for="apellidosA">Apellidos: </label><input type="text" name="apellidosA" id="apellidosA"  value="<?php echo $_POST['apellidosA'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
           <label for="claveA">Contraseña: </label><input type="password" name="claveA" id="claveA" required> <br> <br>
           <label for="curso">Curso: </label><input type="text" name="curso" id="curso"><br><br>
           <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
        </form>

        <a href="verAlumnos.php">Volver</a>

        <?php
            modiAlumnos();
        ?>