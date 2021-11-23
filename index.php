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
    <header>
        <div id="img1">
            <picture>
                <source media="(min-width:650px)" srcset="img/logocpfip.png">
                <source media="(min-width:465px)" srcset="img/logocpfip_bkzdvb_c_scale,w_200.png">
                <img src="img/logocpfip_bkzdvb_c_scale,w_200.png" alt="Flowers" style="width:auto;">
            </picture>
        </div>
    </header>
    
    <main>
        <div id="formulario">
            <form action="paginas/iniSesion.php" method="post" name="formLogin">
                <div class="divF">
                    <img class="iconc" src="img/usuario.png" alt=""><input class="inp" type="text" name="nombreL" id="nombreL" placeholder="Nombre" required>
                </div> 

                <div class="divF">
                <img class="iconc" src="img/lock.png" alt=""><input class="inp" type="password" name="claveL" id="claveL" placeholder="Contraseña" required>  
                </div>    

                <input type="submit" name="Aceptar" value="Iniciar Sesión" id="boton3">
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
