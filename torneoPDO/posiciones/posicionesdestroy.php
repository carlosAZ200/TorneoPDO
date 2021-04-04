<?php
    require_once "../model/conexionposiciones.php";
    $conexionPosiciones = new ConexionPosiciones();
    $conexionPosiciones->abrir();
    $filas = $conexionPosiciones->eliminarPosicion($_GET["id"]);
    $conexionPosiciones->cerrar();

    if ($filas > 0) {
        header("location:posicionesindex.php?accion=6"); // Posicion se eliminó
    }else {
        header("location:posicionesindex.php?accion=7"); // Posicion no se eliminó
    }
?>