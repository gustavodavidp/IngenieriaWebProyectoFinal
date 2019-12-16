<?php
include 'conexion.php';
class consul {
    
    private $lista;
    
    public function _construct(){
        $this->lista=array();
    }
    
    public function login($CorreoInst,$Contraseña){
      $query=mysqli_query(conexion::con(), "call login('$CorreoInst','$Contraseña')");
      while ($row=mysqli_fetch_array($query)){
          $this->lista[]=$row;
      }
      return $this->lista;
    }
    
    
}