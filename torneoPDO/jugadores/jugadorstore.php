<?php
  
  require_once "../model/conexionjugador.php";
  $conexionJugador=new ConexionJugador();
  $conexionJugador->abrir();
  $jugador=$conexionJugador->obtenerJugadorDocumento($_POST["documento"]);

  if(count($jugador)>0){
    $conexionJugador->cerrar();
    header("location:jugadoresindex.php?accion=1"); /*Jugador existe*/ 
  }
  else{
  require_once "../model/jugadores.php";
  $jugador = new Jugador();
  $jugador->documento=$_POST["documento"];
  $jugador->nombre=$_POST["nombre"];
  $jugador->posicion=$_POST["posicion"];
  $jugador->equipo=$_POST["equipo"];

  
  $filas=$conexionJugador->insertarJugador($jugador);
  $conexionJugador->cerrar();

  if($filas>0){

    header("location:jugadoresindex.php?accion=2"); /*Jugador se insertó*/ 
  }
  else
  {
    header("location:jugadoresindex.php?accion=3");/*Jugador no se insertó*/
  }
}
?>