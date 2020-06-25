<?php
include("conexion.php");
$identificador=$_POST['identificador'];
$name=$_POST['name'];
$Pa=$_POST['Pa'];
$Sa=$_POST['Sa'];
$Dir=$_POST['Dir'];
$Tel=$_POST['Tel'];
$curp=$_POST['curp'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="INSERT INTO alumnos(identificador,nombre,primer_apellido,segundo_apellido,direccion,telefono,curp,email,password) VALUES('$identificador','$name','$Pa','$Sa','$Dir','$Tel','$curp','$email','$password')";
$resultado=$conexion->query($query);

if($resultado){

header("Location: Ingresar_alumnos.php");
}else{
echo "no exitosa";
}
?>