<?php 
        session_start();
 ?>
<header>
		<?php require_once('navbar.php'); ?>
</header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/stylesheets/bontio.css">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <title>Inspeccion Final</title>
</head>

<div class="container">

<center><h2>Inspección Final</h2></center>

<div class="form-group">
  <label for="usr"># De Solicitud :</label>
  <input type="text" class="form-control" id="usr">

</div>
<div class="form-group">
  <label for="usr">Trabajo Realizado por:</label>
  <input type="text" class="form-control" id="usr">
</div>
  
  
  <label for="usr">Fecha:</label>
   <input id="datepicker" width="270" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
    <br>
    
    <div class="form-group">
  <label for="comment">Observaciones:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>


   <br>
   <br>
   <br>
   <center> <button type="submit" class="btn btn-primary">Regresar</button>         <button type="button" class="btn btn-primary">Enviar</button></center>
</div>

