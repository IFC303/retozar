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
                    header('Location:./../');
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
                            $_SESSION['tipo']=$fila->tipo;

                            

                            if ($_SESSION['tipo']=="alumno"){
                                header('Location:alumno/iniAlumno');
                            }else if ($_SESSION['tipo']=="profesor"){
                                header('Location:profesor/iniProfesor');
                            }else if ($_SESSION['tipo']=="admin centro"){
                                header('Location:adminC/iniAdminCentro');
                            }else if ($_SESSION['tipo']=="admin general"){
                                header('Location:adminG/iniAdminGeneral');
                            }
                                 
                        } 
                    else if ($filas==0)
                        {
                            echo "Nombre de usuario y/o contraseña incorrecto.";
                            header("refresh:1;url=./../");
                        }
                    else
                        {
                            echo "Error fatal, contacte con el administrador";
                        }

                    $conexion = null;

            ?>

    </body>

</html>

