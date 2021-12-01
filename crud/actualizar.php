<?php 

include ("conexion.php");
$con=conectar();
session_start();
function nombreUsuario(){
  if (isset($_SESSION['nombre'])){echo '<li class="nav-item"><a target="_blank" class="nav-link" href="mostrarDatos.php">PANEL</a></li>';}  
  if (isset($_SESSION['nombre'])){echo ' <li class="nav-item"><a class="nav-link text-login" href="desconectar.php">Desconectar</a></li>';} 
  else{ echo ' <li class="nav-item"><a class="nav-link text-login" href="#" data-toggle="modal" data-target="#modalLogin">Login</a></li>'; }
  } 
  
if (isset($_SESSION['loginError'])){
  echo '<script language="javascript">alert("Error de autentificación,volviendo al login");window.location.href="index.php"</script>';
  unset($_SESSION['loginError']);
}
$rut=$_GET['rut'];

$sql="SELECT * FROM usuario WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="../formularioPHP.css" rel="stylesheet">

    <title>Contacto</title>
  </head>
  <body>
      <!--Header-->
      <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="proyectoBootstrap/assets/logo/fisico.png" alt="Logo personal">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Contacto <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-login" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
              </li>
            </ul>
            <!--Formulario de busqueda
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            -->
          </div>
        </div>
      </nav>
      <!--/Header-->
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Ciencia y tecnología</h3>
                <p class="lead text-light">Enterate de las últimas noticias de ciencia y tecnología.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Registrate</h1>
                    <div class="form-group">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="icon ion-logo-google lead align-middle mr-2"></i> Google </button>
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><i class="icon ion-logo-facebook lead align-middle mr-2"></i> Facebook</button>
                    </div>
                    <p class="text-muted mb-5">Actualiza la información</p>

                    <form action="update.php" method="POST">

                        <input type="hidden" name="rut" value="<?php echo $row['rut'] ?>">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="correo" value="<?php echo $row['correo']?>">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="contraseña" value="<?php echo $row['contraseña']?>">
                      </div>
                            <div class="form-row mb-2">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Tu nombre" name="nombre" value="<?php echo $row['nombre'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Tu apellido" name="apellido" value="<?php echo $row['apellido'] ?>">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Rut/ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingresa tu número de identificación o RUT" name="rut" value="<?php echo $row['rut'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Dirección <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingresa tu dirección" name="direccion" value="<?php echo $row['direccion'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Sexo <span class="text-danger">*</span></label>
                                <select class="custom-select custom-select-lg mb-3" name="sexo" >
                                    <!--
                                    <input type="option" name="sexo" value=1 required>Hombre
                                    -->
                                    <option <?php if ($row['sexo'] == "1" )echo 'selected' ?> class="form-control" value="1">Hombre</option>
                                    <option <?php if ($row['sexo'] == "2" )echo 'selected' ?> class="form-control" value="2">Mujer</option>
                                    <option <?php if ($row['sexo'] == "3" )echo 'selected' ?> class="form-control" value="3">No binario</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Ingrese su fecha de nacimiento <span class="text-danger">*</span></label>
                                <input type="date" id="start" name="nacimiento" value="<?php echo $row['nacimiento'] ?>"
                                    value="2018-07-22"
                                    max="2021-11-09">
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Edad<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingresa tu edad" name="edad" value="<?php echo $row['edad'] ?>">
                            </div>
                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
           </div>
       </div>
   </section>
   <!--Footer-->
   <footer>
        <p>
            Sebastián Paz - Herramientas de desarrollo web - 2021
        </p>
    </footer>
    <!--/Footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
