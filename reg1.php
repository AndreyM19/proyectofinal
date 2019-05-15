<?php
    $con=mysqli_connect("localhost","root","","final");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // escape variables for security
    $id_usuario=mysqli_real_escape_string($con, $_POST['id_usuario']);
    $nombrecompleto= mysqli_real_escape_string($con, $_POST['nombrecompleto']);
    $correo= mysqli_real_escape_string($con, $_POST['correo']);
    $contrasena= mysqli_real_escape_string($con, $_POST['contrasena']);
    $confirmar= mysqli_real_escape_string($con, $_POST['confirmar']);
    $tarjeta= mysqli_real_escape_string($con, $_POST['tarjeta']);
    $vencimiento= mysqli_real_escape_string($con, $_POST['vencimiento']);
    $domicilio= mysqli_real_escape_string($con, $_POST['domicilio']);

    if($contrasena != $confirmar)
    die('Las contrasenas no coinciden <br><br><a href="registro.php" >Volver</a>');
    
    //Se encripta contraseña
    $contrasena = md5($contrasena);
    $tarjeta = md5($tarjeta);
    $vencimiento = md5($tarjeta);
    $confirmar = md5($confirmar);

    $sql="INSERT INTO datos (id_usuario, nombrecompleto, correo, contrasena, confirmar, tarjeta, vencimiento, domicilio)
      VALUES ('$id_usuario', '$nombrecompleto', '$correo', '$contrasena', '$confirmar', '$tarjeta', '$vencimiento', '$domicilio');";

    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
    echo '
    <h2>Registro Completo</h2>
    <h5>Gracias por registrarse en nuestra página, ya puede ingresar como usuario</h5>
    <a href="login.php" >Logearse</a>
    ';

    mysqli_close($con);
  ?>