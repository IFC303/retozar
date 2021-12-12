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

        $equipos=json_decode($grupo,true);      

          foreach($equipos as $gruposAlumnos){
                foreach($gruposAlumnos as $alumno){
                        foreach($alumno as $campos=>$valores)
                        echo $campos.": ".$valores;
                        echo "<br>";
                }    
                        
                }

              

     
}


/* 

        $conexion=conectarBD();
        $sql="UPDATE alumnos SET equipos_id='$departamento' where codigo='$nombre';" */;
          /*           echo $sql;
                    $consulta=$conexion->prepare($sql);
                    $consulta->execute(); */

             
           



    




?>