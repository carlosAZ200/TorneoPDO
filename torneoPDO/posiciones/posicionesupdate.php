<?PHP
    require_once "../model/conexionposiciones.php";
    $conexionPosiciones = new ConexionPosiciones();
    $conexionPosiciones->abrir();

    require_once "../model/posiciones.php";
    $posiciones = new Posicion();
    $posiciones->id = $_POST["id"];
    $posiciones->nombre = $_POST["posicion"];
    
    $filas = $conexionPosiciones->actualizarPosicion($posiciones);
    $conexionPosiciones->cerrar();

    if ($filas > 0) {
        header("location:posicionesindex.php?accion=4"); /*Posicion se actualizo*/ 
    }else {
        header("location:posicionesindex.php?accion=5"); /*Posicion no se actualizo*/ 
    }
?>