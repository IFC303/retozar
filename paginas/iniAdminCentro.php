<?php
    session_start();
?>

<html>

        <head></head>

        <body>

            <h2>Area de Administrador del centro</h2>
            <br>

            <?php
                echo "Bienvenido ".$_SESSION['nombreL'];
            ?>
            
         
           
            <br><br>
                

                <form id="formulario">
                        <input type="button" value="Gestion profesores" name="profesor" onclick="mostrar(this.name);">
                        <br><br>   
                        <input type="button" value="Gestion cursos" name="curso" onclick="mostrar(this.name);">
                        <br><br> 
                </form>  
            

                <ul id="altaProfesor" style="display:none">
                    <li><a href="aProfesor.php">Alta profesor</a></li>
                    <li><a href="verProfesor.php">Ver profesor</a></li>
                </ul>     
                
                <ul id="altaCurso" style="display:none">
                    <li><a href="aCurso.php">Alta curso</a></li>
                    <li><a href="verCurso.php">Ver curso</a></li>
                </ul>  
           

                <br><br>


        </body>
        <script src="iniProfesor.js"></script>
 

        


</html>