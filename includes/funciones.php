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




        function nombreLog(){

            $dniLog=$_SESSION['nombreL'];
    
            $conexion=conectarBD();
            $sql="SELECT nombre from usuarios where dni='$dniLog'" ;
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            
            $fila=$consulta->fetch(PDO::FETCH_ASSOC);
            echo "Bienvenido ". $fila['nombre'];
        }
  


        function nombreCentroLog(){

            $clavelog = $_SESSION['nombreL'];

            $conexion=conectarBD();

            $sql2 = "SELECT centros_nombre from usuarios where dni = '$clavelog'";
            $consulta2=$conexion->prepare($sql2);
            $consulta2->execute();
            $fila = $consulta2->fetch(PDO::FETCH_ASSOC);
            $nombrecentro = $fila['centros_nombre'];

            return $nombrecentro;

        }


?>



