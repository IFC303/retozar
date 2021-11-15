
<?php
    session_start();
?>

<html>

        <head>
            <?php
                 include "./../../includes/funciones.php";
                 include "./../../includes/alta.php";
                 include "./../../includes/baja.php";
                 include "./../../includes/modi.php";
            ?>    
        </head>

  
                <form action="" method="POST" name="formCurso">
                    <label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre" placeholder="<?php echo $_POST['nombre'];?>" readonly>
                    <br><br>
                    <label for="departamento">Departamento </label><input type="text" name="departamento" id="departamento" value ="<?php echo $_POST['departamento'];?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                    <br><br>
                    <input type="submit" value="Guardar" onclick="validarform2()">
            </form>  


        <br>
        <a href="iniAdminCentro.php">Volver al menu</a>



        <?php
            modiCurso(); 
        ?>