<?php 
        session_start();
 ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
<title>Inspeccion Final</title>
<header>
		<?php require_once('navbar.php'); ?>
	</header>
</head>
<body>

<form  class="was-validated" method="POST" action="../../Controllers/InformeController.php">
    <div class="container">
    
    
      <center><h2>Generar Informe</h2></center>
    
      <label class="imalaya3"  for="start">Fecha:</label>
    
      <input type="date" id="start" name="Fecha"
             value="2018-07-22"
             min="2018-01-01" max="2999-12-31">
      </label>
      
      <div class="form-group">
      <label for="sel1">Tipo de Informe :</label>
      <select class="form-control" id="sel1" name="TipoInforme">
    
        <option>Seleccione Uno</option>
        <option>Solicitudes Aprobadas</option>
        <option>Solicitudes No Aprobadas</option>
        <option>Solicitudes Aprobadas (Urgentes)</option>
        <option>Solicitudes Aprobadas (Urgencia Media)</option>
        <option>Solicitudes Aprobadas (Sin Urgencia)</option>
        <option>Solicitudes Aprobadas(En Progreso)</option>
        <option>Solicitudes Aprobadas (Finalizadas)</option>
      </select>
      <br>
      <div class="form-group">
      <label for="sel1">Fomato:</label>
      <select class="form-control" id="sel1" name="Formato">
    
        <option>Seleccione Uno</option>
        <option>Word</option>
        <option>Excel</option>
        <option>PDF</option>
      </select>
      
       <br>
       <br>
       <br>
       <center>   <button type="submit" class="btn btn-primary">Generar</button></center>
      
    </div>
    <body> 
  

<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">

<h2 class="mt-2">Informes de Reporte</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm table-hover">
        <thead>
            <tr>
                <th>Tipo de informe</th>
                <th>Fecha</th>
                <th>Formato</th>
               
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td><?php if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM InformeFinal";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["Tipo_Informe"];
 echo "</p>";
} 
}?></td>
                    <td><?php  if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM InformeFinal";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["Fecha"];
 echo "</p>";} 
} ?></td>
                    <td><?php if ($conexión = mysqli_connect("mysql", "root", "clave123", "SecretariaAdministrativa")){
// 2) Preparar la orden SQL
$consulta= "SELECT*FROM InformeFinal";

// 3) Ejecutar la orden y obtener datos
$datos= mysqli_query ($conexión,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
 echo $fila["Formato"];
 echo "</p>";} 
}  ?></td>
                    
                </tr>
           
        </tbody>
    </table>
</div>
</main>
 
</body> 
    
    </body>
    </form>
    </html>