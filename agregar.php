<?php
    include_once("conexion.php");

    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $universidad = $_GET['universidad'];


    mysqli_query($mysqli, "INSERT INTO universitarios (nombre, correo, universidad) VALUES (".$nombre.", ".$correo.", ".$universidad.")") or die ("Error al guardar");


    $resultado = json_encode('Exito!!!');
    echo $resultado;
    return $resultado;

?>