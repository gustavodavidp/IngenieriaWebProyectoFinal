<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<div class="container">

  <center><h2>Iniciar Sesión</h2></center>
<form  class="was-validated" method="POST" action="../../Controllers/LoginController.php">
    

  <div class="form-group">
    <label for="uname">Correo Institucional:</label>
    <input type="text" class="form-control" id="uname" placeholder="Introduzca su correo" name="CorreoInst" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor llene este campo.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Contraseña:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Introduzca su contraseña" name="Contraseña" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor, llene este campo.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> Recordar mi información
    </label>
  </div>
  <button type="submit" class="btn btn-primary" value="Login" name="Iniciar">Iniciar Sesión</button>
</form>
<h1><?php if(isset($_GET['resp'])){echo $_GET['resp'];} ?></h1>