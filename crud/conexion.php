<?php 

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="formulario";

    $con=mysqli_connect($host,$user,$pass); //Sirve para que el servidor encuentre todas las bases de datos que existen en el pc.

    mysqli_select_db($con,$bd); //Sirve para avisar que se encontraron todas las bases de datos de mi pc, y ahora ingresa a una especifica.

    return $con;
}

?>