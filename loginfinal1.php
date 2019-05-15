<!DOCTYPE HTML>

<?php
session_start();
$con=mysqli_connect("localhost","root","","final");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$idusuario = "idusuario";
$contrasena = "contrasena";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){

}
if (isset($_POST['idusuario']) && isset($_POST['contrasena'])){
    if($_POST['idusuario'] == $idusuario && $_POST['contrasena'] == $contrasena)
    {
        $_SESSION['loggedin'] = true;
      
        header("Location: success.php");
    }
}

?>

<html>
    <body>
        <form method="post" action=success.php>
            Usuario:<br/>
            <input type="text" name = "idusuario"><br/>
            Contrasena<br/>
            <input type="password" name ="contrasena"><br/>
            <input type="submit" value="Login!">
</form>
</body>
</html>