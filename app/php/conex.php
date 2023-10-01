<?php
    $conexion = mysqli_connect("localhost", "root", "", "inkatun");
    
    if(!$conexion) {
        die("Ha ocurrido un error inesperado: ". mysqli_connect_error());
    }
?>