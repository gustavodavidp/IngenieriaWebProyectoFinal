<?php
session_start();
 $host_db = "mysql";
 $user_db = "root";
 $pass_db = "clave123";
 $db_name = "SecretariaAdministrativa";
 $tbl_name = "InformeFinal";
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 

$Tipo_Informe=$_POST['TipoInforme'];
$Fecha=$_POST['Fecha'];
$Formato=$_POST['Formato'];


 $query = "INSERT INTO InformeFinal (Tipo_Informe, Fecha,Formato)
           VALUES ('$Tipo_Informe', '$Fecha','$Formato')";


 if ($conexion->query($query) === TRUE) {
    header("location:../Views/Secretarias/index.php");
 
 }

 else {
 echo "Error al crear la solicitud." . $query . "<br>" . $conexion->error; 
   }
 
 
?>