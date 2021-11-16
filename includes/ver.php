<?php

    function verAlumnos(){

        $conexion=conectarBD();
        $sql= "SELECT dni, nombre, apellidos FROM usuarios where tipo='alumno'";
        $consulta=$conexion->prepare($sql);
        $consulta->execute();
        //$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($resultado);

        while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){      
                echo $fila['dni']; 
                echo $fila['nombre'];
                echo $fila['apellidos'];
                
                ?>

                <FORM action="modiAlumnos.php" method="POST">
                    <input type="hidden" name="dni" value ="<?php echo $fila['dni']?>">
                    <input type="hidden" name="nombre" value ="<?php echo $fila['nombre']?>">
                    <input type="hidden" name="apellidos" value ="<?php echo $fila['apellidos']?>">
                    <input type ="submit" value="Modificar">
                </FORM>
                
                <FORM action="bajaAlumnos.php" method="POST">
                    <input type="hidden" name="dni" value ="<?php echo $fila['dni']?>">
                    <input type ="submit" value="Borrar">
                </FORM>

            <?php
                echo "<br>";
        }
    }



    function verProfesor(){

        $conexion=conectarBD();
        $sql= "SELECT dni, nombre, apellidos,clave FROM usuarios where tipo='profesor'";
        $consulta=$conexion->prepare($sql);
        $consulta->execute();

        while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){      
                echo $fila['dni']; 
                echo $fila['nombre'];
                echo $fila['apellidos'];
                echo $fila['clave'];
                
                ?>

                <FORM action="modiProfesor.php" method="POST">
                    <input type="hidden" name="dniP" value ="<?php echo $fila['dni']?>">
                    <input type="hidden" name="nombreP" value ="<?php echo $fila['nombre']?>">
                    <input type="hidden" name="apellidosP" value ="<?php echo $fila['apellidos']?>">
                    <input type="hidden" name="password" value ="<?php echo $fila['clave']?>">
                    <input type ="submit" value="Modificar">
                </FORM>
                
                <FORM action="bajaProfesor.php" method="POST">
                    <input type="hidden" name="dniP" value ="<?php echo $fila['dni']?>">
                    <input type ="submit" value="Borrar">
                </FORM>

               <?php

        }
    }


    function verCurso(){

        $conexion=conectarBD();
        $sql= "SELECT codigo, departamento FROM cursos";
        $consulta=$conexion->prepare($sql);
        $consulta->execute();

        while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){      
                echo $fila['codigo']; 
                echo $fila['departamento'];
                
                ?>

                <FORM action="modiCurso.php" method="POST">
                    <input type="hidden" name="nombre" value ="<?php echo $fila['codigo']?>">
                    <input type="hidden" name="departamento" value ="<?php echo $fila['departamento']?>">
                    <input type ="submit" value="Modificar">
                </FORM>
                
                <FORM action="bajaCurso.php" method="POST">
                    <input type="hidden" name="nombre" value ="<?php echo $fila['codigo']?>">
                    <input type ="submit" value="Borrar">
                </FORM>

               <?php

        }
    }



        function verCentro(){

            $conexion=conectarBD();
            $sql="SELECT * FROM centros";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
              
            
            while ($fila=$consulta->fetch(PDO::FETCH_ASSOC) ){
                echo $fila['nombre'];
                echo $fila['localidad'];
                echo $fila['provincia'];

            
            ?>
                <FORM action="modiCentro.php" method="POST">
                    <input type="hidden" name="n_centro" value ="<?php echo $fila['nombre']?>">
                    <input type="hidden" name="direccion" value ="<?php echo $fila['direccion']?>">
                    <input type="hidden" name="localidad" value ="<?php echo $fila['localidad']?>">
                    <input type="hidden" name="c_postal" value ="<?php echo $fila['codigopostal']?>">
                    <input type="hidden" name="provincia" value ="<?php echo $fila['provincia']?>">   
                <?php                

                   $centroNombre=$fila['nombre'];
                    $sql2="SELECT * FROM usuarios where centros_nombre='$centroNombre' and tipo='admin centro'";
                    $consulta2=$conexion->prepare($sql2);
                    $consulta2->execute();
                    $fila2=$consulta2->fetch(PDO::FETCH_ASSOC)

                   ?> 
                    <input type="hidden" name="dniA" value ="<?php echo $fila2['dni']?>">
                    <input type="hidden" name="nombreA" value ="<?php echo $fila2['nombre']?>">
                    <input type="hidden" name="apellidosA" value ="<?php echo $fila2['apellidos']?>">
                    
                    <input type="hidden" name="claveA" value ="<?php echo $fila2['clave']?>">  
                    <input type ="submit" value="Modificar">
                </FORM>

                <FORM action="bajaCentro.php" method="POST">
                    <input type="hidden" name="n_centro" value ="<?php echo $fila['nombre']?>">
                    <input type ="submit" value="Borrar">
                </FORM>

            <?php
             
            }

        }
        







   



?>