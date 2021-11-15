<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "./../../includes/funciones.php";
    ?>  
</head>
<body>

            <h2>Area Administrador del centro</h2>
            
            <?php
                echo "Bienvenido ".$_SESSION['nombreL'];
            ?>

            <br><br>
              <ul>
                  <li><a name="profesor" onclick="mostrar(this.name);">Gestion profesores</a></li>
                  <br>
                  <li><a name="curso" onclick="mostrar(this.name);">Gestion cursos</a></li>
                  <br>
              </ul> 

          
        <div id="result" style="visibility:hidden">
              <ul id="gProfesor" style="display:none">
                <li><a href="altaProfesor.php">Alta profesor</a></li><br>
                <li><a href="verProfesor.php">Ver profesores</a></li>
              </ul>     
            
               
            <ul id="gCurso" style="display:none">
                <li><a href="altaCurso.php">Alta curso</a></li><br>
                <li><a href="verCurso.php">Ver cursos</a></li>
            </ul>
        </div>

    
</body>
</html>


<script src="./../iniMostrar.js"></script>








            
             
