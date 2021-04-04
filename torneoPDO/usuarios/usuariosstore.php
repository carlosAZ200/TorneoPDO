<?php 
    require_once "../model/conexionusuarios.php";
    $conexionUsuarios = new ConexionUsuarios();
    
    $conexionUsuarios->abrir();
    $usuarios = $conexionUsuarios->obtenerUsuarioUsuario($_POST["usuario"]);
    
    // count cuenta 
    if (count($usuarios) > 0) { 
        $conexionUsuarios->cerrar();
        header("location:../index.php?accion = 1"); // Usuario existe
    }else {
        require_once "../model/usuario.php";

        $usuario = new Usuario();
        $usuario->usuario = $_POST["usuario"];
        $usuario->password = $_POST["password"];

        $filas = $conexionUsuarios->insertarUsuario($usuario);
        $conexionUsuarios->cerrar();

        if ($filas > 0) {
            header("location:../index.php?accion = 2"); // Usuario se insertó
        }else {
            header("location:../index.php?accion = 3"); // Usuario no se insertó
        }
    }
    
?>
