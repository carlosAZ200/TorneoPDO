<?php 
    
    if (isset($_GET["accion"])) {
        
        switch ($_GET["accion"]) {
            case '1':
                $clase = "alert alert-danger";
                $mensaje = "Este posición ya existe";
            break;
            case '2':
                $clase = "alert alert-success";
                $mensaje = "El posición se insertó correctamente";
            break;
            case '3':
                $clase = "alert alert-danger";
                $mensaje = "Este posición no se pudo insertar";
            break;
            case '4':
                $clase = "alert alert-danger";
                $mensaje = "Este posición se actualizó correctamente";
            break;
            case '5':
                $clase = "alert alert-danger";
                $mensaje = "Este posición no se pudo actualizar";
            break;
            case '6':
                $clase = "alert alert-danger";
                $mensaje = "Este posición no se pudo elimar";
            break;
            case '7':
                $clase = "alert alert-danger";
                $mensaje = "Este posición no se pudo elimar";
            break;
        }
        
    }    
    
    require_once "../model/conexionposiciones.php"; 

    $consulta = new ConexionPosiciones();
    $consulta->abrir();
    $posiciones = $consulta->obtenerPosiciones();
    $consulta->cerrar();

    session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../view/partials/header.php";
    require_once "../view/posiciones/vposicionesindex.php";
    require_once "../view/partials/footer.php";
    
}else {
    header("location:../index.php");   
}
?>