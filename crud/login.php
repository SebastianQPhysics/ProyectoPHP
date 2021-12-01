<?php
    include("conexion.php");
    $con=conectar();
    session_start();

    if (isset($_POST['correo'])  || !isset($_SESSION['nombre']) ){

        $result = $con->query(sprintf("SELECT * from usuario where correo = '%s'", $_POST['correo']));

        if ($result->num_rows != 0 ){
            $result = $result->fetch_assoc();
            
            if ($_POST['contraseña']==$result['contraseña']){

                $_SESSION['correo']=$result['correo'];
                $_SESSION['nombre']=$result['nombre'];
                header('Location: ../index.php');
                exit();      
            
            }
            else{
                $_SESSION['loginError'] = true;

            }  

        }
        else{
            $_SESSION['loginError'] = true;
        }

        header('Location: ../mainPHP.php');
        exit();
        //echo $_SESSION['nombre'];
        
    }
    
    
?>