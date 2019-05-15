<?php

$idusuario=$_POST['idusuario'];
$contrasena=$_POST['contrasena'];

if(empty($idusuario) || empty($contrasena)){
    header("Location: login.html");
    exit();
} 

mysql_connect('localhost', 'root', '') or die("Error al conectar" mysql_error());
mysql_select_db('login')
?> 