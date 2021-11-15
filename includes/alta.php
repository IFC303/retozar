<?php


    function altaAlumnos(){
        if (isset($_POST['dniP'])){
            $nombre=$_POST['nombreA'];
            $apellidos=$_POST['apellidosA'];
            $dni=$_POST['dniA'];
            $password=$_POST['claveA'];
            $curso=$_POST['curso'];

            $conexion=conectarBD();
            $sql="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','Q440415H','alumno');";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            echo "Alumno insertado correctamente";
        }
    }


    function altaProfesor(){
        if (isset($_POST['dniP'])){
            $nombre=$_POST['nombreP'];
            $apellidos=$_POST['apellidosP'];
            $dni=$_POST['dniP'];
            $password=$_POST['password'];
            $departamento=$_POST['departamento'];

            $conexion=conectarBD();
            $sql="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','Q4400415H','profesor');";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            echo "Profesor insertado correctamente";
        }
    }


    function altaCurso(){
        if (isset($_POST['nombre'])){
            $nombre=$_POST['nombre'];
            $departamento=$_POST['departamento'];

            $conexion=conectarBD();
            $sql="INSERT into cursos values ('$nombre','$departamento','Q4400415H');";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            echo "Curso insertado correctamente";
        }
    }





?>