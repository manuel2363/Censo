<?php
session_start();
if (isset($_SESSION['Usuario'])) 
{
  header('location : Menu.php');
}
else
{?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
    <title>El Panalito</title>
  </head>
  <body>
    <h1>Bienvenido al Panalito</h1>

    <div class="container">
      <div class="row">
      <form class="col-md-3 col-md-push-4" action="return false" onsubmit="return false" method="post">
        Usuario: <input class="form-control" type="text" name="Ususario" id="login" value="" placeholder="Usuario" autocomplete="off" />
        <br>
        Clave <input class="form-control" type="password" name="Clave" id="password" value="" placeholder="Clave" autocomplete="off" />
        <br>
        <button class="btn btn-danger" onclick="validar(document.getElementById('login').value, document.getElementById('password').value)">Conectar</button>
        <input type="reset" class="btn btn-danger" value="Limpiar">

      </form>
      </div>
      <script type="text/javascript">
        function validar(login, password)
        {
          $.ajax({
            url: 'validar.php',
            type: 'POST',
            data: 'login='+login+'&password='+'password',
            success: function(resp){
              $('#resultado').html(resp);
            }
          });
        }
      </script>
    </div>
  </body>
</html>

<?php
}
?>

