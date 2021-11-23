<?php 

include("conexion.php");
$con=conectar();

$rut=$_GET['rut'];

$sql="DELETE FROM usuario WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

echo $sql;

if ($query){
    Header("Location: mostrarDatos.php");
}
else {
    echo "Error: " . $sql . "<br>" ;
}

?>