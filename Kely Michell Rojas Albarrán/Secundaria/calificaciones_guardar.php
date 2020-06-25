<?php
include("conexion.php");
$m1=$_POST['m1'];
$c=$_POST['c'];
$ca=$_POST['ca'];
$cali=$_POST['cali'];
$calif=$_POST['calif'];
$califi=$_POST['califi'];

$query="INSERT INTO calificaciones(materia,bloque_l,bloque_ll,bloque_lll,promedio,ordinario,extraordinario) VALUES('$m1','$c','$ca','$cali','$calif','$califi')";
$resultado=$conexion->query($query);

if($resultado){

header("Location: Ingresar_alumnos.php");
}else{
echo "no exitosa";
}
?>