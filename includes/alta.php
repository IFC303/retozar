<?php


    //FUNCIONES PARA ALTAS 



        function altaAlumnos(){
            
            if (isset($_POST['dniA'])){
                
                    $nombre=$_POST['nombreA'];
                    $apellidos=$_POST['apellidosA'];
                    $dni=$_POST['dniA'];
                    $password=$_POST['claveA'];
                    $curso=$_POST['curso'];

                    $conexion=conectarBD();

                    //nombreCentroLog() funcion que recibe el nombre del centro del login
                    $nombrecentro=nombreCentroLog();

                    //usar la funcion de php count row para saber si hay fila, si hay 1 fila, no se inserta,si son 0 se inserta
                    $sql2 = "SELECT dni from usuarios where centros_nombre = '$nombrecentro' and dni = '$dni';";
                    $consulta2=$conexion->prepare($sql2);
                    $consulta2->execute();
                    $cuenta = $consulta2->rowCount();


                    if ($cuenta >=1) {
                        ?>
                            <script> alert ("ya existe, imposible insertar"); </script>
                        <?php

                    } else {
                        //INSERTAR ALUMNO EN TABLA USUARIOS
                        $sql2="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','$nombrecentro','alumno');";
                        $consulta2=$conexion->prepare($sql2);
                        $consulta2->execute();

                        //CONSULTA PARA SACAR EL EQUIPO
                        $sql3="SELECT * FROM equipos";
                        $consulta3=$conexion->prepare($sql3);
                        $consulta3->execute();
                        $fila3 = $consulta3->fetch(PDO::FETCH_ASSOC);
                        $idEquipo = $fila3['id'];

                        //INSERTAR ALUMNO EN TABLA ALUMNOS
                        $sql4="INSERT into alumnos values ('$dni',$idEquipo,'$curso','$nombrecentro');";
                        $consulta4=$conexion->prepare($sql4);
                        $consulta4->execute();

                    }
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

                    //nombreCentroLog() funcion que recibe el nombre del centro del login
                    $nombrecentro=nombreCentroLog();

                    //usar la funcion de php count row para saber si hay fila, si hay 1 fila, no se inserta,si son 0 se inserta
                    $sql2 = "SELECT dni from usuarios where centros_nombre = '$nombrecentro' and dni = '$dni';";
                    $consulta2=$conexion->prepare($sql2);
                    $consulta2->execute();
                    $cuenta = $consulta2->rowCount();


                    if ($cuenta >=1) {
                        ?>
                            <script> alert ("ya existe, imposible insertar"); </script>
                        <?php

                    } else {
                        //INSERTA EN TABLA USUARIOS
                        $sql="INSERT into usuarios values ('$dni','$nombre','$apellidos','$password','$nombrecentro','profesor');";
                        $consulta=$conexion->prepare($sql);
                        $consulta->execute();

                        //INSERTA EN TABLA PROFESORES
                        $sql3="INSERT into profesores values ('$dni','$departamento',0);";
                        $consulta3=$conexion->prepare($sql3);
                        $consulta3->execute();

                    }
            }
        }



    
        function altaCurso(){

            if (isset($_POST['nombre'])){

                    $nombre=$_POST['nombre'];
                    $departamento=$_POST['departamento'];
                    $conexion=conectarBD();

                    $nombrecentro=nombreCentroLog();

                    $sql2 = "SELECT codigo from cursos where centros_nombre =  '$nombrecentro' and codigo ='$nombre';";
                    $consulta2=$conexion->prepare($sql2);
                    $consulta2->execute();
                    $cuenta = $consulta2->rowCount();
                    

                    if ($cuenta >=1) {
                        ?>
                            <script> alert ("ya existe, imposible insertar"); </script>
                        <?php
                    } else {
                        $sql="INSERT into cursos values ('$nombre','$departamento','$nombrecentro');";
                        $consulta=$conexion->prepare($sql);
                        $consulta->execute();
                    }
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

                        $sql4="INSERT into profesores values ('$dni','$departamento',1);";
                        $consulta4=$conexion1->prepare($sql4);
                        $consulta4->execute();

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