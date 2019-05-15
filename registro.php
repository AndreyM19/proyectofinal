<?php
session_Start();
?>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
      <div class="container">
    <form action="reg1.php" method="POST">
        
    <div class="form-group">
          <label for="exampleInputPassword1">Id para el usuario</label>
          <input type="text" class="form-control" name=id_usuario placeholder="Agregue su nombre completo">
          <small id="emailHelp" class="form-text text-muted">Nunca compartiremos sus datos con nadie.</small>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Nombre Completo</label>
          <input type="text" class="form-control" name=nombrecompleto placeholder="Agregue su nombre completo">
          <small id="emailHelp" class="form-text text-muted">Nunca compartiremos sus datos con nadie.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="text" class="form-control" name=correo  placeholder="Agregue su correo">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name=contrasena placeholder="Agregue su contraseña">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input type="password" class="form-control"  name=confirmar placeholder="Confirme su contraseña">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tarjeta</label>
            <input type="number" class="form-control" maxlength="16" name=tarjeta placeholder="Confirme su tarjeta">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Vencimiento de la tarjeta</label>
            <input type="datetime" class="form-control" maxlenght="8" name=vencimiento placeholder="Confirme el código de la tarjeta">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Agregar Domicilio</label>
            <input type="text" class="form-control" name=domicilio placeholder="Agregue su domicilio">
        </div>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </form>
      </div>
<br>
<br>
<div class="container">
  
  </body>
