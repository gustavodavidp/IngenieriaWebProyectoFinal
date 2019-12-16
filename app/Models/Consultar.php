<?php
include 'conexion.php';
class SolicitudModel {
    
    private $lista;
    
        private $db;
        private $docentes;
     
        public function __construct(){
            $this->db = conexion::con();
            $this->docentes = array();
        }
        public function listar(){
            $idSolicitud=$_POST["numero"];
            $consulta = $this->db->query("select * from SolicitudReporte where idSolicitud = '$idSolicitud';");
            while($filas = $consulta->fetch_assoc()){
                $this->docentes[] = $filas;
            }
            return $this->docentes;
        }
    
    
    
    
}