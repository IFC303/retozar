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

<h2>Area Admin general</h2>

<?php
echo "Bienvenido " . $_SESSION['nombreL'];
?>


<br><br>
<ul>
    <li><a name="centro" onclick="mostrar(this.name);">Gestion centros</a></li>
    <br>
    <li><a name="test" onclick="mostrar(this.name);">Gestion test</a></li>
    <br>
</ul>

<div id="result" style="visibility:hidden">

    <ul id="gCentro" style="display:none">
        <li><a href="altaCentro.php">Alta centro</a></li>
        <br>
        <li><a href="verCentro.php">Ver ventros</a></li>
    </ul>

    <ul id="gTest" style="display:none">
        <li><a href="#">Nuevo test</a></li>
        <br>
    </ul>

</div>


</body>
</html>


<script src="./../iniMostrar.js"></script>
