<?php


        function conectarBD(){

            $servidor="localhost:3306";
            $usuario="root";
            $password="toor";
            $baseDatos="disc";

            $opciones = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            );

            try {
                $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$password,$opciones);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion;
            }catch (PDOException $e){
                echo "error en la conexion ".$e->getMessage();
                die();
            }
        }

        

            /* function alta_centro_y_admin(){

                if (isset($_POST['n_centro'])){

                    $nombre=$_POST['n_centro'];
                    $direccion=$_POST['direccion'];
                    $localidad=$_POST['localidad'];
                    $cPostal=$_POST['c_postal'];
                    $provincia=$_POST['provincia'];

                    $nombreAdmin=$_POST['nombreA'];
                    $apellidos=$_POST['apellidosA'];
                    $dni=$_POST['dniA'];
                    $password=$_POST['claveA'];
                    $departamento=$_POST['departamento'];

                    $conexion1=conectarBD();
                    $sql1="INSERT into centros values('$nombre','$direccion','$localidad','$cPostal','$provincia');";
                    $consulta1=$conexion1->prepare($sql1);
                    $resultado = $consulta1->execute();
                  
                    if($resultado==1){
                        $sql3="INSERT into usuarios values ('$dni','$nombreAdmin','$apellidos','$password','$nombre','admin centro');";
                        $consulta3=$conexion1->prepare($sql3);
                        $consulta3->execute();
                        echo "insertado correctamente";
                    }else{
                        echo "ERROR: Ya existe un administrador para ese centro";
                    }
                }
            } */




        // VISUALIZAR USUARIOS, CENTROS, PROFES ....

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
      





        //VER, MODIFICAR Y BORRAR CENTROS Y ADMIN CENTROS
        function verCentro(){

            $conexion=conectarBD();
            $sql1="SELECT * FROM centros";
            $consulta1=$conexion->prepare($sql1);
            $consulta1->execute();
              

            while($fila=$consulta1->fetch(PDO::FETCH_ASSOC) ){
                echo $fila['nombre'];
                echo $fila['direccion'];
                echo $fila['localidad'];
                echo $fila['codigopostal'];
                echo $fila['provincia'];
            
            ?>
                <FORM action="modiCentro.php" method="POST">
                    <input type="hidden" name="n_centro" value ="<?php echo $fila['nombre']?>">
                    <input type="hidden" name="direccion" value ="<?php echo $fila['direccion']?>">
                    <input type="hidden" name="localidad" value ="<?php echo $fila['localidad']?>">
                    <input type="hidden" name="c_postal" value ="<?php echo $fila['codigopostal']?>">
                    <input type="hidden" name="provincia" value ="<?php echo $fila['provincia']?>">


                    
                    
                    
                    <input type ="submit" value="Modificar">
                </FORM>

                <FORM action="bajaCentro.php" method="POST">
                    <input type="hidden" name="n_centro" value ="<?php echo $fila['nombre']?>">
                    <input type ="submit" value="Borrar">
                </FORM>

            <?php
                echo "<br>";
            }
            

            if (isset ($_POST['dniA'])) {

                $dni=$_POST['dniA'];
                $conexion2=conectarBD();
                $sql2="SELECT * FROM usuarios WHERE dni='$dni'";
                $consulta2=$conexion2->prepare($sql2);
                $consulta2->execute();

                while($fila=$consulta2->fetch(PDO::FETCH_ASSOC)){
                        echo $fila['nombre'];
                        echo $fila['apellidos'];
                        echo $fila['dni'];
                        echo $fila['clave'];
                                            
                                ?>
                    <FORM action="modiCentro.php" method="POST">
                        <input type="text" name="nombreA" value ="<?php echo $fila['nombre']?>">
                        <input type="text" name="apellidosA" value ="<?php echo $fila['apellidos']?>">
                        <input type="text" name="dniA" value ="<?php echo $fila['dni']?>">
                        <input type="text" name="claveA" value ="<?php echo $fila['clave']?>">  
                    </FORM>



                                    <?php
                                                
                                } 


            }
                
                

            }
        




  
        

?>



