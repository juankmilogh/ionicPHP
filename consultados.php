<?php
    include_once("conexion.php");

    $resultado = mysqli_query($mysqli, "SELECT * FROM universitarios ORDER BY id DESC") or die ("Error en la Consulta");
    $vector = array();

    while($r=mysqli_fetch_assoc($resultado)){
        $vector[] = $r;
    }

    $respuesta = json_encode($vector);
    echo $respuesta;
    return $respuesta;
?>