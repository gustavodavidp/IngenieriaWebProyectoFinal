<?php

 $host_db = "mysql";
 $user_db = "root";
 $pass_db = "clave123";
 $db_name = "SecretariaAdministrativa";
 $tbl_name = "Usuario_Temporal";
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE Correo_Ins = '$_POST[CorreoInst]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{
$ID_UST = 3 ;
$ID_UST = $ID_UST+1;
 $Nom_Completo=$_POST['Nombre_Completo'];
$Nom_Usuario=$_POST['Nombre_Usuario'];
 $Correo_Ins=$_POST['CorreoInst'];
   $Cedula=$_POST['Cedula'];
   $Departamento=$_POST['Departamento'];
   $Facultad=$_POST['Facultad'];
    $Cargo=$_POST['Cargo'];
 $form_pass = $_POST['Contraseña'];
 $Contraseña = $_POST['Contraseña'];
 
 $hash = password_hash($form_pass, PASSWORD_BCRYPT);

 $query = "INSERT INTO Usuario_Temporal (`Nombre Completo`, Nombre_Usuario, Correo_Ins, Contrasea , Cedula, Departamento, Facultad, Cargo )
           VALUES ('$Nom_Completo', '$Nom_Usuario','$Correo_Ins','$Contraseña','$Cedula', '$Departamento','$Facultad', '$Cargo' )";

$query = "INSERT INTO Usuario (Nom_Usuario, Nombre_Usuario, Correo_Ins, Contrasea , Cedula, Departamento, Facultad, Cargo )
VALUES ('$Nom_Completo', '$Nom_Usuario','$Correo_Ins','$Contraseña','$Cedula', '$Departamento','$Facultad', '$Cargo' )";
 if ($conexion->query($query) === TRUE) {
    header("location:../Views/Home/index.php");
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['Nombre_Completo'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>