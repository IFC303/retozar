<?php

            function bajaAlumnos(){
                if (isset($_POST['dni'])){
                    $dni=$_POST['dni'];
                    $conexion=conectarBD();
                    $sql="DELETE from usuarios WHERE dni='$dni'";
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute();
                    echo "Alumno borrado correctamente";
                    header("refresh:1;url=iniProfesor.php");
                }
            }


            function bajaProfesor(){
                if (isset($_POST['dniP'])){
                    $dni=$_POST['dniP'];
                    $conexion=conectarBD();
                    $sql="DELETE from usuarios WHERE dni='$dni'";
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute();
                    echo "Profesor borrado correctamente";
                    header("refresh:1;url=iniAdminCentro.php");
                }
            }



            function bajaCurso(){
                if (isset($_POST['nombre'])){
                    $nombre=$_POST['nombre'];
                    $conexion=conectarBD();
                    $sql="DELETE from cursos WHERE codigo='$nombre'";
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute();
                    echo "Curso borrado correctamente";
                    header("refresh:1;url=iniAdminCentro.php");
                }
            }


            
            function bajaCentro(){
                if(isset($_POST['n_centro'])){
                    $nombre=$_POST['n_centro'];

                    $conexion=conectarBD();
                    $sql="DELETE from centros WHERE nombre='$nombre'";
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute();
                    echo "Centro eliminado correctamente";
                    header("refresh:1;url=iniAdminGeneral.php");
                }
            }




?>