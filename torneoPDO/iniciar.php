<?php 
    session_start();
    require_once "model/conexionusuarios.php";
    require_once "model/usuario.php";

    $usuario = new Usuario();
    $usuario->usuario = $_POST["usuario"];
    $usuario->password = $_POST["password"];

    
    $conexionUsuarios = new ConexionUsuarios();
    
    $conexionUsuarios->abrir();
    $usuarios = $conexionUsuarios->obtenerUsuarioUsuarioPassword($usuario);
    $conexionUsuarios->cerrar();
    // count cuenta 
    if (count($usuarios) > 0) { 
        $usuario =$usuarios[0];
        $_SESSION["usuario"] = $usuario->usuario;

        header("location:index/index.php?accion=1");
        

        /* $conexionUsuarios->cerrar(); */
        /* header("location:../index.php?accion = 1"); // Usuario existe */
    }else {
        require_once "../model/usuario.php";

        echo "Usuario incorrecto";

        /* $conexionUsuarios->cerrar(); */
        /* $filas = $conexionUsuarios->insertarUsuario($usuario);
        $conexionUsuarios->cerrar();
        if ($filas > 0) {
            header("location:../index.php?accion = 2"); // Usuario se insertó
        }else {
            header("location:../index.php?accion = 3"); // Usuario no se insertó
        } */
    }
    
?>