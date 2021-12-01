<?php 
session_start();
if (isset($_SESSION['nombre']) ){

    unset($_SESSION['nombre']);
    unset($_SESSION['correo']);
    
    header('Location: mainPHP.php');
    exit();
    }
?>
