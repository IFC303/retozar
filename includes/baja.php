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

                    $conexion2=conectarBD();
                    $sql2="DELETE from usuarios WHERE centros_nombre='$nombre'" ;
                    $consulta2=$conexion2->prepare($sql2);
                    $consulta2->execute();

                    $conexion1=conectarBD();
                    $sql1="DELETE from centros WHERE nombre='$nombre'" ;
                    $consulta1=$conexion1->prepare($sql1);
                    $consulta1->execute();

                    echo "Centro eliminado correctamente";
                    header("refresh:1;url=iniAdminGeneral.php");
                }
            }




?>