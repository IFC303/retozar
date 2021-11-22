<?php
    session_start();
    include "./../../includes/funciones.php";
    include "./../../includes/alta.php";
    include "./../../includes/baja.php";
    include "./../../includes/modi.php";
    include "./../../includes/ver.php";
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
    </header> <!-- fin header --> 
    <main>
        <div id="contenido">
            
            <form action="" method="POST" name="formCentro" class="styleform">
                    <h3>Editar Centro</h3>
                    <label for="n_centro"></label>
                        <input class="inp" type="text" name="n_centro" id="n_centro" value="<?php echo $_POST['n_centro'];?>" placeholder="Código Centro" readonly required>
                    <br><br>
                    <label for="direccion"></label>
                        <input class="inp" type="text" name="direccion" id="direccion" value="<?php echo $_POST['direccion'];?>" placeholder="Dirección" required>
                    <br><br>
                    <label for="localidad"></label>
                        <input class="inp" type="text" name="localidad" id="localidad" value="<?php echo $_POST['localidad'];?>" placeholder="Localidad" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                    <br><br>
                    <label for="c_postal"></label>
                        <input class="inp" type="text" name="c_postal" id="c_postal" value="<?php echo $_POST['c_postal'];?>"placeholder="Codigo Postal" pattern="[0-9]{5}" maxlength="5" required>
                    <br><br>
                    <label for="provincia"></label>
                        <input class="inp" type="text" name="provincia" id="provincia" value="<?php echo $_POST['provincia'];?>"placeholder="Provincia" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">

                    <!--  <input type="submit" value="Guardar" onclick="validarform3()"> -->

                    <br><br>

                    <h3>Editar Administrador</h3>
                    <label for="dniA"></label>
                    <input class="inp" type="text" name="dniA" id="dniA" placeholder="<?php echo $_POST['dniA'];?>"  readonly required placeholder="DNI"><br> <br>   
                    <label for="nombreA"></label>
                    <input class="inp" type="text" name="nombreA" id="nombreA" value="<?php echo $_POST['nombreA'];?>" placeholder="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
                    <label for="apellidosA"></label>
                    <input class="inp" type="text" name="apellidosA" id="apellidosA"value="<?php echo $_POST['apellidosA'];?>" placeholder="Apellidos" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
                    <label for="claveA"></label>
                    <input class="inp" type="password" name="claveA" id="claveA" value="<?php echo $_POST['claveA'];?>" placeholder="Clave" required><br><br>
                    <label for="departamento"></label>
                    <input class="inp" type="text" name="departamento" id="departamento" placeholder="Departamento"><br><br>
                
                        

                <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
                <input type="submit" value="Borrar formularios" name ="Aceptar" id="boton1" onclick="validarForm1()">  
            </form>
            <a href="iniAdminGeneral.php" class="btnvolver"> Volver al menú</a>
        </div>
    </main>  <!-- fin main --> 
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
</body>
</html>
        <?php
            modiCentro();
        ?>