<?php 
    require_once "../model/conexionposiciones.php"; 

    $consulta = new ConexionPosiciones();
    $consulta->abrir();
    $posiciones = $consulta->obtenerPosicionesId($_GET["id"]);
    $consulta->cerrar();
    $posicion = $posiciones[0];

    session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/header.php";
    require_once "../view/posiciones/vposicionesedit.php";
    require_once "../view/partials/footer.php";
    
}else {
    header("location:../index.php");
}
?>