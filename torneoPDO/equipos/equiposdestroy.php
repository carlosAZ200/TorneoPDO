<?php 
    require_once "../model/conexionequipos.php";
    $conexionEquipos = new ConexionEquipos();
    
    $conexionEquipos->abrir();
    $filas = $conexionEquipos->eliminarEquipo($_GET["id"]);
    $conexionEquipos->cerrar();

    if ($filas > 0) {
        header("location:equiposindex.php?accion=6"); // Equipo se eliminĂ³
    }else {
        header("location:equiposindex.php?accion=7"); // Equipo no se eliminĂ³
    }
?>