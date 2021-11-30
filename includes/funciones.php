<?php
//CONEXION A BASE DE DATOS
function conectarBD()
{
    $servidor = "localhost:3306";
    $usuario = "root";
    $password = "toor";
    $baseDatos = "disc";

    $opciones = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    );

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $password, $opciones);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $e) {
        echo "error en la conexion " . $e->getMessage();
        die();
    }
}

//NOMBRE INICIO SESION
function nombreLog()
{
    $dniLog = $_SESSION['nombreL'];

    $conexion = conectarBD();
    $sql = "SELECT nombre from usuarios where dni='$dniLog'";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    $fila = $consulta->fetch(PDO::FETCH_ASSOC);
    echo "Bienvenido " . $fila['nombre'];
}

//NOMBRE CENTRO INICIO SESION
function nombreCentroLog()
{
    $clavelog = $_SESSION['nombreL'];

    $conexion = conectarBD();
    $sql2 = "SELECT centros_nombre from usuarios where dni = '$clavelog'";
    $consulta2 = $conexion->prepare($sql2);
    $consulta2->execute();
    $fila = $consulta2->fetch(PDO::FETCH_ASSOC);
    $nombrecentro = $fila['centros_nombre'];

    return $nombrecentro;
}

function departamentoLog()
{
    $clavelog = $_SESSION['nombreL'];

    $conexion = conectarBD();
    $sql2 = "SELECT departamento from profesores where usuarios_dni = '$clavelog'";
    $consulta2 = $conexion->prepare($sql2);
    $consulta2->execute();
    $fila = $consulta2->fetch(PDO::FETCH_ASSOC);
    $depart = $fila['departamento'];

    return $depart;
}

//listar cursos por departamentos
function listardepartamentos()
{
    $conexion = conectarBD();
    $nombreCentroLog = nombreCentroLog();
    $sql = "SELECT distinct departamento from cursos where centros_nombre='$nombreCentroLog'";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();

    $solucion = "<select class='styleform1' id='departamento' name='departamento'>";
    $solucion .= "<option value=''>-- Selecciones un departamento --</option>";

    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $departamentos = $fila['departamento'];
        $solucion .= "<option value='$departamentos'>$departamentos</option\n>";
    }
    $solucion .= "</select>";
    return $solucion;
}