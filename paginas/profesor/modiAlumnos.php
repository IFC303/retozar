
<?php
    session_start();
?>

<html>

        <head>
            <?php
                include "./../../includes/funciones.php";
            ?>    
        </head>

    <?php
            echo "Vas a modificar el usuarios con DNI: ".$_POST['dni'];
            echo "<br>Vas a modificar el usuarios con nombre: ".$_POST['nombre'];
    ?>

        <h3>EDITAR ALUMNO</h3>
        <H2>Introduce el DNI del alumno a editar</h2>
        <form action="" method="POST" name="formAlum">
            Dni: <input type="text" name="dni" id="dni" value="<?php echo $_POST['dni'];?>" required><br> <br>
            Nombre: <input type="text" name="nombreA" id="nombreA" value="<?php echo $_POST['nombre'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            Apellidos: <input type="text" name="apellidosA" id="apellidosA"  value="<?php echo $_POST['apellidos'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            Contraseña: <input type="password" name="clave" id="clave" required> <br> <br>
            Curso: <input type="text" name="curso" id="curso"><br><br>
            <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
    </form>


        <?php
            $ver=modiAlumnos();
        ?>