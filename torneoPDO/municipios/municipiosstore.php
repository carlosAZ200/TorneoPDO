<?php 
    require_once "../model/conexionmunicipios.php";
    $conexionMunicipios = new ConexionMunicipios();
    
    $conexionMunicipios->abrir();
    $municipios = $conexionMunicipios->obtenerMunicipioNombre($_POST["nombre"]);
    
    // count cuenta 
    if (count($municipios) > 0) { 
        $conexionMunicipios->cerrar();
        header("location:municipiosindex.php?accion = 1"); // Municipio existe
    }else {
        require_once "../model/municipio.php";

        $municipio = new Municipio();
        $municipio->nombre = $_POST["nombre"];
        
        $filas = $conexionMunicipios->insertarMunicipio($municipio);
        $conexionMunicipios->cerrar();

        if ($filas > 0) {
            header("location:municipiosindex.php?accion = 2"); // Municipio se insertó
        }else {
            header("location:municipiosindex.php?accion = 3"); // Municipio no se insertó
        }
    }
    
?>
