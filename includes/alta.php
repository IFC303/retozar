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


            //CONSULTA PAAR RECUPERAR EL NOMBRE DEL CENTRO
            $sql = "SELECT centros_nombre from usuarios where dni = '$clavelog'";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            $fila = $consulta->fetch(PDO::FETCH_ASSOC);
            $nombrecentro = $fila['centros_nombre'];


            //INSERTAR ALUMNO EN USUARIOS
            $sql2="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','$nombrecentro','alumno');";
            $consulta2=$conexion->prepare($sql2);
            $consulta2->execute();


            //CONSULTA PARA SACAR EL EQUIPO
            $sql3="SELECT * FROM equipos";
            $consulta3=$conexion->prepare($sql3);
            $consulta3->execute();
            $fila3 = $consulta3->fetch(PDO::FETCH_ASSOC);
            $idEquipo = $fila3['id'];


            //INSERTAR EN TABLA ALUMNOS
            $sql4="INSERT into alumnos values ('$dni',$idEquipo,'$curso','$nombrecentro');";
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
            }else{
                ?>
                    <script>
                        alert('ERROR: Ya existe un administrador para ese centro')
                    </script>
                <?php    
            }
        }
    }






?>