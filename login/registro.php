<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');


$usuario=$_POST['txtUsuario'];
$contraseña=$_POST['txtContraseña'];

$consulta="INSERT INTO `datos`(`Usuario`, `Contraseña`)
VALUES ('$usuario', '$contraseña')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";
header("location:home.html");

mysqli_close($conexion);





?>