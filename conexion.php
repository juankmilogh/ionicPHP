<?php
    $host = "localhost";
    $bdname = "estudiantes";
    $user = "root";
    $pass ="";


    $mysqli = mysqli_connect($host, $user, $pass, $bdname);

    if(!$mysqli){
        die("Error en la conexion");
    }
   

?>