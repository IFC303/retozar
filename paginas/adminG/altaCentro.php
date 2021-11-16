
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


        <form action="" method="POST" name="formCentro">
     
            <h3>DATOS DE CENTRO</h3>
            
            <label for="n_centro">Nombre </label><input type="text" name="n_centro" id="n_centro" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="direccion">Direccion </label><input type="text" name="direccion" id="direccion" required>
            <br><br>
            <label for="localidad">Localidad </label><input type="text" name="localidad" id="localidad" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="c_postal">Codigo Postal </label><input type="text" name="c_postal" id="c_postal" pattern="[0-9]{5}" maxlength="5" required>
            <br><br>
            <label for="provincia">Provincia </label><input type="text" name="provincia" id="provincia" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">

           <!--  <input type="submit" value="Guardar" onclick="validarform3()"> -->
     
           <h3>DATOS DEL ADMINISTRADOR</h3>

        <!--   <label for="centro">Centro </label>
            <select>
                <option>-- Selecciona un centro --</option>
                <optgroup label="Huesca">
                    <option>Aaaaa de Sabiñanigo</option>
                </optgroup>
                <optgroup label="Zaragoza">
                    <option>Aaaaa de Utebo</option>
                </optgroup>
                <optgroup label="Teruel">
                    <option>Aaaaa de Alcañiz</option>
                </optgroup>
            </select> -->

            <label for="nombreA"> Nombre: </label><input type="text" name="nombreA" id="nombreA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            <label for="apellidosA">Apellidos: </label><input type="text" name="apellidosA" id="apellidosA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            <label for="dniA">Dni: </label><input type="text" name="dniA" id="dniA" required><br> <br>
            <label for="claveA">Contraseña: </label><input type="password" name="claveA" id="claveA" required><br><br>
            <label for="departamento">Departamento: </label><input type="text" name="departamento" id="departamento"><br><br>
            <!-- <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">  -->  


    <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">  
    <input type="submit" value="Borrar formulario" name ="Aceptar" id="boton1" onclick="validarForm1()">  

</form>


    <a href="iniAdminGeneral.php"> Volver al menú</a>


<?php
    alta_centro_y_admin();
?>
