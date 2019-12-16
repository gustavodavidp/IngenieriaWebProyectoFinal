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


    <div class="container">
    
    
      <center><h2>Generar Informe</h2></center>
    
      <label class="imalaya3"  for="start">Fecha:</label>
    
      <input type="date" id="start" name="trip-start"
             value="2018-07-22"
             min="2018-01-01" max="2999-12-31">
      </label>
      
      <div class="form-group">
      <label for="sel1">Tipo de Informe :</label>
      <select class="form-control" id="sel1">
    
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
      <select class="form-control" id="sel1">
    
        <option>Seleccione Uno</option>
        <option>Word</option>
        <option>Excel</option>
        <option>PDF</option>
      </select>
      
       <br>
       <br>
       <br>
       <center> <button type="submit" class="btn btn-primary">Limpiar</button>      <button type="button" class="btn btn-primary">Vista Previa</button>   <button type="button" class="btn btn-primary">Generar</button></center>
      </form>
    </div>
    
    </body>
    </html>