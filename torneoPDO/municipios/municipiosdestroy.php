<?php 
    require_once "../model/conexionmunicipios.php";
    $conexionMunicipios = new ConexionMunicipios();
    
    $conexionMunicipios->abrir();
    $filas = $conexionMunicipios->eliminarMunicipio($_GET["id"]);
    $conexionMunicipios->cerrar();

    if ($filas > 0) {
        header("location:municipiosindex.php?accion=6"); // Municipio se eliminĂ³
    }else {
        header("location:municipiosindex.php?accion=7"); // Municipio no se eliminĂ³
    }
?>