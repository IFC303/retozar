<?php

function verAlumnos(){

    $nombrecentro=nombreCentroLog();

    $conexion=conectarBD();
    $sql= "SELECT dni, nombre, apellidos FROM usuarios where tipo='alumno' and centros_nombre = '$nombrecentro'";
    $consulta=$conexion->prepare($sql);
    $consulta->execute();
  

    ?>
        <table>
            <tr>
                <th >DNI</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th colspan =2>Opciones</th>
            </tr>
           
    <?php
    
    while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){

        ?>
            <tr>
                <td class="tdT"><?php echo $fila['dni'];?> </td>
                <td class="tdT"><?php echo ucwords($fila['nombre']);?> </td>
                <td class="tdT"><?php echo ucwords($fila['apellidos']);?> </td>
                <td class="tdI">
                    <FORM action="modiAlumnos" method="POST">
                    <input type="hidden" name="dniA" value ="<?php echo $fila['dni']?>">
                    <input type="hidden" name="nombreA" value ="<?php echo $fila['nombre']?>">
                    <input type="hidden" name="apellidosA" value ="<?php echo $fila['apellidos']?>">
                    <input type="hidden" name="claveA" value ="<?php echo $fila['apellidos']?>">
                    
                    <button type="submit" name="modificarAlumnoA" onclick="modiAlumnos();">
                        <img src="../../img/edit.svg">
                    </button>
        
                    </FORM>
                </td>
                <td>
                    <FORM action="bajaAlumnos" method="POST">
                        <input type="hidden" name="dniA" value ="<?php echo $fila['dni']?>">
                        <button type="submit" name="borrarAlumno" onclick="return confirm('¿Seguro que quieres eliminar este usuario?');">
                            <img src="../../img/trash.svg">
                        </button>
                    </FORM> 
                </td>
            </tr>
            <?php   
    
    }   ?>     
    </table>
    <?php
            echo "<br>";
}


    function verProfesor(){

            $nombrecentro=nombreCentroLog();

            $conexion=conectarBD();
            $sql= "SELECT dni, nombre, apellidos,clave FROM usuarios where tipo='profesor' and centros_nombre = '$nombrecentro'";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();


        ?>
        <table>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th colspan=2>Opciones</th>
            </tr>
        <?php

        while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){ 
            ?>
            <tr>
                <td class="tdT"><?php echo $fila['dni'];?> </td>
                <td class="tdT"><?php echo ucfirst($fila['nombre']);?> </td>
                <td class="tdT"><?php echo ucwords($fila['apellidos']);?> </td>
                
                <td class="tdI">
                    <FORM action="modiProfesor" method="POST">
                        <input type="hidden" name="dniP" value ="<?php echo $fila['dni']?>">
                        <input type="hidden" name="nombreP" value ="<?php echo $fila['nombre']?>">
                        <input type="hidden" name="apellidosP" value ="<?php echo $fila['apellidos']?>">
                        <input type="hidden" name="password" value ="<?php echo $fila['clave']?>">
                        <button type="submit" name="modificarProfe" onclick="modiProfesor();">
                            <img src="../../img/edit.svg">
                        </button>
                    </FORM>
                </td>

                <td>
                   <FORM action="bajaProfesor" method="POST">
                        <input type="hidden" name="dniP" value ="<?php echo $fila['dni']?>">
                        <button type="submit" name="borrarProfesor" onclick="return confirm('¿Seguro que quieres eliminar este usuario?');">
                            <img src="../../img/trash.svg">
                        </button>
                    </FORM> 
                </td>
            </tr>     
            <?php 
        
        } ?>

        </table>
        <?php
    }

    function verCurso(){

        $nombrecentro=nombreCentroLog();
       
        $conexion=conectarBD();
        $sql= "SELECT codigo, departamento FROM cursos where centros_nombre='$nombrecentro'";
        $consulta=$conexion->prepare($sql);
        $consulta->execute();
    

        ?>
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>DEPARTAMENTO</th>
                <th colspan =2>Opciones</th>
            </tr>
        <?php
    

        while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){     
            ?>
            
                <tr>
                    <td class="tdT"><?php echo ucfirst($fila['codigo']);?> </td>
                    <td class="tdT"><?php echo ucfirst($fila['departamento']);?> </td>   
                    <td class="tdI">
                        <FORM action="modiCurso" method="POST">
                            <input type="hidden" name="nombre" value ="<?php echo $fila['codigo']?>">
                            <input type="hidden" name="departamento" value ="<?php echo $fila['departamento']?>">
                            <button type="submit" name="modificarAlumnoA" onclick="modiCurso();">
                                <img src="../../img/edit.svg">
                            </button>
                        </FORM>
                    </td>
                    <td>
                        <FORM action="bajaCurso" method="POST">
                            <input type="hidden" name="nombre" value ="<?php echo $fila['codigo']?>">
                            <button type="submit" name="borrarCurso" onclick="return confirm('¿Seguro que quieres eliminar este curso?');">
                                <img src="../../img/trash.svg">
                            </button>
                        </FORM>
                    </td>
                </tr> 
                <?php
                }
                ?>
        </table>
               <?php
               echo "<br>";
    }




        function verCentro(){

            $conexion=conectarBD();
            $sql="SELECT * FROM centros";
            $consulta=$conexion->prepare($sql);
            $consulta->execute();
            
            ?>
                <table>
                    <tr>
                        <th>Codigo Centro</th>
                        <th>Localidad</th>
                        <th>Provincia</th>
                        <th>Codigo Postal</th>
                        <th>Administrador</th>
                        <th colspan =2>Opciones</th>
                    </tr>
                    <tr>
                    
            <?php

            while ($fila=$consulta->fetch(PDO::FETCH_ASSOC) ){
               
                $centroNombre=$fila['nombre'];
                $sql2="SELECT * FROM usuarios where centros_nombre='$centroNombre' and tipo='admin centro'";
                $consulta2=$conexion->prepare($sql2);
                $consulta2->execute();
                $fila2=$consulta2->fetch(PDO::FETCH_ASSOC)

                ?>
                
                    <td class="tdT"><?php echo strtoupper($fila['nombre']);?></td>
                    <td class="tdT"><?php echo ucwords($fila['localidad']);?></td>
                    <td class="tdT"><?php echo ucwords($fila['provincia']);?></td>
                    <td class="tdT"><?php echo $fila['codigopostal'];?></td>
                    <td class="tdT"><?php echo ucwords($fila2['nombre']);?></td>

                    <td class="tdI">
                        <FORM action="modiCentro" method="POST">
                            <input type="hidden" name="n_centro" value ="<?php echo $fila['nombre']?>">
                            <input type="hidden" name="direccion" value ="<?php echo $fila['direccion']?>">
                            <input type="hidden" name="localidad" value ="<?php echo $fila['localidad']?>">
                            <input type="hidden" name="c_postal" value ="<?php echo $fila['codigopostal']?>">
                            <input type="hidden" name="provincia" value ="<?php echo $fila['provincia']?>">   
                    
                            <input type="hidden" name="dniA" value ="<?php echo $fila2['dni']?>">
                            <input type="hidden" name="nombreA" value ="<?php echo $fila2['nombre']?>">
                            <input type="hidden" name="apellidosA" value ="<?php echo $fila2['apellidos']?>">
                            
                            <input type="hidden" name="claveA" value ="<?php echo $fila2['clave']?>">  
                            <button type="submit" name="modificarAlumnoA" onclick="modiCentro();">
                                <img src="../../img/edit.svg">
                            </button>
                        </FORM>  
                    </td>
                    
                    <td>
                        <FORM action="bajaCentro" method="POST">
                            <input type="hidden" name="n_centro" value ="<?php echo $fila['nombre']?>">
                            <button type="submit" name="borrarCentro" onclick="return confirm('¿Seguro que quieres eliminar este centro?');">
                                <img src="../../img/trash.svg">
                            </button>
                        </FORM>
                    </td>
                </tr>
                <?php 
            } ?>
            </table>
        <?php
        }

       

       function verPreguntas(){
                
                $dni=$_SESSION['nombreL'];
         
                $conexion=conectarBD();

                //CONTADOR RESPUESTAS POR ALUMNO
                $sql3="SELECT count('respuesta') as 'numero' from alumnos_has_preguntas WHERE alumno_dni='$dni';";
                $consulta3=$conexion->prepare($sql3);
                $consulta3->execute(); 
                $fila3=$consulta3->fetch(PDO::FETCH_ASSOC);
                $num=$fila3['numero'];

                
                 //INSERTA RESPUESTAS
                 if (isset($_POST['respuesta'])){

                    $valor=$_POST['respuesta'];
                    $id=$_POST['id'];
                    $sql2="INSERT into alumnos_has_preguntas values ('$dni',$id,'$valor');";
                    $consulta2=$conexion->prepare($sql2);
                    $consulta2->execute();
                    }
    

            if ($num<79){

                    ?>

                    <form action="#" method="POST" class="stiloform">

                        <?php
     
                                $sql0="SELECT * FROM preguntas where id not in (select pregunta_id from alumnos_has_preguntas where alumno_dni=$dni) order by rand() ;";
                                $consulta0=$conexion->prepare($sql0);
                                $consulta0->execute();
                                $fila2=$consulta0->fetch(PDO::FETCH_ASSOC);

                                $cuenta=$consulta0->rowCount();
                                echo "Te falta ".$cuenta." preguntas por contestar";
                                echo "<br>","<br>","<br>","<br>";
                           
                                echo $fila2['id'].". ";
                                echo $fila2['term'];
                                echo $fila2['desc'];
                                echo "<br>","<br>"; 

                                $id=$fila2['id'];

                                ?>
                                    <input type="hidden" id="id" name="id" value="<?php echo $fila2['id'];?>">
                                    <label for="respuesta">Verdadero<input type="radio" id=respuesta name="respuesta" value=5>
                                    <label for="respuesta">Falso<input type="radio" id=respuesta name="respuesta" value=0>
                                <?php

                        
                                echo "<br>","<br>";

                                ?>

                            <input type="submit" value="Aceptar" name="Aceptar" onclick="verPreguntas();" id="boton10">
                    </form>
                            <?php

            }else{
                ?>
                <div class="testfin">
                    <h3>Test finalizado</h3>
                </div>
                <?php
                
            }

        }




        function verRespuestas(){

                $dni=$_SESSION['nombreL'];

                $conexion=conectarBD();
                $sql="SELECT id,term,'desc',respuesta FROM preguntas,alumnos_has_preguntas where preguntas.id=alumnos_has_preguntas.pregunta_id 
                and alumnos_has_preguntas.alumno_dni=$dni;";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();
                ?>
                    <table>
                        <tr>
                            <th>Nº pregunta</th>
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                        </tr>
                <?php

                while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){ 
                    ?>
                    <tr>
                        <td><?php echo $fila['id']?></td>
                        <td><?php echo $fila['term']?></td>
                        <td>
                            <?php 
                                if($fila['respuesta']==5){
                                    echo "  Verdadero";
                                }else{
                                    echo "  Falso";
                                }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </table>  
                <?php  
                echo "<br>";

        }


        function verResultados(){
            
            $nombreCentroLog=nombreCentroLog();
            $curso=$_POST['curso'];

            if (isset($_POST['curso'])){

                $conexion=conectarBD();
                $sql="SELECT nombre,apellidos, alumno_dni,azul,rojo,amarillo,verde,equipos_id,cursos_codigo, cursos_centros_nombre
                 from total_colores, usuarios where alumno_dni=dni and cursos_codigo='$curso' and cursos_centros_nombre='$nombreCentroLog';";
                $consulta=$conexion->prepare($sql);
                $consulta->execute();

                $fila=$consulta->fetchAll(PDO::FETCH_ASSOC);
               
                return $fila;

            }
     
        }


     
       

?>












        
