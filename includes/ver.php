<?php

function verAlumnos(){

    $clavelog = $_SESSION['nombreL'];
        $conexion=conectarBD();

    $sql2 = "SELECT centros_nombre from usuarios where dni = '$clavelog'";
    $consulta2=$conexion->prepare($sql2);
    $consulta2->execute();
    $fila = $consulta2->fetch(PDO::FETCH_ASSOC);
    $nombrecentro = $fila['centros_nombre'];


    $conexion=conectarBD();
    $sql= "SELECT dni, nombre, apellidos FROM usuarios where tipo='alumno' and centros_nombre = '$nombrecentro'";
    $consulta=$conexion->prepare($sql);
    $consulta->execute();
    //$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($resultado);

    ?>
        <table border="1">
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
                <td><?php echo $fila['dni'];?> </td>
                <td><?php echo $fila['nombre'];?> </td>
                <td><?php echo $fila['apellidos'];?> </td>
                <td>
                    <FORM action="modiAlumnos.php" method="POST">
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
                    <FORM action="bajaAlumnos.php" method="POST">
                        <input type="hidden" name="dniA" value ="<?php echo $fila['dni']?>">
                        <button type="submit" name="borrarAlumno" onclick="bajaAlumnos();">
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
        
            $clavelog = $_SESSION['nombreL'];
            $conexion=conectarBD();

            $sql2 = "SELECT centros_nombre from usuarios where dni = '$clavelog'";
            $consulta2=$conexion->prepare($sql2);
            $consulta2->execute();
            $fila = $consulta2->fetch(PDO::FETCH_ASSOC);
            $nombrecentro = $fila['centros_nombre'];


        $conexion=conectarBD();
        $sql= "SELECT dni, nombre, apellidos,clave FROM usuarios where tipo='profesor' and centros_nombre = '$nombrecentro'";
        $consulta=$conexion->prepare($sql);
        $consulta->execute();



        ?>
        <table border="1">
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
                <td><?php echo $fila['dni'];?> </td>
                <td><?php echo $fila['nombre'];?> </td>
                <td><?php echo $fila['apellidos'];?> </td>
                
                <td>
                    <FORM action="modiProfesor.php" method="POST">
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
                   <FORM action="bajaProfesor.php" method="POST">
                        <input type="hidden" name="dniP" value ="<?php echo $fila['dni']?>">
                        <button type="submit" name="borrarProfesor" onclick="bajaProfesor();">
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

        $conexion=conectarBD();
        $sql= "SELECT codigo, departamento FROM cursos";
        $consulta=$conexion->prepare($sql);
        $consulta->execute();
    

        ?>
        <table border="1">
            <tr>
                <th>NOMBRE</th>
                <th>DEPARTAMENTO</th>
                <th colspan =2>Opciones</th>
            </tr>
        <?php

        while($fila = $consulta->fetch(PDO::FETCH_ASSOC)){     
            ?>
            
                <tr>
                    <td><?php echo $fila['codigo'];?> </td>
                    <td><?php echo $fila['departamento'];?> </td>   
                    <td>
                        <FORM action="modiCurso.php" method="POST">
                            <input type="hidden" name="nombre" value ="<?php echo $fila['codigo']?>">
                            <input type="hidden" name="departamento" value ="<?php echo $fila['departamento']?>">
                            <button type="submit" name="modificarAlumnoA" onclick="modiCurso();">
                                <img src="../../img/edit.svg">
                            </button>
                        </FORM>
                    </td>
                    <td>
                        <FORM action="bajaCurso.php" method="POST">
                            <input type="hidden" name="nombre" value ="<?php echo $fila['codigo']?>">
                            <button type="submit" name="borrarAlumno" onclick="bajaCurso();">
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
                <table border="1">
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
                
                    <td><?php echo $fila['nombre'];?></td>
                    <td><?php echo $fila['localidad'];?></td>
                    <td><?php echo $fila['provincia'];?></td>
                    <td><?php echo $fila['codigopostal'];?></td>
                    <td><?php echo $fila2['nombre'];?></td>

                    <td>
                        <FORM action="modiCentro.php" method="POST">
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
                        <FORM action="bajaCentro.php" method="POST">
                            <input type="hidden" name="n_centro" value ="<?php echo $fila['nombre']?>">
                            <button type="submit" name="borrarAlumno" onclick="bajaCentro();">
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
        
?>