<?php
    session_start();
?>

<html>

        <head>
            <?php
                include "./../../includes/funciones.php";
            ?>    
        </head>


        <body>

                <h2>Area de profesores</h2>
            
                <?php
                    echo "Bienvenido ".$_SESSION['nombreL'];
                ?>


                <br><br>
                

                    
                            <a name="alumnos" onclick="mostrar(this.name);">Gestion alumnos</a>
                            <br><br>
                            <a name="grupos" onclick="mostrar(this.name);">Gestion grupos</a>
                            <br><br>
                            <a name="resultados" onclick="mostrar(this.name);">Ver resultados</a>
                   
                

                    <ul id="gAlumnos" style="display:none">
                        <li><a href="altaAlumnos.php">Alta alumnos</a></li>
                        <li><a href="verAlumnos.php">Ver alumnos</a></li>
                    </ul>              
               
                    <ul id="gGrupos" style="display:none">
                        <li><a href="#">Alta grupo</a></li>
                        <li><a href="#">Ver grupos</a></li>
                    </ul>

                    <ul id="resultados" style="display:none">
                        <li><a href="#">Resultado por alumno</a></li>
                        <li><a href="#">Resultado por grupos</a></li>
                    </ul>

                    <br><br>
                


        </body>


    <script src="./../iniMostrar.js"></script>


</html>