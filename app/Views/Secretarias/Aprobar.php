<?php 
        session_start();
 ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
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
        <title>SAREDA -Solicitudes por Aprobar-</title>
    </head>
    <body>
        <header>

        </header>
        <nav>
            
        </nav>
        <div class ="container">
            <div class ="row">
                <div class = "col-12">
                    <center><h2>Aprobar Solicitudes</h2></center>
                    <br>
                </div>
            </div>
            <div class = "row justify-content-center">
                <div class = "col-12">
                    <table class="table table-success table-striped">
                        <thead>
                          <tr>
                            <th>Elegir</th>
                            <th># de Solicitud</th>
                            <th>Fecha</th>
                            <th>Tipo de Daño</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                <form>
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                      <label class="custom-control-label" for="customCheck"></label>
                                    </div>
                                </form>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class = "row justify-content-center">
                <div class = "col-4">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                    </ul>
                </div>
            </div>
            <div class ="row justify-content-center">
                <div class = "col-4">
                    <center><a class="btn btn-success" href="Vista Previa Solicitud para Aprobacion.html" role="button">Vista Previa</a></center>
                </div>
                <div class ="col-4">
                    <center><a class="btn btn-success" href="" role="button">Regresar</a></center>
                </div>
            </div>
        </div>
    </body>
    <footer>

    </footer>
</html>