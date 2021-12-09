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
                            nombreLog();
                        ?>
                        <a href="../cerrarSesion" class="btnvolver">Cerrar sesión</a>
                    </div>

                

                <div id="contenedoraux">

                    <div id="enlaces">
                        <ul>
                            <li><a name="alumnos" onclick="mostrar(this.name);">Gestion alumnos</a></li>
                        <!--     <li><a name="grupos" onclick="mostrar(this.name);">Gestion grupos</a></li> -->
                            <li><a name="resultados" onclick="mostrar(this.name);">Gestion equipos de trabajo</a></li>
                        </ul>
                    </div> <!-- fin enlaces -->     
                    

                    <div id="result" style="visibility:hidden">
                        <ul id="gAlumnos" style="display:none">
                            <li><a href="altaAlumnos">Alta alumnos</a></li><br>
                            <li><a href="verAlumnos">Ver alumnos</a></li>
                        </ul>              
                      <!--   <ul id="gGrupos" style="display:none">
                            <li><a href="#">Alta grupos</a></li><br>
                            <li><a href="#">Ver grupos</a></li>
                        </ul> -->
                        <ul id="resultados" style="display:none">
                            <li><a href="verResultados">Propuesta automatica de equipos</a></li><br>
                        </ul>
                    </div> <!-- fin result -->

                </div> <!-- fin contenedoraux-->

            </div> <!-- fin contenedor main -->


        </main> <!-- fin main -->
        

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

        </body> <!-- fin body -->
</html>

    <script src="./../iniMostrar.js"></script>


