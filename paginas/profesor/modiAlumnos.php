
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
            <h3>MODIFICAR ALUMNO</h3>

            <form action="" method="POST" name="formAlum" class="styleform">
                <label for="dni"></label><input class="inp" type="text" name="dniA" id="dniA" required value="<?php echo $_POST['dniA'];?>" readonly><br> <br>
                <label for="nombreA"></label><input class="inp" type="text" name="nombreA" id="nombreA" value="<?php echo $_POST['nombreA'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
                <label for="apellidosA"></label><input class="inp" type="text" name="apellidosA" id="apellidosA"  value="<?php echo $_POST['apellidosA'];?>" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
                <label for="claveA"></label><input class="inp" type="password" name="claveA" id="claveA" required placeholder="Contraseña"> <br> <br>
                <label for="curso"></label><input class="inp" type="text" name="curso" id="curso" placeholder="Curso"><br><br>
                <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">
            </form>
            <a class="btnvolver" href="verAlumnos">Volver Menu</a>
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
        modiAlumnos();
    ?>