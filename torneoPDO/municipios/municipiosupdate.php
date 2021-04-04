<?php 
    require_once "../model/conexionmunicipios.php";
    $conexionMunicipios = new ConexionMunicipios();
    
    $conexionMunicipios->abrir();
    $municipios = $conexionMunicipios->obtenerMunicipioNombre($_POST["nombre"]);
    
    // count cuenta el numero de letras
    if (count($municipios) > 0) { 
        $conexionMunicipios->cerrar();
        header("location:municipiosindex.php?accion = 1"); // Municipio existe
    }else {
        require_once "../model/municipio.php";

        $municipio = new Municipio();
        $municipio->id = $_POST["id"];
        $municipio->nombre = $_POST["nombre"];
        $filas = $conexionMunicipios->actualizarMunicipio($municipio);
        $conexionMunicipios->cerrar();

        if ($filas > 0) {
            header("location:municipiosindex.php?accion=4"); // Municipio se actualizó
        }else {
            header("location:municipiosindex.php?accion=5"); // Municipio no se actualizó
        }
    }
?>