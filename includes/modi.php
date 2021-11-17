<?php

function modiAlumnos(){
            
            if (isset($_POST['dni'])){

                $nombre=$_POST['nombreA'];
                $apellidos=$_POST['apellidosA'];
                $dni=$_POST['dni'];
                $password=$_POST['clave'];

                $conexion=conectarBD();
                $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', clave='$password' where dni='$dni';";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();
            } 
        }    


         function modiProfesor(){
            
            if (isset($_POST['dniP'])){

                $nombre=$_POST['nombreP'];
                $apellidos=$_POST['apellidosP'];
                $dni=$_POST['dniP'];
                $password=$_POST['password'];

                $conexion=conectarBD();
                $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', clave='$password' where dni='$dni';";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();
            } 
        }


       function modiCurso(){


            if (isset($_POST['nombre'])){

                $nombre=$_POST['nombre'];
                $departamento=$_POST['departamento'];

                $conexion=conectarBD();
                $sql="UPDATE cursos SET departamento='$departamento' where codigo='$nombre';";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();
            } 
        }   



        function modiCentro(){
            
            if (isset($_POST['n_centro'])){

                $nombre=$_POST['n_centro'];
                $direccion=$_POST['direccion'];
                $localidad=$_POST['localidad'];
                $cPostal=$_POST['c_postal'];
                $provincia=$_POST['provincia'];

                $nombreA=$_POST['nombreA'];
                $apellidosA=$_POST['apellidosA'];
                $dniA=$_POST['dniA'];
                $passwordA=$_POST['claveA'];

                $conexion=conectarBD();
                $sql="UPDATE centros SET nombre='$nombre', direccion='$direccion', localidad='$localidad', codigopostal='$cPostal', provincia='$provincia' where nombre='$nombre';";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();

                $conexion2=conectarBD();
                $sql2="UPDATE usuarios SET nombre='$nombreA', apellidos='$apellidosA', clave='$passwordA' where dni='$dniA';";
                $consulta2=$conexion2->prepare($sql2);
                $consulta2->execute();

     
            } 
        }   


         


?>