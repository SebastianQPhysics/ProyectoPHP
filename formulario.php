<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rut = $_POST['rut'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];
    $nacimiento = $_POST['nacimiento'];
    $edad = $_POST['edad'];

    if(!empty($nombre) || !empty($apellido) || !empty($rut) || !empty($direccion) || !empty($sexo) || !empty($nacimiento) || !empty($edad)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "formulario";

        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect_error('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
        else{
            $SELECT = "SELECT rut from usuario where rut = ? limit 1";
            $INSERT = "INSERT INTO usuario (nombre,apellido,rut,direccion,sexo,nacimiento,edad) values(?,?,?,?,?,?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("i",$rut);
            $stmt ->execute();
            $stmt ->bind_result($rut);
            $stmt ->store_result();
            $rnum = $stmt ->num_rows;
            if($rnum==0){
                $stmt ->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssisisi",$nombre,$apellido,$rut,$direccion,$sexo,$nacimiento,$edad);
                $stmt ->execute();
                echo "Registro completado.";
            }
            else{
                echo "RUT YA REGISTRADO.";
            }
            $stmt ->close();
            $conn ->close();
        }
    }
    else {
        echo "Todos los datos son OBLIGATORIOS";
        die ();
    }

?>