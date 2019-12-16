<?php
include 'conexion.php';
class consul {
    
    private $lista;
    
    public function _construct(){
        $this->lista=array();
    }
    
    public function Consultar($idUsuario, $Fecha, $Tipo_Dano){
      $query=mysqli_query(conexion::con(), "call consultar('$idSolicitud','$Fecha', '$Tipo_Dano')");
      while ($row=mysqli_fetch_array($query)){
          $this->lista[]=$row;
      }
      return $this->lista;
    }
    
    
}