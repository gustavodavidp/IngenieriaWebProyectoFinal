<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <center><h2>Registrarse</h2></center>
<form  class="was-validated" method="POST" action="../../Controllers/SignUpController.php">




  <div class="form-group">
    <label for="uname">Correo Institucional:</label>
    <input type="text" class="form-control" id="uname" placeholder="Introduzca su correo"  name="CorreoInst" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor llene este campo.</div>
  </div>
  <div class="form-group">
    <label for="uname">Nombre Completo:</label>
    <input type="text" class="form-control" id="uname" placeholder="Introduzca su Nombre y Apellido" name="Nombre_Completo" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor llene este campo.</div>
  </div>
  <div class="form-group">
    <label for="uname">Nombre de usuario:</label>
    <input type="text" class="form-control" id="uname" placeholder="Introduzca su Nombre de usuario" name="Nombre_Usuario" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor llene este campo.</div>
  </div>
  <div class="form-group">
    <label for="uname">Facultad:</label>
    <input type="text" class="form-control" id="uname" placeholder="Introduzca su Facultad" name="Facultad" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor llene este campo.</div>
  </div>
    <div class="form-group">
<div class="form-group">
    <label for="uname">Cédula:</label>
    <input type="text" class="form-control" id="uname" placeholder="Introduzca su cédula" name="Cedula" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor llenar este campo ejemplo: xx-xxxx-xxxx</div>
  </div>
    <div class="form-group">
  <select class="form-control" id="sel1" name="Departamento">
  <br>
    <option>Departamento</option>
    <option>Profesor</option>
    <option>Administrativo</option>
    <option>4</option>
    <option>Cargos</option>
    <option></option>
    <option>3</option>
    <option>4</option>
    <option>Cargos</option>
    <option></option>
    <option>3</option>
    <option>4</option>
    <option>Cargos</option>
    <option></option>
    <option>3</option>
    <option>4</option>
     <option>4</option>
    <option>Cargos</option>
    <option></option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
<div class="form-group">
  <select class="form-control" id="sel1" name="Cargo">
    <option>Cargo</option>
    <option>Profesor</option>
    <option>Administrativo</option>
    <option>4</option>
    <option>Cargos</option>
    <option></option>
    <option>3</option>
    <option>4</option>
    <option>Cargos</option>
    <option></option>
    <option>3</option>
    <option>4</option>
    <option>Cargos</option>
    <option></option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
<div class="form-group">
    <label for="pwd">Contraseña:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Introduzca su contraseña" name="Contraseña" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor, llene este campo</div>
</div>
<div class="form-group">
    <label for="pwd">Confirmación:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Introduzca la confirmación de su contraseña" name="Contraseña" required>
    <div class="valid-feedback">✓</div>
    <div class="invalid-feedback">Por favor, llene este campo</div>
</div>
  <button type="submit"   data-toggle="modal" data-target="#myModal" value="Signup" name="Registrar" class="btn btn-primary">Registrarse</button>
</form>
<div class="dropdown-divider"></div>
  <a class="dropdown-item" href="../Views/Usuarios/login.php">¿Ya tienes una cuenta? Inicia Sesión</a>
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
        <p>Usted ha sido registrado con éxito.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>



