
<?php
    session_start();
    include "./../../includes/funciones.php";
    include "./../../includes/alta.php";
    include "./../../includes/baja.php";
    include "./../../includes/modi.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/altaalum.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>

        <header>
            <div id="texto" >
                    <p id="t1">Disc Aragón</p>
                    <p id="t2">Test para formación de equipos de trabajo</p>
            </div> 
        </header>
        <main>

        <div id="contenido">
            <h3>DATOS DEL CENTRO</h3>
        <form action="altaCentro.php" method="POST" name="formCentro" class="styleform">
            <input type="text" class="inp" name="n_centro" id="n_centro" placeholder="Nombre" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <input type="text" class="inp" name="direccion" id="direccion" placeholder="Direccion" required>
            <br><br>
            <input type="text" class="inp" name="localidad" id="localidad" placeholder="Localidad" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <input type="text" class="inp" name="c_postal" id="c_postal" pattern="[0-9]{5}" maxlength="5" placeholder="Codigo postal" required>
            <br><br>
            <input type="text" class="inp" name="provincia" id="provincia" required placeholder="provincia" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">

           <!--  <input type="submit" value="Guardar" onclick="validarform3()"> -->
     
           <h3>DATOS DEL ADMINISTRADOR</h3>

            <input type="text" class="inp"  name="nombreA" id="nombreA" placeholder="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            <input type="text" class="inp" name="apellidosA" id="apellidosA" placeholder="Apellidos" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            <input type="text" name="dniA" class="inp" id="dniA" placeholder="Dni" required><br> <br>
            <input type="password" class="inp"  name="claveA" id="claveA" placeholder="Contraseña" required><br><br>
            <input type="text" class="inp" name="departamento" id="departamento" placeholder="Deoartamento"><br><br>

            <input type="submit" value="Aceptar" name="Aceptar" id="boton1" onclick="return confirm('¿Seguro que quieres añadir este centro?');">
            <input type="submit" value="Borrar formulario" name ="Aceptar" id="boton1" onclick="validarForm1()">  

        </form>

        <br>
        <a class="btnvolver" href="iniAdminGeneral.php"> Volver al menú</a>
        </div><!-- fin contenido -->

        </main>


    <footer>
            <div id="img1">
                <picture>
                    <source media="(min-width:650px)" srcset="../../img/logocpfip.png">
                    <source media="(min-width:465px)" srcset="../../img/logocpfip_bkzdvb_c_scale,w_200.png">
                    <img src="../../img/logocpfip_bkzdvb_c_scale,w_200.png" alt="Flowers" style="width:auto;">
                </picture>
            </div> <!-- fin img1 -->

            <div id="img2">
                <picture>
                    <source media="(min-width:650px)" srcset="../../img/logoSBR.png" width="95px" height="95px">
                    <img src="../../img/logoSBR.png" alt="logo_SBR" width="70px" height="70px">
                </picture>
               
            </div> <!-- fin img2 -->

    </footer><!-- fin footer -->
   

    <?php
    if(isset($_POST['Aceptar']))
            {
                alta_centro_y_admin();
            }
    ?>
    
    

</body>
</html>
