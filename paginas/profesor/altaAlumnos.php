<?php
    session_start();
    include "./../../includes/funciones.php";
    
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
        <h3>NUEVO ALUMNO</h3>

        <form action="" method="POST" name="formAlum" class="styleform">
            <input type="text" class="inp" name="nombreA" id="nombreA" placeholder="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            <input type="text" class="inp" name="apellidosA" id="apellidosA" placeholder="Apellidos" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            <input type="text" class="inp" name="dniA" id="dniA" required placeholder="DNI"><br> <br>
            <input type="password" class="inp" name="claveA" id="claveA" placeholder="Contraseña" required><br><br>
            <input type="text" class="inp" name="curso" id="curso" placeholder="Curso"><br><br>
        </form>

        <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()"> <br>
        <a class="btnvolver" href="iniProfesor.php" > Volver al menú</a>
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
    altaAlumnos();
?>
    

