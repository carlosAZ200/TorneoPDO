<?php 
    require_once "../model/conexionequipos.php";
    $conexionEquipos = new ConexionEquipos();
    
    $conexionEquipos->abrir();

    
    require_once "../model/equipo.php";

    $equipo = new Equipo();
    $equipo->id = $_POST["id"];
    $equipo->nombre = $_POST["nombre"];
    $equipo->dt = $_POST["dt"];
    $equipo->municipio = $_POST["municipio"];
    $filas = $conexionEquipos->actualizarEquipo($equipo);
    $conexionEquipos->cerrar();

    if ($filas > 0) {
        header("location:equiposindex.php?accion=4"); // Equipo se actualizó
    }else {
        header("location:equiposindex.php?accion=5"); // Equipo no se actualizó
    }
    
?>