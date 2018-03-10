<!DOCTYPE html>
<html>
<head>
    <title>
        Sistema de control de pacientes y epidemias
    </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/cssLogin/bootstrap.min.css">
  <link rel="stylesheet" href="css/cssLogin/app.css">
  <link rel="shortcut icon" href="img/ico-sistema.png">
  <script src="js/jsLogin/jquery.js"></script>
  <script src="js/jsLogin/bootstrap.min.js"></script>
</head>
<body id="body-login">

<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" data-backdrop="" data-keyboard="" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <h4><span class="glyphicon glyphicon-lock"></span> Iniciar sesión</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form method="post" role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" required="required" id="usrname" name="usrname" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="password" class="form-control" required="required" id="psw" name="psw" placeholder="Contraseña">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Recordarme</label>
            </div>
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Iniciar sesión</button>
          </form>
        </div>
        <div class="modal-footer">
          
        </div>
        <script>
          $(document).ready(function()
          {
              $("#myModal").modal("show");
          });
        </script>
      </div>
      
    </div>
  </div> 
</div>

</body>
</html>
