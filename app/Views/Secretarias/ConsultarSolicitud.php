<?php 
        session_start();
 ?>

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
<head>
    
    <title>Consultar</title>
</head>
<header>
		<?php require_once('navbar.php'); ?>
</header>


<body> 
  

<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">

<h2 class="mt-2">Solicitudes de Reporte</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm table-hover">
        <thead>
            <tr>
                <th>Numero de Solicitud</th>
                <th>Tipo de Solicitud</th>
                <th>Edificio</th>
                <th>Descripción</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td><?php if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM SolicitudReporte";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["idSolicitud"];
 echo "</p>";
} 
}?></td>
                    <td><?php  if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM SolicitudReporte";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["Tipo_Solicitud"];
 echo "</p>";} 
} ?></td>
                    <td><?php if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM SolicitudReporte";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["Edificio"];
 echo "</p>";} 
}  ?></td>
                    <td><?php if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM SolicitudReporte";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["Descripcion"];
 echo "</p>";} 
}  ?></td>
                    <td><?php if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM SolicitudReporte";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["Fecha"];
 echo "</p>";} 
}   ?></td>
                </tr>
           
        </tbody>
    </table>
</div>
</main>
 
</body> 