<?php
include("conexion.php");
$identificador=$_POST['identificador'];
$name=$_POST['name'];
$Pa=$_POST['Pa'];
$Sa=$_POST['Sa'];
$Dir=$_POST['Dir'];
$Tel=$_POST['Tel'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="INSERT INTO profesores(identificador,nombre,primer_apellido,segundo_apellido,direccion,telefono,email,password) VALUES('$identificador','$name','$Pa','$Sa','$Dir','$Tel','$email','$password')";
$resultado=$conexion->query($query);

if($resultado){

header("Location: Ingresar_profesores.php");
}else{
echo "no exitosa";
}
?>