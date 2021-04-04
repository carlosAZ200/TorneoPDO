<?php

class ConexionJugador{
	private $jconexion;

	public function abrir(){
	try{
		$this->jconexion=new PDO("mysql:host=localhost;dbname=torneo2068676","root","");
		$this->jconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return 1;
	}catch(Exception $e){
		return $e->getMessage();
	}
}
    public function cerrar(){
        $this->jconexion=null;
    }

    public function insertarJugador(Jugador $jugador){
        $jconsulta=$this->jconexion->prepare("INSERT INTO jugadores VALUES(?, ?, ?, ?)");
        $jconsulta->bindParam(1, $jugador->documento);
		$jconsulta->bindParam(2, $jugador->nombre);
		$jconsulta->bindParam(3, $jugador->posicion);
		$jconsulta->bindParam(4, $jugador->equipo);
        $jconsulta->execute();
        return $jconsulta->rowCount();	
		/* rowCount cuenta el numero de filas afectadas por la última instrucción  */
     }


     public function obtenerJugador(){
        $jconsulta =$this->jconexion ->prepare("SELECT jugadores.*, posiciones.nombre as posicion_nombre, equipos.nombre as equipo_nombre FROM jugadores INNER JOIN posiciones ON jugadores.posicion = posiciones.id INNER JOIN equipos ON jugadores.equipo = equipos.id ORDER BY nombre");
        $jconsulta->setFetchMode(PDO::FETCH_OBJ);
        $jconsulta->execute();
        return $jconsulta->fetchAll();
    }
	

    /*con esta funcion validamos si este Jugador existe en la base de datos*/ 

   public function obtenerJugadorDocumento($documento){
		$jconsulta = $this->jconexion ->prepare("SELECT * FROM jugadores WHERE documento=?");
		$jconsulta->bindParam(1, $documento);
		$jconsulta->setFetchMode(PDO::FETCH_OBJ);
		$jconsulta->execute();
		return $jconsulta->fetchAll();
   }

   public function eliminarJugador($documento){
		$jconsulta=$this->jconexion->prepare("DELETE FROM jugadores WHERE documento=?");
		$jconsulta->bindParam(1, $documento);
		$jconsulta->execute();
		return $jconsulta->rowCount();	
	}

   public function obtenerJugadorNombre($nombre){
	$jconsulta = $this->jconexion ->prepare("SELECT * FROM jugadores WHERE nombre=?");
    $jconsulta->bindParam(1, $nombre);
	$jconsulta->setFetchMode(PDO::FETCH_OBJ);
	$jconsulta->execute();
	return $jconsulta->fetchAll();
   }

   public function actualizarJugador(Jugador $jugador){
	$jconsulta=$this->jconexion->prepare("UPDATE jugadores SET nombre=?,posicion=?,equipo=?  WHERE documento=?");
	$jconsulta->bindParam(1, $jugador->nombre);
	$jconsulta->bindParam(2, $jugador->posicion);
	$jconsulta->bindParam(3, $jugador->equipo);
	$jconsulta->bindParam(4, $jugador->documento);
	$jconsulta->execute();
	return $jconsulta->rowCount();	
 }

 

}