<?php
    require_once "../model/conexionjugador.php";
    $conexionjugador= new ConexionJugador();
    $conexionjugador->abrir();
    require_once "../model/conexionposiciones.php";

    $conexionposiciones = new ConexionPosiciones();
    $conexionposiciones->abrir();
    $posiciones = $conexionposiciones->obtenerPosiciones();
    $conexionposiciones->cerrar();

    $jugadores=$conexionjugador-> obtenerJugadorDocumento($_GET["documento"]);
    

    $conexionjugador->cerrar();
    $jugador=$jugadores[0];

    

    require_once "../model/conexionequipos.php";
    $conexionequipos = new ConexionEquipos();
    $conexionequipos->abrir();
    $equipos= $conexionequipos->obtenerEquipos();
    $conexionequipos->cerrar();

    session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/header.php";
    require_once "../view/jugadores/vjugadoresedit.php";
    require_once "../view/partials/footer.php";
    
}else {
    header("location:../index.php");
    
}
?>