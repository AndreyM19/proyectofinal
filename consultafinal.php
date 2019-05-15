<!DOCTYPE html>
  <html>
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
      <h2 class="jumbotron">Registro completado! </h2>
      <p></p>
      



  <?php
     $con=mysqli_connect("localhost","root","","final");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM registro;");

    echo "<table class=\"table\">
    <thead>
    <tr>
    <th>nombre</th>
    <th>correo</th>
    <th>contrasena</th>
    <th>confirmar</th>
    <th>tarjeta</th>
    <th>vencimiento</th>
    <th>domicilio</th>
    <th>idusuario</th>
    
    </tr></thead><tbody>";

    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['nombre'] . "</td>";
      echo "<td>" . $row['correo'] . "</td>";
       echo "<td>" . $row['contrasena'] . "</td>";
    echo "<td>" . $row['confirmar'] . "</td>";
    echo "<td>" . $row['tarjeta'] . "</td>";
    echo "<td>" . $row['vencimiento'] . "</td>";
    echo "<td>" . $row['domicilio'] . "</td>";
    echo "<td>" . $row['idusuario'] . "</td>";

      echo "</tr>";
    }

    echo "</tbody> </table>";

    mysqli_close($con);
  ?>
  

<br>
<br>


  
  <button type="button" class="btn"><a href="index.html" >Menu Principal</a></button>


    
  </body>
  </html>
      