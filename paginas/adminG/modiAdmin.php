
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
            //echo "Vas a modificar el centro con NOMBRE: ".$_POST['nombre'];
             //echo "<br>Vas a modificar el usuarios con nombre: ".$_POST['nombre']; 
    ?> 

 <!--        <h3>EDITAR CENTRO</h3>
       
        <form action="" method="POST" name="formCentro">
            <label for="n_centro">Nombre </label><input type="text" name="n_centro" id="n_centro"  value="<?php echo $_POST['n_centro'];?>" required>
            <br><br>
            <label for="direccion">Direccion </label><input type="text" name="direccion" id="direccion" value="<?php echo $_POST['direccion'];?>" required>
            <br><br>
            <label for="localidad">Localidad </label><input type="text" name="localidad" id="localidad" value="<?php echo $_POST['localidad'];?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="c_postal">Codigo Postal </label><input type="text" name="c_postal" id="c_postal" value="<?php echo $_POST['c_postal'];?>" pattern="[0-9]{5}" maxlength="5" required>
            <br><br>
            <label for="provincia">Provincia </label><input type="text" name="provincia" id="provincia" value="<?php echo $_POST['provincia'];?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
            
        </form> -->



        <?php
            modiAdmin();
        ?>