<?php 

    require_once "../model/conexionposiciones.php";

    $conexion = new ConexionPosiciones();
    $conexion->abrir();
    $posicion = $conexion->obtenerPosicionesNombre($_POST["posicion"]);
    
    if (count($posicion)>0) {
        $conexion->cerrar();
        header("location:posicionesindex.php?accion=1"); /* La posicion ya existe */
    }else {
        require_once "../model/posiciones.php";
        $posiciones = new Posicion();
        $posiciones->nombre = $_POST["posicion"];

        
        $filas = $conexion->insertarPosicion($posiciones);
        $conexion->cerrar();

        if ($filas > 0) {
            header("location:posicionesindex.php?accion=2"); /* Posicion insertada */
        }else {
            header("location:posicionesindex.php?accion=3"); /* Posicion no insertada */
        }
    
    }

?>