<?php
    $con=mysqli_connect("localhost","root","","final");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // escape variables for security
    $idusuario = mysqli_real_escape_string($con, $_POST['idusuario']);
    $contrasena = mysqli_real_escape_string($con, $_POST['contrasena']);
    
    $sql="INSERT INTO login (idusuario, contrasena)
      VALUES ('$idusuario', '$contrasena');";

    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
    echo "Login completado!";

    mysqli_close($con);
  ?>
  <br>
  <br>
  <br>
  
  <button type="button" class="btn"><a href="index.php" >Menu Principal</a></button>