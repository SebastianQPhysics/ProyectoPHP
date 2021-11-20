<?php

include("conexion.php");
$con=conectar();

$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$nacimiento=$_POST['nacimiento'];
$edad=$_POST['edad'];



$sql="INSERT INTO usuario VALUES ('$rut','$nombre','$apellido','$direccion','$sexo','$nacimiento','$edad')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
}
else {
    
}

?>
