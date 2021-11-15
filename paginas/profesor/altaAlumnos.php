
<?php
    include "./../../includes/funciones.php";
    session_start();
    $ver=altaAlumnos();
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>NUEVO ALUMNO</h3>
    <form action="" method="POST" name="formAlum">
           <label for="nombreA">Nombre:</label> <input type="text" name="nombreA" id="nombreA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
           <label for="apellidosA">Apellidos:</label>  <input type="text" name="apellidosA" id="apellidosA" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required><br> <br>
            <label for="dniA">Dni:</label><input type="text" name="dniA" id="dniA" required><br> <br>
            <label for="claveA">Contraseña:</label><input type="password" name="claveA" id="claveA" required><br><br>
            <label for="curso">Curso:</label><input type="text" name="curso" id="curso"><br><br>
            <input type="submit" value="Aceptar" name ="Aceptar" id="boton1" onclick="validarForm1()">   
    </form>

    
       <a href="iniProfesor.php" > Volver al menú</a>




</body>
</html>














    



