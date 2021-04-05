<?php 
    session_start();

    if (isset($_GET["accion"])) {

        switch ($_GET["accion"]) {
            case '1':
                $clase = "alert alert-danger";
                $mensaje = "El usuario ya existente";
            break;
            case '2':
                $clase = "alert alert-success";
                $mensaje = "El usuario se insertó";
            break;
            case '3':
                $clase = "alert alert-danger";
                $mensaje = "El usuario no se insertó";
            break;
            /* case '4':
                $clase = "alert alert-danger";
                $mensaje = "Este municipio se actualizó correctamente";
            break;
            case '5':
                $clase = "alert alert-danger";
                $mensaje = "Este municipio no se pudo actualizar";
            break;
            case '6':
                $clase = "alert alert-danger";
                $mensaje = "Este municipio no se pudo elimar";
            break;
            case '7':
                $clase = "alert alert-danger";
                $mensaje = "Este municipio no se pudo elimar";
            break; */
        }

        
    }

    if (isset($_SESSION["usuario"])) {
        header("location:index/index.php");
    }else {
        require_once "view/partials/header1.php";
        require_once "view/vindex.php";
        require_once "view/partials/footer.php";
    }
?>