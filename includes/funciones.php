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



        function altaAlumnos(){

            if (isset($_POST['dniA'])){

                $nombre=$_POST['nombreA'];
                $apellidos=$_POST['apellidosA'];
                $dni=$_POST['dniA'];
                $password=$_POST['claveA'];
                $curso=$_POST['curso'];
                $conexion=conectarBD();
                $sql="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','CPIFP Bajo Aragon','alumno');";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();

                echo "Alumno insertado correctamente";
            }
        }

        
        
        function modiAlumnos(){
            if (isset($_POST['dni'])){

                $nombre=$_POST['nombreA'];
                $apellidos=$_POST['apellidosA'];
                $dni=$_POST['dni'];
                $password=$_POST['clave'];

                $conexion=conectarBD();
                $sql="UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', clave='$password' where dni='$dni';";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();
                echo "Alumno eliminado correctamente";
            } 
        }    
        
        
        function bajaAlumnos(){
            if (isset($_POST['dni'])){
                $dni=$_POST['dni'];
                $conexion=conectarBD();
                $sql="DELETE from usuarios WHERE dni='$dni'";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();
                echo "Alumno borrado";
            }
        }



        function verAlumnos(){

            $conexion=conectarBD();
            $sql= "SELECT dni, nombre, apellidos FROM usuarios where tipo='alumno'";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            //$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($resultado);

            while($fila = $consulta->fetch(PDO::FETCH_ASSOC))
                {      
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
                            <input type ="submit" value="borrar">
                        </FORM>
    
                       <?php
                        echo "<br>";
                }
        }




  
        

?>



