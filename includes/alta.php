<?php


    function altaAlumnos(){
        if (isset($_POST['dniA'])){
            $nombre=$_POST['nombreA'];
            $apellidos=$_POST['apellidosA'];
            $dni=$_POST['dniA'];
            $password=$_POST['claveA'];
            $curso=$_POST['curso'];

            $clavelog = $_SESSION['nombreL'];
            $conexion=conectarBD();

            $sql2 = "SELECT centros_nombre from usuarios where dni = '$clavelog'";
            $consulta2=$conexion->prepare($sql2);
            $consulta2->execute();
            $fila = $consulta2->fetch(PDO::FETCH_ASSOC);
            $nombrecentro = $fila['centros_nombre'];


            $conexion=conectarBD();
            $sql="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','$nombrecentro','alumno');";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
/* 
            $sql3="INSERT into equipos values ('1');";
            $consulta3=$conexion->prepare($sql3);
            $consulta3->execute(); */

            $sql4="INSERT into alumnos values ('$dni','sin equipo','$curso','$nombrecentro');";
            $consulta4=$conexion->prepare($sql4);
            $consulta4->execute();



        }
    }


    function altaProfesor(){
        if (isset($_POST['dniP'])){
            $nombre=$_POST['nombreP'];
            $apellidos=$_POST['apellidosP'];
            $dni=$_POST['dniP'];
            $password=$_POST['password'];
            $departamento=$_POST['departamento'];

            $clavelog = $_SESSION['nombreL'];
            $conexion=conectarBD();

            $sql2 = "SELECT centros_nombre from usuarios where dni = '$clavelog'";
            $consulta2=$conexion->prepare($sql2);
            $consulta2->execute();
            $fila = $consulta2->fetch(PDO::FETCH_ASSOC);
            $nombrecentro = $fila['centros_nombre'];



            $sql="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','$nombrecentro','profesor');";
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


    function alta_centro_y_admin(){

        if (isset($_POST['n_centro'])){

            $nombre=$_POST['n_centro'];
            $direccion=$_POST['direccion'];
            $localidad=$_POST['localidad'];
            $cPostal=$_POST['c_postal'];
            $provincia=$_POST['provincia'];

            $nombreAdmin=$_POST['nombreA'];
            $apellidos=$_POST['apellidosA'];
            $dni=$_POST['dniA'];
            $password=$_POST['claveA'];
            $departamento=$_POST['departamento'];

            $conexion1=conectarBD();
            $sql1="INSERT into centros values('$nombre','$direccion','$localidad','$cPostal','$provincia');";
            $consulta1=$conexion1->prepare($sql1);
            $resultado = $consulta1->execute();
          
            if($resultado==1){
                $sql3="INSERT into usuarios values ('$dni','$nombreAdmin','$apellidos','$password','$nombre','admin centro');";
                $consulta3=$conexion1->prepare($sql3);
                $consulta3->execute();
                echo "insertado correctamente";
            }else{
                echo "ERROR: Ya existe un administrador para ese centro";
            }
        }
    }






?>