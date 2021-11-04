<?php
    session_start();
?>

<html>

    <head>
        <?php
            include "../includes/funciones.php";
        ?>    
    </head>


    <body>
        <?php

            if(!isset($_POST['Aceptar']))
                {
                    header('Location:../index.php');
                    die();
                }


            $conexion=conectarBD();
            $usuario=$_POST['nombreL'];
            $clave=$_POST['claveL'];
            
           
                    $sql="SELECT * FROM usuarios WHERE dni=\"$usuario\" and clave=\"$clave\""; 
            
                    $consulta = $conexion->prepare($sql);
                    $consulta->execute();

                    $filas=$consulta->rowCount();
                                
             
                    if($filas==1)
                        {
                            $fila = $consulta->fetch();   
                            $_SESSION['nombreL']=$fila->dni;
                            header('Location:iniAlumno.php');
                        } 
                    else if ($filas==0)
                        {
                            echo "Nombre de usuario y/o contraseña incorrecto.";
                        }
                    else
                        {
                            echo "Error fatal, contacte con el administrador";
                        }

                    $conexion = null;

            ?>

    </body>

</html>

