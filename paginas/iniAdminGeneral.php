<?php
    session_start();
?>

<html>

        <head>
            <?php
                include "../includes/funciones.php";
            ?>  
            <style>
                #gCentro{
                    display: none;
                }

                #gTest{
                    display: none;
                }

            </style>                     

        </head>


        <body>

                <h2>Area Admin general</h2>
            
                <?php
                    echo "Bienvenido ".$_SESSION['nombreL'];
                ?>


                <br><br>

                        <a name="centro" onclick="mostrar(this.name);">Gestion centro</a>
                        <br>
                        <a name="test" onclick="mostrar(this.name);">Gestion test</a>
 

                    <ul id="gCentro">
                        <li><a href="aCentros.php">Alta centro</a></li>
                        <li><a href="aAdminCentro.php">Alta admin centro</a></li>
                        <li><a href="centros.php">Ver centro</a></li>
                    </ul>              
               

                    <ul id="gTest" style="display:none">
                        <li><a href="altaAlumnos.php">Alta test</a></li>
                        <li><a href="verAlumnos.php">Modi test</a></li>
                    </ul>

                  

        </body>


    <script src="iniProfesor.js"></script>


</html>