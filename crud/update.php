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
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];


$sql="UPDATE usuario SET nombre='$nombre', apellido='$apellido', direccion='$direccion', sexo='$sexo', nacimiento='$nacimiento', edad='$edad', correo='$correo', contraseña='$contraseña' WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
}
else {
    
}

?>