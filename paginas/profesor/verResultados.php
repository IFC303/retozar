
<?php
    session_start();
    include "./../../includes/funciones.php";
    include "./../../includes/alta.php";
    include "./../../includes/baja.php";
    include "./../../includes/modi.php";
    include "./../../includes/ver.php";
    include "./../../includes/equipos.php";


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/altaalum.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <script src="equipos.js"></script>
</head>


<body id="body">


    <header>
       <div id="texto" >
            <h1 id="t1"><a href="/" class="title">Disc Aragón</a></h1>
            <p id="t2">Test para formación de equipos de trabajo</p>
        </div>
    </header>


    <main>
        <div id="contenido">

            <?php
                $nombrecentro=nombreCentroLog();

            ?>

            <form action="#" method="POST">

                <select  class="styleform1" name="curso" id="curso" value="curso">
                        <option value="0">Selecciona una clase/aula:</option>
                        <?php
                            $conexion=conectarBD();

                            $logcentro = departamentoLog();

                            $nombreCentroLog=nombreCentroLog();

                            $sql="SELECT codigo from cursos where centros_nombre='$nombreCentroLog' and departamento = '$logcentro'";
                            $consulta=$conexion->prepare($sql);
                            $consulta->execute();
                         while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                             $codcurso = $fila['codigo'];
                             $codcurso = ucfirst($codcurso);
                            echo "<option value='$codcurso'>$codcurso</option\n>";

                        }
                        ?>
                </select>

                <input type="submit" value="Aceptar" name="Aceptar" id="boton10">

            </form>

            <div class="grid-container">
                <div id="totales"></div>
                <div id="resultado">
                    <form action="final" method="post" id="formulario">
                        <input type="hidden" name="enviar" id="enviar">
                    </form>

                </div>
            </div>


            <?php
              if(isset($_POST['Aceptar'])){
            
                $alumnos=verResultados();
                $numAlumnos=equiposAutomaticos();

                ?>

            <script>
                 var alumnos = <?php echo json_encode($alumnos); ?>;
                 var numAlumnos = <?php echo json_encode($numAlumnos); ?>;
                 ordenar(name,alumnos,numAlumnos);

                 generar(numAlumnos,alumnos);
            </script>

             <?php

            }
          
            ?>
            <a class="btnvolver" href="." > Volver al menú</a>

        </div>
    </main>



    <footer>
            <div id="img1">
                <picture>
                    <source media="(min-width:650px)" srcset="../../img/logocpfip.png">
                    <source media="(min-width:465px)" srcset="../../img/logocpfip_bkzdvb_c_scale,w_200.png">
                    <img src="../../img/logocpfip_bkzdvb_c_scale,w_200.png" alt="Flowers" style="width:auto;">
                </picture>
            </div> <!-- fin img1 -->

            <div id="img2">
                <picture>
                    <source media="(min-width:650px)" srcset="../../img/logoSBR.png" width="95px" height="95px">
                    <img src="../../img/logoSBR.png" alt="logo_SBR" width="70px" height="70px">
                </picture>

            </div> <!-- fin img2 -->

    </footer><!-- fin footer -->





</body>
</html>



        
