<?php
    session_start();
    if (isset($_SESSION["usuario"])) {
        if (isset($_GET["accion"])) {

            switch ($_GET["accion"]) {
                case '1':
                    $clase = "alert alert-success alertClass";
                    $mensaje = "Bienvenido ". $_SESSION["usuario"];
                break;
                /* case '2':
                    $clase = "alert alert-success";
                    $mensaje = "El equipo se insertó correctamente";
                break;
                case '3':
                    $clase = "alert alert-danger";
                    $mensaje = "Este equipo no se pudo insertar";
                break;
                case '4':
                    $clase = "alert alert-danger";
                    $mensaje = "Este equipo se actualizó correctamente";
                break;
                case '5':
                    $clase = "alert alert-danger";
                    $mensaje = "Este equipo no se pudo actualizar";
                break;
                case '6':
                    $clase = "alert alert-danger";
                    $mensaje = "Este equipo no se pudo elimar";
                break;
                case '7':
                    $clase = "alert alert-danger";
                    $mensaje = "Este equipo no se pudo elimar";
                break; */
            }
    
            
        }

        require_once "../view/partials/header.php";
        require_once "../view/index/vindex.php";
        require_once "../view/partials/footer.php";    
    }else {
        header("location:../index.php");
    }
        
?>