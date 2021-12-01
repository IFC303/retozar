<?php
    session_start();
    include "./../../includes/funciones.php";
    include "./../../includes/alta.php";
    include "./../../includes/baja.php";
    include "./../../includes/modi.php";
    include "./../../includes/ver.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
    <link rel="stylesheet" href="../../css/inipro.css"> 
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
                
                
                <div id="contenedormain">    

                    <div class="bienv">
                        <?php
                            /* echo "Bienvenido ".$_SESSION['nombreL']; */
                            nombreLog();
                      
                        ?>
                    </div>

                    <div id="enlacesA">
                    <ul>
                        <li><a href="verPreguntas">Iniciar test</a></li><br>
                        <li><a href="verRespuestas">Ver respuestas</a></li>
                    </ul>
                    </div> <!-- fin enlaces -->
                   

                       <!-- <input type="submit" value="iniciar test" name="iniciar test"> -->

                    <?php
                    /* verPreguntas(); */
                    ?>
                    <br><br>
                    <a href="../cerrarSesion" class="btnvolver">Cerrar sesión</a>
                    
<!-- 
                        <div id="contenedoraux">
 -->
                      
                        <!-- </div>   -->
           
                
                </div>
                
               

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
                    <img src="../../img/logoSBR.png" alt="logo_SBR" width="95px" height="95px">
                </div> <!-- fin img2 -->
            </footer><!-- fin footer -->

        </body>

</html>
