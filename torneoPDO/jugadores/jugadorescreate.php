<?php
require_once "../model/conexionposiciones.php";

$conexionposiciones = new ConexionPosiciones();
$conexionposiciones->abrir();
$posiciones = $conexionposiciones->obtenerPosiciones();
$conexionposiciones->cerrar();


require_once "../model/conexionequipos.php";

$conexionequipos = new ConexionEquipos();
$conexionequipos->abrir();
$equipos = $conexionequipos->obtenerEquipos();
$conexionequipos->cerrar();

session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/header.php";
    require_once "../view/jugadores/vjugadorescreate.php";
    require_once "../view/partials/footer.php";
    
}else {
    header("location:../index.php");
}

?>