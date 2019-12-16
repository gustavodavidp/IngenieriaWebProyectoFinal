<?php
session_start();
 $host_db = "mysql";
 $user_db = "root";
 $pass_db = "clave123";
 $db_name = "SecretariaAdministrativa";
 $tbl_name = "Solicitud";
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 

$Tipo_Solicitud=$_POST['Tipo_Solicitud'];
$Descripcion=$_POST['Descripcin'];
$Edificio=$_POST['Edificio'];
$Piso=$_POST['Piso'];
$Lugar=$_POST['Lugar'];
$Fecha=$_POST['Fecha'];
$Solicitado_por= $_SESSION['usu'];


 $query = "INSERT INTO SolicitudReporte (Tipo_Solicitud, Descripcion,Edificio,Piso, Lugar, Fecha,Solicitado_por)
           VALUES ('$Tipo_Solicitud', '$Descripcion','$Edificio','$Piso', '$Lugar', '$Fecha', '$Solicitado_por')";


 if ($conexion->query($query) === TRUE) {
    header("location:../Views/Secretarias/index.php");
 
 }

 else {
 echo "Error al crear la solicitud." . $query . "<br>" . $conexion->error; 
   }
 
 
?>