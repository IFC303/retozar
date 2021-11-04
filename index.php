<?php
    session_start();
   
?>


<html>

        <head></head>

        <body>
        
            <form action="paginas/iniSesion.php" method="post" name="formLogin">
                <label for="nombreL"></label>Nombre: <input type="text" name="nombreL" id="nombreL" required>
                <br><br>
                <label for="claveL"></label>Contraseña: <input type="password" name="claveL" id="claveL" required>
                <br><br>  
                <input type="submit" name="Aceptar" value="Aceptar" id="boton3"> 
            </form>

        <body>  

</html>