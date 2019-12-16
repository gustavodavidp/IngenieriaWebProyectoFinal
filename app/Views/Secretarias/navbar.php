<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- jQuery library -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	
	<script src="bootstrap/js/bootstrap.min.js"></script>
<div class="jumbotron text-center" style="margin-bottom:0">
  	<div class="img" >
		<h2><img style="display: inline-block" src="../../assets/images/logo_utp.png" alt="Logo" width="115" height="115">Universidad Tecnológica de Panamá</h2>
	</a>
	</div>
</div>
<form  class="was-validated" method="POST" action="../../Controllers/LogoutController.php">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

	<a class="navbar-brand" href="../../Views/Secretarias/index.php">Inicio</a>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../../Views/Secretarias/Solicituddereporte.php">Ingresar Solicitud</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="../../Views/Secretarias/ConsultarSolicitud.php">Consultar Solicitud</a>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="../../Views/Secretarias/Aprobar.php">Aprobar Solicitud</a>
	</li>
    <li class="nav-item">
      <a class="nav-link" href="../../Views/Secretarias/GenerarInforme.php">Generar Informe</a>
	</li>
	
	<li class="nav-item">
      <a class="nav-link" href="../../Views/Secretarias/FAQ.php">Ayuda</a>
	</li>
	
	
  </ul>
  <ul class="navbar-nav ml-auto">
  		<li class="nav-item">
      		<a class="nav-link" href="#">Iniciado como: <b><?php echo $_SESSION['usu']; ?></b></a>
    	</li>
		<li class="nav-item" ><a  href="../../Views/Usuarios/logout.php" type="submit" value="desconectar" name="salir"><i class="fa fa-fw fa-user"></i> Cerrar Sesión</a></li>		
	</ul>
</nav>

</form>