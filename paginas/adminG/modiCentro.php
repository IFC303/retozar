
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



            <form action="" method="POST" name="formCentro">
                
                    <h3>DATOS DE CENTRO</h3>
                    
                    <label for="n_centro">Nombre </label><input type="text" name="n_centro" id="n_centro" value="<?php echo $_POST['n_centro'];?>" required>
                    <br><br>
                    <label for="direccion">Direccion </label><input type="text" name="direccion" id="direccion" value="<?php echo $_POST['direccion'];?>" required>
                    <br><br>
                    <label for="localidad">Localidad </label><input type="text" name="localidad" id="localidad" value="<?php echo $_POST['localidad'];?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                    <br><br>
                    <label for="c_postal">Codigo Postal </label><input type="text" name="c_postal" id="c_postal" value="<?php echo $_POST['c_postal'];?>" pattern="[0-9]{5}" maxlength="5" required>
                    <br><br>
                    <label for="provincia">Provincia </label><input type="text" name="provincia" id="provincia" value="<?php echo $_POST['provincia'];?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">

                    <!--  <input type="submit" value="Guardar" onclick="validarform3()"> -->

                    <br><br>
                    <h3>DATOS DEL ADMINISTRADOR</h3>

                       <!--    <label for="centro">Centro </label>
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
                    
                        
                        Nombre: <input type="text" name="nombreA" id="nombreA" value="<?php echo $_POST['nombre'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
                        Apellidos: <input type="text" name="apellidosA" id="apellidosA"value="<?php echo $_POST['apellidos'];?>"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
                        Dni: <input type="text" name="dniA" id="dniA" value="<?php echo $_POST['dni'];?>"  required><br> <br>
                        Contraseña: <input type="password" name="claveA" id="claveA" value="<?php echo $_POST['clave'];?>" required><br><br>
                        Departamento: <input type="text" name="departamento" id="departamento" value="<?php echo $_POST['departamento'];?>"  ><br><br>
                         
                        

                         <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
                <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">  
                <input type="submit" value="Borrar formularios" name ="Aceptar" id="boton1" onclick="validarForm1()">  

            </form>


    <a href="iniAdminGeneral.php"> Volver al menú</a>



        <?php
            modiCentro();
        ?>