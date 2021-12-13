<?php

        function equiposAutomaticos(){

                $nombrecentro=nombreCentroLog();
                $nomCurso=$_POST['curso'];
        
                $conexion=conectarBD();
                $sql=" SELECT count(distinct alumno_dni) as suma from total_colores where cursos_centros_nombre='$nombrecentro' and cursos_codigo='$nomCurso';";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();
                $fila=$consulta->fetch(PDO::FETCH_ASSOC);
                $numAlumnos=$fila['suma'];
                
                return $numAlumnos;

        }



        function insertarEquipos($grupo){

                $equipos=json_decode($grupo);
                $i=0;

                foreach($equipos as $gruposAlumnos){
                        $i++;
                        echo "<br>Grupo ".$i."<br><br>";
                        foreach($gruposAlumnos as $alumno){
                                $nombre=$alumno->nombre;
                                $dni=$alumno->alumno_dni;
                                $equipo=$alumno->equipos_id;
                                $apellidos=$alumno->apellidos;
                                echo "Nombre: ".$nombre." ".$apellidos."<br>";
                        }      
                }  
        
                $conexion=conectarBD();

/* 
                $sql="INSERT into equipos values ($equipo);";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();


                $sql2="UPDATE alumnos set equipos_id='$equipo' where usuarios_dni='$dni';";
                $consulta2=$conexion->prepare($sql2);
                $consulta2->execute();  */

            }
          
              
        





?>