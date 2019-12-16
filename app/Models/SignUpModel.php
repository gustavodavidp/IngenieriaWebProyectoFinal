<?php
include 'conexion.php';
class registro2 {
    
    private $lista;
    
    public function _construct(){
        $this->lista=array();
    }
    
    public function registro($ID_UST, $Nom_Completo, $Nom_Usuario, $Correo_Ins, $Contraseña, $Cedula,$Departamento, $Cargo){
      $query=mysqli_query(conexion::con(), "call registro('$ID_UST', '$Nom_Completo', '$Nom_Usuario', '$Correo_Ins', '$Contraseña', '$Cedula','$Departamento', '$Cargo')");
      while ($row=mysqli_fetch_array($query)){
          $this->lista[]=$row;
      }
      return $this->lista;
    }
    
    
}