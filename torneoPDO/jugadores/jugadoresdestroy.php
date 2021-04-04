<?php
  
  require_once "../model/conexionjugador.php";
  $conexionJugador=new ConexionJugador();
  $conexionJugador->abrir();
  $filas=$conexionJugador-> eliminarJugador($_GET["documento"]);
  $conexionJugador->cerrar();

  if($filas>0){

    header("location:jugadoresindex.php?accion=6"); /*Jugador se elimino*/ 
  }
  else
  {
     header("location:jugadoresindex.php?accion=7"); /*Jugador no se elimino */
  }

?>