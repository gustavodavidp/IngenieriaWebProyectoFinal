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
    
    <title>Inspeccion Final</title>
</head>
    <body>
        <div class="container">
            <center><h2>Inspeccion Final</h2>
            <form class="form-inline" action="/action_page.php">
                <ul class="Solicitud">
                    <li class="lego"><label for="email"># de Solicitud:</label></li>
                    <li class="lego"><input type="email" class="form-control" id="email" placeholder="Ingresar Solicitud" name="email"></form></li><br>
                    <li class="legoo"><label for="email">Trabajo realizado por:</label></li>
                    <li class="legoo"><input type="email" class="form-control" id="email" placeholder="Ingresar Nombre" name="email"></form></li>
                </ul>
                <label class="imalaya3"  for="start">Fecha:</label>

                <input type="date" id="start" name="trip-start"
                       value="2018-07-22"
                       min="2018-01-01" max="2999-12-31">
                </label>
             
                        
                        
                        <div class="form-group">
                                <label for="comment" class="Imalaya">Observaciones:</label>
                                <textarea class="imalaya2" rows="3" id="comment"></textarea>
                        </div>
                      </div>
                      
              </div>
              <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"><center><button type="submit" class="btn btn-primary">Regresar</button></center></div>
                    <div class="col-sm-3"><center><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Enviar</button></center></div>
                    <div class="col-sm-3"></div>
                  </div>
              
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
          <p>Solicitud actualizada correctamente.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
        
    </body>
</html>