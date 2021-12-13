
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
            <p id="t1"><a href="/" class="title">Disc Aragón</a></p>
            <p id="t2">Test para formación de equipos de trabajo</p>
        </div> 
    </header>


    <main>
        <div id="contenido">
            <h3>Editar Profesor</h3>

            <form action="" method="POST" name="formPro" class="styleform">
                <br>
               <label for="dniP"></label><input class="inp" type="text" name="dniP" id="dniP" maxlength="9" required value="<?php echo $_POST['dniP'];?>" readonly placeholder="DNI">
                <br><br>
                <label for="nombre"></label><input  class="inp" type="text" name="nombreP" id="nombre" value="<?php echo $_POST['nombreP'];?>" placeholder="Nombre" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                <br><br>
                <label for="apellidos"></label><input class="inp" type="text" name="apellidosP" id="apellidosP" value="<?php echo $_POST['apellidosP'];?>" placeholder="Apellidos"  required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                <br><br>
                <label for="password"></label><input class="inp" type="password" name="password" id="password" required placeholder="Contraseña">
                <br><br>
                <label for="departamento"></label><input class="inp" type="text" name="departamento" id="departamento" placeholder="Departamento" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                <br><br>
                <input type="submit" value="Guardar" id="boton1" onclick="validarform2()">
            </form>     
            <a class="btnvolver" href="verProfesor">Volver al menu</a>
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


</body>
</html>


        <?php
            modiProfesor();
        ?>

         