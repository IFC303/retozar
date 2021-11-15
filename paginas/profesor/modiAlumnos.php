
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
            echo "Vas a modificar el usuarios con DNI: ".$_POST['dni'];
            echo "<br>Vas a modificar el usuarios con nombre: ".$_POST['nombre'];
    ?>

        
        <form action="" method="POST" name="formAlum">
           <label for="dni">Dni: </label><input type="text" name="dni" id="dni" value="<?php echo $_POST['dni'];?>" required><br> <br>
           <label for="nombreA">Nombre: </label><input type="text" name="nombreA" id="nombreA" value="<?php echo $_POST['nombre'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
           <label for="apellidosA">Apellidos: </label><input type="text" name="apellidosA" id="apellidosA"  value="<?php echo $_POST['apellidos'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
           <label for="clave">Contraseña: </label><input type="password" name="clave" id="clave" required> <br> <br>
           <label for="curso">Curso: </label><input type="text" name="curso" id="curso"><br><br>
            <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
        </form>


        <?php
            modiAlumnos();
        ?>