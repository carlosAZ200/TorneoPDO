<?php 
    require_once "../model/conexionequipos.php";
    $conexionEquipos = new ConexionEquipos();
    
    $conexionEquipos->abrir();
    $equipos = $conexionEquipos->obtenerEquipoNombre($_POST["nombre"]);
    
    // count cuenta 
    if (count($equipos) > 0) { 
        $conexionEquipos->cerrar();
        header("location:equiposindex.php?accion = 1"); // Equipo existe
    }else {
        require_once "../model/equipo.php";

        $equipo = new Equipo();
        $equipo->nombre = $_POST["nombre"];
        $equipo->dt = $_POST["dt"];
        $equipo->municipio = $_POST["municipio"];

        $filas = $conexionEquipos->insertarEquipo($equipo);
        $conexionEquipos->cerrar();

        if ($filas > 0) {
            header("location:equiposindex.php?accion = 2"); // Equipo se insertó
        }else {
            header("location:equiposindex.php?accion = 3"); // Equipo no se insertó
        }
    }
    
?>
