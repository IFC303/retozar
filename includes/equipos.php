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


function caracter(){

    

}



?>