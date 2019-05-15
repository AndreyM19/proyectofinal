<?php
 

    // escape variables for security
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $correo = mysqli_real_escape_string($con, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($con, $_POST['contrasena']);
    $confirmar = mysqli_real_escape_string($con, $_POST['confirmar']);
    $tarjeta = mysqli_real_escape_string($con, $_POST['tarjeta']);    
    $vencimiento = mysqli_real_escape_string($con, $_POST['vencimiento']);
    $domicilio = mysqli_real_escape_string($con, $_POST['domicilio']);
    $idusuario = mysqli_real_escape_string($con, $_POST['idusuario']);
    $sql="INSERT INTO registro (nombre, correo, contrasena, confirmar, tarjeta, vencimiento, domicilio, idusuario)
      VALUES ('$nombre', '$correo', '$contrasena', '$confirmar', '$tarjeta', '$vencimiento', '$domicilio', '$idusuario');";

    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
    echo "Registro Completado!";

    mysqli_close($con);
  ?>
  <br>
  <br>
  <br> 
  <button type="button" class="btn"><a href="index.html" >Menu Principal</a></button>