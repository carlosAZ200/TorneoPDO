<?php
  
  require_once "../model/conexionjugador.php";
  $conexionJugador=new ConexionJugador();
  $conexionJugador->abrir();
  
  require_once "../model/jugadores.php";
  $jugador = new Jugador();
  $jugador->documento=$_POST["documento"];
  $jugador->nombre=$_POST["nombre"];
  $jugador->posicion=$_POST["posicion"];
  $jugador->equipo=$_POST["equipo"];
  $filas=$conexionJugador ->  actualizarJugador($jugador);
  $conexionJugador->cerrar();

  if($filas>0){

    header("location:jugadoresindex.php?accion=4"); /*Jugador se actualizo*/ 
  }
  else
  {
    header("location:jugadoresindex.php?accion=5"); /*Jugador no se actualizo */
  }

?>