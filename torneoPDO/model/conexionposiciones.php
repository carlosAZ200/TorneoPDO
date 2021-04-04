<?php 
    class ConexionPosiciones{
        private $conexion;

        public function abrir(){
            try {
                $this->conexion = new PDO("mysql:host=localhost;dbname=torneo2068676","root", "");
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return 1;
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function cerrar(){
            $this->conexion = null;
        }

        public function insertarPosicion(Posicion $posicion){
            $conexion = $this->conexion->prepare("INSERT INTO posiciones VALUES(null,?)");
            $conexion->bindParam(1, $posicion->nombre);
            $conexion->execute();
            return $conexion->rowCount();
        }

        public function obtenerPosicionesNombre($nombre){
            $conexion = $this->conexion->prepare("SELECT * FROM posiciones WHERE nombre = ?");
            $conexion->bindParam(1, $nombre);
            $conexion->setFetchMode(PDO::FETCH_OBJ);
            $conexion->execute();
            return $conexion->fetchAll();

        }

        public function obtenerPosiciones(){
            $conexion = $this->conexion->prepare("SELECT * FROM posiciones");
            $conexion->setFetchMode(PDO::FETCH_OBJ);
            $conexion->execute();
            return $conexion->fetchAll();
            /* fetchAll devuelve un areglo con los valores de la consulta */
        }

        public function obtenerPosicionesId($id){
            $conexion = $this->conexion->prepare("SELECT * FROM posiciones WHERE id=?");
            $conexion->bindParam(1, $id);
            $conexion->setFetchMode(PDO::FETCH_OBJ);
            $conexion->execute();
            return $conexion->fetchAll();
        }

        public function actualizarPosicion($posicion){
            $conexion = $this->conexion->prepare("UPDATE posiciones SET nombre=? WHERE id=?");
            $conexion->bindParam(1, $posicion->nombre);
            $conexion->bindParam(2, $posicion->id);
            $conexion->execute();
            return $conexion->rowCount();
        }
        
        public function eliminarPosicion($id){
            $conexion = $this->conexion->prepare("DELETE FROM posiciones WHERE id=?");
            $conexion->bindParam(1, $id);
            $conexion->execute();
            return $conexion->rowCount();
        }

    }
?>
