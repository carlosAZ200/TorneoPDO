<?php
    require_once "../model/conexionposiciones.php";
    $conexionPosiciones = new ConexionPosiciones();
    $conexionPosiciones->abrir();
    $filas = $conexionPosiciones->eliminarPosicion($_GET["id"]);
    $conexionPosiciones->cerrar();

    if ($filas > 0) {
        header("location:posicionesindex.php?accion=6"); // Posicion se eliminĂ³
    }else {
        header("location:posicionesindex.php?accion=7"); // Posicion no se eliminĂ³
    }
?>