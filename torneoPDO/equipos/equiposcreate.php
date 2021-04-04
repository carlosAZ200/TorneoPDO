<?php 
    require_once "../model/conexionmunicipios.php";
    
    $conexionmunicipios = new ConexionMunicipios();
    $conexionmunicipios->abrir();
    $municipios = $conexionmunicipios->obtenerMunicipios();
    $conexionmunicipios->cerrar();

    session_start();
if (isset($_SESSION["usuario"])) {
    
    require_once "../view/partials/header.php";
    require_once "../view/equipos/vequiposcreate.php";
    require_once "../view/partials/footer.php";
}else {
    header("location:../index.php");
}
?>