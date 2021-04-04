<?php 
    require_once "../model/conexionequipos.php";
    

    $conexionEquipos = new ConexionEquipos();
    $conexionEquipos->abrir();
    $equipos = $conexionEquipos->obtenerEquipoId($_GET["id"]);
    $conexionEquipos->cerrar();
    $equipo = $equipos[0];

    require_once "../model/conexionmunicipios.php";
    
    $conexionmunicipios = new ConexionMunicipios();
    $conexionmunicipios->abrir();
    $municipios = $conexionmunicipios->obtenerMunicipios();
    $conexionmunicipios->cerrar();

    session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/header.php";
    require_once "../view/equipos/vequiposedit.php";
    require_once "../view/partials/footer.php";
    
}else {

    header("location:../index.php");
}
    
?>