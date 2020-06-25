<?php
include("conexion.php");
$email=$_POST['email'];
$password=$_POST['password'];
$query="INSERT INTO usuarios(email,password) VALUES('$email','$password')";
$resultado=$conexion->query($query);

if($resultado){

header("Location: usuarios.php");
}else{
echo "no exitosa";
}
?>