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
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>

        <div id="img1">
            <img src="img/logocpfip.png" alt="logo_cpifp">
        </div>

        
        <div id="formulario">
            <h3>Form Login</h3>
            <form action="paginas/iniSesion.php" method="post" name="formLogin">
                Nombre: <input type="text" name="nombreL" id="nombreL" placeholder="Nombre" required><br> <br>
                Contraseña: <input type="password" name="claveL" id="claveL" placeholder="Contraseña" required> <br> <br>
                <input type="submit" name="Aceptar" value="Aceptar" id="boton3">
            </form>
        </div>

    </main>
    
    <footer>

        <div id="texto" >
            <p id="t1">Disc Aragón</p>
            <p id="t2">Test para formación de equipos de trabajo</p>
        </div>
        <div id="img2">
            <img src="img/logoSBR.png" alt="logo_SBR" width="95px" height="95px">
        </div>
    </footer>
     
</body>
</html>
