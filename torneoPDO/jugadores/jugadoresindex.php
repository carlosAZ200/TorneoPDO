<?php
if(isset($_GET["accion"])){
    switch($_GET["accion"]){
        case 1:
            $clase = "alert alert-danger";
            $mensaje = "Este jugador ya existe";
            break;
         case 2:
            $clase = "alert alert-success";
            $mensaje = "El jugador se inserto correctamente";
            break;
         case 3:
            $clase = "alert alert-danger";
            $mensaje = "EL jugador no se pudo insertar";
            break;

        case 4:
            $clase = "alert alert-success";
            $mensaje = "EL jugador se actualizo correctamente";
            break;

        case 5:
            $clase = "alert alert-danger";
            $mensaje = "EL jugador no se pudo actualizar";
            break;
        case 6:
            $clase = "alert alert-success";
            $mensaje = "EL jugador se elimino correctamente";
            break;
    
        case 7:
            $clase = "alert alert-danger";
            $mensaje = "EL jugador no se pudo eliminar";
            break;
       
    }
}
require_once "../model/conexionjugador.php";
$conexionJugador = new ConexionJugador();
$conexionJugador->abrir();
$jugadores=$conexionJugador->obtenerJugador();
$conexionJugador->cerrar();

session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/header.php";
    require_once "../view/jugadores/vjugadoresindex.php";
    require_once "../view/partials/footer.php";
    
}else {
    header("location:../index.php");
}

?>