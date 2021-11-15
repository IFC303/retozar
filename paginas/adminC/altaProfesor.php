
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


                <form action="" method="POST" name="formPro">
                    <label for="nombre">Nombre </label><input type="text" name="nombreP" id="nombreP" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                    <br><br>
                    <label for="apellidos">Apellidos </label><input type="text" name="apellidosP" id="apellidosP" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                    <br><br>
                    <label for="dniP">DNI </label><input type="text" name="dniP" id="dniP" maxlength="9" required>
                    <br><br>
                    <label for="password">Password </label><input type="password" name="password" id="password" required>
                    <br><br>
                    <label for="departamento">Departamento </label><input type="text" name="departamento" id="departamento" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                    <br><br>
                    <input type="submit" value="Guardar" onclick="validarform2()">
                </form>  
     
    
  
    
    <a href="iniAdminCentro.php">Volver al menu</a>


    <?php
        altaProfesor();
    ?>