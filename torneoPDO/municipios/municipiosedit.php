<?php 
    require_once "../model/conexionmunicipios.php";

    $conexionMunicipios = new ConexionMunicipios();
    $conexionMunicipios->abrir();
    $municipios = $conexionMunicipios->obtenerMunicipioId($_GET["id"]);
    $conexionMunicipios->cerrar();
    $municipio = $municipios[0];

    session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/header.php";
    require_once "../view/municipios/vmunicipiosedit.php";
    require_once "../view/partials/footer.php";
    
}else {
    header("location:../index.php");
}
    
?>