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

        


  

        function verCentro(){

            $conexion=conectarBD();
            $sql="SELECT * FROM centros";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
              

            while($fila=$consulta->fetch(PDO::FETCH_ASSOC) ){
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



