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


?>
