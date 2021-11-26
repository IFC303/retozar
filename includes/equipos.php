<?php

function equiposAutomaticos(){

           $nombrecentro=nombreCentroLog();
           $nomCurso=$_POST['curso'];
 
           $conexion=conectarBD();
           $sql=" SELECT count(distinct alumno_dni) as suma from total where cursos_centros_nombre='$nombrecentro' and cursos_codigo='$nomCurso';";
           $consulta=$conexion->prepare($sql);
           $consulta->execute();
           $fila=$consulta->fetch(PDO::FETCH_ASSOC);
           $numAlumnos=$fila['suma']; 

                if($numAlumnos%4==0){
                        $numEquiposCuatro=$numAlumnos/4;
                        echo $numEquiposCuatro. " de cuatro";
                        echo $numEquiposTres. " de tres";
                }else if ($numAlumnos%4==1){
                        $numEquiposCuatro=(($numAlumnos-9)/4);
                        $numEquiposTres=3;
                        echo $numEquiposCuatro. " de cuatro";
                        echo $numEquiposTres. " de tres";
                }else if ($numAlumnos%4==2){
                        $numEquiposCuatro=(($numAlumnos-6)/4);
                        $numEquiposTres=2;
                        echo $numEquiposCuatro. " de cuatro";
                        echo $numEquiposTres. " de tres";
                }else if ($numAlumnos%4==3){
                        $numEquiposCuatro=(($numAlumnos-3)/4);
                        $numEquiposTres=1;
                        echo $numEquiposCuatro. " de cuatro";
                        echo $numEquiposTres. " de tres";
                }
        }



?>