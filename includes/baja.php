<?php

            function bajaAlumnos(){
                if (isset($_POST['dniA'])){
                    $dni=$_POST['dniA'];
                    $conexion=conectarBD();

                    //primero borrado en la tabla alumnos
                    $sql="DELETE from alumnos where usuarios_dni='$dni'";
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute();
                    //borrado en la tabla usuarios
                    $sql2="DELETE from usuarios WHERE dni='$dni'";
                    $consulta2=$conexion->prepare($sql2);
                    $consulta2->execute();

                    header('Location: url=../../verAlumnos.php');
                }
            }

            function bajaProfesor(){
                if (isset($_POST['dniP'])){
                    $dni=$_POST['dniP'];
                    $conexion=conectarBD();
                    $sql="DELETE from usuarios WHERE dni='$dni'";
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute();
                    header('Location: url=../../verProfesor.php');
                }
            }



            function bajaCurso(){
                if (isset($_POST['nombre'])){
                    $nombre=$_POST['nombre'];
                    $conexion=conectarBD();
                    $sql="DELETE from cursos WHERE codigo='$nombre'";
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute();
                    header('Location: url=../../verCurso.php');
                    
                }
            }


            
            function bajaCentro(){
                if(isset($_POST['n_centro'])){
                    $nombre=$_POST['n_centro'];

                    $conexion2=conectarBD();
                    $sql2="DELETE from usuarios WHERE centros_nombre='$nombre'" ;
                    $consulta2=$conexion2->prepare($sql2);
                    $consulta2->execute();

                    $conexion1=conectarBD();
                    $sql1="DELETE from centros WHERE nombre='$nombre'" ;
                    $consulta1=$conexion1->prepare($sql1);
                    $consulta1->execute();
                    header('Location: url=../../verCentro.php');
                }
            }




?>