<?php 
  $usuario = $_POST['usrname'];
  $pass = $_POST['psw'];

  if($usuario == "jr97" && $pass == "1234")
  {
    header("location:dashboard.html");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Sistema de control de pacientes y epidemias
    </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="shortcut icon" href="img/ico-sistema.png">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body id="body-login">

<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog">
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
      </div>
      
    </div>
  </div> 
</div>
 
<script>
   $(document).ready(function()
   {
      $("#myModal").modal("show");
   });
</script>

</body>
</html>
