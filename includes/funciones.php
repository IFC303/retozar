<?php


        function conectarBD(){

            $servidor="192.168.4.245";
            $usuario="admin";
            $password="admin";
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

            $nombre=$_POST['nombreA'];
            $apellidos=$_POST['apellidosA'];
            $dni=$_POST['dni'];
            $password=$_POST['clave'];

            $conexion=conectarBD();
            $sql="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','Q4400415H','alumno');";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            echo "Alumno insertado correctamente";


        }
        
        
        function modiAlumnos(){
            if (isset($_POST['dni'])){

                $nombre=$_POST['nombreA'];
                $apellidos=$_POST['apellidosA'];
                $dni=$_POST['dni'];
                $password=$_POST['clave'];

                $conexion=conectarBD();
                $sql="UPDATE usuarios SET nombre = '$nombre', apellidosA = '$apellidos', clave='$password' where dni='$dni';";
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
                echo "Alumno eliminado correctamente";
            }

        }



        function verAlumnos(){

            $conexion=conectarBD();
            $sql= " SELECT nombre,apellidos FROM usuarios where tipo='alumno'";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            var_dump($resultado); 
            
        }


       

     
        

?>



