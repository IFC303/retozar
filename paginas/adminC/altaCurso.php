
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
                    <label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre">
                    <br><br>
                    <label for="departamento">Departamento </label><input type="text" name="departamento" id="departamento" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
                     <br><br>
                    <input type="submit" value="Guardar" onclick="validarform2()">
                </form>  

   
    
    <a href="iniAdminCentro.php">Volver al menu</a>


    <?php
        altaCurso();
    ?>
  
  
  
  
  
  
  
  
  
  
  <!--   <h3>Form Clase</h3>
    <form action="" method="POST" name="formAula">
        <label for="centro">Centro</label>
            <select name="departamento" id="departamento">
                <option value=" ">-- Seleccione Centro -- </option>
                <option value="informatica">CPIFP Bajo Aragón</option>
                <option value="automocion">CPIFP Corona de Aragón</option>
                <option value="sanitaria">CPIFP Los Enlaces</option>
            </select>
            <br> <br> 
        Nombre Clase: <input type="text" name="nomClase" id="aula" pattern="[a-zA-Z]{3}[0-9]" required> <br> <br>
        <input type="submit" value="Aceptar" id="boton2">
    </form> -->