<?php 
        session_start();
 ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <header>
		<?php require_once('navbar.php'); ?>
	</header>

<form  class="was-validated" method="POST" action="../../Controllers/SolicitudController.php">
<div class="container">
  <center><h2>Solicitud de reporte</h2></center>
  <div class="form-group">
  <label for="sel1">Tipo daño:</label>
  <select class="form-control" id="sel1" name="Tipo_Solicitud">
    <option>Seleccione Uno</option>
    <option>Eléctrico</option>
    <option>Aire Acondicionado</option>
    <option>Mobiliario</option>
    <option>Baños</option>
    <option>Infraestructura</option>
    
  </select>
</div>
<div class="form-group">
      <label for="comment">Descripción:</label>
      <textarea class="form-control" rows="5" id="comment" name="Descripcin"></textarea>
    </div>
    <div class="form-group">
      <label for="usr">Fecha:</label>
      <input type="date" id="start" name="Fecha"
             value="2018-07-22"
             min="2018-01-01" max="2999-12-31">
      <script>
          $('.datepicker').datepicker({
          startDate: '-3d'
        });
      </script>
    </div>
    <div class="form-group">
  <label for="sel1">Edificio:</label>
  <select class="form-control" id="sel1" name="Edificio">
  
    <option>Seleccione Uno</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
  </select>
  <br>
  <div class="form-group">
  <label for="sel1">Piso de daño:</label>
  <select class="form-control" id="sel1" name="Piso">
    <option>Seleccione Uno</option>
    <option>Sótano</option>
    <option>Planta Baja</option>
    <option>Piso 1</option>
    <option>Piso 2</option>
    <option>Piso 3</option>
    
  </select>
  <br>
<div class="form-group">
  <label for="sel1"> Lugar de daño</label>
  <select class="form-control" id="sel1" name="Lugar">
    <option>Seleccione Uno</option>
    <option>Salón</option>
    <option>Elevador</option>
    <option>Pasillo</option>
    <option>Oficina</option>
    <option>Lobby</option>
    <option>Laboratorio</option>
    
  </select>
   
   <br>
   <button type="submit"   data-toggle="modal" data-target="#myModal" value="Send" name="Enviar" class="btn btn-primary">Enviar</button>
  </form>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <center><p>Solicitud Enviada .</p></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>