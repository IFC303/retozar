
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

   

        <legend>EDITAR PROFESOR</legend>
        <form action="" method="POST" name="formPro">
                <br>
                <label for="nombre">Nombre </label><input type="text" name="nombreP" id="nombre" value="<?php echo $_POST['nombreP'];?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                <br><br>
                <label for="apellidos">Apellidos </label><input type="text" name="apellidosP" id="apellidosP" value="<?php echo $_POST['apellidosP'];?>"  required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                <br><br>
                <label for="dniP">DNI </label><input type="text" name="dniP" id="dniP" maxlength="9" value="<?php echo $_POST['dniP'];?>" required>
                <br><br>
                <label for="password">Password </label><input type="password" name="password" id="password" required>
                <br><br>
                <label for="departamento">Departamento </label><input type="text" name="departamento" id="departamento" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                <br><br>
                <input type="submit" value="Guardar" onclick="validarform2()">
            </form>     

    
        
        <a href="iniAdminCentro.php">Volver al menu</a>


        <?php
            modiProfesor();
        ?>

         